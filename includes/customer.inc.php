<?php

if(isset($_POST["submit"])){
    
    $name = $_POST["name"];
    $adress = $_POST["adress"];
    $postalcode = $_POST["postalcode"];
    $place = $_POST["place"];
    $tel = $_POST["tel"];
    $email = $_POST["email"];
   
    require_once 'db.inc.php';
    require_once 'functions.inc.php';

    createCustomer($conn, $name, $adress, $postalcode, $place, $tel, $email);
}
else{
    header("location: ../customer.php");
    exit();
}

