<?php

/**
 * @return array
 */
function getProducts()
{
    $conn = \connectBD::conn();
    $sql = "SELECT id_album, nom_album, preu, unitats, en_stock, foto FROM ALBUMS";
    $stmt = $conn->query($sql, \PDO::FETCH_ASSOC);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getProductsHome()
{
    $conn = \connectBD::conn();
    $sql = "SELECT id_album, nom_album, preu, unitats, en_stock, foto FROM ALBUMS ORDER BY RAND() LIMIT 3";
    $stmt = $conn->query($sql, \PDO::FETCH_ASSOC);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * @param int $productId
 *
 * @return array
 */

function getProductById($productId)
{
    $conn = \connectBD::conn();
    $sql = "SELECT id, 'name' FROM product WHERE id = :product_id";
    $stmt = $conn->prepare($sql);
    $stmt->execute(
        [
            'id_album' => $productId,
        ]
    );

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getProductyByCategory($categoryId) {
    $conn = \connectBD::conn();
    $sql = "SELECT id_album, nom_album, preu, unitats, en_stock, foto FROM ALBUMS WHERE id_categoria = :id_categoria";
    $stmt = $conn ->prepare($sql);
    $stmt->execute(
        [
            'id_categoria' => $categoryId,
        ]
    );

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getProductyByArtist($artistId) {
    $conn = \connectBD::conn();
    $sql = "SELECT id_album, nom_album, preu, unitats, en_stock, foto FROM ALBUMS WHERE id_artista = :id_artista";
    $stmt = $conn ->prepare($sql);
    $stmt->execute(
        [
            'id_artista' => $artistId,
        ]
    );

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
