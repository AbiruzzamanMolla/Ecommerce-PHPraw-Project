<?php include "includes/header.php"; ?>

<?php
if(!isset($_SESSION['customer_email'])){
    echo "<script>window.open('../checkout.php', '_self')</script>";
} else {
    ?>

    <div id="content">
        <!-- Content Start-->
        <div class="container">
            <!-- Container Start-->
            <div class="col-md-12">
                <!-- col-md-12 start-->
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        Cart
                    </li>
                </ul>
            </div>
            <!-- col-md-12 ends-->

            <div class="col-md-3">
                <!-- col-md-3 Starts -->

                <?php include("includes/sidebar.php"); ?>

            </div>
            <!-- col-md-3 Ends -->

            <div class="col-md-9">
                <!-- col-md-9 Starts -->

                <div class="box">
                    <!-- box Starts -->
                    <?php
                if(isset($_GET['my_orders'])){
                    include "my_orders.php";
                }
                if(isset($_GET['pay_offline'])){
                    include "pay_offline.php";
                }
                if(isset($_GET['edit_account'])){
                    include "edit_account.php";
                }
                if(isset($_GET['change_pass'])){
                    include "change_pass.php";
                }
                if(isset($_GET['delete_account'])){
                    include "delete_account.php";
                }
                ?>
                </div>
                <!-- box Ends -->


            </div>
            <!--- col-md-9 Ends -->

        </div>
        <!-- container Ends -->
    </div>
    <!-- content Ends -->



    <?php

include "../includes/footer.php";

?>

        <script src="js/jquery.min.js">
        </script>

        <script src="js/bootstrap.min.js"></script>

</body>

</html>

<?php }
?>