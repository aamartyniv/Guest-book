<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    echo "post";

} elseif ($_SERVER['REQUEST_METHOD']=== 'GET') {

    include_once PATH . "/view/registration.php";
}