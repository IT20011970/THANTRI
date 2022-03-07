<?php

//create database connection using config file
//require "config.php";

$connection = mysqli_connect('localhost', 'root', '1234', 'thantiri', '3306');
//insert user data into register table
$name = $_POST['Iname'];
$phone=$_POST['handphone'];
$l1=$_POST['1line'];
$note=$_POST['notes'];
$l2=$_POST['2line'];
$nic=$_POST['NIC'];
$mail=$_POST['email'];
$result = mysqli_query($connection, "update customer set Cusname='$name',mobile='$phone',Address1='$l1',Address2='$l2',Notes='$note',Email='$mail' where CustomerNIC='$nic'");



if ($result && mysqli_affected_rows($connection) > 0) {
    header("Location:UpdateCustomer.php");
} else {
    echo '<script>alert("Connection fail")</script>';
    header("Location:UpdateCustomer.php");

}






?>
