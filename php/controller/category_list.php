<?php
require_once __DIR__ . '../model/connectBD.php';
require_once __DIR__ . '../categories.php';
$categories = getCategory(); //Aquesta crida és al model
require_once __DIR__ . '../view/category_list.php';
