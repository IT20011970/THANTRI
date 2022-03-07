<?php

//create database connection using config file
//require "config.php";

$connection = mysqli_connect('localhost', 'root', '1234', 'thantiri', '3306');

if ($_POST['sbtna']) {

    echo $_POST['sbtna'];

//insert user data into register table


    $sql = "INSERT INTO transactions (TransactionID,TransactionDate,TransactionType,TransactionAmount)
	VALUES
('" . $_POST["Id"] . "','" . $_POST["Tdate"] . "','Expences','" . $_POST["unit"] . "')";
    $sql1 = "INSERT INTO tax (TransactionID,TaxDetails,TaxAmmount)
	VALUES
('" . $_POST["Id"] . "','" . $_POST["Pname"] . "','" . $_POST["unit"] . "')";

//if query work properly it will display a succesfull message
    if ($connection->query($sql) === TRUE) {
        echo "Your register form inserted";
        if ($connection->query($sql1) === TRUE) {
            echo "Your register form s";
            header("Location:Tax.php");
        }

//if query didn't work properly it will disply an error messages
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
    $connection->close();

}
else  {


    $result = mysqli_query($connection, "update transactions set TransactionAmount='" . $_POST["unit"] . "' where TransactionID='" . $_POST["Id"] . "'");
    $connection->query($result) ;
    if ($connection->query($result) === TRUE) {

        header("Location:A.php");

    } else {
        echo '<script>alert("Try again")</script>';
        header("Location:A.php");
    }

}


?>
