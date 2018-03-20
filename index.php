<?php include "includes/header.php"; ?>
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
        <?php
        $get_slides = "SELECT * FROM slider LIMIT 0,1";
        $run_slides = mysqli_query($con, $get_slides);
        while($row_slides = mysqli_fetch_array($run_slides)){
          $slides_name = $row_slides['slide_name'];
          $slides_image = $row_slides['slide_image'];

          echo "<div class='item active'><img src='admin_area/slides_images/$slides_image' alt='$slides_name'></div>";
        }
        ?>
        <?php
        $get_slides = "SELECT * FROM slider LIMIT 1,4";
        $run_slides = mysqli_query($con, $get_slides);
        while($row_slides = mysqli_fetch_array($run_slides)){
          $slides_name = $row_slides['slide_name'];
          $slides_image = $row_slides['slide_image'];

          echo "<div class='item'><img src='admin_area/slides_images/$slides_image' alt='$slides_name'></div>";
        }
        ?>
        </div>
        <!-- carousel-inner ends -->

        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <!-- left carousel-control Starts -->

          <span class="glyphicon glyphicon-chevron-left"> </span>

          <span class="sr-only"> Previous </span>

        </a>
        <!-- left carousel-control Ends -->

        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <!-- right carousel-control Starts -->

          <span class="glyphicon glyphicon-chevron-right"> </span>

          <span class="sr-only"> Next </span>

        </a>
        <!-- right carousel-control Ends -->

      </div>
      <!-- caurseel ends -->
    </div>
    <!-- col-md-12 ends -->
  </div>
  <!-- container slider ends -->

  <div id="advantages">
    <!-- advantages starts -->
    <div class="container">
      <!-- container starts -->
      <div class="same-height-row">
        <!-- same height row starts -->
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
      </div>
      <!-- same height row ends -->
    </div>
    <!-- container ends -->
  </div>
  <!-- advantages ends -->

  <div id="hot">
    <!--hot start-->
    <div class="box">
      <div class="container">
        <div class="col-md-12">
          <h2>Latest this week</h2>
        </div>
      </div>
    </div>
  </div>
  <!--hot ends-->

  <div id="content" class="container">
    <div class="row">
    <?php getPro(); ?>
    </div>
  </div>
  <?php include "includes/footer.php"; ?>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>
