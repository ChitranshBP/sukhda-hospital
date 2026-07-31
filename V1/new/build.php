<?php
/**
 * Build script — renders index.php into a static site under dist/
 *
 *   Local:    php build.php
 *   Netlify:  configured in netlify.toml (publish = "dist")
 *
 * The output is a single index.html plus a copy of /assets, ready for any
 * static host (Netlify, Vercel, Cloudflare Pages, GitHub Pages, S3, …).
 */

declare(strict_types=1);

$root      = __DIR__;
$buildDir  = $root . '/dist';
$entry     = $root . '/index.php';
$assetsSrc = $root . '/assets';

echo "▶ Building Sukhda Hospital static site…" . PHP_EOL;

// 1) Clean the previous dist/ so stale files don't ship
if (is_dir($buildDir)) {
    $rii = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($buildDir, FilesystemIterator::SKIP_DOTS),
        RecursiveIteratorIterator::CHILD_FIRST
    );
    foreach ($rii as $f) { $f->isDir() ? rmdir($f->getPathname()) : unlink($f->getPathname()); }
    rmdir($buildDir);
}
mkdir($buildDir, 0755, true);

// 2) Render index.php to HTML in an isolated scope
$html = (function (string $entry): string {
    ob_start();
    require $entry;
    return (string) ob_get_clean();
})($entry);

if ($html === '') {
    fwrite(STDERR, "✗ index.php produced empty output\n");
    exit(1);
}

file_put_contents($buildDir . '/index.html', $html);
echo "  ✓ wrote dist/index.html (" . number_format(strlen($html)) . " bytes)" . PHP_EOL;

// 3) Recursively copy /assets → /dist/assets
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

// 4) Tiny extras: 404 + robots
file_put_contents($buildDir . '/404.html', <<<HTML
<!doctype html><html lang="en"><head><meta charset="utf-8"><title>Page not found</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>body{font-family:system-ui,sans-serif;display:grid;place-items:center;min-height:100vh;margin:0;background:#F3F7FC;color:#0B1424}.b{text-align:center}.b a{color:#0F4F94;font-weight:600}</style>
</head><body><div class="b"><h1>404 — Page not found</h1><p>The page you're looking for has moved or doesn't exist.</p><p><a href="/">← Back to homepage</a></p></div></body></html>
HTML);
file_put_contents($buildDir . '/robots.txt', "User-agent: *\nAllow: /\n");

echo "✔ Build complete → dist/" . PHP_EOL;
