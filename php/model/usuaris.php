<?php

/**
 * @return array
 */
function getUsers() {
    $conn = \connectBD::conn();
    $sql = "SELECT id, 'name' FROM usuaris";
    $stmt = $conn ->query($sql, \PDO::FETCH_ASSOC);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * @param int $usuariId
 *
 * @return array
 */

function getUserById($usuariId) {
    $conn = \connectBD::conn();
    $sql = "SELECT id, 'name' FROM usuaris WHERE id = :usuari_id";
    $stmt = $conn ->prepare($sql);
    $stmt->execute(
        [
            'id_usuari' => $usuariId,
        ]
    );

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}