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
                        <?php
                        $ip_add = getRealIP();
                        $select_cart = "SELECT * FROM cart WHERE ip_add='$ip_add'";
                        $run_cart = mysqli_query($con, $select_cart);
                        $count = mysqli_num_rows($run_cart);
                        ?>
                        <p class="text-muted">You Currectly have <?php echo $count; ?> items in your cart.</p>
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
                                <?php
                                $total = 0;
                                while($row_cart = mysqli_fetch_array($run_cart)){
                                    $pro_id = $row_cart['p_id'];
                                    $pro_size = $row_cart['size'];
                                    $pro_qty = $row_cart['qty'];
                                    $get_product = "SELECT * FROM products WHERE product_id = '$pro_id'";
                                    $run_products = mysqli_query($con, $get_product);
                                    while($row_pro=mysqli_fetch_array($run_products)){
                                        $product_title = $row_pro['product_title'];
                                        $product_img1 = $row_pro['product_img1'];
                                        $price_only = $row_pro['product_price'];
                                        $sub_total = $row_pro['product_price']*$pro_qty;
                                        $total += $sub_total; ?>
                                    <tr>
                                        <td>
                                            <img src="admin_area/product_images/<?php echo $product_img1; ?>" alt="">
                                        </td>
                                        <td>
                                            <a href="#"><?php echo $product_title; ?></a>
                                        </td>
                                        <td><?php echo $pro_qty; ?></td>
                                        <td>$ <?php echo $price_only; ?></td>
                                        <td><?php echo $pro_size; ?></td>
                                        <td>
                                            <input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>">
                                        </td>
                                        <td>$ <?php echo $sub_total; ?></td>
                                    </tr>
                                    <?php } } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="5">Total</th>
                                        <th colspan="2"><?php totalPrice(); ?></th>
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
                <?php
                function update_cart(){
                    global $con;
                    if(isset($_POST['update'])){
                        foreach($_POST['remove'] as $remove_id){
                            $delete_product = "DELETE FROM cart WHERE p_id = '$remove_id'";
                            $delete = mysqli_query($con, $delete_product);
                            if($delete){
                                echo "<script>window.open('cart.php','_self')</script>";
                            }
                        }
                    }
                }
                echo @$up_cart = update_cart();
                ?>
                <div id="row same-height-row">
                    <div class="col-md-3 col-sm-6">
                        <div class="box same-height headline">
                            <h3 class="text-center">You may alse like these product</h3>
                        </div>
                    </div>
                    <?php
          $query = "SELECT * FROM products ORDER BY rand() LIMIT 0,3";
          $result = mysqli_query($con, $query);
          while($row = mysqli_fetch_array($result)){
            $pro_id = $row['product_id'];
            $pro_img1 = $row['product_img1'];
            $pro_title = $row['product_title'];
            $pro_price = $row['product_price'];
          ?>
          <div class="center-responsive col-md-3 col-sm-6">
            <div class="product same-height">
              <a href="details.php?pro_id=<?php echo $pro_id; ?>">
                <img src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="" class="img-responsive">
              </a>
              <div class="text">
                <h3>
                  <a href="details.php?pro_id=<?php echo $pro_id; ?>"><?php echo $pro_title; ?></a>
                </h3>
                <p class="price"><?php echo $pro_price; ?>$</p>
              </div>
            </div>
          </div>
        <?php } ?>
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
                                    <th> <?php totalPrice(); ?> </th>
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
                                    <th><?php totalPrice(); ?></th>
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
