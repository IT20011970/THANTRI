<?php

//create database connection using config file
//require "config.php";

$connection = mysqli_connect('localhost', 'root', '1234', 'thantiri', '3306');

$unit1=$_POST["unit1"];
$unit2=$_POST["unit2"];
$unit3=$unit1-$unit2;



if($unit3>=0){

    echo $unit3;

    //$result = mysqli_query($connection, "update transactions set TransactionAmount='$unit3' where TransactionID='" . $_POST["Id"] . "'");
    $sql1 = "INSERT INTO cashflow (TransactionID,PaymentID,PaymentAmount,FlowType)
	VALUES
('" . $_POST["Id"] . "','" . $_POST["PId"] . "','" . $_POST["unit2"] . "','Outflow')";

    if ($connection->query($sql1)  === TRUE) {

        header("Location:OutFlow.php");

    } else {
        echo '<script>alert("Try again")</script>';
        header("Location:OutFlow.php");
    }

}





?>