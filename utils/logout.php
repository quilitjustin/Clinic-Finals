<?php

session_start();
//you can't log out if you are not even logged in
if(!isset($_SESSION['auth'])){
    header('Location: ../index.php');
    die();
}
//just in case
$_SESSION['auth'] = false;

session_destroy();
header("Location: ../index.php");
die();

