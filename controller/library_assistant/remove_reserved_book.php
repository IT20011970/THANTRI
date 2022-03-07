<?php
include "../../db/db_connect.php";

$bookLogId = $_GET['bookLogId'];
$studentId = $_GET['studentId'];

if ($connection) {
    $result = mysqli_query($connection, "delete from BookLog where BookLogId=" . $bookLogId);
    if ($result && mysqli_affected_rows($connection) > 0) {
        header("Location:../../html/library_assistant/lend_book.php?studentId=" . $studentId);
    }
}