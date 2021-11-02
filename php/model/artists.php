<?php

/**
 * @return array
 */
function getArtist() {
    $conn = \connectBD::conn();
    $sql = "SELECT id_artista, nom_artista, data_naixement, localitat, foto, biografia FROM ARTISTES";
    $stmt = $conn ->query($sql, \PDO::FETCH_ASSOC);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * @param int $artistId
 *
 * @return array
 */

function getArtistById($artistId) {
    $conn = \connectBD::conn();
    $sql = "SELECT id_artista, nom_artista, data_naixement, localitat, foto, biografia FROM ARTISTES WHERE id_artista = :id_artista";
    $stmt = $conn ->prepare($sql);
    $stmt->execute(
        [
            'id_artista' => $artistId,
        ]
    );

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
