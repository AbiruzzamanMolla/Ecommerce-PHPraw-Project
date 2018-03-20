<?php include "includes/db.php"; ?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Commerce Store</title>

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/style.css" rel="stylesheet"></link>
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea'
        });
    </script>

</head>

<body>

    <div class="row">
        <!-- row Starts -->

        <div class="col-lg-12">
            <!-- col-lg-12 Starts -->

            <ol class="breadcrumb">
                <!-- breadcrumb Starts -->

                <li class="active">

                    <i class="fa fa-dashboard"> </i> Dashboard / Insert Products

                </li>

            </ol>
            <!-- breadcrumb Ends -->

        </div>
        <!-- col-lg-12 Ends -->

    </div>
    <!-- row Ends -->


    <div class="row">
        <!-- 2 row Starts -->

        <div class="col-lg-12">
            <!-- col-lg-12 Starts -->

            <div class="panel panel-default">
                <!-- panel panel-default Starts -->

                <div class="panel-heading">
                    <!-- panel-heading Starts -->

                    <h3 class="panel-title">

                        <i class="fa fa-money fa-fw"></i> Insert Products

                    </h3>

                </div>
                <!-- panel-heading Ends -->

                <div class="panel-body">
                    <!-- panel-body Starts -->

                    <form class="form-horizontal" method="post" enctype="multipart/form-data">
                        <!-- form-horizontal Starts -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Product Title </label>

                            <div class="col-md-6">

                                <input type="text" name="product_title" class="form-control" required>

                            </div>

                        </div>
                        <!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Product Category </label>

                            <div class="col-md-6">

                                <select name="product_cat" class="form-control">

                                    <option> Select a Product Category </option>

                                    <?php
                                        $get_p_cats = "select * from product_categories";
                                        $run_p_cats = mysqli_query($con,$get_p_cats);
                                        while ($row_p_cats=mysqli_fetch_array($run_p_cats)) {
                                        $p_cat_id = $row_p_cats['p_cat_id'];
                                        $p_cat_title = $row_p_cats['p_cat_title'];
                                        echo "<option value='$p_cat_id' >$p_cat_title</option>";
                                        }
                                    ?>
                                </select>

                            </div>

                        </div>
                        <!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Category </label>

                            <div class="col-md-6">


                                <select name="cat" class="form-control">

                                    <option> Select a Category </option>

                                    <?php

                                        $get_cat = "select * from categories ";

                                        $run_cat = mysqli_query($con,$get_cat);

                                        while ($row_cat=mysqli_fetch_array($run_cat)) {

                                        $cat_id = $row_cat['cat_id'];

                                        $cat_title = $row_cat['cat_title'];

                                        echo "<option value='$cat_id'>$cat_title</option>";

                                        }

                                    ?>


                                </select>

                            </div>

                        </div>
                        <!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Product Image 1 </label>

                            <div class="col-md-6">

                                <input type="file" name="product_img1" class="form-control" required>

                            </div>

                        </div>
                        <!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Product Image 2 </label>

                            <div class="col-md-6">

                                <input type="file" name="product_img2" class="form-control" required>

                            </div>

                        </div>
                        <!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Product Image 3 </label>

                            <div class="col-md-6">

                                <input type="file" name="product_img3" class="form-control" required>

                            </div>

                        </div>
                        <!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Product Price </label>

                            <div class="col-md-6">

                                <input type="text" name="product_price" class="form-control" required>

                            </div>

                        </div>
                        <!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Product Keywords </label>

                            <div class="col-md-6">

                                <input type="text" name="product_keywords" class="form-control" required>

                            </div>

                        </div>
                        <!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Product Description </label>

                            <div class="col-md-6">

                                <textarea name="product_desc" class="form-control" rows="6" cols="19"></textarea>

                            </div>

                        </div>
                        <!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"></label>

                            <div class="col-md-6">

                                <input type="submit" name="submit" value="Insert Product" class="btn btn-primary form-control">

                            </div>

                        </div>
                        <!-- form-group Ends -->

                    </form>
                    <!-- form-horizontal Ends -->

                </div>
                <!-- panel-body Ends -->

            </div>
            <!-- panel panel-default Ends -->

        </div>
        <!-- col-lg-12 Ends -->

    </div>
    <!-- 2 row Ends -->


    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

<?php 
if(isset($_POST['submit'])){
    $product_title = $_POST['product_title'];
    $product_cat = $_POST['product_cat'];
    $cat = $_POST['cat'];
    $product_desc = $_POST['product_desc'];
    $product_keywords = $_POST['product_keywords'];
    $product_price = $_POST['product_price'];

    $product_img1 = $_FILES['product_img1']['name'];
    $product_img2 = $_FILES['product_img2']['name'];
    $product_img3 = $_FILES['product_img3']['name'];

    $temp_name1 = $_FILES['product_img1']['tmp_name'];
    $temp_name2 = $_FILES['product_img2']['tmp_name'];
    $temp_name3 = $_FILES['product_img3']['tmp_name'];

    move_uploaded_file($temp_name1, "product_images/$product_img1");
    move_uploaded_file($temp_name2, "product_images/$product_img2");
    move_uploaded_file($temp_name3, "product_images/$product_img3");

    $insert_product = "INSERT INTO products (p_cat_id, cat_id, date, product_title, product_img1, product_img2, product_img3, product_price, product_disc, product_keywords ) VALUES ('$product_cat', '$cat', NOW(), '$product_title', '$product_img1', '$product_img2', '$product_img3', '$product_price', '$product_desc', '$product_keywords')";

    $run_product = mysqli_query($con, $insert_product);
    if($run_product){
        echo "<script>alert('Product have inserted succesfully.')</script>";
        echo "<script>window.open('inser_product.php','self')</script>";
    } else {
        echo "<script>alert('Product not inserted.".mysqli_error($con)."')</script>";
        echo "<script>window.open('inser_product.php','self')</script>";
    }
}
?>