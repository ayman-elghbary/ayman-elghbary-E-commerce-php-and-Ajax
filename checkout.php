<?php
include 'design_bou/header.php';
?>
      <div class="container">
        <!-- HERO SECTION-->
        <section class="py-5 bg-light">
          <div class="container">
            <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
              <div class="col-lg-6">
                <h1 class="h2 text-uppercase mb-0">Checkout</h1>
              </div>
              <div class="col-lg-6 text-lg-right">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-lg-end mb-0 px-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="cart.php">Cart</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </section>
        <section class="py-5">
          <!-- BILLING ADDRESS-->
          <h2 class="h5 text-uppercase mb-4">Billing details</h2>
          <div class="row">
            <div class="col-lg-8">
              <form action="#">
                <div class="row">
                  <div class="col-lg-6 form-group">
                    <label class="text-small text-uppercase" for="firstName">First name</label>
                    <input class="form-control form-control-lg" id="firstName" type="text" placeholder="Enter your first name">
                  </div>
                  <div class="col-lg-6 form-group">
                    <label class="text-small text-uppercase" for="lastName">Last name</label>
                    <input class="form-control form-control-lg" id="lastName" type="text" placeholder="Enter your last name">
                  </div>
                  <div class="col-lg-6 form-group">
                    <label class="text-small text-uppercase" for="email">Email address</label>
                    <input class="form-control form-control-lg" id="email" type="email" placeholder="e.g. Jason@example.com">
                  </div>
                  <div class="col-lg-6 form-group">
                    <label class="text-small text-uppercase" for="phone">Phone number</label>
                    <input class="form-control form-control-lg" id="phone" type="tel" placeholder="e.g. +02 245354745">
                  </div>
                  <div class="col-lg-6 form-group">
                    <label class="text-small text-uppercase" for="company">Company name (optional)</label>
                    <input class="form-control form-control-lg" id="company" type="text" placeholder="Your company name">
                  </div>
                  <div class="col-lg-6 form-group">
                    <label class="text-small text-uppercase" for="country">Country</label>
                    <select class="selectpicker country" id="country" data-width="fit" data-style="form-control form-control-lg" data-title="Select your country"></select>
                  </div>
                  <div class="col-lg-12 form-group">
                    <label class="text-small text-uppercase" for="address">Address line 1</label>
                    <input class="form-control form-control-lg" id="address" type="text" placeholder="House number and street name">
                  </div>
                  <div class="col-lg-12 form-group">
                    <label class="text-small text-uppercase" for="address">Address line 2</label>
                    <input class="form-control form-control-lg" id="addressalt" type="text" placeholder="Apartment, Suite, Unit, etc (optional)">
                  </div>
                  <div class="col-lg-6 form-group">
                    <label class="text-small text-uppercase" for="city">Town/City</label>
                    <input class="form-control form-control-lg" id="city" type="text">
                  </div>
                  <div class="col-lg-6 form-group">
                    <label class="text-small text-uppercase" for="state">State/County</label>
                    <input class="form-control form-control-lg" id="state" type="text">
                  </div>
                  <div class="col-lg-6 form-group">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" id="alternateAddressCheckbox" type="checkbox">
                      <label class="custom-control-label text-small" for="alternateAddressCheckbox">Alternate billing address</label>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="row d-none" id="alternateAddress">
                      <div class="col-12 mt-4">
                        <h2 class="h4 text-uppercase mb-4">Alternative billing details</h2>
                      </div>
                      <div class="col-lg-6 form-group">
                        <label class="text-small text-uppercase" for="firstName2">First name</label>
                        <input class="form-control form-control-lg" id="firstName2" type="text" placeholder="Enter your first name">
                      </div>
                      <div class="col-lg-6 form-group">
                        <label class="text-small text-uppercase" for="lastName2">Last name</label>
                        <input class="form-control form-control-lg" id="lastName2" type="text" placeholder="Enter your last name">
                      </div>
                      <div class="col-lg-6 form-group">
                        <label class="text-small text-uppercase" for="email2">Email address</label>
                        <input class="form-control form-control-lg" id="email2" type="email" placeholder="e.g. Jason@example.com">
                      </div>
                      <div class="col-lg-6 form-group">
                        <label class="text-small text-uppercase" for="phone2">Phone number</label>
                        <input class="form-control form-control-lg" id="phone2" type="tel" placeholder="e.g. +02 245354745">
                      </div>
                      <div class="col-lg-6 form-group">
                        <label class="text-small text-uppercase" for="company2">Company name (optional)</label>
                        <input class="form-control form-control-lg" id="company2" type="text" placeholder="Your company name">
                      </div>
                      <div class="col-lg-6 form-group">
                        <label class="text-small text-uppercase" for="country2">Country</label>
                        <select class="selectpicker country" id="country2" data-width="fit" data-style="form-control form-control-lg" data-title="Select your country"></select>
                      </div>
                      <div class="col-lg-12 form-group">
                        <label class="text-small text-uppercase" for="address2">Address line 1</label>
                        <input class="form-control form-control-lg" id="address2" type="text" placeholder="House number and street name">
                      </div>
                      <div class="col-lg-12 form-group">
                        <label class="text-small text-uppercase" for="address2">Address line 2</label>
                        <input class="form-control form-control-lg" id="addressalt2" type="text" placeholder="Apartment, Suite, Unit, etc (optional)">
                      </div>
                      <div class="col-lg-6 form-group">
                        <label class="text-small text-uppercase" for="city3">Town/City</label>
                        <input class="form-control form-control-lg" id="city3" type="text">
                      </div>
                      <div class="col-lg-6 form-group">
                        <label class="text-small text-uppercase" for="state4">State/County</label>
                        <input class="form-control form-control-lg" id="state4" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12 form-group">
                    <button class="btn btn-dark" type="submit">Place order</button>
                  </div>
                </div>
              </form>
            </div>
            <!-- ORDER SUMMARY-->
            <div class="col-lg-4">
              <div class="card border-0 rounded-0 p-lg-4 bg-light">
                <div class="card-body">
                  
                  <h5 class="text-uppercase mb-4">Your order</h5>
                  <?php
                  if (isset($_SESSION['customer_id'])) {
                    # code...
                  
                  $user_id=$_SESSION['customer_id'];
                  $ProductPriceTotal=0;
                    $query=$conn->query("SELECT * FROM center where id=ANY(SELECT pro_id FROM cart where user_id = $user_id)");
                    foreach ($query as $key ) {
                      $productid=$key['id'];
                      $Pprice=$conn->query("SELECT quantity FROM cart where user_id = $user_id and pro_id=$productid");
                      foreach ($Pprice as $key1 ) {
                      
                     $ProductPriceTotal+= ($key['price'] * $key1['quantity']) ;
                      ?>
                      
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex align-items-center justify-content-between"><strong class="small font-weight-bold"><?= $key['name'] ?></strong><div class="text-muted small">(<?= $key1['quantity'] ?>)</div><span class="text-muted small"><?= $key['price'] ?></span></li>
                    <li class="border-bottom my-2"></li>

                    
                    <?php
                      }
                     }
                    }else {
                      echo '<li class="d-flex align-items-center justify-content-between"><strong class="small font-weight-bold">Empty</strong><span class="text-muted small"></span></li>';
                      
                    }
                  ?>
                  <li class="d-flex align-items-center justify-content-between"><strong class="small font-weight-bold">Total</strong><span class="text-muted small"><?= $ProductPriceTotal ?></span></li>

                  </ul>
                 
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <?php
    include 'design_bou/footer.php';
     ?>