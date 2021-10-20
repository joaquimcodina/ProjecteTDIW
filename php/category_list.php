<?php
require_once __DIR__ . 'connectBD.php';
require_once __DIR__ . 'categories.php';
$category = getcategories();
require_once __DIR__ . 'view/category_list.php';
