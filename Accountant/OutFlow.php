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
                View Transaction
            </div>
            <?php
            $result = mysqli_query($conn, "SELECT TransactionID,TransactionDate,TransactionType,TransactionAmount from transactions where TransactionType='Expences'");
            ?>

            <div style="padding-top: 10px; padding-left: 150px">
                <table class="#" id="table">
                    <tr>
                        <th>Transaction ID</th>
                        <th>Transaction Date</th>
                        <th>TransactionType</th>
                        <th>Transaction Amount</th>
                    </tr>

                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row['TransactionID']; ?></td>
                        <td><?php echo $row['TransactionDate']; ?></td>
                        <td><?php echo $row['TransactionType']; ?></td>
                        <td><?php echo $row['TransactionAmount']; ?></td>
                        <div style="padding-left: 20px">
                            <td style="border-left: 1px solid #b9b9b9">
                            <td style="border-left: 1px solid #b9b9b9">
                                <button type="button" name="btn" class="btnWhite" STYLE="border: none"
                                        onClick="Update()">Select
                                </button>
                            </td>

                            </td>
                        </div>
                        <?php
                        }
                        ?>

                        <script>

                            var table = document.getElementById('table');

                            for (var i = 1; i < table.rows.length; i++) {
                                table.rows[i].onclick = function () {
                                    //rIndex = this.rowIndex;
                                    document.getElementById("Id").value = this.cells[0].innerHTML;
                                    document.getElementById("Tdate").value = this.cells[1].innerHTML;
                                    document.getElementById("unit").value = this.cells[3].innerHTML;

                                };
                            }

                        </script>
                    </tr>

                </table>
            </div>
            <?php

            ?>
        </div>


        <div id="logtext">
            <div class="hthree" style="padding-left: 350px">
                Add Outflow
            </div>

            <form name="registerform" method="POST" target="_self" action="OutDB.php">

                <div style="padding-top: 10px">
                    <label style="margin-right: 212px"> Transaction ID : </label>
                    <input type="text" id="Id" name="Id" class="text" value="" required readonly> <br>
                </div>
                <div style="padding-top: 10px">
                    <label style="margin-right: 222px"> Payment ID : </label>
                    <input type="text" id="PId" name="PId" class="text" value="" required > <br>
                </div>
                <div style="padding-top: 10px">
                    <label style="margin-right: 175px">  Transaction Amount : </label>
                    <input type="number" id="unit" name="unit1" class="text" value="" readonly>
                    <br>
                </div>
                <div style="padding-top: 10px">
                    <label style="margin-right: 185px">  Outgoing Amount : </label>
                    <input type="number" id="unit2" name="unit2" class="text" value="" >
                    <br>
                </div>
                <div style="padding-top: 10px">
                    <label style="margin-right: 205px"> Payment Date : </label>
                    <input type="date" id="Tdate" name="Tdate" class="text" required> <br>
                </div>
                <div style="padding-top: 10px">
                    <input type="submit" id="submitbtA" name="sbtna" class="submitbtn" style="margin-left: 10px;"
                           value="Add">
                    <!--                    <a style="text-decoration:none;"-->
                    <!--                       href="purchaseDB.php?Id=--><?php //echo $row['ItemID'] ?><!--&name=--><?php //echo $row['ItemDetails'] ?><!--&qty=--><?php //echo $row['UnitPrice'] ?><!--">-->
                    <!--                    </a>-->
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
