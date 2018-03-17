<div id="footer">
  <!-- footer Starts -->
  <div class="container">
    <!-- container Starts -->

    <div class="row">
      <!-- row Starts -->

      <div class="col-md-3 col-sm-6">
        <!-- col-md-3 col-sm-6 Starts -->

        <h4>Pages</h4>

        <ul>
          <!-- ul Starts -->

          <li>
            <a href="cart.php">Shopping Cart</a>
          </li>

          <li>
            <a href="contact.php">Contact Us</a>
          </li>

          <li>
            <a href="shop.php">Shop</a>
          </li>

          <li>
            <a href='checkout.php'>My Account</a>

          </li>


        </ul>
        <!-- ul Ends -->

        <hr>

        <h4>User Section</h4>

        <ul>
          <!-- ul Starts -->

          <li>

            <a href='checkout.php'>Login</a>


          </li>

          <li>
            <a href="customer_register.php">Register</a>
          </li>

        </ul>
        <!-- ul Ends -->

        <hr class="hidden-md hidden-lg hidden-sm">

      </div>
      <!-- col-md-3 col-sm-6 Ends -->

      <div class="col-md-3 col-sm-6">
        <!-- col-md-3 col-sm-6 Starts -->

        <h4> Top Products Categories </h4>

        <ul>
          <!-- ul Starts -->
          <?php
            $get_p_cats = "SELECT * FROM product_categories";
            $run_p_cats = mysqli_query($con,$get_p_cats);
            while($row = mysqli_fetch_array($run_p_cats)){
              $p_cat_id = $row['p_cat_id'];
              $p_cat_title = $row['p_cat_title'];
              echo "<li><a href='shop.php?p_cat=$p_cat_id'> $p_cat_title</a></li>";
            }
          ?>
          
        </ul>
        <!-- ul Ends -->

        <hr class="hidden-md hidden-lg">

      </div>
      <!-- col-md-3 col-sm-6 Ends -->


      <div class="col-md-3 col-sm-6">
        <!-- col-md-3 col-sm-6 Starts -->

        <h4>Where to find us</h4>

        <p>
          <!-- p Starts -->
          <strong>Religious Coder</strong>
          <br>Feni Computer Institute
          <br>Feni
          <br>01832759943
          <br>abiruzzaman.molla@gmail.com
          <br>
          <strong>Abiruzzaman Molla</strong>

        </p>
        <!-- p Ends -->

        <a href="contact.php">Go to Contact us page</a>

        <hr class="hidden-md hidden-lg">

      </div>
      <!-- col-md-3 col-sm-6 Ends -->

      <div class="col-md-3 col-sm-6">
        <!-- col-md-3 col-sm-6 Starts -->

        <h4>Get the news</h4>

        <p class="text-muted">
          Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
        </p>

        <form action="" method="post" target="popupwindow" onsubmit="">
          <!-- form Starts -->

          <div class="input-group">
            <!-- input-group Starts -->

            <input type="text" class="form-control" name="email">

            <input type="hidden" value="computerfever" name="uri" />
            <input type="hidden" name="loc" value="en_US" />

            <span class="input-group-btn">
              <!-- input-group-btn Starts -->

              <input type="submit" value="subscribe" class="btn btn-default">

            </span>
            <!-- input-group-btn Ends -->

          </div>
          <!-- input-group Ends -->

        </form>
        <!-- form Ends -->

        <hr>

        <h4> Stay in touch </h4>

        <p class="social">
          <!-- social Starts -->

          <a href="#">
            <i class="fa fa-facebook"></i>
          </a>
          <a href="#">
            <i class="fa fa-twitter"></i>
          </a>
          <a href="#">
            <i class="fa fa-instagram"></i>
          </a>
          <a href="#">
            <i class="fa fa-google-plus"></i>
          </a>
          <a href="#">
            <i class="fa fa-envelope"></i>
          </a>

        </p>
        <!-- social Ends --->

      </div>
      <!-- col-md-3 col-sm-6 Ends -->

    </div>
    <!-- row Ends -->

  </div>
  <!-- container Ends -->
</div>
<!-- footer Ends -->

<div id="copyright">
  <!-- copyright Starts -->

  <div class="container">
    <!-- container Starts -->

    <div class="col-md-6">
      <!-- col-md-6 Starts -->

      <p class="pull-left"> &copy; 2018 Abiruzzaman Molla </p>

    </div>
    <!-- col-md-6 Ends -->

    <div class="col-md-6">
      <!-- col-md-6 Starts -->

      <p class="pull-right">

        Template by
        <a href="http://www.asliabir.xyz">asliabir</a>

      </p>


    </div>
    <!-- col-md-6 Ends -->

  </div>
  <!-- container Ends -->

</div>
<!-- copyright Ends -->