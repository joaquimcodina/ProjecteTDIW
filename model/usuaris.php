<?php

/**
 * @return array
 */
function registerUser($connexio){
    try{
        $consulta = $connexio->prepare("INSERT INTO USUARIS(nom_usuari, correu, password, adreça, poblacio, codi_postal)
                                    VALUES(:nom_usuari, :correu, :password, :address, :poblacio, :codi_postal)");
        $consulta->bindParam(":nom_usuari",trim($_POST['nom']),PDO::PARAM_STR); //trim=sense espais al principi i final
        $consulta->bindParam(":correu",trim($_POST['correu']),PDO::PARAM_STR);
        $consulta->bindParam(":password",password_hash(trim($_POST['password']), PASSWORD_DEFAULT),PDO::PARAM_STR);
        $consulta->bindParam(":address",trim($_POST['address']),PDO::PARAM_STR);
        $consulta->bindParam(":poblacio",trim($_POST['poblacio']),PDO::PARAM_STR);
        $consulta->bindParam(":codi_postal",trim($_POST['codipostal']),PDO::PARAM_INT);
        $consulta->execute();
    } catch(PDOException $e){
        echo "Error: ".$e->getMessage();
    }
}

function getUserById($connexio): int {
    try{
        $consulta = $connexio->prepare("SELECT nom_usuari, correu FROM USUARIS WHERE nom_usuari=:nom_usuari AND correu=:correu LIMIT 1");
        $consulta->bindParam(":nom_usuari",trim($_POST['nom']),PDO::PARAM_STR); //trim=sense espais al principi i final
        $consulta->bindParam(":correu",trim($_POST['correu']),PDO::PARAM_STR);
        $consulta->execute();
        $checkUser = $consulta->fetch(PDO::FETCH_ASSOC);
    } catch(PDOException $e){
        echo "Error: ".$e->getMessage();
    }
    return($checkUser);
}

function loginUser($connexio): array{
    try{
        $consulta = $connexio->prepare("SELECT correu, password FROM USUARIS WHERE correu=:correu AND password=:password LIMIT 1");
        $consulta->bindParam(":correu",trim($_POST['correu']),PDO::PARAM_STR); //trim=sense espais al principi i final
        $consulta->bindParam(":password",password_hash(trim($_POST['password']), PASSWORD_DEFAULT),PDO::PARAM_STR);
        $consulta->execute();
        $login = $consulta->fetch(PDO::FETCH_ASSOC);
    } catch(PDOException $e){
        echo "Error: ".$e->getMessage();
    }
    return($login);
}