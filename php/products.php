<?php

/**
 * @return array
 */
function getProducts()
{
    $conn = \connectBD::conn();
    $sql = "SELECT id, 'name' FROM product";
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
            'product_id' => $productId,
        ]
    );

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
