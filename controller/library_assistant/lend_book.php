<?php
include "../../db/db_connect.php";

$bookLogId = $_POST['bookLogId'];
$studentId = $_POST['studentId'];

if ($connection) {
    $result = mysqli_query($connection, "update BookLog set BookStatus=0, ReturnDueDate=DATE_ADD(curdate(), INTERVAL (select durationvalue from duration) DAY), ReturnedDate=DATE_ADD(curdate(), INTERVAL (select durationvalue from duration) DAY) where BookLogId='$bookLogId'");
    if ($result && mysqli_affected_rows($connection) > 0) {
        header("Location:../../html/library_assistant/return_book.php?studentId=" . $studentId);
    }
}