<?php

/**
 * @return array
 */
function getArtist($connexio): array{
    try{
        $consulta = $connexio->prepare("SELECT id_artista, nom_artista, foto FROM ARTISTES ORDER BY nom_artista");
        $consulta->execute();
        $artistes = $consulta->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e){
        echo "Error: ".$e->getMessage();
    }
    return($artistes);
}

/**
 * @param int $artistId
 *
 * @return array
 */

//function getArtistById($artistId) {
//    $conn = \connectBD::conn();
//    $sql = "SELECT id_artista, nom_artista, data_naixement, localitat, foto, biografia FROM ARTISTES WHERE id_artista = :id_artista";
//    $stmt = $conn ->prepare($sql);
//    $stmt->execute(
//        [
//            'id_artista' => $artistId,
//        ]
//    );
//
//    return $stmt->fetchAll(PDO::FETCH_ASSOC);
//}

function getProductsByArtist($connexio, $artista) {
    try{
        $consulta = $connexio->prepare("SELECT id_album, nom_album, foto, preu, id_artista FROM ALBUMS WHERE id_artista=:id_artista");
        $consulta->bindParam(":id_artista",trim($artista),PDO::PARAM_INT); //trim=sense espais al principi i final
        $consulta->execute();
        $productsArtista = $consulta->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e){
        echo "Error: ".$e->getMessage();
    }
    return($productsArtista);
}