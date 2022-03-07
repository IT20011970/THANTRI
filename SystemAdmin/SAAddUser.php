<!DOCTYPE html>
<html lang="en-US">
<head>

    <?php
    include "../Header/HeaderSA.php"
    ?>

</head>
<main class="site-main">




    <?php
    $conn = mysqli_connect('localhost', 'root', '1234', 'thantiri', '3306');
    $result = mysqli_query($conn, "SELECT ut.NIC,ut.NameInitials,ut.UserEmail,ut.Mobile,u.UserTypeName  from usertype u,tantriuser ut where u.UserTypeId=ut.UserTypeId ");
    ?>
    <div class="row"  style="margin-left:10% ">


        <div id="logtext">
            <div class="hthree" style="padding-left: 350px">
                Add Users
            </div>

            <form name="registerform" method="POST" target="_self" action="SAAddDB.php">

                <div style="padding-top: 10px">
                    <label style="margin-right: 205px"> Name with initials :  </label>
                    <input type="text" id="Iname" name="Iname" class="text" placeholder="x.x.xxxxx" required> <br>
                </div>
                <div style="padding-top: 10px">
                    <label style="margin-right:245px"> NIC Number :  </label>
                    <input type="text" id="NIC" name="NIC" pattern="^[0-9]{9}[V]$|^[0-9]{12}[V]$" class="text" required
                           placeholder="xxxxxxxxxV"> <br>
                </div>
                <div style="padding-top: 10px">
                    <label style="margin-right:240px"> User Category : </label>
                    <select name="Cat" required>
                        <option value="">

                        </option>
                        <option value="1">
                            System Admin
                        </option>
                        <option value="2">
                            Sales Person
                        </option>
                        <option value="3">
                            Manager
                        </option>
                        <option value="4">
                            Accountant
                        </option>

                    </select>
                </div>
                <div style="padding-top: 10px">
                    <label style="margin-right:215px"> Phone Number</label> &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" id="tphone" name="handphone" pattern="[0-9]{10}" class="text" required> <br>

                    <div style="padding-top: 10px">
                        <label style="margin-right:225px"> E-mail Address : </label>
                        <input type="email" id="email" name="email" class="text" required> <br>
                    </div> <br>
                    <div style="padding-top: 10px">
                        <label style="margin-right:255px"> Password : </label>
                        <input type="password" id="pass" name="pass" class="text" required> <br>
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
