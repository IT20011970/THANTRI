<?php


$conn = mysqli_connect('localhost', 'root', '1234', 'thantiri', '3306');
$NIC="1";
$type="1";
$name="1";
$mail="1";
$mobile="1";
$pass="1";
$NIC=$_POST['NIC'];
$type=$_POST['Cat'];
$name=$_POST['Iname'];
$mail=$_POST['email'];
$mobile=$_POST['handphone'];
$pass=$_POST['pass'];





$result = mysqli_query($conn, "update tantriuser set NameInitials='$name',UserPassword='$pass',UserEmail='$mail',Mobile='$mobile',UserTypeId='$type' where NIC='$NIC'");
if ($result && mysqli_affected_rows($conn)) {

    echo '<script>alert("Good")</script>';
    header("Location:UpdateUser.php");
} else {
    echo '<script>alert("Try again")</script>';
  header("Location:UpdateUser.php");
}
