<?php
session_start();
include 'admin/function/connect.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Boutique | Ecommerce bootstrap template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Lightbox-->
    <link rel="stylesheet" href="vendor/lightbox2/css/lightbox.min.css">
    <!-- Range slider-->
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
    <!-- Bootstrap select-->
    <link rel="stylesheet" href="vendor/bootstrap-select/css/bootstrap-select.min.css">
    <!-- Owl Carousel-->
    <link rel="stylesheet" href="vendor/owl.carousel2/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel2/assets/owl.theme.default.css">
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page-holder">
      <!-- navbar-->
      <header class="header bg-white">
        <div class="container px-0 px-lg-3">
          <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0"><a class="navbar-brand" href="index.php"><span class="font-weight-bold text-uppercase text-dark">Get The Best</span></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <!-- Link--><a class="nav-link <?= $current == 'home'? 'active': '' ?>" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <!-- Link--><a class="nav-link <?= $current == 'shop'? 'active': '' ?>" href="shop.php">Shop</a>
                </li>
                <!-- <li class="nav-item"> -->
                  <!-- Link<a class="nav-link <?= $current == 'detail'? 'active': '' ?>" href="detail.php">Product detail</a> -->
                <!-- </li> -->
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="pagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                  <div class="dropdown-menu mt-3" aria-labelledby="pagesDropdown"><a class="dropdown-item border-0 transition-link" href="index.php">Homepage</a><a class="dropdown-item border-0 transition-link" href="shop.php">Category</a><a class="dropdown-item border-0 transition-link" href="detail.php">Product detail</a><a class="dropdown-item border-0 transition-link" href="cart.php">Shopping cart</a><a class="dropdown-item border-0 transition-link" href="checkout.php">Checkout</a></div>
                </li>
              </ul>
              <ul class="navbar-nav ml-auto">               
                <li class="nav-item favouritt"><a class="nav-link <?= $current == 'cart'? 'active': '' ?>" href="cart.php"> <i class="fas fa-dolly-flatbed mr-1 text-gray"></i>Cart<small class="text-gray">
                  (<?php 
                  if (isset($_SESSION['customer_id'])) {
                    
                  
                $user_id=$_SESSION['customer_id'];
                $user=$conn->query("SELECT * FROM cart where user_id = $user_id");
                $row =$user->num_rows;
                echo $row ;
                }else {
                  echo 0;
                }
                ?>)</small></a></li>
                <li class="nav-item"><a class="nav-link <?= $current == 'favourite'? 'active': '' ?>" href="favourite.php"> <i class="far fa-heart mr-1"></i><small class="text-gray"> 
                  (<?php 
                  if (isset($_SESSION['customer_id'])) {
                $user_id=$_SESSION['customer_id'];
                $favourite=$conn->query("SELECT * FROM favourite where user_id = $user_id");
                $favouritenum =$favourite->num_rows;
                echo $favouritenum ;
                }else {
                  echo 0;
                }
                ?>)</small></a></li>
                <?php
                if (isset($_SESSION['login_customer'])) {

                  echo '<li class="nav-item"><a class="nav-link" href="function_bou/logout.php"> <i class="fas fa-user-alt mr-1 text-gray"></i>Logout</a></li>';
                } else {
                  echo '<li class="nav-item"><a class="nav-link" href="l.php"> <i class="fas fa-user-alt mr-1 text-gray"></i>Login</a></li>';
                }
                
                ?>
                
              </ul>
            </div>
          </nav>
        </div>
      </header>
      <!--  Modal -->
      <?php
            
            $query=$conn ->query("SELECT * FROM center  ORDER BY rate LIMIT 4");
            foreach ($query as $product ) {
              $imgn=$product['cover'];
              $array=explode(",",$imgn);
              
              ?>
      <div class="modal fade" id="productView" data-id = "<?= $product['id'] ?>"  tabindex="-1" role="dialog" aria-hidden="true">
        
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-body p-0">
              <div class="row align-items-stretch">
              <div class="col-lg-6 p-lg-0"><img style="width:400px;height:150px" class="product-view d-block h-100 bg-cover bg-center coverheader" src="img/product-5.jpg"  data-lightbox="productview" title="Red digital smartwatch">

                <!-- <div class="col-lg-6 p-lg-0"><a class="product-view d-block h-100 bg-cover bg-center coverheader" style="background: url(img/product-5.jpg);" href="#" data-lightbox="productview" title="Red digital smartwatch"></a> -->
                <!-- <a class="d-none" href="#" title="Red digital smartwatch" data-lightbox="productview"></a><a class="d-none" href="#" title="Red digital smartwatch" data-lightbox="productview"></a> -->
              </div>
                <div class="col-lg-6">
                  <button class="close p-4" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <div class="p-5 my-md-4">
                    <ul class="list-inline mb-2">
                      <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                      <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                      <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                      <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                      <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                    </ul>
                    <h2 class="h4 nameheader"><?= $product['name'] ?></h2>
                    <p class="text-muted priceheader">price</p>
                    <p class="text-small mb-4 descriptionheader descriptionheader">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut ullamcorper leo, eget euismod orci. Cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. Vestibulum ultricies aliquam convallis.</p>
                    <div class="row align-items-stretch mb-4">
                      <div class="col-sm-7 pr-sm-0">
                        <!-- <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quantity</span>
                          <div class="quantity">
                            <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                            <input class="form-control border-0 shadow-0 p-0" type="text" value="1">
                            <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                          </div>
                        </div> -->
                      </div>
                      <div class="col-sm-5 pl-sm-0"><a class="btn btn-dark btn-sm btn-block h-100 d-flex align-items-center justify-content-center px-0" href="cart.php">Add to cart</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
            }
            ?>