<?php
/**
 * @return array
 */
function getCategory($connexio): array{
    try{
        $consulta = $connexio->prepare("SELECT id_categoria, nom_categoria, foto FROM CATEGORIES ORDER BY nom_categoria");
        $consulta->execute();
        $categories = $consulta->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e){
        echo "Error: ".$e->getMessage();
    }
    return($categories);
}

/**
 * @param int $categoryId
 *
 * @return array
 */

function getProductsByCategory($connexio, $categoria): array {
    try{
        $consulta = $connexio->prepare("SELECT id_album, nom_album, foto, preu, id_categoria, id_artista FROM ALBUMS WHERE id_categoria=:id_categoria");
        $consulta->bindParam(":id_categoria",trim($categoria),PDO::PARAM_INT); //trim=sense espais al principi i final, escrivim category_id (nom del parametre GET)
        $consulta->execute();
        $productsCategory = $consulta->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e){
        echo "Error: ".$e->getMessage();
    }
    return($productsCategory);
}