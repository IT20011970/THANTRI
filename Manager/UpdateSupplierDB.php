<?php

$conn = mysqli_connect('localhost', 'root', '1234', 'thantiri', '3306');

$id = $_POST['Id'];
$name = $_POST['Pname'];
$qty = $_POST['Pqty'];



$result = mysqli_query($conn, "update supplier set SupplierID='$id',SupplierName='$name',Email='$qty' where SupplierID='$id'");
if ($result && mysqli_affected_rows($conn) > 0) {
    header("Location:UpdateSuppliers.php");
} else {
    echo '<script>alert("Connection fail")</script>';
    header("Location:");
}