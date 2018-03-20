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
                        Contact to us
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <?php include "includes/sidebar.php"; ?>
            </div>

            <!-- col-md-12 ends-->
            <div class="col-md-9">
                <!-- col-md-9 Starts -->

                <div class="box">
                    <!-- box Starts -->

                    <div class="box-header">
                        <!-- box-header Starts -->

                        <center>
                            <!-- center Starts -->

                            <h2>Contact Us </h2>

                            <p class="text-muted">
                                If you have any questions, please feel free to contact us, our customer service center is working for you 24/7.

                            </p>

                        </center>
                        <!-- center Ends -->

                    </div>
                    <!-- box-header Ends -->

                    <form action="contact.php" method="post">
                        <!-- form Starts -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label>Name</label>

                            <input type="text" class="form-control" name="name" placeholder="Enter Your Full Name" required>

                        </div>
                        <!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label>Email</label>

                            <input type="text" class="form-control" name="email" placeholder="example@email.com" required>

                        </div>
                        <!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label> Subject </label>

                            <input type="text" class="form-control" name="subject" placeholder="Enter Subject" required>

                        </div>
                        <!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label> Message </label>

                            <textarea class="form-control" name="message"> </textarea>

                        </div>
                        <!-- form-group Ends -->

                        <div class="text-center">
                            <!-- text-center Starts -->

                            <button type="submit" name="submit" class="btn btn-primary">

                                <i class="fa fa-user-md"></i> Send Message

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
        <!-- Container Ends-->
    </div>
    <!-- Content End-->
    <?php include "includes/footer.php"; ?>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>