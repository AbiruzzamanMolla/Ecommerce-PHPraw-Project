<?php include "includes/header.php"; ?>
<div id="content">
    <!-- Content starts -->
    <div class="container">
        <!-- container starts -->
        <div class="col-md-12">
            <!-- col-md-12 -->
            <ul class="breadcrumb">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    Shop
                </li>
            </ul>
        </div>
        <!-- col-md-12 ends -->
        <div class="col-md-3">
            <?php include "includes/sidebar.php"; ?>
        </div>
        <div class="col-md-9">
            <!-- col-md-9 Starts -->
            <?php
        if(!isset($_SESSION['customer_email'])){
            include("customer/customer_login.php");
        } else {
            include("payment_options.php");
        }
        ?>
        </div>
        <!-- col-md-9 Ends -->
    </div>
    <!-- Container ends -->
</div>
<!-- Content ends -->
<?php include "includes/footer.php"; ?>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>