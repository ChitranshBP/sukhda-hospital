<?php
/**
 * Build script — renders root & V1 into a static site under dist/
 *
 *   Local:    php build.php
 *   Netlify:  configured in netlify.toml (publish = "dist")
 *
 * Output supports:
 *   - https://sukhda-hospital-new.netlify.app/
 *   - https://sukhda-hospital-new.netlify.app/medical-oncology
 *   - https://sukhda-hospital-new.netlify.app/V1/
 *   - https://sukhda-hospital-new.netlify.app/V1/medical-oncology
 */

declare(strict_types=1);

$root      = __DIR__;
$buildDir  = $root . '/dist';
$assetsSrc = $root . '/assets';
$v1Dir     = $root . '/V1';

echo "▶ Building Sukhda Hospital static site…" . PHP_EOL;

// 1) Clean previous dist/ so stale files don't ship
if (is_dir($buildDir)) {
    $rii = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($buildDir, FilesystemIterator::SKIP_DOTS),
        RecursiveIteratorIterator::CHILD_FIRST
    );
    foreach ($rii as $f) { $f->isDir() ? rmdir($f->getPathname()) : unlink($f->getPathname()); }
    rmdir($buildDir);
}
mkdir($buildDir, 0755, true);

// 2) Helper to render a page in isolated scope
function renderPage(string $entry): string {
    return (function (string $f): string {
        ob_start();
        require $f;
        return (string) ob_get_clean();
    })($entry);
}

// 3) Helper to recursively copy directories
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

// 4) Render root pages
$rootPages = [
    'index.php' => 'index.html',
];

// Add all service pages for root dist/service/
if (is_dir($v1Dir . '/service')) {
    foreach (glob($v1Dir . '/service/*.php') as $phpFile) {
        $base = basename($phpFile);
        $htmlName = preg_replace('/\.php$/', '.html', $base);
        $rootPages['V1/service/' . $base] = 'service/' . $htmlName;
    }
}

foreach ($rootPages as $srcRel => $destRel) {
    $srcPath = $root . '/' . $srcRel;
    if (file_exists($srcPath)) {
        $html = renderPage($srcPath);
        if ($html === '') {
            fwrite(STDERR, "✗ {$srcRel} produced empty output\n");
            exit(1);
        }
        $destPath = $buildDir . '/' . $destRel;
        $destDir = dirname($destPath);
        if (!is_dir($destDir)) mkdir($destDir, 0755, true);
        file_put_contents($destPath, $html);
        echo "  ✓ wrote dist/{$destRel} (" . number_format(strlen($html)) . " bytes)" . PHP_EOL;
    }
}

// 5) Render V1 pages into dist/v1/ and dist/V1/
if (is_dir($v1Dir)) {
    $v1Pages = [
        'V1/index.php' => 'v1/index.html',
    ];
    if (is_dir($v1Dir . '/service')) {
        foreach (glob($v1Dir . '/service/*.php') as $phpFile) {
            $base = basename($phpFile);
            $htmlName = preg_replace('/\.php$/', '.html', $base);
            $v1Pages['V1/service/' . $base] = 'v1/service/' . $htmlName;
        }
    }

    foreach ($v1Pages as $srcRel => $destRel) {
        $srcPath = $root . '/' . $srcRel;
        if (file_exists($srcPath)) {
            $html = renderPage($srcPath);
            if ($html === '') {
                fwrite(STDERR, "✗ {$srcRel} produced empty output\n");
                exit(1);
            }
            // Write lowercase v1/
            $destPath = $buildDir . '/' . $destRel;
            $destDir = dirname($destPath);
            if (!is_dir($destDir)) mkdir($destDir, 0755, true);
            file_put_contents($destPath, $html);
            echo "  ✓ wrote dist/{$destRel} (" . number_format(strlen($html)) . " bytes)" . PHP_EOL;

            // Also mirror to uppercase V1/ for case-insensitive hosts
            $destRelUpper = preg_replace('/^v1\//', 'V1/', $destRel);
            if ($destRelUpper !== $destRel) {
                $destPathUpper = $buildDir . '/' . $destRelUpper;
                $destDirUpper = dirname($destPathUpper);
                if (!is_dir($destDirUpper)) mkdir($destDirUpper, 0755, true);
                file_put_contents($destPathUpper, $html);
            }
        }
    }
}

// 6) Copy assets
$assetCount1 = copyTree($assetsSrc, $buildDir . '/assets');
$assetCount2 = copyTree($v1Dir . '/assets', $buildDir . '/assets');
$assetCount3 = copyTree($v1Dir . '/assets', $buildDir . '/v1/assets');
$assetCount4 = copyTree($v1Dir . '/assets', $buildDir . '/V1/assets');
$totalAssets = $assetCount1 + $assetCount2 + $assetCount3 + $assetCount4;
echo "  ✓ copied {$totalAssets} asset file(s)" . PHP_EOL;

// 7) 404 + robots
file_put_contents($buildDir . '/404.html', <<<HTML
<!doctype html><html lang="en"><head><meta charset="utf-8"><title>Page not found — Sukhda Medpark</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>body{font-family:system-ui,sans-serif;display:grid;place-items:center;min-height:100vh;margin:0;background:#F3F7FC;color:#0B1424}.b{text-align:center}.b a{color:#0F4F94;font-weight:600;margin:0 8px}</style>
</head><body><div class="b"><h1>404 — Page not found</h1><p>The page you're looking for has moved or doesn't exist.</p><p><a href="/">← Homepage</a> &middot; <a href="/V1/">V1 Portal →</a></p></div></body></html>
HTML);
file_put_contents($buildDir . '/robots.txt', "User-agent: *\nAllow: /\n");

echo "✔ Build complete → dist/" . PHP_EOL;
