<?php
include_once __DIR__.'/../model/connectBD.php';
include_once __DIR__.'/../model/products.php';
include_once __DIR__.'/../model/artists.php';
$connexio = connectaBD();
[$albumsHome1, $albumsHome2] = getProductsHome($connexio);
$artistes = getArtist($connexio);
include_once __DIR__.'/../view/home.php';
?>