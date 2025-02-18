<!DOCTYPE html>
<html lang="en">

<head>
  <style>
 .typeSer{
  display: none;
 }

 .showList{
  display: block;
 }
 </style>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="" />
    <title><?php
    include ("linkToDB.php");
    $data = mysqli_query($conn,"SELECT * FROM header");
    $row = mysqli_fetch_assoc($data);
     echo $row['url'];
    ?></title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/<?php
    include ("linkToDB.php");
    $data = mysqli_query($conn,"SELECT * FROM header");
    $row = mysqli_fetch_assoc($data);
     echo $row['urlLogo'];
    ?>" />

    <!--********************************** 
        all css files 
    *************************************-->

    <!--*************************************************** 
       fontawesome,bootstrap,plugins and main style css
     ***************************************************-->

    <!-- cdn links -->

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

    <link rel="stylesheet" href="assets/css/fontawesome.min.css" />
    <link rel="stylesheet" href="assets/css/ionicons.min.css" />
    <link rel="stylesheet" href="assets/css/simple-line-icons.css" />
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/plugins.css" />
    <link rel="stylesheet" href="assets/css/style.css" />

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->

    <!--**************************** 
         Minified  css 
    ****************************-->

    <!--*********************************************** 
       vendor min css,plugins min css,style min css
     ***********************************************-->

    <!-- <link rel="stylesheet" href="assets/css/vendor/vendor.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css" />
    <link rel="stylesheet" href="assets/css/style.min.css" /> -->

</head>

<body>
    

<!-- offcanvas-overlay start -->
<div class="offcanvas-overlay"></div>
<!-- offcanvas-overlay end -->

<!-- offcanvas-mobile-menu start -->
<div id="offcanvas-mobile-menu" class="offcanvas theme1 offcanvas-mobile-menu">
  <div class="inner">
    <div class="border-bottom mb-4 pb-4 text-right">
      <button class="offcanvas-close">×</button>
    </div>
    <div class="offcanvas-head mb-4">
        <nav class="offcanvas-top-nav">
          <ul class="d-flex justify-content-center align-items-center">
            <li class="mx-3">
              <a href="compare.php"
                ><i class="ion-ios-loop-strong"></i> Wishlist <span>(0)</span>
              </a>
            </li>
            <li class="mx-3">
              <a href="wishlist.php">
                <i class="ion-android-favorite-outline"> Favorite Shop</i> 
                <span>(0)</span></a
              >
            </li>
          </ul>
        </nav>
      </div>
    <nav class="offcanvas-menu">
      <ul>
        <li>
          <a href="index.php"><span class="menu-text">Home</span></a>
        </li>
        <li>
          <a href="#"><span class="menu-text">Shop</span></a>
          <ul class="offcanvas-submenu">

            <li>
              <a href="#"><span class="menu-text">Clothing</span></a>
              <ul class="offcanvas-submenu">
                <li>
                  <a href="clothFem.php">Female</a>
                </li>
                <li>
                  <a href="clothMal.php">Male</a>
                </li>
                <li>
                  <a href="clothKid.php"
                    >Kids</a
                  >
                </li>
                <li>
                  <a href="cloth.php #all"
                    >All</a
                  >
                </li>
              </ul>
            </li>

            <li>
                <a href="#"><span class="menu-text">Shose</span></a>
                <ul class="offcanvas-submenu">
                  <li>
                    <a href="shoesFem.php">Female</a>
                  </li>
                  <li>
                    <a href="shoesMal.php">Male</a>
                  </li>
                  <li>
                    <a href="shoesKid.php"
                      >Kids</a
                    >
                  </li>
                  <li>
                    <a href="shoes.php"
                      >All</a
                    >
                  </li>
                </ul>
              </li>

              <li>
                <a href="#"><span class="menu-text">Bages</span></a>
                <ul class="offcanvas-submenu">
                  <li>
                    <a href="bagsFem.php">Female</a>
                  </li>
                  <li>
                    <a href="bagsMal.php">Male</a>
                  </li>
                  <li>
                    <a href="bagsKid.php"
                      >Kids</a
                    >
                  </li>
                  <li>
                    <a href="bags.php"
                      >All</a
                    >
                  </li>
                </ul>
              </li>

            <li>
              <a href="#"><span class="menu-text">Accessories</span></a>
              <ul class="offcanvas-submenu">
                <li><a href="accessHand.php">Hand Made</a></li>
                <li><a href="access.php ">All</a></li>
              </ul>
            </li>


            <li>
                <a href="makeup.php"><span class="menu-text">Makeup</span></a>
              </li>

              <li>
                <a href="#"><span class="menu-text">Perfumes</span></a>
                <ul class="offcanvas-submenu">
                  <li>
                    <a href="perFem.php">Female</a>
                  </li>
                  <li>
                    <a href="perMal.php">Male</a>
                  </li>
                  <li>
                    <a href="perKid.php"
                      >Kids</a
                    >
                  </li>
                  <li>
                    <a href="perfum.php"
                      >All</a
                    >
                  </li>
                </ul>
              </li>

              <li>
                <a href="#"><span class="menu-text">Gamming</span></a>
                <ul class="offcanvas-submenu">
                  <li class="mega-menu-title">
                    <a href="#">Gamming</a>
                  </li>
                  <li>
                    <a href="gameAcc.php"
                      >Gamming Accessories</a
                    >
                  </li>
                  <li>
                    <a href="gameFig.php"
                      >Figurines</a
                    >
                  </li>
                  <li>
                    <a href="game.php "
                      >All</a
                    >
                  </li>
                </ul>
              </li>

              <li>
                <a href="phoneAcc.php"><span class="menu-text">Phone Accessories</span></a>
              </li>

              <li>
                <a href="handmade.php"><span class="menu-text">Hand Made</span></a>
              </li>

              <li>
                <a href="arts.php"><span class="menu-text">Arts</span></a>
              </li>

          </ul>
        </li>
        <li>
          <a href="stores.php"><span class="menu-text">Stores</span></a>
        </li>
        
        <li><a href="contact.php">Contact Us</a></li>
      </ul>
    </nav>
    <div class="offcanvas-social py-30">
      <ul>
        <li>
          <a href="#"><i class="icon-social-facebook"></i></a>
        </li>
        <li>
          <a href="#"><i class="icon-social-twitter"></i></a>
        </li>
        <li>
          <a href="#"><i class="icon-social-instagram"></i></a>
        </li>
       
      </ul>
    </div>
  </div>
</div>
<!-- offcanvas-mobile-menu end -->


<!-- OffCanvas Wishlist Start -->
<div id="offcanvas-wishlist" class="offcanvas offcanvas-wishlist theme1">
  <div class="inner">
    <div class="head d-flex flex-wrap justify-content-between">
      <span class="title">Wishlist</span>
      <button class="offcanvas-close">×</button>
    </div>
    <ul class="minicart-product-list">
    <?php
        include ("linkToDB.php");
        $data = mysqli_query($conn,"SELECT * FROM Users WHERE email='jenan@gmail.com'");
        
        $coun = mysqli_num_rows($data);
        for($i=1;$i<=$coun;$i++){
       
        
          
                $row2 = mysqli_fetch_assoc($data);
                 
                 $str = "User" . $row2['id'];
                
                    $data2 = mysqli_query($conn,"SELECT * FROM $str");
       while($row = mysqli_fetch_assoc($data2)){
        if($row['type'] == "wish"){
                     echo"  <li>
                     <a href='' class='image'
                       ><img src='assets/img/$row[proImg]' alt='Cart product Image'
                     /></a>
                     <div class='content'>
                       <a href='' class='title'>$row[proName]</a>
                       <span class='quantity-price'
                         >$row[qty] x <span class='amount'>$row[price]</span></span
                       >
                     </div>
                   </li>";
}}}
        ?>
     
      
      
    </ul>
    <a
      href="compare.php"
      class="btn theme--btn1 btn--lg text-uppercase d-block d-sm-inline-block mt-30"
      >view wishlist</a
    >
  </div>
</div>
<!-- OffCanvas Wishlist End -->

<!-- OffCanvas Cart Start -->
<div id="offcanvas-cart" class="offcanvas offcanvas-cart theme1">
  <div class="inner">
    <div class="head d-flex flex-wrap justify-content-between">
      <span class="title">Cart</span>
      <button class="offcanvas-close">×</button>
    </div>
    <ul class="minicart-product-list">
    <?php
        include ("linkToDB.php");
        $data = mysqli_query($conn,"SELECT * FROM Users WHERE email='jenan@gmail.com'");
        
        $coun = mysqli_num_rows($data);
        for($i=1;$i<=$coun;$i++){
       
        
          
                $row2 = mysqli_fetch_assoc($data);
                 
                 $str = "User" . $row2['id'];
                
                    $data2 = mysqli_query($conn,"SELECT * FROM $str");
       while($row = mysqli_fetch_assoc($data2)){
        if($row['type'] == "order"){
                     echo"  <li>
                     <a href='' class='image'
                       ><img src='assets/img/$row[proImg]' alt='Cart product Image'
                     /></a>
                     <div class='content'>
                       <a href='' class='title'>$row[proName]</a>
                       <span class='quantity-price'
                         >$row[qty] x <span class='amount'>$row[price]</span></span
                       >
                     </div>
                   </li>";
}}}
        ?>
    </ul>
    <div class="sub-total d-flex flex-wrap justify-content-between">
      <strong>Subtotal :</strong>
      <span class="amount"><?php
        include ("linkToDB.php");
        $data = mysqli_query($conn,"SELECT * FROM Users WHERE email='jenan@gmail.com'");
        
        $coun = mysqli_num_rows($data);
        for($i=1;$i<=$coun;$i++){
       
        
          
                $row2 = mysqli_fetch_assoc($data);
                 
                 $str = "User" . $row2['id'];
                
                    $data2 = mysqli_query($conn,"SELECT * FROM $str");
       while($row = mysqli_fetch_assoc($data2)){
        if($row['type'] == "order"){
                    echo $row['tot'];
}}}
        ?></span>
    </div>
    <a
      href="cart.php"
      class="btn theme--btn1 btn--lg text-uppercase d-block d-sm-inline-block mr-sm-2"
      >view cart</a
    >
    <a
      href="checkout.php"
      class="btn theme--btn1 btn--lg text-uppercase d-block d-sm-inline-block mt-4 mt-sm-0"
      >checkout</a
    >
    <p class="minicart-message">Free Shipping on All Orders Over 50JD!</p>
  </div>
</div>
<!-- OffCanvas Cart End -->

<!-- offcanvas-setting Start (account) -->
<div id="offcanvas-setting" class="offcanvas offcanvas-cart theme1">
  <div class="inner">
    <div class="head d-flex justify-content-between">
      <span class="title">Setting</span>
      <button class="offcanvas-close">×</button>
    </div>
    <div class="content_setting">
      <div class="info_setting">
        <h3 class="title_setting">My account</h3>
        <ul>
          <li>
            <a href="myaccount.php">My account</a>
          </li>
          <li>
            <a href="checkout.php">Checkout</a>
          </li>
          <li>
            <a href="">Logout</a>
          </li>
        </ul>
      </div>

      <div class="info_setting">
        <h3 class="title_setting">Language</h3>
        <ul>
          <li class="active">
            <a href="#">
              <img
                src="http://demo.posthemes.com/pos_zonan/img/l/1.jpg"
                alt="img"
              />
              English
            </a>
          </li>
          <li>
            <a href="#">
              <img
                src="assets/img/arbic.jpg"
                alt="img" width="16px"
              />Arabic
            </a>
          </li>
        </ul>
      </div>
      <div class="info_setting">
        <div class="title_setting">Currency :</div>
        <ul>
          
          <li class="active"><img src="assets/img/jordan.png" alt="img"/><a href="#"> JD</a></li>
        </ul>
      </div>
      <div class="info_setting">
        <div class="title_setting">Have a store?</div>
        <ul>
          <li class="active"><a href="index.php"><b style="color:blue">join us</b></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!--offcanvas-setting End -->

<!-- offcanvas-setting Start (no account) -->
<div id="offcanvasNo-setting" class="offcanvas offcanvas-cart theme1">
  <div class="inner">
    <div class="head d-flex justify-content-between">
      <span class="title">Setting</span>
      <button class="offcanvas-close">×</button>
    </div>
    <div class="content_setting">
      <div class="info_setting">
        <h3 class="title_setting">My account</h3>
        <ul>
          <li>
            <a href="login.php">Login/Sign-up</a>
          </li>
          <li>
            <a href="checkout.php">Checkout</a>
          </li>
        </ul>
      </div>

      <div class="info_setting">
        <h3 class="title_setting">Language</h3>
        <ul>
          <li class="active">
            <a href="#">
              <img
                src="http://demo.posthemes.com/pos_zonan/img/l/1.jpg"
                alt="img"
              />
              English
            </a>
          </li>
          <li>
            <a href="#">
              <img
                src="assets/img/arbic.jpg"
                alt="img" width="16px"
              />Arabic
            </a>
          </li>
        </ul>
      </div>
      <div class="info_setting">
        <div class="title_setting">Currency :</div>
        <ul>
          
          <li class="active"><img
                src="assets/img/jordan.png"
                alt="img" 
              /><a href="#"> JD</a></li>
        </ul>
      </div>
      <div class="info_setting">
        <div class="title_setting">Have a store?</div>
        <ul>
          <li class="active"><a href=""><b style="color:blue">join us</b></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!--offcanvas-setting End -->


<!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme1 breadcrumb-bg1">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="breadcrumb-title text-center my-20">
          <h2 class="title text-dark text-capitalize">login</h2>
        </div>
      </div>
      <div class="col-12">
                <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
                    <li class="breadcrumb-item"><a href="indexNoLog.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Login</li>
                </ol>
            </div>
      
    </div>
  </div>
</nav>
<!-- breadcrumb-section end -->

<!-- product tab start -->
<div class="my-account pb-70">
    <div class="container grid-wraper">
        <div class="row">
        <div class="col-12">
                <h3 class="title text-capitalize pb-30"> Log in to your account</h3>
                <h6 style="color: red;"> Incorrect Username or Password</h6><br>
                <form method="post" action="logVal.php" class="log-in-form">
                    <div class="form-group row">
                        <label for="staticEmail" class="col-md-3 col-form-label">User name / Phone number</label>
                        <div class="col-md-6">
                            <input type="text" name="username" class="form-control" id="staticEmail" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-md-3 col-form-label">Password </label>
                        <div class="col-md-6">
                            <div class="input-group mb-2 mr-sm-2">
                                <input name="pass" type="password" maxlength="8" class="form-control" id="inputPassword" required>
                            </div>

                        </div>

                    </div>
                    
                    <div class="form-group row pb-3 text-center">
                        <div class="col-md-6 offset-md-3">
                            <div class="login-form-links">
                                <a href="#" class="for-get">Forgot your password?</a>
                                
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                            <div class="col-12">
                                <div class="sign-btn text-center">
                                    <input type="submit" name="add" value="Login" class="btn theme-btn--dark1 btn--md">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row pb-3 text-center">
                      <div class="col-md-6 offset-md-3">
                          <div class="login-form-links">
                              <span class="for-get">Using Facebook account</span>
                              <div class="sign-btn">
                                  <a href="#"><i class="fab fa-facebook"></i></a>
                              </div>
                          </div>
                      </div>
                  </div>

                </form>


                  <div class="form-group row text-center mb-0">
                        <div class="col-12">
                            <div class="border-top">
                                <a href="register.php" class="no-account">No account? Create one here</a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<!-- product tab end -->

  
 
  
  <!-- search-box and overlay start -->
  <div class="overlay">
    <div class="scale"></div>
    <form class="search-box" action="#">
      <div>
      <div onclick="list()" style="color:#fff;" class="selectType">
        <img src="assets/img/dots.png">
      </div>
      <ul class="typeSer" id="type" style="margin-left:2%; ">
        <li style="color: #fff;" >Search About</li>
        <li onclick="list()">Store</li>
        <li onclick="list()">Product</li>
        <li onclick="list()">Store & Product</li>
      </ul>
    </div>
  
    <div>
      <input type="text" name="search" placeholder="Search products..." />
      <button id="close" type="submit" style="margin-top: 2%;">
        <i class="ion-ios-search-strong"></i>
      </button>
    </div>
  
    </form>
    <button class="close"><i class="ion-android-close"></i></button>
  </div>
  <!-- search-box and overlay end -->



    <!--*********************** 
        all js files
     ***********************-->

    <!--****************************************************** 
        jquery,modernizr ,poppe,bootstrap,plugins and main js
     ******************************************************-->
     <script>
  
      function list(){
        var popup = document.getElementById("type");
        popup.classList.toggle("showList");
      }
    
      </script>
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins/jquery-ui.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins/plugins.js"></script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="assets/js/main.js"></script>

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->

    <!--*************************** 
          Minified  js 
     ***************************-->

    <!--*********************************** 
         vendor,plugins and main js
      ***********************************-->

    <!-- <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script>
    <script src="assets/js/main.js"></script> -->


</body>

</html>