<?php
include "../../db/db_connect.php";

$bookLogId = $_POST['bookLogId'];
$studentId = $_POST['studentId'];
$bookStatus = $_POST['bookStatus'];
$payAndSubmit = $_POST['payAndSubmit'];
$amount = $_POST['amount'];

if ($connection) {
    if ($payAndSubmit === '1') {
        $paid = mysqli_query($connection, "insert into Payment (BookLogId,Amount,PaymentDate) values ('$bookLogId','$amount',curdate())");
        $result = mysqli_query($connection, "update BookLog set BookStatus='$bookStatus', ReturnedDate=curdate() where BookLogId='$bookLogId'");
        if ($paid && $result && mysqli_affected_rows($connection) > 0) {
            header("Location:../../html/library_assistant/return_book.php?studentId=" . $studentId);
        }
    } else {
        $result = mysqli_query($connection, "update BookLog set BookStatus='$bookStatus', ReturnedDate=curdate() where BookLogId='$bookLogId'");
        if ($result && mysqli_affected_rows($connection) > 0) {
            header("Location:../../html/library_assistant/return_book.php?studentId=" . $studentId);
        }
    }
}