<?php
include_once __DIR__ ."/../model/connectBD.php";
include_once __DIR__ ."/../model/artists.php";
$connexio = connectaBD();
$artistes = getArtist($connexio);
if(isset($_GET["id"])){
    $artista = $_GET["id"];
    $productesArtista = getProductsByArtist($connexio, $artista);
    include_once __DIR__ ."/../view/productesArtista.php";
} else{
    include_once __DIR__ ."/../view/artists_list.php";
}
?>
