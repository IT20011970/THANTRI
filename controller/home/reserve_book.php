<?php
include "../../db/db_connect.php";

$isbn = $_POST['bookIsbn'];
$studentId = $_POST['studentId'];
$catId = $_POST['categoryId'];

if ($connection) {
    $result = mysqli_query($connection, "insert into BookLog (ISBN,UserId,BookStatus,LendDate) values ('$isbn','$studentId',2,curdate())");
    if ($result && mysqli_affected_rows($connection) > 0) {
        header("Location:../../html/home/popular_books.php?catId=" . $catId);
    }
}