<?php

function tramitarComanda($connexio, $data_actual){
    try{
        $consulta = $connexio->prepare("INSERT INTO COMANDES(data, num_productes, id_usuari)
                                    VALUES(:data, :num_productes, :id_usuari)");
        $consulta->bindParam(":data",trim($data_actual['year']."-".$data_actual['mon']."-".$data_actual['mday']),PDO::PARAM_STR); //trim=sense espais al principi i final
        $consulta->bindParam(":num_productes",trim($_SESSION['totalUnits']),PDO::PARAM_STR);
        $consulta->bindParam(":id_usuari",trim($_SESSION['id_usuari']),PDO::PARAM_INT);
        $consulta->execute();
    } catch(PDOException $e){
        echo "Error: ".$e->getMessage();
    }
}

function tramitarLiniaComanda($connexio, $producte, $comanda){
    try{
        $consulta = $connexio->prepare("INSERT INTO LINIACOMANDA(preu_total_linia, unitats, id_album, id_comanda)
                                    VALUES(:preu_total_linia, :unitats, :id_album, :id_comanda)");
        $consulta->bindParam(":preu_total_linia", trim($_SESSION['amount'][$producte]), PDO::PARAM_STR); //trim=sense espais al principi i final
        $consulta->bindParam(":unitats", trim($_SESSION['quantity'][$producte]), PDO::PARAM_INT);
        $consulta->bindParam(":id_album", trim($_SESSION['cart'][$producte]), PDO::PARAM_INT);
        $consulta->bindParam(":id_comanda", trim($comanda[0]['id_comanda']),PDO::PARAM_INT);
        $consulta->execute();
    } catch(PDOException $e){
        echo "Error: ".$e->getMessage();
    }
}

function getOrderById($connexio): array {
    try{
        $consulta = $connexio->prepare("SELECT * FROM COMANDES ORDER BY id_comanda DESC LIMIT 1");
        $consulta->execute();
        $comanda = $consulta->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e){
        echo "Error: ".$e->getMessage();
    }
    return($comanda);
}

function getOrderByUser($connexio): array {
    try{
        $consulta = $connexio->prepare("SELECT * FROM COMANDES WHERE id_usuari=:id_usuari");
        $consulta->bindParam(":id_usuari",trim($_SESSION['id_usuari']),PDO::PARAM_INT); //trim=sense espais al principi i final, escrivim category_id (nom del parametre GET)
        $consulta->execute();
        $comanda = $consulta->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e){
        echo "Error: ".$e->getMessage();
    }
    return($comanda);
}

function getOrderLine($connexio): array {
    try{
        $consulta = $connexio->prepare("SELECT * FROM LINIACOMANDA");
        $consulta->execute();
        $comanda = $consulta->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e){
        echo "Error: ".$e->getMessage();
    }
    return($comanda);
}