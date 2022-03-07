

    <!DOCTYPE html>

    <?php

    //include "config.php";

    //check if form submitted for user login
    if (isset($_POST['signIn'])) {

        $mail = $_POST['email'];
        $pass = $_POST['password'];

        //create database connection using config file
        $connection = mysqli_connect('localhost', 'root', '1234', 'thantiri', '3306');
        //fetch all users data from register table
        $sql = "SELECT * FROM `tantriuser` WHERE UserEmail = '" . $mail . "' AND UserPassword = '" . $pass . "'";

        $res = mysqli_query($connection, $sql);
        $count = mysqli_num_rows($res);  //count how many rows have for relavant query
        $row = mysqli_fetch_assoc($res); //representing associative array the row data in the $count

        //if $count greater than zero (that means one record)
        if ($count > 0) {

            $user = $row['UserId'];
            $cat = $row['UserTypeId'];

            //if category is member then member redirect to relavant pages
            if ($cat == '1') {
                header("location:SystemAdmin/SA.php");
            } //else category is staff then staff member redirect to relavant pages
            else if ($cat == '2') {
                header("location:SP/Sales.php");
            } else if ($cat == '3') {
                header("location:Manager/SP.php");
            } else if ($cat == '4') {
                header("location:Accountant/A.php");
            }
        } //if $count>0 gets false it shows a alert message
        else {
            echo '<script>alert("User name or Passowrd is incorrect")</script>';
        }
    }
    ?>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet"href="css1/guest/Guest.css">
        <link rel="stylesheet"href="css1/guest/Style.css">
        <title>Library Management System</title>
    </head>

<body style="margin: 0px">
<?php
include "Header/headerlogin.php"
?>


<div class="row"  style="margin-left:30% ">
                <div id="logtext">
                    <div class="hthree">
                        Login
                    </div>
                    <form method="POST" action="">
                        <div style="margin-top: 50px">
                            <div class="alignLeft" style="margin-top: 5px">Email</div>
                            <input type="text" name="email" style="margin-left: 74px;width: 300px">
                        </div>
                        <div style="margin-top: 15px">
                            <div class="alignLeft" style="margin-top: 5px">Password</div>
                            <input type="password" name="password" style="margin-left: 45px;width: 300px">
                        </div>
                        <div style="margin-top:20px;font-size: 13px;float: left;">
                            <a href="SignIn.php" target="_blank" class="link"> Create Account </a>
                        </div>
                        <div style="font-size: 13px;float: right;margin-top:20px;">
                            <a href="html/guest/userdetails.php" target="_blank" class="link">Forgot Password?</a>
                        </div>
                        <div style="width: 100%;text-align: center">
                            <button class="submitbtn" name="signIn" style="margin-top: 50px">Sign In</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
<?php
include "Footer/Footer.php"
?>

</body>
