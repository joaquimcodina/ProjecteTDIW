<?php
require_once __DIR__ . '../model/connectBD.php';
require_once __DIR__ . '../categories.php';
$category = getCategory();
require_once __DIR__ . '../view/category_list.php';
