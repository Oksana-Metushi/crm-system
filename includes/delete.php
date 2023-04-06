<?php
 require_once 'db.inc.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];

    $sql = "DELETE FROM customers where id=$id";
    $result = mysqli_query($conn, $sql);
    if($result){
        //echo "Deleted successfull";
        header("location: ../display.php");
        exit();
    }
    else{
        die(mysqli_errno($conn));
    }
}