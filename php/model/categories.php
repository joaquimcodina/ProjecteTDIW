<?php

/**
 * @return array
 */
function getCategory() {
    $conn = \connectBD::conn();
    $sql = "SELECT id_categoria, nom_categoria, foto FROM CATEGORIES";
    $stmt = $conn ->query($sql, \PDO::FETCH_ASSOC);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * @param int $categoryId
 *
 * @return array
 */

function getCategoryById($categoryId) {
   $conn = \connectBD::conn();
    $sql = "SELECT id_categoria, nom_categoria, foto FROM CATEGORIES WHERE id_categoria = :id_categoria";
    $stmt = $conn ->prepare($sql);
    $stmt->execute(
        [
            'id_categoria' => $categoryId,
        ]
    );

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
