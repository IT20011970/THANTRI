<?php
include "../../db/db_connect.php";

$studentId = $_POST['studentId'];
$paymentId = $_POST['paymentId'];
$fineAmount = $_POST['fineAmount'];

if ($connection) {
    $result = mysqli_query($connection, "update Payment set Amount=Amount+'$fineAmount', PaymentDate=curdate() where PaymentId='$paymentId'");
    if ($result && mysqli_affected_rows($connection) > 0) {
        header("Location:../../html/library_assistant/pay_fine.php?studentId=" . $studentId);
    }
}