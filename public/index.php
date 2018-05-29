<?php

$url = $_SERVER['REQUEST_URI'];

if ($url == '/') {
    require_once(__DIR__.'/../src/pages/homepage.php');
} elseif (preg_match('/^\/administration/', $url)) {
    require_once(__DIR__.'/../src/pages/admin.php');
} elseif (preg_match('/^\/offer\/([0-9]+)/', $url, $matches)) {
    $offerId = $matches[1];
    require_once(__DIR__.'/../src/pages/offer.php');
} else {
    require_once(__DIR__.'/../src/pages/notfound.php');
}
