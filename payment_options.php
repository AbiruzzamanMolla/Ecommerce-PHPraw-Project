<div class="box">
    <!-- box Starts -->
<?php
    $session_email   = $_SESSION['customer_email'];
    $select_customer = "SELECT * FROM customers WHERE customer_email='$session_email'";
    $run_customer    = mysqli_query($con,$select_customer);
    $row_customer    = mysqli_fetch_array($run_customer);
    $customer_id     = $row_customer['customer_id'];
?>
        <h1 class="text-center">Payment Options For You</h1>
        <p class="lead text-center">
            <a href="order.php?c_id=<?php echo $customer_id; ?>">Pay Off line</a>
        </p>
        <center>
            <!-- center Starts -->
            <p class="lead">
                <a href="customers/my_account.php?pay_offline">
                    Pay Online With Pay pal
                    <img src="images/paypal.png" width="500" height="270" class="img-responsive">
                </a>
            </p>
        </center>
        <!-- center Ends -->
</div>
<!-- box Ends -->