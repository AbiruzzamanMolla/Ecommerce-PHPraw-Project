<?php include "includes/header.php"; ?>
<?php
if(isset($_GET['pro_id'])){
  $pro_id = $_GET['pro_id'];
  $get_product = "SELECT * FROM products WHERE product_id = '$product_id'";
  $run_product = mysqli_query($con, $get_product);
  $row_pro = mysqli_fetch_array($run_product);
  $p_cat_id = $row_pro['product_id'];
  $p_title = $row_pro['product_title'];
  $p_price = $row_pro['product_price'];
  $p_desc = $row_pro['product_desc'];
  $p_img1 = $row_pro['product_img1'];
  $p_img2 = $row_pro['product_img2'];
  $p_img3 = $row_pro['product_img3'];

  $get_p_cat = "SELECT * FROM product_categories WHERE p_cat_id = '$p_cat_id'";
  $run_p_cat = ;
}
?>
  <div id="content">
    <div class="container">
      <div class="col-md-12">
        <ul class="breadcrumb">
          <li>
            <a href="index.php">Home</a>
          </li>
          <li>Shop </li>
        </ul>
      </div>
      <div class="col-md-3">
        <?php include "includes/sidebar.php";
?>
      </div>
      <div class="col-md-9">
        <div class="row" id="productMain">
          <div class="col-sm-6">
            <div id="mainImage">
              <!-- caurseel starts -->
              <div id="myCarousel" class="carousel" data-ride="carousel">
                <!-- carousel-indicators starts -->
                <ol class="carousel-indicators">
                  <li dara-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                  <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>
                <!-- carousel-indicators ends -->
                <!-- carousel-inner start -->
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="admin_area/product_images/product.jpg" alt="" class="img-responsive">
                  </div>
                  <div class="item">
                    <img src="admin_area/product_images/product2.jpg" alt="" class="img-responsive">
                  </div>
                  <div class="item">
                    <img src="admin_area/product_images/product3.jpg" alt="" class="img-responsive">
                  </div>
                </div>
                <!-- carousel-inner ends -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                  <!-- left carousel-control Starts -->
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous </span>
                </a>
                <!-- left carousel-control Ends -->
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                  <!-- right carousel-control Starts -->
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next </span>
                </a>
                <!-- right carousel-control Ends -->
              </div>
              <!-- caurseel ends -->
            </div>
          </div>
          <div class="col-sm-6">
            <div class="box">
              <h1 class="text-center">U.S Polo Black T-Shirt</h1>
              <form action="details.php" method="post" class="form-horizontal">
                <div class="form-group">
                  <label class="col-md-5 control-label" for="">Product Quntity</label>
                  <div class="col-md-7">
                    <select name="product_qty" id="" class="form-control">
                      <option value="">1</option>
                      <option value="">2</option>
                      <option value="">3</option>
                      <option value="">4</option>
                      <option value="">5</option>
                      <option value="">6</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-5 control-label" for="">Product Size</label>
                  <div class="col-md-7">
                    <select name="product-size" id="" class="form-control">
                      <option value="">Select a Size</option>
                      <option value="">Small</option>
                      <option value="">medium</option>
                      <option value="">Large</option>
                      <option value="">X Large</option>
                    </select>
                  </div>
                </div>
                <p class="price">50$</p>
                <p class="text-center buttons">
                  <button class="btn btn-primary" type="submit">
                    <i class="fa fa-shopping-cart"></i>Add to Cart</button>
                </p>
              </form>
            </div>
            <div class="row" id="thumbs">
              <div class="col-xs-4">
                <a href="#" class="thumb">
                  <img src="admin_area/product_images/product.jpg" alt="" class="img-responsive">
                </a>
              </div>
              <div class="col-xs-4">
                <a href="#" class="thumb">
                  <img src="admin_area/product_images/product2.jpg" alt="" class="img-responsive">
                </a>
              </div>
              <div class="col-xs-4">
                <a href="#" class="thumb">
                  <img src="admin_area/product_images/product3.jpg" alt="" class="img-responsive">
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="box" id="details">
          <p>
            <h4>Product Details</h4>
            <p>Occaecat enim anim quis laborum ex laboris reprehenderit elit. Commodo esse velit consectetur mollit ea nisi
              adipisicing labore aliquip ea fugiat aute cillum. Ipsum aute officia consequat occaecat mollit fugiat non exercitation
              do ut Lorem laborum commodo. Sint occaecat nostrud exercitation amet minim labore officia ea adipisicing. Reprehenderit
              voluptate id eu non laborum officia eu cillum tempor aliqua sint incididunt elit est. Ad velit sit culpa anim.
              </p>
            <h4>Size</h4>
            <ul>
              <li>Small</li>
              <li>Medium</li>
              <li>Large</li>
              <li>X Large</li>
            </ul>
          </p>
          <hr>
        </div>
        <!-- Box ends-->
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
    </div>
  </div>
  </div>
  <?php include "includes/footer.php";
?>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>