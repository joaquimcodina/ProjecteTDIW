<?php

/**
 * @return array
 */
function getProducts($connexio): array{
    try{
        $consulta = $connexio->prepare("SELECT id_album, nom_album, foto, preu, id_artista FROM ALBUMS ORDER BY nom_album");
        $consulta->execute();
        $albums = $consulta->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e){
        echo "Error: ".$e->getMessage();
    }
    return($albums);
}

function getProductsHome($connexio): array{
    try{
        $consulta1 = $connexio->prepare("SELECT id_album, nom_album, foto, preu, id_artista FROM ALBUMS ORDER BY RAND() LIMIT 3");
        $consulta2 = $connexio->prepare("SELECT id_album, nom_album, foto, preu, id_artista FROM ALBUMS ORDER BY RAND() LIMIT 3");
        $consulta1->execute();
        $consulta2->execute();
        $albumsHome1 = $consulta1->fetchAll(PDO::FETCH_ASSOC);
        $albumsHome2 = $consulta2->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e){
        echo "Error: ".$e->getMessage();
    }
    return[$albumsHome1, $albumsHome2];
}


/**
 * @param int $productId
 *
 * @return array
 */
function getProductById($connexio, $productId): array {
    try{
        $consulta = $connexio->prepare("SELECT * FROM ALBUMS WHERE id_album=:id_album");
        $consulta->bindParam(":id_album",trim($productId),PDO::PARAM_INT); //trim=sense espais al principi i final, escrivim category_id (nom del parametre GET)
        $consulta->execute();
        $detailProduct = $consulta->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e){
        echo "Error: ".$e->getMessage();
    }
    return($detailProduct);
}