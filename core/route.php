<?php

$url = explode("/", "$_SERVER[REQUEST_URI]");

switch ($url[1]) {

    case null : include_once "home.php"; break;
    case "index.php" : include_once "home.php"; break;
    case "registration" : include_once "registration.php"; break;
    case "login" : include_once "login.php";break;
    case "logout" : include_once "logout.php";break;
    default: include_once "not_found.php";
}