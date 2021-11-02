<?php
require_once __DIR__ . '../model/connectBD.php';
require_once __DIR__ . '../artists.php';
$artistes = getArtist(); //Aquesta crida és al model
require_once __DIR__ . '../view/artists_list.php';
