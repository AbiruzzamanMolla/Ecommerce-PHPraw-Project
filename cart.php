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
            <div class="col-md-9" id="cart">
                <!-- Col-md-9#cart start-->
                <div class="box">
                    <form action="cart.php" method="post" enctype="multipart-form-data">
                        <h1>Shopping Cart</h1>
                        <p class="text-muted">You Currectly have 3 items in your cart.</p>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="2">Product</th>
                                        <th>Quantity</th>
                                        <th>Unit Price</th>
                                        <th>Size</th>
                                        <th colspan="1">Delete</th>
                                        <th colspan="2">Sub Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="admin_area/product_images/product.jpg" alt="">
                                        </td>
                                        <td>
                                            <a href="#">Cold Black Play T-Shirt</a>
                                        </td>
                                        <td>2</td>
                                        <td>$50.00</td>
                                        <td>Large</td>
                                        <td>
                                            <input type="checkbox" name="remove[]">
                                        </td>
                                        <td>$100.00</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="admin_area/product_images/product.jpg" alt="">
                                        </td>
                                        <td>
                                            <a href="#">Cold Black Play T-Shirt</a>
                                        </td>
                                        <td>2</td>
                                        <td>$50.00</td>
                                        <td>Large</td>
                                        <td>
                                            <input type="checkbox" name="remove[]">
                                        </td>
                                        <td>$150.00</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="admin_area/product_images/product.jpg" alt="">
                                        </td>
                                        <td>
                                            <a href="#">Cold Black Play T-Shirt</a>
                                        </td>
                                        <td>2</td>
                                        <td>$50.00</td>
                                        <td>Large</td>
                                        <td>
                                            <input type="checkbox" name="remove[]">
                                        </td>
                                        <td>$150.00</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="5">Total</th>
                                        <th colspan="2">$100.00</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="box-footer">
                            <div class="pull-left">
                                <a href="index.php" class="btn btn-default">
                                    <i class="fa fa-chevron-left"> Continue Shoping</i>
                                </a>
                            </div>
                            <div class="pull-right">
                                <button class="btn btn-default" type="submit" name="update" value="Update Cart">
                                    <i class="fa fa-refresh"></i> Update Cart
                                </button>
                                <a href="checkout.php" class="btn btn-primary">Proced to Checkout
                                    <i class="fa fa-chevron-circle-right"></i>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
                <div id="row same-height-row">
                    <div class="col-md-3 col-sm-6">
                        <div class="box same-height headline">
                            <h3 class="text-center">You may alse like these product</h3>
                        </div>
                    </div>
                    <div class="center-responsive col-md-3 col-sm-6">
                        <div class="product same-height">
                            <a href="details.php">
                                <img src="admin_area/product_images/product.jpg" alt="" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3>
                                    <a href="details.php">Marvel Polo Black T-Shirt</a>
                                </h3>
                                <p class="price">50$</p>
                            </div>
                        </div>
                    </div>
                    <div class="center-responsive col-md-3 col-sm-6">
                        <div class="product same-height">
                            <a href="details.php">
                                <img src="admin_area/product_images/product.jpg" alt="" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3>
                                    <a href="details.php">Marvel Polo Black T-Shirt</a>
                                </h3>
                                <p class="price">50$</p>
                            </div>
                        </div>
                    </div>
                    <div class="center-responsive col-md-3 col-sm-6">
                        <div class="product same-height">
                            <a href="details.php">
                                <img src="admin_area/product_images/product.jpg" alt="" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3>
                                    <a href="details.php">Marvel Polo Black T-Shirt</a>
                                </h3>
                                <p class="price">50$</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Col-md-9#cart ends-->

            <div class="col-md-3">
                <div class="box" id="order-summary">
                    <div class="box-header">
                        <h3>Order Summary</h3>
                    </div>
                    <p class="text-muted">Adipisicing qui ullamco deserunt esse enim irure labore duis anim consectetur in laboris dolor ad.</p>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td> Order Subtotal </td>
                                    <th> $250.00 </th>
                                </tr>
                                <tr>
                                    <td>Shipping and Handling</td>
                                    <td>$0.00</td>
                                </tr>
                                <tr>
                                    <td>Tax</td>
                                    <th>$0.00</th>
                                </tr>
                                <tr class="total">
                                    <td>Total</td>
                                    <th>$200.00</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container Ends-->
    </div>
    <!-- Content End-->
    <?php include "includes/footer.php"; ?>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>