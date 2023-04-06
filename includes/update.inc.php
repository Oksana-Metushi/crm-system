<?php
require_once 'db.inc.php';
$id = $_GET['updateid'];
$sql="SELECT * FROM customers WHERE id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row["customername"];
$adress = $row["adress"];
$postalcode = $row["postalcode"];
$place = $row["place"];
$tel = $row["tel"];
$email = $row["email"];
if(isset($_POST['update'])){
$name = $_POST["name"];
$adress = $_POST["adress"];
$postalcode = $_POST["postalcode"];
$place = $_POST["place"];
$tel = $_POST["tel"];
$email = $_POST["email"];

$sql = "UPDATE customers set customername='$name', adress='$adress', postalcode='$postalcode', place='$place', tel='$tel', email='$email' WHERE id=$id";
$result = mysqli_query($conn, $sql);
    if($result){
        header("location: ../display.php");
        exit();
    }
    else{
        die(mysqli_error($conn));
    }
}