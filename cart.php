<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>E-Commerce Store</title>

  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100">
  <link rel="stylesheet" href="styles/bootstrap.min.css">
  <link rel="stylesheet" href="font-awesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="styles/style.css" rel="stylesheet"></link>
  <!-- JQuery 3.3.1 -->
  <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  -->
  <!-- Bootstrap JS 3.3.7 -->
  <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  -->

</head>

<body>
  <!-- top starts -->
  <div id="top">
    <!-- container starts -->
    <div class="container">
      <!-- col md 6 offer starts -->
      <div class="col-md-6 offer">
        <a href="#" class="btn btn-success btn-sm"> Wellcome :Guest</a>
        <a href="#">Shopping Cart Total Price: $ 100 Total Items: 2</a>
      </div>
      <!-- col md 6 offer ends -->
      <!-- col md 6 starts -->
      <div class="col-md-6">
        <!-- menu starts -->
        <ul class="menu">
          <li>
            <a href="customer_register.php">Registation</a>
          </li>
          <li>
            <a href="checkout.php">My Account</a>
          </li>
          <li>
            <a href="cart.php">Go To Cart</a>
          </li>
          <li>
            <a href="checkout.php">Login</a>
          </li>
        </ul>
        <!-- menu ends -->
      </div>
      <!-- col md 6 ends -->
    </div>
    <!-- container ends -->
  </div>
  <!-- top ends -->
  <!-- Navbar starts -->
  <div class="navbar navbar-default" id="navbar">
    <!-- Container Starts-->
    <div class="container">
      <!-- navbar header starts -->
      <div class="navbar-header">
        <!--navbar brand home starts-->
        <a class="navbar-brand home" href="index.php">
          <img src="images/title.png" alt="title" class="hidden-xs" height="30px" width="100px">
          <img src="images/title1.png" alt="title" class="visible-xs">
        </a>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">

          <span class="sr-only">Toggle Navigation </span>

          <i class="fa fa-align-justify"></i>

        </button>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">

          <span class="sr-only">Toggle Search</span>

          <i class="fa fa-search"></i>

        </button>

      </div>
      <!--navbar header ends-->
      <!--navbar-collapse collapse starts-->
      <div id="navigation" class="collapse navbar-collapse">
        <!--padding-nav starts-->
        <div class="padding-nav">
          <!--nav navbar-nav navbar-left starts-->
          <ul class="nav navbar-nav navbar-left">
            <li>
              <a href="index.php"> Home </a>
            </li>
            <li>
              <a href="shop.php"> Shop </a>
            </li>
            <li>
              <a href="checkout.php"> My Account </a>
            </li>
            <li class="active">
              <a href="cart.php"> Shopping Cart </a>
            </li>

            <li>
              <a href="contect.php"> Contact Us </a>
            </li>
          </ul>
          <!--nav navbar-nav navbar-left ends-->
        </div>
        <!--padding-nav ends-->
        <!--btn btn-primary navbar-btn right starts-->
        <a class="btn btn-primary navbar-btn right" href="cart.php">
          <li class="fa fa-shopping-cart"></li>
          <span>4 itelms in cart</span>
        </a>
        <!--btn btn-primary navbar-btn right ends-->
        <!--navbar-collapse collapse right starts-->
        <div class="navbar-collapse collapse right">
          <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
            <span class="sr-only"> Toggle Search</span>
            <li class="fa fa-search"></li>
          </button>
        </div>
        <!--navbar-collapse collapse right ends-->
        <!--collapse clearfix starts-->
        <div id="search" class="collapse">
          <!--navbar form starts-->
          <form action="results.php" class="navbar-form" method="get">
            <!--input-group starts-->
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search" name="user_query" required>
              <span class="input-group-btn">
                <!--input group btn-->
                <button type="submit" value="Search" name="search" class="btn btn-primary">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
            <!--input-group ends-->
          </form>
          <!--navbar form ends-->
        </div>
        <!--collapse clearfix ends-->
      </div>
      <!--navbar-collapse collapse ends-->

    </div>
    <!-- Container ends-->
  </div>
  <!-- Navbar ends-->
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