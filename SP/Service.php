<!DOCTYPE html>
<html lang="en-US">
<head>

    <?php
    include "../Header/HeaderSP.php"
    ?>

</head>
<main class="site-main">


    <!-- Start here -->

    <div class="row" style="margin-left:10% ">


        <div id="logtext">
            <div class="hthree" style="padding-left: 350px">
                View Spare Parts
            </div>
            <?php
            $conn = mysqli_connect('localhost', 'root', '1234', 'thantiri', '3306');
            $result = mysqli_query($conn, "SELECT PartID,PartDetails,UnitPrice from sparepart ");
            ?>


            <div style="padding-top: 10px; padding-left: 150px">
                <table class="#" >
                    <tr>
                        <th>PartID</th>
                        <th>PartDetails</th>
                        <th>UnitPrice</th>
                    </tr>

                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row['PartID']; ?></td>
                        <td><?php echo $row['PartDetails']; ?></td>
                        <td><?php echo $row['UnitPrice']; ?></td>
                        <td style="border-left: 1px solid #b9b9b9">
                            <a style="text-decoration:none;" href="Service.php?id=<?php echo $row['PartID']; ?>&name=<?php echo $row['PartDetails']; ?>&qty=<?php echo $row['UnitPrice']; ?>">
                                <button type="button" style="border: none" name="btn" class="btnWhite" onClick="">Select</button>
                            </a>
                        </td>

                        <?php
                        }
                        ?>
                    </tr>

                </table>
            </div>

            <?php
            $id="";
            $name="";
            $UnitPrice="";
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
        </div>


        <div id="logtext">
            <div class="hthree" style="padding-left: 350px">
                View Transaction
            </div>
            <?php
            $result = mysqli_query($conn, "SELECT TransactionID,TransactionDate,TransactionType,TransactionAmount from transactions ");
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
                                    document.getElementById("tot").value = this.cells[3].innerHTML;

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
                View Customer
            </div>
            <?php
            $conn = mysqli_connect('localhost', 'root', '1234', 'thantiri', '3306');
            $result = mysqli_query($conn, "SELECT CustomerNIC,Cusname,mobile,Address1,Address2,City,Email,Notes from customer ");
            ?>

            <div style="padding-top: 10px; padding-left: 50px">
                <table class="#" id="table1" >
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
                                    <button type="button" name ="btn" class = "btnWhite" STYLE="border: none" onClick="">Select</button>
                            </td>
                        </div>
                        <?php
                        }
                        ?>
                    </tr>

                </table>
            </div>
        </div>


        <script>

            var table1 = document.getElementById('table1');

            for (var i = 1; i < table1.rows.length; i++) {
                table1.rows[i].onclick = function () {
                    //rIndex = this.rowIndex;
                    document.getElementById("CId").value = this.cells[0].innerHTML;

                };
            }

        </script>


        <div id="logtext">
            <div class="hthree" style="padding-left: 350px">
                Add transaction
            </div>

            <form name="registerform" method="POST" target="_self" action="ServiceDB.php">

                <div style="padding-top: 10px">
                    <label style="margin-right: 205px"> Transaction ID : </label>
                    <input type="text" id="Id" name="Id" class="text" value="" required> <br>
                </div>
                <div style="padding-top: 10px">
                    <label style="margin-right: 230px"> Supply ID : </label>
                    <input type="text" id="PId" name="PId" class="text" value="<?php echo $id ?>" readonly> <br>
                </div>
                <div style="padding-top: 10px">
                    <label style="margin-right: 210px"> Customer ID : </label>
                    <input type="text" id="CId" name="CId" class="text" value="" readonly> <br>
                </div>
                <div style="padding-top: 10px">
                    <label style="margin-right: 205px"> Supply Names : </label>
                    <input type="text" id="Pname" name="Pname" class="text" value="<?php echo $name ?>" readonly> <br>
                </div>
                <div style="padding-top: 10px">
                    <label style="margin-right: 225px"> UnitPrice : </label>
                    <input type="number" id="unit" name="unit" class="text" value="<?php echo $UnitPrice ?>" readonly>
                    <br>
                </div>
                <div style="padding-top: 10px">
                    <label style="margin-right: 225px"> Quantity : </label>
                    <input type="number" id="Pqty" name="Pqty" class="text" value="0" required>
                    <button type="button" name="btn" class="btnWhite" STYLE="border: " onClick="change()">+</button>
                    <br>
                </div>
                <div style="padding-top: 10px">
                    <label style="margin-right: 245px"> Total : </label>
                    <input type="text" id="tot" name="tot" class="text" value="0" required> <br>
                </div>
                <div style="padding-top: 10px">
                    <label style="margin-right: 180px"> Transaction Date : </label>
                    <input type="date" id="Tdate" name="Tdate" class="text" required> <br>
                </div>
                <div style="padding-top: 10px">
                    <label style="margin-right: 200px"> Labour Hours: </label>
                    <input type="number" id="Lhour" name="Lhour" class="text" required> <br>
                </div>
                <div style="padding-top: 10px">
                    <label style="margin-right: 210px"> Hourly rate: </label>
                    <input type="number" id="Lrate" name="Lrate" class="text" required> <br>
                </div>
                <div style="padding-top: 10px">
                    <input type="submit" id="submitbtA" name="sbtna" class="submitbtn" style="margin-left: 10px;"
                           value="Add">
                    <!--                    <a style="text-decoration:none;"-->
                    <!--                       href="purchaseDB.php?Id=--><?php //echo $row['ItemID'] ?><!--&name=--><?php //echo $row['ItemDetails'] ?><!--&qty=--><?php //echo $row['UnitPrice'] ?><!--">-->
                    <input type="submit" id="submitbtU" name="sbtnu" class="submitbtn" style="margin-left: 10px;"
                           value="Update" disabled>
                    <!--                    </a>-->
                    <input type="reset" id="delete" name="delete" style="margin-left: 10px;" value="Clear Data">
                </div>
            </form>
        </div>

        <script>

            function change() {
                var y = parseInt(document.getElementById("tot").value);
                var x = parseInt(document.getElementById("unit").value);
                var z = parseInt(document.getElementById("Pqty").value);

                var tot = x * z + y;

                document.getElementById("tot").value = tot;
            }

            function Update() {

                document.getElementById("submitbtU").disabled = false;
                document.getElementById("submitbtA").disabled = true;
            }
        </script>


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
