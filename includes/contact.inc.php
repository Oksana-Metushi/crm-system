<?php
require_once 'db.inc.php';
if(isset($_POST["submit"])){
    $customer_id = $_POST["customer_id"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $telephoneAdress = $_POST['telephoneAdress'];
    $emailAdress = $_POST["emailAdress"];
   

    $sql = "INSERT INTO contacts (customer_id,firstName,lastName,telephoneAdress,emailAdress) VALUES ('$customer_id', '$firstName', '$lastName', 0, '$emailAdress')";
    $result = mysqli_query($conn, $sql);

    if($result){
        header("location: ../displaycontact.php");
        exit();
    }
    else{
        die(mysqli_error($conn));
    }
}

    if(isset($_POST["edit"])){
        $udateing = $_POST['udateing'];
        $customer_id = $_POST["customer_id"];
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $telephoneAdress = $_POST["telephoneAdress"];
        $emailAdress = $_POST["emailAdress"];
       
        $sql = "UPDATE contacts SET customer_id='$customer_id', firstName='$firstName', lastName='$lastName', telephoneAdress='$telephoneAdress', emailAdress='$emailAdress' WHERE  id='$udateing'";
        $result = mysqli_query($conn, $sql);
    
        if($result){
            header("location: ../displaycontact.php");
            exit();
        }
        else{
            die(mysqli_error($conn));
        }

}
if(isset($_POST["delete"])){
    $delete_id = $_POST['delete_id'];

    $sql = "DELETE FROM contacts WHERE id='$delete_id'";
    $result = mysqli_query($conn, $sql);

    if($result){
        header("location: ../displaycontact.php");
        exit();
    }
    else{
        die(mysqli_error($conn));
    }
}