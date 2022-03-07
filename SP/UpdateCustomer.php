<!DOCTYPE html>
<html lang="en-US">
<head>

    <?php
    include "../Header/HeaderSP.php"
    ?>

</head>
<main class="site-main">


    <!-- Start here -->

    <div class="row"  style="margin-left:10% ">


        <div id="logtext">
            <div class="hthree" style="padding-left: 350px">
                View Customer
            </div>
            <?php
            $conn = mysqli_connect('localhost', 'root', '1234', 'thantiri', '3306');
            $result = mysqli_query($conn, "SELECT CustomerNIC,Cusname,mobile,Address1,Address2,City,Email,Notes from customer ");
            ?>

            <div style="padding-top: 10px; padding-left: 50px">
                <table class="#" >
                    <tr>
                        <th>Customer NIC</th>
                        <th>Customer name</th>
                        <th>Address1</th>
                        <th>Address1</th>
                        <th>Address2</th>
                        <th>City</th>
                        <th>Email</th>
                        <th>Notes</th>
                    </tr>

                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row['CustomerNIC']; ?></td>
                        <td><?php echo $row['Cusname']; ?></td>
                        <td><?php echo $row['mobile']; ?></td>
                        <td><?php echo $row['Address1']; ?></td>
                        <td><?php echo $row['Address2']; ?></td>
                        <td><?php echo $row['City']; ?></td>
                        <td><?php echo $row['Email']; ?></td>
                        <td><?php echo $row['Notes']; ?></td>
                        <div style="padding-left: 20px">
                            <td style="border-left: 1px solid #b9b9b9">
                                <a style="text-decoration:none;" href="UpdateCustomer.php?id=<?php echo $row['CustomerNIC'] ?>&name=<?php echo $row['Cusname']?>&mobile=<?php echo $row['mobile']?>&a1=<?php echo $row['Address1']?>&a2=<?php echo $row['Address2']?>&city=<?php echo $row['City']?>&mail=<?php echo $row['Email']?>&notes=<?php echo $row['Notes']?> ">
                                    <button type="button" name ="btn" class = "btnWhite" STYLE="border: none" onClick="">Select</button>
                                </a>
                            </td>
                        </div>
                        <?php
                        }
                        ?>
                    </tr>

                </table>
            </div>
            <?php
            $id="";
            $name="";
            $mobile="";
            $a1="";
            $a2="";
            $city="";
            $mail="";
            $notes="";

            if (!empty($_GET['id'])) {
                $id = $_GET['id'];
            }
            if (!empty($_GET['name'])) {
                $name = $_GET['name'];
            }
            if (!empty($_GET['mobile'])) {
                $mobile = $_GET['mobile'];
            }
            if (!empty($_GET['a1'])) {
                $a1 = $_GET['a1'];
            }
            if (!empty($_GET['a2'])) {
                $a2 = $_GET['a2'];
            }
            if (!empty($_GET['city'])) {
                $city = $_GET['city'];
            }
            if (!empty($_GET['mail'])) {
                $mail = $_GET['mail'];
            }
            if (!empty($_GET['notes'])) {
                $notes = $_GET['notes'];
            }

            ?>
        </div>

        <div id="logtext">
            <div class="hthree" style="padding-left: 350px">
                Update Customer
            </div>

            <form name="registerform" method="POST" target="_self" action="UpdateCusDB.php">

                <div style="padding-top: 10px">
                    <label style="margin-right: 205px"> Name with initials :  </label>
                    <input type="text" id="Iname" name="Iname" class="text" placeholder="x.x.xxxxx" value="<?php echo $name?>" required> <br>
                </div>

                <div style="padding-top: 10px">
                    <label style="margin-right:200px"> Permanent Address :  </label>
                    <input type="text" id="1line" name="1line" placeholder="Address 1" class="text" value="<?php echo $a1?>" required>
                    <input type="text" id="2line" name="2line" placeholder="Address 2" class="text" value="<?php echo $a2?>" required>
                    <input type="text" id="city" name="city"placeholder="City" class="text" value="<?php echo $city?>" required> <br>
                </div>
                <div style="padding-top: 10px">
                    <label style="margin-right:245px"> NIC Number :  </label>
                    <input type="text" id="NIC" name="NIC" value="<?php echo $id?>" pattern="^[0-9]{9}[V]$|^[0-9]{12}[V]$" class="text" required
                           placeholder="xxxxxxxxxV"> <br>
                </div>
                <div style="padding-top: 10px">
                    <label style="margin-right:211px"> Phone Number:</label>  &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" value="<?php echo $mobile?>" id="tphone" name="handphone"  class="text" required> <br>
                    <br>
                </div>
                <div style="padding-top: 10px">
                    <label style="margin-right:225px"> E-mail Address : </label>
                    <input type="text" id="email" value="<?php echo $mail?>" name="email" class="text" required> <br>
                </div> <br>
                <div style="padding-top: 10px">
                    <label style="margin-right:275px"> Notes : </label>
                    <input type="text" id="notes" value="<?php echo $notes?>" name="notes" class="text" required> <br>
                </div> <br>
                <div style="padding-top: 10px">
                    <input type="submit" id="submitbt" name="sbtn" class="submitbtn" value="Submit">
                    <input type="reset" id="delete" name="delete" style="margin-left: 10px;" value="Clear Data">
                </div>
            </form>
        </div>



    </div><!-- end .row -->

</main><!-- end .site-main -->

<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script type="text/javascript">
    var c = document.body.className;
    c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
    document.body.className = c;
</script>
<script type="text/javascript">
    function revslider_showDoubleJqueryError(sliderID) {
        var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
        errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
        errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
        errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
        errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
        jQuery(sliderID).show().html(errorMessage);
    }
</script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wpcf7 = {
        "apiSettings": {
            "root": "https:\/\/www.tantri.com\/en\/wp-json\/contact-form-7\/v1",
            "namespace": "contact-form-7\/v1"
        }
    };
    /* ]]> */
</script>
<script type='text/javascript'
        src='../js/js-cookie/js.cookie.min.js'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var woocommerce_params = {
        "ajax_url": "\/en\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/en\/?wc-ajax=%%endpoint%%"
    };
    /* ]]> */

    <script type='text/javascript'>
        /* <![CDATA[ */
        var wc_cart_fragments_params = {
        "ajax_url": "\/en\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/en\/?wc-ajax=%%endpoint%%",
        "cart_hash_key": "wc_cart_hash_ae30626cd1fe68e9bf4fb30728999fdc",
        "fragment_name": "wc_fragments_ae30626cd1fe68e9bf4fb30728999fdc"
    };
    /* ]]> */
</script>

<script type='text/javascript'>
    /* <![CDATA[ */
    var anps = {
        "reset_button": "Reset",
        "home_url": "https:\/\/www.tantri.com\/en\/",
        "product_thumb_slider": "",
        "search_placeholder": "Search..."
    };
    /* ]]> */
</script>
<script type='text/javascript'
        src='../js/functions.js?ver=4.9.18'></script>
<script> jQuery(function ($) {
        $(".widget_meta a[href='https://www.tantri.com/en/comments/feed/']").parent().remove();
    }); </script>
<script src="//code.jivosite.com/widget/JJGwOKAgJw" async></script>

<?php
include "../Footer/FooterMain.php"
?>



</body>
</html>
