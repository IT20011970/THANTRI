<?php

//create database connection using config file
//require "config.php";

$connection = mysqli_connect('localhost', 'root', '1234', 'thantiri', '3306');

if ($_POST['sbtna']) {

    echo $_POST['sbtna'];

//insert user data into register table


    $sql = "INSERT INTO transactions (TransactionID,TransactionDate,TransactionType,TransactionAmount)
	VALUES
('" . $_POST["Id"] . "','" . $_POST["Tdate"] . "','Income','" . $_POST["tot"] . "')";
    $sql1 = "INSERT INTO repairservice (TransactionID,LabourHours,HourlyRate,CustomerID)
	VALUES
('" . $_POST["Id"] . "','" . $_POST["Lhour"] . "','" . $_POST["Lrate"] . "','" . $_POST["CId"] . "')";
    $sql2 = "INSERT INTO parts_used (TransactionID,UnitPrice,PartQty,PartID)
	VALUES
('" . $_POST["Id"] . "','" . $_POST["unit"] . "','" . $_POST["Pqty"] . "','" . $_POST["PId"] . "')";


//if query work properly it will display a succesfull message
    if ($connection->query($sql) === TRUE) {
        echo "Your register form inserted";
        if ($connection->query($sql1) === TRUE) {
            echo "Your register form s";
            if ($connection->query($sql2) === TRUE) {
                header("Location:Service.php");
            }
        }

//if query didn't work properly it will disply an error messages
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
    $connection->close();

}
else  {

    $result = mysqli_query($connection, "update transactions set TransactionAmount='" . $_POST["tot"] . "' where TransactionID='" . $_POST["Id"] . "'");
    $sql2 = "INSERT INTO parts_used (TransactionID,UnitPrice,PartQty,PartID)
	VALUES
('" . $_POST["Id"] . "','" . $_POST["unit"] . "','" . $_POST["Pqty"] . "','" . $_POST["PId"] . "','" . $_POST["CId"] . "')";
$a=$_POST["CId"] ;

    if ($connection->query($result) === TRUE) {

        header("Location:Service.php");
        if ($connection->query($sql2) === TRUE) {
            header("Location:Service.php");
        };
    } else {
        echo '<script>alert("Try again")</script>';
        header("Location:Service.php");
    }
}

?>
