<?php

ini_set('display_errors', '0');
error_reporting(E_ALL & ~E_DEPRECATED);

// Serve static files directly from /public
$uri = $_SERVER['REQUEST_URI'];
$uriPath = parse_url($uri, PHP_URL_PATH);
$publicPath = __DIR__ . '/../public' . $uriPath;

if ($uriPath !== '/' && file_exists($publicPath) && !is_dir($publicPath)) {
    // Determine MIME type
    $ext = strtolower(pathinfo($publicPath, PATHINFO_EXTENSION));
    $mimeTypes = [
        'css'  => 'text/css',
        'js'   => 'application/javascript',
        'png'  => 'image/png',
        'jpg'  => 'image/jpeg',
        'jpeg' => 'image/jpeg',
        'gif'  => 'image/gif',
        'svg'  => 'image/svg+xml',
        'ico'  => 'image/x-icon',
        'woff' => 'font/woff',
        'woff2'=> 'font/woff2',
        'ttf'  => 'font/ttf',
        'json' => 'application/json',
    ];
    if (isset($mimeTypes[$ext])) {
        header('Content-Type: ' . $mimeTypes[$ext]);
    }
    header('Cache-Control: public, max-age=31536000, immutable');
    readfile($publicPath);
    exit;
}

require __DIR__ . '/../public/index.php';
