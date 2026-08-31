<?php
/**
 * Build script — renders index.php and all service/*.php pages into static site under dist/
 *
 *   Local:    php build.php
 *   Netlify:  configured in netlify.toml (publish = "dist")
 */

declare(strict_types=1);

$root      = __DIR__;
$buildDir  = $root . '/dist';
$assetsSrc = $root . '/assets';

echo "▶ Building Sukhda Hospital static site…" . PHP_EOL;

// 1) Clean previous dist/
if (is_dir($buildDir)) {
    $rii = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($buildDir, FilesystemIterator::SKIP_DOTS),
        RecursiveIteratorIterator::CHILD_FIRST
    );
    foreach ($rii as $f) { $f->isDir() ? rmdir($f->getPathname()) : unlink($f->getPathname()); }
    rmdir($buildDir);
}
mkdir($buildDir, 0755, true);
mkdir($buildDir . '/service', 0755, true);

// 2) Collect all pages to render
$pages = [
    'index.php' => 'index.html',
];

if (is_dir($root . '/service')) {
    foreach (glob($root . '/service/*.php') as $phpFile) {
        $base = basename($phpFile);
        $htmlName = preg_replace('/\.php$/', '.html', $base);
        $pages['service/' . $base] = 'service/' . $htmlName;
    }
}
ksort($pages);

// 3) Render each page in an isolated scope
foreach ($pages as $source => $output) {
    $filePath = $root . '/' . $source;
    if (file_exists($filePath)) {
        $html = (function (string $entry): string {
            ob_start();
            require $entry;
            return (string) ob_get_clean();
        })($filePath);

        if ($html === '') {
            fwrite(STDERR, "✗ {$source} produced empty output\n");
            exit(1);
        }

        $outPath = $buildDir . '/' . $output;
        $outDir = dirname($outPath);
        if (!is_dir($outDir)) {
            mkdir($outDir, 0755, true);
        }

        file_put_contents($outPath, $html);
        echo "  ✓ wrote dist/{$output} (" . number_format(strlen($html)) . " bytes)" . PHP_EOL;
    }
}

// 4) Recursively copy /assets → /dist/assets
function copyTree(string $src, string $dst): int {
    if (!is_dir($src)) return 0;
    if (!is_dir($dst)) mkdir($dst, 0755, true);
    $count = 0;
    foreach (new DirectoryIterator($src) as $item) {
        if ($item->isDot()) continue;
        $s = $item->getPathname();
        $d = $dst . '/' . $item->getBasename();
        if ($item->isDir()) {
            $count += copyTree($s, $d);
        } else {
            copy($s, $d);
            $count++;
        }
    }
    return $count;
}
$assetCount = copyTree($assetsSrc, $buildDir . '/assets');
echo "  ✓ copied {$assetCount} asset file(s)" . PHP_EOL;

// 5) Tiny extras: 404 + robots
file_put_contents($buildDir . '/404.html', <<<HTML
<!doctype html><html lang="en"><head><meta charset="utf-8"><title>Page not found</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>body{font-family:system-ui,sans-serif;display:grid;place-items:center;min-height:100vh;margin:0;background:#F3F7FC;color:#0B1424}.b{text-align:center}.b a{color:#0F4F94;font-weight:600}</style>
</head><body><div class="b"><h1>404 — Page not found</h1><p>The page you're looking for has moved or doesn't exist.</p><p><a href="/">← Back to homepage</a></p></div></body></html>
HTML);
file_put_contents($buildDir . '/robots.txt', "User-agent: *\nAllow: /\n");

echo "✔ Build complete → dist/" . PHP_EOL;
