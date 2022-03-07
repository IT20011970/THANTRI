<?php

//create database connection using config file
//require "config.php";

$connection = mysqli_connect('localhost', 'root', '1234', 'thantiri', '3306');
//insert user data into register table
$sql = "INSERT INTO supplies (ItemID,ItemDetails,UnitPrice,SupplierID)
	VALUES
('".$_POST["PID"]."','".$_POST["Pname"]."','".$_POST["Pqty"]."','".$_POST["Id"]."')";

//if query work properly it will display a succesfull message
if($connection->query($sql) === TRUE) {
    echo "Your register form inserted";
    header("Location:AddSupplies.php");

//if query didn't work properly it will disply an error messages
}else{
    header("Location:AddSupplies.php");
    header("Location:AddSupplies.php");
    echo "Error: " . $sql . "<br>" . $connection->error;
}
$connection->close();
?>
