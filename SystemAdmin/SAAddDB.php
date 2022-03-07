<?php

//create database connection using config file
//require "config.php";

$connection = mysqli_connect('localhost', 'root', '1234', 'thantiri', '3306');
//insert user data into register table
$sql = "INSERT INTO tantriuser (NIC,NameInitials,UserPassword,UserTypeId,UserEmail,Mobile)
	VALUES
('".$_POST["NIC"]."','".$_POST["Iname"]."','".$_POST["pass"]."','".$_POST["Cat"]."','".$_POST["email"]."','".$_POST["handphone"]."')";

//if query work properly it will display a succesfull message
if($connection->query($sql) === TRUE) {
    echo "Your register form inserted";
    header("Location:SAAddUser.php");

//if query didn't work properly it will disply an error messages
}else{
    header("Location:SAAddUser.php");
    echo "Error: " . $sql . "<br>" . $connection->error;
}
$connection->close();

?>
