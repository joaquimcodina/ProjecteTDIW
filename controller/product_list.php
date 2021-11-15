<?php
include_once __DIR__ ."/../model/connectBD.php";
include_once __DIR__ ."/../model/products.php";
include_once __DIR__ ."/../model/artists.php";
include_once __DIR__ ."/../model/categories.php";
$connexio = connectaBD();
$categories = getCategory($connexio);
$artistes = getArtist($connexio);
$albums = getProducts($connexio);
if(isset($_GET["id"])){
    $producteId = $_GET["id"];
    $detailProduct = getProductById($connexio, $producteId);
    include_once __DIR__ ."/../view/detail_product.php";
} else{
    include_once __DIR__ ."/../view/product_list.php";
}
?>