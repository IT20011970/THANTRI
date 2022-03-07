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
            header("location:HR/HR.php");
        } //else category is staff then staff member redirect to relavant pages
        else if ($cat == '2') {
            header("location:html/library_clerk/Book.php");
        } else if ($cat == '3') {
            header("location:html/librarian/ReportsMembers.php");
        } else if ($cat == '4') {
            header("location:html/member/viewBooks.php");
        }
    } //if $count>0 gets false it shows a alert message
    else {
        echo '<script>alert("User name or Passowrd is incorrect")</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<?php
include "Header/headerlogin.php"
?>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css1/guest/Guest1.css">
    <title>Library Management System</title>
    <script src="../../js/guest/myscript.js"> </script>
</head>

<body style="margin: 0px">



<div class="row"  style="margin-left:10% ">
    <div id="logtext">
        <div class="hthree">
            Please fill the details below to register the system
        </div>
            <form name="registerform" method="POST" target="_self" action="signphp.php">
                <div>
                    <label style="margin-right: 289px"> Title : </label>
                    <select name="TitleSelection" class="select">
                        <option value="NON"> Select </option>
                        <option value="Mr"> Mr </option>
                        <option value="Mrs"> Mrs </option>
                        <option value="Miss"> Miss </option>
                        <option value="Prof"> Prof </option>
                        <option value="Dr"> Dr </option>
                        <option value="Other"> Other </option>
                    </select> <br>
                </div>
                <div style="padding-top: 10px">
                    <label style="margin-right: 205px"> Name with initials :  </label>
                    <input type="text" id="Iname" name="Iname" class="text" placeholder="x.x.xxxxx" required> <br>
                </div>
                <div style="padding-top: 10px">
                    <label style="margin-right: 280px"> Name :  </label>
                    <input type="text" id="fname" name="fname" placeholder="First Name" class="text" required>
                    <input type="text" id="mname" name="mname" placeholder="Middle Name" class="text" required>
                    <input type="text" id="lname" name="lname" placeholder="Last Name" class="text"> <br>
                </div>
                <div style="padding-top: 10px">
                    <label style="margin-right:200px"> Permanent Address :  </label>
                    <input type="text" id="1line" name="1line" placeholder="Address 1" class="text" required>
                    <input type="text" id="2line" name="2line" placeholder="Address 2" class="text" required>
                    <input type="text" id="city" name="city"placeholder="City" class="text" required> <br>
                </div>
                <div style="padding-top: 10px">
                    <label style="margin-right:245px"> NIC Number :  </label>
                    <input type="text" id="NIC" name="NIC" pattern="^[0-9]{9}[V]$|^[0-9]{12}[V]$" class="text" required
                           placeholder="xxxxxxxxxV"> <br>
                </div>
                <div style="padding-top: 10px">
                    <label style="margin-right:285px"> Gender : </label>
                    <input type="radio" id="Male" name="gender" value="Male" class="text" required> Male
                    <input type="radio" id="Female" name="gender" value="Female" class="text" required> Female <br>
                </div>
                <div style="padding-top: 10px">
                    <label style="margin-right:270px"> Birthday: </label>
                    <input type="date" id="birthday" name="birthday" class="text" required> <br>
                </div>
                <div style="padding-top: 10px">
                    <label style="margin-right:190px"> Membership Category : </label>
                    <input type="radio" id="member" name="category" value="Member" class="text" required> Member
                    <input type="radio" id="staff" name="category" value="Staff" class="text" required> Staff <br>
                </div>
                <div style="padding-top: 10px">
                    <label style="margin-right:250px"> Occupation : </label>
                    <input type="text" id="job" name="job" class="text"> <br>
                </div>
                <div style="padding-top: 10px">
                    <label > Phone Number</label> <br> &nbsp;&nbsp;&nbsp;&nbsp;
                    <label style="margin-right:255px">Mobile : </label>
                    <input type="text" id="tphone" name="handphone" pattern="[0-9]{10}" class="text" required> <br>
                    <div style="padding-top: 10px">
                    <label style="margin-left: 20px;margin-right:260px;">Home : </label>
                    <input type="text" id="hphone" name="landphone" pattern="[0-9]{10}" style="margin-top: 3px;" class="text">

                    <br>
                </div>
                <div style="padding-top: 10px">
                    <label style="margin-right:225px"> E-mail Address : </label>
                    <input type="email" id="email" name="email" class="text" required> <br>
                </div> <br>
                <div style="padding-top: 10px">
                    <input type="submit" id="submitbt" name="sbtn" class="submitbtn" value="Submit">
                    <input type="reset" id="delete" name="delete" style="margin-left: 10px;" value="Clear Data">
                </div>
            </form>
    </div>
</div>
</div>
<?php
include "Footer/Footer.php"
?>

</body>
