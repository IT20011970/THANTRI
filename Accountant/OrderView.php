<!DOCTYPE html>
<html lang="en-US">
<head>

    <?php
    include "../Header/HeaderA.php"
    ?>

</head>
<main class="site-main">


    <!-- Start here -->

    <div class="row" style="margin-left:10% ">




        <?php
        $conn = mysqli_connect('localhost', 'root', '1234', 'thantiri', '3306');
        $id = "";
        $name = "";
        $UnitPrice = 0;
        $tot = 0;
        $qty = 0;
        ?>



        <?php
        if (!empty($_GET['id'])) {
            $id = $_GET['id'];
        }
        if (!empty($_GET['name'])) {
            $name = $_GET['name'];
        }
        if (!empty($_GET['qty'])) {
            $UnitPrice = $_GET['qty'];
            settype($UnitPrice, "int");
        }
        // echo $UnitPrice;
        // $tot=array($UnitPrice,$UnitPrice+1);
        //     echo $tot;

        ?>



        <div id="logtext">
            <div class="hthree" style="padding-left: 350px">
                View Service Income
            </div>
            <?php
            $result = mysqli_query($conn, "SELECT t.TransactionID,t.TransactionDate,t.TransactionAmount,
 cus.Cusname,cus.mobile,cus.Email from transactions t, customer cus,
 orders r where cus.CustomerNIC=r.CustomerID and
 r.TransactionID=t.TransactionID and TransactionType='Income'");
            ?>

            <div style="padding-top: 10px; padding-left: 50px">
                <table class="#" id="table">
                    <tr>
                        <th>Transaction ID</th>
                        <th>Transaction Date</th>
                        <th>Transaction Amount</th>
                        <th>Customer Name</th>
                        <th>Mobile</th>
                        <th>Email</th>
                    </tr>

                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row['TransactionID']; ?></td>
                        <td><?php echo $row['TransactionDate']; ?></td>
                        <td><?php echo $row['TransactionAmount']; ?></td>
                        <td><?php echo $row['Cusname']; ?></td>
                        <td><?php echo $row['mobile']; ?></td>
                        <td><?php echo $row['Email']; ?></td>

                        <?php
                        }
                        ?>

                    </tr>

                </table>
            </div>
            <?php

            ?>




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
        var wc_cart_fragments_params={
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
