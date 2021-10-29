<?php

/**
 * @return array
 */
function getCategory() {
    $conn = \connectBD::conn();
    $sql = "SELECT id, 'name' FROM category";
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
    $sql = "SELECT id, 'name' FROM category WHERE id = :category_id";
    $stmt = $conn ->prepare($sql);
    $stmt->execute(
        [
            'category_id' => $categoryId,
        ]
    );

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
