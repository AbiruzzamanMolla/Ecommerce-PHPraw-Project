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
  <!-- container slider starts -->
<div class="container" id="slider">
  <!-- col md 12 starts -->
  <div class="col-md-12">
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
          <img src="admin_area/slides_images/1.jpg" alt="">
        </div>
        <div class="item">
          <img src="admin_area/slides_images/2.jpg" alt="">
        </div>
        <div class="item">
          <img src="admin_area/slides_images/3.jpg" alt="">
        </div>
        <div class="item">
          <img src="admin_area/slides_images/4.jpg" alt="">
        </div>
      </div>
 <!-- carousel-inner ends -->

      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><!-- left carousel-control Starts -->

        <span class="glyphicon glyphicon-chevron-left"> </span>

        <span class="sr-only"> Previous </span>

      </a><!-- left carousel-control Ends -->

      <a class="right carousel-control" href="#myCarousel" data-slide="next"><!-- right carousel-control Starts -->

        <span class="glyphicon glyphicon-chevron-right"> </span>

        <span class="sr-only"> Next </span>

      </a><!-- right carousel-control Ends -->

    </div>
  <!-- caurseel ends -->
  </div>
  <!-- col md 12 ends -->
</div>
  <!-- container slider ends -->

<div id="advantages"> <!-- advantages starts -->
  <div class="container"> <!-- container starts -->
    <div class="same-height-row"> <!-- same height row starts -->
      <div class="col-sm-4">
        <div class="box same-height">
          <div class="icon">
          <i class="fa fa-heart"></i>
          </div>
          <h3>
            <a href="#">WE LOVE OUR CUSTOMERS</a>
          </h3>
            <p>We are know to provide best possible service over</p>
        </div>
      </div>
    <div class="col-sm-4">
      <div class="box seme-height">
        <div class="icon">
          <i class="fa fa-tags"></i>
          </div>
          <h3>
            <a href="#">WE LOVE OUR CUSTOMERS</a>
          </h3>
            <p>We are know to provide best possible service over</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="box seme-height">
        <div class="icon">
          <i class="fa fa-thumbs-up"></i>
          </div>
          <h3>
            <a href="#">WE LOVE OUR CUSTOMERS</a>
          </h3>
            <p>We are know to provide best possible service over</p>
      </div>
    </div>
    </div> <!-- same height row ends -->
  </div>  <!-- container ends -->
</div> <!-- advantages ends -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>