<?php

// on récupère l'adresse après l'host du site
// exemple : avec http://site/test, $url correspondra à "/test"
$url = $_SERVER['REQUEST_URI'];

// si on est sur l'accueil
if ($url == '/') {
    require_once(__DIR__.'/../src/pages/homepage.php');
}
// si l'url commence par /administation
elseif (preg_match('/^\/administration/', $url)) {
    require_once(__DIR__.'/../src/pages/admin.php');
}
// si l'url est de la forme /offer/123/quelque-chose
elseif (preg_match('/^\/offer\/([0-9]+)/', $url, $matches)) {
    // on récupère l'id de l'offre
    $offerId = $matches[1];
    require_once(__DIR__.'/../src/pages/offer.php');
}
// dans tout les autres cas on affiche une page d'erreur
else {
    require_once(__DIR__.'/../src/pages/notfound.php');
}
