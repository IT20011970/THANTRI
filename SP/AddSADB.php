<?php

//create database connection using config file
//require "config.php";

$connection = mysqli_connect('localhost', 'root', '1234', 'thantiri', '3306');
//insert user data into register table
$sql = "INSERT INTO customer (CustomerNIC,Cusname,mobile,Address1,Address2,City,
Notes,Email)
	VALUES
('".$_POST["NIC"]."','".$_POST["Iname"]."','".$_POST["handphone"]."'
,'".$_POST["1line"]."','".$_POST["2line"]."','".$_POST["city"]."','".$_POST["notes"]."','".$_POST["email"]."')";

//if query work properly it will display a succesfull message
if($connection->query($sql) === TRUE) {
    echo "Your register form inserted";
    header("Location:Sales.php");

//if query didn't work properly it will disply an error messages
}else{
    header("Location:Sales.php");
    echo "Error: " . $sql . "<br>" . $connection->error;
}
$connection->close();
?>
