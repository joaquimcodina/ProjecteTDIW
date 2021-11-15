<?php
include_once __DIR__ ."/../model/connectBD.php";
include_once __DIR__ ."/../model/categories.php";
include_once __DIR__ ."/../model/artists.php";
$connexio = connectaBD();
$categories = getCategory($connexio);
$artistes = getArtist($connexio);
if(isset($_GET["id"])){
    $categoria = $_GET["id"];
    $productesCategories = getProductsByCategory($connexio, $categoria);
    include_once __DIR__ ."/../view/productesCategoria.php";
} else{
    include_once __DIR__ ."/../view/category_list.php";
}
?>