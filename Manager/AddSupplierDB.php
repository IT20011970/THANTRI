<?php

//create database connection using config file
//require "config.php";

$connection = mysqli_connect('localhost', 'root', '1234', 'thantiri', '3306');
//insert user data into register table
$sql = "INSERT INTO supplier (SupplierID,SupplierName,Email)
	VALUES
('".$_POST["PID"]."','".$_POST["Pname"]."','".$_POST["qty"]."')";

//if query work properly it will display a succesfull message
if($connection->query($sql) === TRUE) {
    echo "Your register form inserted";
    header("Location:AddSuppliers.php");

//if query didn't work properly it will disply an error messages
}else{
    header("Location:AddSuppliers.php");
    echo "Error: " . $sql . "<br>" . $connection->error;
}
$connection->close();
?>
