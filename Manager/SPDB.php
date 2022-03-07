<?php

//create database connection using config file
//require "config.php";

$connection = mysqli_connect('localhost', 'root', '1234', 'thantiri', '3306');
//insert user data into register table
$sql = "INSERT INTO sparepart (PartID,PartDetails,UnitPrice)
	VALUES
('".$_POST["PID"]."','".$_POST["Pname"]."','".$_POST["qty"]."')";

//if query work properly it will display a succesfull message
if($connection->query($sql) === TRUE) {
    echo "Your register form inserted";
    header("Location:SP.php");

//if query didn't work properly it will disply an error messages
}else{
    echo "Error: " . $sql . "<br>" . $connection->error;
    header("Location:SP.php");
}
$connection->close();
?>
