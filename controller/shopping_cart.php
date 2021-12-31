<?php
    // AFEFIM UNITTAT DEL NOSTRE PRODUCTE AL CABÀS
    if (isset($_GET['id'])) {
        include_once __DIR__ ."/../model/connectBD.php";
        include_once __DIR__ ."/../model/products.php";
        $prod = $_GET['id'];
        $connexio = connectaBD();
        $albums = getProductById($connexio, $prod);
        foreach($albums as $album){
            $name = $album['nom_album'];
            $price = $album['preu'];
            $img = $album['foto'];
            $quantity = $_GET['unitsProduct'];
        }

        if (!isset($_SESSION['cart'][$prod])) { //NO TENIM EL PRODUCTE EN EL CABÀS
            $_SESSION['cart'][$prod] = $prod;
            $_SESSION['name'][$prod] = $name;
            $_SESSION['price'][$prod] = $price;
            $_SESSION['quantity'][$prod] = $quantity;
            $_SESSION['amount'][$prod] = $price * $quantity;
            $_SESSION['img'][$prod] = $img;

        } else { //TENIM EL PRODUCTE EN EL CABÀS
            $_SESSION['quantity'][$prod] = $_SESSION['quantity'][$prod] + $quantity;
            $_SESSION['amount'][$prod] += $_SESSION['price'][$prod] * $quantity;
        }
        $_SESSION['ultimProd'] = $_SESSION['img'][$prod];
        $_SESSION['totalUnits'] += $quantity;
        $_SESSION['total'] += $_SESSION['price'][$prod] * $quantity;
        $alert='Producte afegit correctament!';
    }

    if(isset($_GET['buidar_cabas'])){
        //BUIDAR SESSIONS
        unset($_SESSION['cart'], $_SESSION['name'], $_SESSION['price'], $_SESSION['quantity'],
            $_SESSION['amount'], $_SESSION['img'], $_SESSION['ultimProd'],
            $_SESSION['totalUnits'], $_SESSION['total']);
    }
    include_once __DIR__.'/../view/shopping_cart.php';
?>