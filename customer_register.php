<?php include "includes/header.php"; ?>
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

                    <div class="box-header">
                        <!-- box-header Starts -->

                        <center>
                            <!-- center Starts -->

                            <h2> Register A New Account </h2>



                        </center>
                        <!-- center Ends -->

                    </div>
                    <!-- box-header Ends -->

                    <form action="customer_register.php" method="post" enctype="multipart/form-data">
                        <!-- form Starts -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label>Customer Name</label>

                            <input type="text" class="form-control" name="c_name" required>

                        </div>
                        <!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label> Customer Email</label>

                            <input type="text" class="form-control" name="c_email" required>

                        </div>
                        <!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label> Customer Password </label>

                            <input type="password" class="form-control" name="c_pass" required>

                        </div>
                        <!-- form-group Ends -->


                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label> Customer Country </label>

                            <input type="text" class="form-control" name="c_country" required>

                        </div>
                        <!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label> Customer City </label>

                            <input type="text" class="form-control" name="c_city" required>

                        </div>
                        <!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label> Customer Contact </label>

                            <input type="text" class="form-control" name="c_contact" required>

                        </div>
                        <!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label> Customer Address </label>

                            <input type="text" class="form-control" name="c_address" required>

                        </div>
                        <!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label> Customer Image </label>

                            <input type="file" class="form-control" name="c_image" required>

                        </div>
                        <!-- form-group Ends -->


                        <div class="text-center">
                            <!-- text-center Starts -->

                            <button type="submit" name="register" class="btn btn-primary">

                                <i class="fa fa-user-md"></i> Register

                            </button>

                        </div>
                        <!-- text-center Ends -->

                    </form>
                    <!-- form Ends -->

                </div>
                <!-- box Ends -->

            </div>
            <!-- col-md-9 Ends -->



        </div>
        <!-- container Ends -->
    </div>
    <!-- content Ends -->



    <?php

include("includes/footer.php");

?>

    <script src="js/jquery.min.js">
    </script>

    <script src="js/bootstrap.min.js"></script>

</body>

</html>