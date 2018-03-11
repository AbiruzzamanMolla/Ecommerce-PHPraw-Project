<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>E-Commerce Store</title>
  <script src="js/jquery.js"></script>
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100">
  <link rel="stylesheet" href="styles/bootstrap.min.css">
  <link rel="stylesheet" href="font-awesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles/style.css">
    <!-- JQuery 3.3.1 -->
  <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  -->
  <!-- Bootstrap JS 3.3.7 -->
  <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  -->
  <script src="js/bootstrap.min.js"></script>
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
        <button class="navbar-toggle" data-toggle="collapse" data-targe="#navigation">
          <span class="sr-only">Toggle Navagation</span>
          <li class="fa fa-align-justify"></li>
        </button>
        <button type="button" class="navbar-toggle" data-toggle="navbar-toggle" data-targe="#search">
          <span class="sr-only">Toggle Search</span>
          <li class="fa fa-search"></li>
        </button>
      </div>
      <!--navbar header ends-->
      <!--navbar-collapse collapse starts-->
      <div class="navbar-collapse collapse" id="navigation">
        <!--padding-nav starts-->
        <div class="padding-nav">
          <!--nav navbar-nav navbar-left starts-->
          <ul class="nav navbar-nav navbar-left">
            <li class="active">
              <a href="index.php"> Home </a>
            </li>
            <li>
              <a href="shop.php"> Shop </a>
            </li>
            <li>
              <a href="checkout.php"> My Account </a>
            </li>

            <li>
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
          <button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-targe="#search">
            <span class="sr-only"> Toggle Search</span>
            <li class="fa fa-search"></li>
          </button>
        </div>
        <!--navbar-collapse collapse right ends-->
        <!--collapse clearfix starts-->
        <div class="collapse" id="search">
          <!--navbar form starts-->
          <form action="results.php" class="navbar-form" method="get">
            <!--input-group starts-->
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search" name="user_query" required>
              <button type="submit" value="Search" name="search" class="btn btn-primary">
                <i class="fa fa-search"></i>
              </button>
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

</body>

</html>