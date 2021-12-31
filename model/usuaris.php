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

function getUserById($connexio){
    try{
        $consulta1 = $connexio->prepare("SELECT nom_usuari FROM USUARIS WHERE nom_usuari=:nom_usuari LIMIT 1");
        $consulta2 = $connexio->prepare("SELECT correu FROM USUARIS WHERE correu=:correu LIMIT 1");
        $consulta1->bindParam(":nom_usuari",trim($_POST['nom']),PDO::PARAM_STR);
        $consulta2->bindParam(":correu",trim($_POST['correu']),PDO::PARAM_STR);
        $consulta1->execute();
        $consulta2->execute();
        $checkUser = $consulta1->fetch(PDO::FETCH_ASSOC);
        $checkEmail = $consulta2->fetch(PDO::FETCH_ASSOC);
    } catch(PDOException $e){
        echo "Error: ".$e->getMessage();
    }
    return [$checkUser != null, $checkEmail != null];
}

function loginUser($connexio, $email): array{
    try{
        $consulta = $connexio->prepare("SELECT * FROM USUARIS WHERE correu=:correu LIMIT 1");
        $consulta->bindParam(":correu",trim($email),PDO::PARAM_STR); //trim=sense espais al principi i final
        $consulta->execute();
        $login = $consulta->fetch(PDO::FETCH_ASSOC);
        if($login == null){
            return array();
        }
    } catch(PDOException $e){
        echo "Error: ".$e->getMessage();
    }
    return($login);
}

function modifyUser($connexio, $foto){
    try{
        $consulta = $connexio->prepare("UPDATE USUARIS SET nom_usuari=:nom_usuari, correu=:correu,
                   password=:password, adreça=:address, poblacio=:poblacio, codi_postal=:codi_postal, foto=:foto WHERE id_usuari=:id_usuari");
        $consulta->bindParam(":id_usuari",trim($_SESSION['id_usuari']),PDO::PARAM_INT); //trim=sense espais al principi i final
        $consulta->bindParam(":nom_usuari",trim($_POST['nom']),PDO::PARAM_STR);
        $consulta->bindParam(":correu", trim($_POST['correu']),PDO::PARAM_STR);
        $consulta->bindParam(":password",password_hash(trim($_POST['password']), PASSWORD_DEFAULT),PDO::PARAM_STR);
        $consulta->bindParam(":address",trim($_POST['address']),PDO::PARAM_STR);
        $consulta->bindParam(":poblacio",trim($_POST['poblacio']),PDO::PARAM_STR);
        $consulta->bindParam(":codi_postal",trim($_POST['codipostal']),PDO::PARAM_INT);
        $consulta->bindParam(":foto",trim($foto),PDO::PARAM_STR);
        $consulta->execute();
    } catch(PDOException $e){
        echo "Error: ".$e->getMessage();
    }
}