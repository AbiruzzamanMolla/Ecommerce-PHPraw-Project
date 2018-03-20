<?php include "includes/header.php"; ?>
  <div id="content">
    <div class="container">
      <div class="col-md-12">
        <ul class="breadcrumb">
          <li>
            <a href="index.php">Home</a>
          </li>
          <li>
            Shop
          </li>
        </ul>
      </div>
      <div class="col-md-3">
        <?php include "includes/sidebar.php"; ?>
      </div>
      <div class="col-md-9">
      <?php
      if(!isset($_GET['p_cat'])){
        if(!isset($_GET['cat'])){
          echo "<div class='box'>
          <h1> Shop </h1>
          <p>
            Et culpa amet esse amet ipsum non fugiat amet sint ipsum pariatur proident sunt. Officia laboris Lorem voluptate eiusmod
            laborum minim cillum. Ullamco esse est id dolor eiusmod nisi id sint fugiat sit mollit adipisicing exercitation.</p>
        </div>";
          } }?>
        <!-- Box ends -->
        <!-- row starts -->
        <div class="row"> 
        <?php
        if(!isset($_GET['p_cat'])){
          if(!isset($_GET['cat'])){
            $per_page = 6;
            if(isset($_GET['page'])){
              $page = $_GET['page'];
            } else {
              $page = 1;
            }
            $start_from = ($page-1) * $per_page;
            $get_product = "SELECT * FROM products order by 1 DESC LIMIT $start_from,$per_page";
            $run_product = mysqli_query($con, $get_product);
            while($row_products = mysqli_fetch_array($run_product)){
              $pro_id = $row_products['product_id'];
              $pro_title = $row_products['product_title'];
              $pro_price = $row_products['product_price'];
              $pro_img1 = $row_products['product_img1'];
              ?>
          <div class="col-md-4 col-sm-6 center-responsive">
            <div class="product">
              <a href="details.php?pro_is=<?php echo $pro_id;?>">
                <img src="admin_area/product_images/<?php echo $pro_img1;?>" alt="" class="img-responsive">
              </a>
              <div class="text">
                <h3>
                  <a href="details.php?pro_is=<?php echo $pro_id;?>"><?php echo $pro_title;?></a>
                </h3>
                <p class="price"><?php echo $pro_price;?>$</p>
                <p class="buttons">
                  <a href="details.php?pro_id=<?php echo $pro_id;?>" class="btn btn-default">View details</a>
                  <a href="details.php?pro_id=<?php echo $pro_id;?>" class="btn btn-primary">
                    <i class="fa fa-shopping-cart"></i> Add to cart</a>
                </p>
              </div>
            </div>
            </div>
            <?php   
                      }
?>
          
         </div>
        <!-- row ends -->
        <center>
          <ul class="pagination">
            <?php
              $query = "SELECT * FROM products";
              $result = mysqli_query($con, $query);
              $total_row = mysqli_num_rows($result);
              $total_pages = ceil($total_row / $per_page);
              echo "<li><a href='shop.php?page=1'>".'First Page'."</a></li>";
                for($i=1;$i<=$total_pages;$i++){
                  echo "<li><a href='shop.php?page=$i'>".$i."</a></li>";
                }
              echo "<li><a href='shop.php?page=$total_pages'>".'Last Page'."</a></li>";
            }
            } 
            ?>
          </ul>
        </center>
          <?php getCatPro(); ?>
          <?php getProCats(); ?>
      </div>

    </div>
  </div>


  <?php include "includes/footer.php"; ?>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>