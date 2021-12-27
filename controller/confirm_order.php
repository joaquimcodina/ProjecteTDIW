<?php
include_once __DIR__.'/../model/connectBD.php';
include_once __DIR__.'/../model/orders.php';

$data_actual = getdate();
$connexio = connectaBD();

tramitarComanda($connexio, $data_actual);
$comanda = getOrderById($connexio);

foreach ($_SESSION['cart'] as $i) {
    tramitarLiniaComanda($connexio, $i, $comanda);
}

//BUIDAR SESSIONS
unset($_SESSION['cart'], $_SESSION['name'], $_SESSION['price'], $_SESSION['quantity'],
    $_SESSION['amount'], $_SESSION['img'], $_SESSION['ultimProd'],
    $_SESSION['totalUnits'], $_SESSION['total']);

include_once __DIR__.'/../view/confirm_order.php';

?>