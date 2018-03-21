<?php
/* 
// INFO:
//
// Author: MD. Abiruzzaman Molla
// Project: E-Commerce Site

// TODO:
//
// [] add_cart problem
// [] lecture number 79
*/
// init db connection
$db = mysqli_connect("localhost","root","root","e_com");

//IP address retriving

function getRealIP(){
  switch(true){
    case (!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
    case (!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
    case (!empty($_SERVER['HTTP_X_FORWORDED_FOR'])) : return $_SERVER['HTTP_X_FORWORDED_FOR'];
    default : return $_SERVER['REMOTE_ADDR'];
  }
}

// add cart function 

function add_cart(){
  global $db;
  if(isset($_GET['add_cart'])){
    $ip_add = getRealIP();
    $p_id = $_GET['add_cart'];
    $product_qty = $_POST['product_qty'];
    $product_size = $_POST['product_size'];
    $check_product = "SELECT * FROM cart WHERE ip_add = '$ip_add' AND p_ip = '$p_id'";
    $run = mysqli_query($db, $check_product);
    if(mysqli_num_rows($run) > 0){
      echo "<script>alert('This Product is already added in cart')</script>";
      echo "<script>window.open('details.php?pro_id=$p_id','_self')</script>";
    } else {
      $query = "INSERT INTO cart(p_id,ip_add,qty,size) VALUES ('$p_id', '$ip_add', '$product_qty', '$product_size')";
      $run = mysqli_query($db, $query);
      echo "<script>window.open('details.php?pro_id={$p_id}','_self')</script>";
    }
  }
}

// items functions 

function items(){
  global $db;
  $ip_add = getRealIP();
  $get_items = "SELECT * FROM cart WHERE ip_add = '$ip_add'";
  $run = mysqli_query($db, $get_items);
  $count = mysqli_num_rows($run);
  echo $count;

}
// total price function

function totalPrice(){
  global $db;
  $ip_add = getRealIP();
  $total = 0;
  $select_cart = "SELECT * FROM cart WHERE ip_add = '$ip_add'";
  $run = mysqli_query($db, $select_cart);
  while($rec = mysqli_fetch_array($run)){
    $p_id = $rec['p_id'];
    $p_qty = $rec['qty'];
    $get_price = "SELECT * FROM products WHERE product_id = '$p_id'";
    $run = mysqli_query($db, $get_price);
    while($row = mysqli_fetch_array($run)){
      $sub_total = $row['product_price']*$p_qty;
      $total += $sub_total;
    }
  }
  echo "$".$total;

}


//get all product for index page
function getPro(){
    global $db;
    $get_product = "SELECT * FROM products ORDER BY 1 DESC LIMIT 0,8";
    $run_product = mysqli_query($db, $get_product);
    while($row = mysqli_fetch_array($run_product)){
        $pro_id = $row['product_id'];
        $pro_title = $row['product_title'];
        $pro_price = $row['product_price'];
        $pro_img1 = $row['product_img1'];
        echo "
        <div class='col-sm-4 col-sm-6 single'>
        <div class='product'>
          <a href='details.php?pro_id=$pro_id'>
            <img src='admin_area/product_images/$pro_img1' alt='' class='img-responsive'>
          </a>

          <div class='text'>
            <h3>
              <a href='details.php?pro_id=$pro_id'>$pro_title</a>
            </h3>
            <p class='price'>$ $pro_price</p>
            <p class='buttons'>
              <a href='details.php?pro_id=$pro_id' class='btn btn-default'>View details</a>
              <a href='cart.php?pro_id=$pro_id' class='btn btn-primary'>
                <i class='fa fa-shopping-cart'></i> Add to Cart
              </a>
            </p>
          </div>
        </div>
      </div>";
    }
}
//get product category list
function proCats(){
  global $db;
  $get_p_cats = "SELECT * FROM product_categories";
  $run_p_cats = mysqli_query($db ,$get_p_cats);
  while($row = mysqli_fetch_array($run_p_cats)){
    $p_cat_id = $row['p_cat_id'];
    $p_cat_title = $row['p_cat_title'];
    echo "<li><a href='shop.php?p_cat=$p_cat_id'> $p_cat_title</a></li>";
  }
}
//get category list
function getCats(){
  global $db;
  $get_cats = "SELECT * FROM categories";
  $run_cats = mysqli_query($db ,$get_cats);
  while($row = mysqli_fetch_array($run_cats)){
    $cat_id = $row['cat_id'];
    $cat_title = $row['cat_title'];
    echo "<li><a href='shop.php?cat=$cat_id'> $cat_title</a></li>";
  }
}
//get product from categories for shop.php
function getCatPro(){
  global $db;
  if (isset($_GET['p_cat'])) {
    $p_cat_id = $_GET['p_cat'];
    $get_p_cat = "SELECT * FROM product_categories WHERE p_cat_id = '$p_cat_id'";
    $run_p_cat = mysqli_query($db, $get_p_cat);
    $row = mysqli_fetch_array($run_p_cat);
    $p_cat_title = $row['p_cat_title'];
    $p_cat_desc = $row['p_cat_desc'];

    $get_product = "SELECT * FROM products WHERE p_cat_id = '$p_cat_id'";
    $run_product = mysqli_query($db, $get_product);
    $count = mysqli_num_rows($run_product);
    if ($count == 0) {
      echo "<div class='box'><h1>NO Product FOUND!</h1></div>";
    } else {
      echo "<div class='box'><h1> $p_cat_title </h1><p>$p_cat_desc</p></div>";
    }
    while($row_products = mysqli_fetch_array($run_product)){
      $pro_id = $row_products['product_id'];
      $pro_title = $row_products['product_title'];
      $pro_price = $row_products['product_price'];
      $pro_img1 = $row_products['product_img1'];
      echo "
      <div class='col-md-4 col-sm-6 center-responsive'>
        <div class='product'>
          <a href='details.php?pro_id=$pro_id'>
            <img src='admin_area/product_images/$pro_img1' alt='' class='img-responsive'>
          </a>
          <div class='text'>
            <h3>
              <a href='details.php?pro_id=$pro_id'>$pro_title</a>
            </h3>
            <p class='price'>$pro_price $</p>
            <p class='buttons'>
              <a href='details.php?pro_id=$pro_id' class='btn btn-default'>View details</a>
              <a href='details.php?pro_id=$pro_id' class='btn btn-primary'>
                <i class='fa fa-shopping-cart'></i> Add to cart</a>
            </p>
          </div>
        </div>
        </div>";

  }


  }
}
//get froduct for all categories
function getProCats(){
  global $db;
  if (isset($_GET['cat'])) {
    $cat_id = $_GET['cat'];
    $get_cat = "SELECT * FROM categories WHERE cat_id = '$cat_id'";
    $run_cat = mysqli_query($db, $get_cat);
    $row = mysqli_fetch_array($run_cat);
    $cat_title = $row['cat_title'];
    $cat_desc = $row['cat_desc'];

    $get_product = "SELECT * FROM products WHERE cat_id = '$cat_id'";
    $run_product = mysqli_query($db, $get_product);
    $count = mysqli_num_rows($run_product);
    if ($count == 0) {
      echo "<div class='box'><h1>NO Product FOUND!</h1></div>";
    } else {
      echo "<div class='box'><h1> $cat_title </h1><p>$cat_desc</p></div>";
    }
    while($row_products = mysqli_fetch_array($run_product)){
      $pro_id = $row_products['product_id'];
      $pro_title = $row_products['product_title'];
      $pro_price = $row_products['product_price'];
      $pro_img1 = $row_products['product_img1'];
      echo "
      <div class='col-md-4 col-sm-6 center-responsive'>
        <div class='product'>
          <a href='details.php?pro_id=$pro_id'>
            <img src='admin_area/product_images/$pro_img1' alt='' class='img-responsive'>
          </a>
          <div class='text'>
            <h3>
              <a href='details.php?pro_id=$pro_id'>$pro_title</a>
            </h3>
            <p class='price'>$pro_price $</p>
            <p class='buttons'>
              <a href='details.php?pro_id=$pro_id' class='btn btn-default'>View details</a>
              <a href='details.php?pro_id=$pro_id' class='btn btn-primary'>
                <i class='fa fa-shopping-cart'></i> Add to cart</a>
            </p>
          </div>
        </div>
        </div>";

  }


  }
}
?>
