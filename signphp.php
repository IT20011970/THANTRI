<?php

//create database connection using config file
//require "config.php";

$connection = mysqli_connect('localhost', 'root', '1234', 'thantiri', '3306');
//insert user data into register table
$sql = "INSERT INTO tantriuser (UserId,Title,NameInitials,FirstName,MiddleName,LastName,
Address1,Address2,City,NIC,Gender,DOB,Mobile,HomeLine,UserEmail)
	VALUES
('".$_POST["NIC"]."','".$_POST["TitleSelection"]."','".$_POST["Iname"]."','".$_POST["fname"]."','".$_POST["mname"]."'
,'".$_POST["lname"]."','".$_POST["1line"]."','".$_POST["2line"]."','".$_POST["city"]."'
,'".$_POST["NIC"]."','".$_POST["gender"]."','".$_POST["birthday"]."',
'".$_POST["handphone"]."','".$_POST["landphone"]."','".$_POST["email"]."')";

//if query work properly it will display a succesfull message
if($connection->query($sql) === TRUE) {
    echo "Your register form inserted";

//if query didn't work properly it will disply an error messages
}else{
    echo "Error: " . $sql . "<br>" . $connection->error;
}
$connection->close();
?>
