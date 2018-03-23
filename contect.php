<?php include "includes/header.php"; ?>
<?php
$note ="";
?>
<?php
if(isset($_POST['submit'])){
    $sender_name = $_POST['name'];
    $sender_email = $_POST['email'];
    $sender_subject = $_POST['subject'];
    $sender_mail = $_POST['message'];

    $reciver_mail = "abiruzzaman.molla@gmail.com";
    mail($reciver_mail, $sender_name, $sender_email, $sender_subject, $sender_mail);

    $email = $_POST['email'];
    $subject = "Wellcome to my website";
    $msg = "Id ipsum ad consequat quis minim proident velit reprehenderit duis sit fugiat Lorem. Ipsum tempor anim et id. Veniam enim elit cupidatat incididunt ex reprehenderit elit. Nulla cupidatat incididunt quis non ut reprehenderit eu ex veniam sit aliquip. Laboris eiusmod in velit dolore officia reprehenderit cupidatat deserunt duis quis. Fugiat mollit tempor ullamco reprehenderit minim sunt. Laborum elit duis veniam deserunt.

    In ullamco qui exercitation culpa ipsum aliqua aliqua esse ut veniam irure velit elit voluptate. Officia Lorem fugiat esse et ipsum Lorem tempor incididunt ullamco veniam ea. Ex et pariatur dolor tempor nulla. Tempor reprehenderit excepteur non nulla nostrud velit. Reprehenderit voluptate commodo excepteur velit ut ut adipisicing excepteur enim in elit officia nisi. Ipsum ad anim dolore esse amet laborum sunt qui. Fugiat incididunt cillum sit qui eiusmod irure commodo do proident reprehenderit incididunt cupidatat deserunt.

    Mollit veniam ea dolore aute est culpa culpa proident reprehenderit reprehenderit. Do Lorem fugiat enim excepteur duis laborum voluptate excepteur quis. Velit veniam sunt eiusmod ipsum laboris aute nisi enim reprehenderit ad duis.";
$from = "abiruzzaman.molla@gmailo.com";

mail($email, $subject, $msg, $from);
$note = "Message send succesfully";
}
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
                                <h1 style="color:red">
                                    <?php echo $note; ?>
                                </h1>

                            </center>
                            <!-- center Ends -->

                        </div>
                        <!-- box-header Ends -->

                        <form action="contect.php" method="post">
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


        <?php

if(isset($_POST['register'])){

$c_name = $_POST['c_name'];

$c_email = $_POST['c_email'];

$c_pass = $_POST['c_pass'];

$c_country = $_POST['c_country'];

$c_city = $_POST['c_city'];

$c_contact = $_POST['c_contact'];

$c_address = $_POST['c_address'];

$c_image = $_FILES['c_image']['name'];

$c_image_tmp = $_FILES['c_image']['tmp_name'];

$c_ip = getRealIP();

move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");

$insert_customer = "insert into customers (customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact, customer_address, customer_image,customer_ip) values ('$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$c_image','$c_ip')";


$run_customer = mysqli_query($con, $insert_customer);

$sel_cart = "select * from cart where ip_add='$c_ip'";

$run_cart = mysqli_query($con,$sel_cart);

$check_cart = mysqli_num_rows($run_cart);

if($check_cart>0){

$_SESSION['customer_email']=$c_email;

echo "<script>alert('You have been Registered Successfully')</script>";

echo "<script>window.open('checkout.php','_self')</script>";

}else{

$_SESSION['customer_email']=$c_email;

echo "<script>alert('You have been Registered Successfully')</script>";

echo "<script>window.open('index.php','_self')</script>";


}




}

?>