<?php

require_once __DIR__ . '/';

$action = $_GET['action']??null;
switch ($action){
    case 'home':
        require __DIR__ . '/';
        break;
    case 'categories':
        require __DIR__ . '/';
        break;
    case 'productes':
        require __DIR__ . '/';
        break;
    case 'register':
        require __DIR__ . '/';
        break;
    case 'login':
        require __DIR__ . '/';
        break;
    default:
        require __DIR__ . '/'; //Ira al Home
        break;
}