<!DOCTYPE html>
<html lang="en-US">
<head>

    <?php
    include "../Header/HeaderM.php"
    ?>

</head>
<main class="site-main">


    <!-- Start here -->

    <div class="row" style="margin-left:10% ">


        <div id="logtext">
            <div align="center">
                <h1 style="font-weight:bold">TANTRI TRADERS</h1>

                <h2 style="color:#3C0" ;> INCOME REPORT</h2>
            </div>
            <form method="get" name="report_month">

                <div align="center">
                    From:<input type="date" name="from_date" id="from_date">
                    To:<input type="date" name="to_date" id="to_date">

                    <input type="submit" name="btn_sub" value="Submit">
                    <div id="cmb" style="padding-top: 20px">
                        <select name="asc">
                            <option>
                                Choose Order
                            </option>
                            <option value="asc">
                                Accending
                            </option>
                            <option value="dsc">
                                Decending
                            </option>
                        </select>
                    </div>
                </div>
                <br/>
                <?php
                $conn = mysqli_connect('localhost', 'root', '1234', 'thantiri', '3306');
                $dp = '';
                if (!empty($_GET['asc'])) {
                    $dp = $_GET["asc"];
                }
                $fd = '0000-00-00';
                $td = '2022-12-31';

                if (!empty($_GET['from_date'])) {
                    $fd = $_GET["from_date"];
                }
                if (!empty($_GET['to_date'])) {
                    $td = $_GET["to_date"];
                }

                $result2 = mysqli_query($conn, "select sum(TransactionAmount) from transactions where TransactionType='Income' ");
                $x = mysqli_fetch_array($result2);


                if ($dp == "dsc") {

                    $result = mysqli_query($conn, "SELECT TransactionID,TransactionType,TransactionAmount 
from transactions where TransactionType='Income' and 
TransactionDate BETWEEN '$fd' and '$td'  order by TransactionAmount desc ");

                } else if ($dp == "asc") {

                    $result = mysqli_query($conn, "SELECT TransactionID,TransactionType,TransactionAmount 
from transactions where TransactionType='Income' and
TransactionDate BETWEEN '$fd' and '$td'   order by TransactionAmount asc ");

                } else {

                    $result = mysqli_query($conn, "SELECT TransactionID,TransactionType,TransactionAmount 
from transactions where
TransactionDate  BETWEEN '$fd' and '$td'and TransactionType='Income' ");

                }


                ?>
                <div class="hthree" style="padding-left: 400px">
                    View Income
                </div>
                <?php
                // $conn = mysqli_connect('localhost', 'root', '1234', 'thantiri', '3306');

                ?>

                <div style="padding-top: 10px; padding-left: 150px">
                    <table class="#" style="border-bottom: 2px solid #0d0d0d">
                        <tr>
                            <th>Transaction ID</th>
                            <th>Transaction Type</th>
                            <th>Transaction Amount</th>
                        </tr>

                        <?php
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <td><?php echo $row['TransactionID']; ?></td>
                            <td><?php echo $row['TransactionType']; ?></td>
                            <td><?php echo $row['TransactionAmount']; ?></td>
                            <?php
                            }
                            ?>
                        </tr>

                    </table>
                    <label>Total Income</label> <label
                            style="float: right; margin-right: 290px"><?php echo $x[0] ?></label>
                    <br>

                </div>


            </form>
        </div>
        <div id="logtext">
            <div align="center">
                <h1 style="font-weight:bold">TANTRI TRADERS</h1>

                <h2 style="color:#3C0" ;> INFLOW REPORT</h2>
            </div>
            <form method="get" name="report_month1">

                <div align="center">


                    <div id="cmb" style="padding-top: 20px">
                        <select name="asc12">
                            <option>
                                Choose Order
                            </option>
                            <option value="asc1">
                                Accending
                            </option>
                            <option value="dsc1">
                                Decending
                            </option>
                        </select>
                    </div>
                    <input type="submit" name="btn_sub1" value="Submit" style="margin-top: 20px">

                </div>
                <br/>
                <?php
                 $dp1 = '';
                if (!empty($_GET['asc12'])) {
                    $dp1 = $_GET["asc12"];
                }

//                echo $dp1;
                $result12 = mysqli_query($conn, "select sum(PaymentAmount) from cashflow where FlowType='Inflow'");
                $x1 = mysqli_fetch_array($result12);


                if ($dp1 == "dsc1") {

                    $result1 = mysqli_query($conn, "SELECT TransactionID,PaymentID,PaymentAmount
from cashflow where FlowType='Inflow'   order by PaymentAmount desc");

                }
                 else if ($dp1 == "asc1") {

                    $result1 = mysqli_query($conn, "SELECT TransactionID,PaymentID,PaymentAmount
from cashflow where FlowType='Inflow'   order by PaymentAmount asc ");

                }
                 else {

                    $result1 = mysqli_query($conn, "SELECT TransactionID,PaymentID,PaymentAmount
from cashflow where FlowType='Inflow'  ");

                }


                ?>
                <div class="hthree" style="padding-left: 400px">
                    View Inflow
                </div>
                <?php
                // $conn = mysqli_connect('localhost', 'root', '1234', 'thantiri', '3306');

                ?>

                <div style="padding-top: 10px; padding-left: 150px">
                    <table class="#" style="border-bottom: 2px solid #0d0d0d">
                        <tr>
                            <th>Transaction ID</th>
                            <th>Payment ID</th>
                            <th>Payment Amount</th>
                        </tr>

                        <?php
                        while ($row1 = mysqli_fetch_array($result1)) {
                        ?>
                        <tr>
                            <td><?php echo $row1['TransactionID']; ?></td>
                            <td><?php echo $row1['PaymentID']; ?></td>
                            <td><?php echo $row1['PaymentAmount']; ?></td>
                            <?php
                            }
                            ?>
                        </tr>

                    </table>
                    <label>Total Inflow</label> <label
                            style="float: right; margin-right: 300px"><?php echo $x1[0] ?></label>
                    <br>


                </div>


            </form>
        </div>

        <div id="logtext">
            <div align="center">
                <h1 style="font-weight:bold">TANTRI TRADERS</h1>

                <h2 style="color:#3C0" ;> INFLOW REPORT</h2>
            </div>
            <form method="get" name="report_month1">


                <br/>

                <div class="hthree" style="padding-left: 400px">
                    Receivable
                </div>


                <div style="padding-top: 10px; padding-left: 150px">
                    <table class="#" style="border-bottom: 2px solid #0d0d0d">
                        <tr>
                            <th>Total Income</th>
                            <th>Total Inflow</th>
                            <th>Receivable</th>
                        </tr>


                        <tr>
                            <td><?php echo $x[0]; ?></td>
                            <td><?php echo $x1[0]; ?></td>
                            <?php $y=$x[0]-$x1[0]?>
                            <td><?php echo $y?></td>

                        </tr>

                    </table>
                    <label>Total Receivable</label> <label
                            style="float: right; margin-right: 220px"><?php echo $y?></label>
                    <br>


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
