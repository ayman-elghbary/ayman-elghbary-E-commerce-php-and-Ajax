<?php
$current="cart";
include 'design_bou/header.php';
?>
      <div class="container">
        <!-- HERO SECTION-->
        <section class="py-5 bg-light">
          <div class="container">
            <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
              <div class="col-lg-6">
                <h1 class="h2 text-uppercase mb-0">Cart  <spin><?php if (!isset($_SESSION['customer_id'])) {
                  echo '</br>(you should login  first to add in cart)';
                }    ?></spin></h1>
              </div>
              <div class="col-lg-6 text-lg-right">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-lg-end mb-0 px-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Cart</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </section>
        <section  class="py-5">
          <h2 class="h5 text-uppercase mb-4">Shopping cart</h2>
          <div class="row">
            <div class="col-lg-8 mb-4 mb-lg-0">
              <!-- CART TABLE-->
              <div class="table-responsive mb-4">
                <table  class="table">
                  <thead class="bg-light">
                    <tr>
                      <th class="border-0" scope="col"> <strong class="text-small text-uppercase">Product</strong></th>
                      <th class="border-0" scope="col"> <strong class="text-small text-uppercase">Price</strong></th>
                      <th class="border-0" scope="col"> <strong class="text-small text-uppercase">Quantity</strong></th>
                      <th class="border-0" scope="col"> <strong class="text-small text-uppercase">Total</strong></th>
                      <th class="border-0" scope="col"> </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    
                     if (isset($_SESSION['customer_id'])) {
                    $user_id=$_SESSION['customer_id'];
                    $ProductPriceTotal=0;
                    $productcart=$conn->query("SELECT * FROM center where id=ANY(SELECT pro_id FROM cart where user_id = $user_id)");
                    foreach ($productcart as $product) {
                      $productid=$product['id'];
                      $coverid=$product['cover'];
                     $arraycover=explode(",",$coverid);
                      $Pprice=$conn->query("SELECT quantity FROM cart where user_id = $user_id and pro_id=$productid");
                      foreach ($Pprice as $key ) {
                      
                     $ProductPriceTotal+= ($product['price'] * $key['quantity']) ;
                    //  $ProductPriceTotal+= ($product['price'] * (int)$product['quantity']) ;
                     ?>
                    
                    <tr>

                      <th class="pl-0 border-light" scope="row">
                        <div class="media align-items-center"><a class="reset-anchor d-block animsition-link" href="detail.php?id=<?= $product['id'] ?>"><img src="admin/incloude/Image/<?= $arraycover[0] ?>" alt="..." width="70"/></a>
                          <div class="media-body ml-3"><strong class="h6"><a class="reset-anchor animsition-link" href="detail.php?id=<?= $product['id'] ?>"><?= $product['name'] ?></a></strong></div>
                        </div>
                      </th>
                      <td class="align-middle border-light">
                        <p class="mb-0 small price"><?= $product['price'] ?></p>
                      </td>
                      <td class="align-middle border-light">
                        <div class="border d-flex align-items-center justify-content-between px-3"><span class="small text-uppercase text-gray headings-font-family">Quantity</span>
                          <div class="quantity">
                            <?php
                            $sqlquantity=$conn->query("SELECT * FROM cart where user_id=$user_id && pro_id=$productid");
                            $quantity2=$sqlquantity->fetch_assoc();
                            ?>
                            <input class="userr" type="hidden" value="<?= $user_id ?>">
                            <button class="dec-btn p-0"><i class="fas fa-caret-left incresleft" data-id = "<?= $product['id'] ?>"></i></button>
                            <input class="form-control form-control-sm border-0 shadow-0 p-0 quantity1" type="text" value="<?= $quantity2['quantity'] ?>"/>
                            <button class="inc-btn p-0"><i class="fas fa-caret-right incresright" data-id = "<?= $product['id'] ?>"></i></button>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle border-light">
                        <p class="mb-0 small totall"><?= $product['price']*$quantity2['quantity'] ?></p>
                      </td>
                      <td class="align-middle border-light remo" data-id = "<?= $product['id'] ?>" ><a class="reset-anchor" href="#"><i class="fas fa-trash-alt larg text-muted "></i></a></td>
                    </tr>
                    <?php
                    }
                    }
                             }
                    ?>
                  </tbody>
                </table>
              </div>
              <!-- CART NAV-->
              <div class="bg-light px-4 py-3">
                <div class="row align-items-center text-center">
                  <div class="col-md-6 mb-3 mb-md-0 text-md-left"><a class="btn btn-link p-0 text-dark btn-sm" href="shop.php"><i class="fas fa-long-arrow-alt-left mr-2"> </i>Continue shopping</a></div>
                  <div class="col-md-6 text-md-right"><a class="btn btn-outline-dark btn-sm" href="checkout.php">Procceed to checkout<i class="fas fa-long-arrow-alt-right ml-2"></i></a></div>
                </div>
              </div>
            </div>
            <!-- ORDER TOTAL-->
            <!-- <div class="col-lg-4">
              <div class="card border-0 rounded-0 p-lg-4 bg-light">
                <div class="card-body">
                  <h5 class="text-uppercase mb-4">Cart total</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex align-items-center justify-content-between" ><strong class="text-uppercase small font-weight-bold">Subtotal</strong><span><?= $ProductPriceTotal ?></span></li>
                    <li class="border-bottom my-2"></li>
                    <li class="d-flex align-items-center justify-content-between mb-4 " ><strong class="text-uppercase small font-weight-bold">Total</strong></li><div class="totalPrice" ></div>
                    <li>
                      <form action="#">
                        <div class="form-group mb-0">
                          <input class="form-control" type="text" placeholder="Enter your coupon">
                          <button class="btn btn-dark btn-sm btn-block" type="submit"> <i class="fas fa-gift mr-2"></i>Apply coupon</button>
                        </div>
                      </form>
                    </li>
                  </ul>
                </div>
              </div>
            </div> -->
          </div>
        </section>
      </div>
      <?php
    include 'design_bou/footer.php';
     ?>