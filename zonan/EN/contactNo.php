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
            <a href="login.php">Logout</a>
          </li>
        </ul>
      </div>

      <div class="info_setting">
        <h3 class="title_setting">Language</h3>
        <ul>
          <li class="active">
            <a href="index.php">
              <img
                src="http://demo.posthemes.com/pos_zonan/img/l/1.jpg"
                alt="img"
              />
              English
            </a>
          </li>
          <li>
            <a href="../AR/index.php">
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
          
        </ul>
      </div>

      <div class="info_setting">
        <h3 class="title_setting">Language</h3>
        <ul>
          <li class="active">
            <a href="indexNoLog.php">
              <img
                src="http://demo.posthemes.com/pos_zonan/img/l/1.jpg"
                alt="img"
              />
              English
            </a>
          </li>
          <li>
            <a href="../AR/indexNoLog.php">
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

<!-- header start -->
<header id="sticky" class="header style2 theme1">
  <!-- header-middle satrt -->
  <div class="header-middle px-xl-4">
    <div class="container position-relative">
      <div class="row align-items-center">
        <div class="col-9 col-xl-7 position-xl-relative">
          <div class="d-flex align-items-center justify-content-lg-between">
            <div class="logo mr-lg-5 mr-xl-0">
              <a href="index.php">
                <?php
                include ("linkToDB.php");
                $select = mysqli_query($conn, "select * from header");
                $row = mysqli_fetch_assoc($select);
                echo "<img src='assets/img/logo/$row[webLogo]' alt='logo'/></a>";
                ?>
              
              
            </div>
            <nav class="header-bottom theme1 d-none d-lg-block">
              <ul class="main-menu d-flex align-items-center">
                <li class="active">
                  <a href="index.php" class="pl-0">Home</a>
                <li class="position-static">
                  <a href="login.php">Shop </a>
                 
                </li>
                <li>
                  <a href="login.php"><span class="menu-text">Stores</span></a>
                </li>
                <li><a href="contactNo.php">contact Us</a></li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="col-3 col-xl-5">
          <!-- search-form end -->
          <div class="d-flex align-items-center justify-content-end">
            <div class="cart-block-links theme1">
              <ul class="d-flex align-items-center">
                <li>
                  <a href="javascript:void(0)" class="search search-toggle">
                    <i class="ion-ios-search-strong"></i>
                  </a>
                </li>
                
                <li class="position-relative d-none d-sm-block">
                  <a  href="login.php">
                    <i class="ion-ios-shuffle-strong"></i>
                    <span class="badge cbdg1">0</span>
                  </a>
                </li>
                <li class="position-relative d-none d-sm-block">
                  <a href="login.php">
                    <i class="ion-android-favorite-outline"></i>
                    <span class="badge cbdg1">0</span>
                  </a>
                </li>
                <li class="cart-block position-relative d-none d-sm-block">
                  <a  href="login.php">
                    <i class="ion-bag"></i>
                    <span class="badge cbdg1" style="background-color: red; width: 10px; height: 10px; border-radius: 5px; margin-right: 5px;
                    margin-top: 2px;"><span></span></span>
                  </a>
                </li>
                <li class="mr-0 cart-block">
                  <a class="offcanvas-toggle"  href="#offcanvasNo-setting">
                    <i class="ion-android-settings"></i>
                  </a>
                </li>
                <!-- cart block end -->
              </ul>
            </div>
            <div class="mobile-menu-toggle theme1 d-lg-none">
              <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                <svg viewbox="0 0 800 600">
                  <path
                    d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200"
                    id="top"
                  ></path>
                  <path d="M300,320 L540,320" id="middle"></path>
                  <path
                    d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190"
                    id="bottom"
                    transform="translate(480, 320) scale(1, -1) translate(-480, -318)"
                  ></path>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- header-middle end -->
</header>
<!-- header end -->

<!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme1 breadcrumb-bg1">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="breadcrumb-title text-center my-20">
          <h2 class="title text-dark text-capitalize">Contact Us</h2>
        </div>
      </div>
      <div class="col-12">
        <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
          <li class="breadcrumb-item"><a href="indexNoLog.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">
            Contact
          </li>
        </ol>
      </div>
    </div>
  </div>
</nav>
<!-- breadcrumb-section end -->

<!-- map start -->
<div class="map">
  <div id="mapid"></div>
</div>
<!-- map end -->
<!-- contact-section start -->
<section class="contact-section pt-70 pb-40">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-12 mb-30">
        <!--  contact page side content  -->
        <div class="contact-page-side-content">
          <h3 class="contact-page-title">Contact Us</h3>
          <p class="contact-page-message mb-30">Claritas est etiam processus dynamicus, qui sequitur
            mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum
            claram anteposuerit litterarum formas human.</p>
          <!--  single contact block  -->

          <div class="single-contact-block">
            <h4><i class="fa fa-fax"></i> Address</h4>
            <p>123 Main Street, Anytown, CA 12345 – USA</p>
          </div>

          <!--  End of single contact block -->

          <!--  single contact block -->

          <div class="single-contact-block">
            <h4><i class="fa fa-phone"></i> Phone</h4>
            <p>
              <a href="tel:123456789">Mobile: (08) 123 456 789</a>
            </p>
            <p><a href="tel:1009678456">Hotline: 1009 678 456</a></p>
          </div>

          <!-- End of single contact block -->

          <!--  single contact block -->

          <div class="single-contact-block">
            <h4><i class="fas fa-envelope"></i> Email</h4>
            <p>
              <a href="mailto:yourmail@domain.com">yourmail@domain.com</a>
            </p>
            <p> <a href="mailto:support@hastech.company">support@hastech.company</a></p>
          </div>

          <!--=======  End of single contact block  =======-->
        </div>

        <!--=======  End of contact page side content  =======-->

      </div>
      <div class="col-lg-6 col-12 mb-30">
        <!--  contact form content -->
        <div class="contact-form-content">
          <h3 class="contact-page-title">Tell Us Your Message</h3>
          <div class="contact-form">
            <form id="contact-form" action="assets/php/mail.php" method="post">
              <div class="form-group">
                <label>Your Name <span class="required">*</span></label>
                <input type="text" name="customerName" id="customername" required="">
              </div>
              <div class="form-group">
                <label>Your Email <span class="required">*</span></label>
                <input type="email" name="customerEmail" id="customerEmail" required="">
              </div>
              <div class="form-group">
                <label>Subject</label>
                <input type="text" name="contactSubject" id="contactSubject" required="">
              </div>
              <div class="form-group">
                <label>Your Message</label>
                <textarea name="contactMessage" class="pb-10" id="contactMessage" required=""></textarea>
              </div>
              <div class="form-group mb-0">
                <button type="submit" value="submit" id="submit" class="btn theme-btn--dark1 btn--xl"
                  name="submit">submit</button>
              </div>
            </form>
          </div>
          <p class="form-messegemt-10"></p>
        </div>
        <!-- End of contact -->
      </div>
    </div>
  </div>
</section>
<!-- contact-section end -->


<!-- footer strat -->
<footer class="bg-lighten2 theme1 position-relative">
  <!-- footer bottom start -->
  <div class="footer-bottom pt-70 pb-30">
      <div class="container">
          <div class="row">
              <div class="col-12 col-sm-6 col-lg-6 mb-30">
                  <div class="footer-widget">
                      <div class="footer-logo mb-30">
                          <a href="index.php"><?php
                              include ("linkToDB.php");
                              $select = mysqli_query($conn, "select * from footer");
                              $row = mysqli_fetch_assoc($select);
                              echo "<img src='assets/img/$row[webLogo]' alt='footer logo'>";
                              ?>
                              
                          </a>
                      </div>
                      <?php
                              include ("linkToDB.php");
                              $select = mysqli_query($conn, "select * from footer");
                              $row = mysqli_fetch_assoc($select);
                              echo "<p class='text mb-35'>$row[slog]</p>";
                              ?>
                      
                      <div class="social-network">
                          <h2 class="title text mb-20 text-capitalize">Follow Us On Social:</h2>
                          <ul class="d-flex">
                          <?php
                              include ("linkToDB.php");
                              $select = mysqli_query($conn, "select * from footer");
                              $row = mysqli_fetch_assoc($select);
                              echo "<li><a href='$row[fac]' target='_blank'><span
                                          class='ion-social-facebook'></span></a></li>
                              <li><a href='$row[what]' target='_blank'><span
                                          class='ion-social-whatsapp'></span></a></li>
                              <li class='mr-0'><a href='$row[ins]' target='_blank'><span
                                          class='ion-social-instagram-outline'></span></a></li>";
                              ?>
                              
                          </ul>
                      </div>
                  </div>
              </div>
              <div class="col-12 col-sm-6 col-lg-2 mb-30" style="margin-left:20%">
                  <div class="footer-widget">
                      <div class="section-title mb-20">
                          <h2 class="title text-dark text-capitalize">About Us</h2>
                      </div>
                      <address class="mb-0">
                          <span><a href="secuirtyNo.php">Security</a></span>
                          <span>FAQ</span>
                          <span><a href="faqNo.php">Need Help?</a></span>
                      </address>
                  </div>
              </div>
              
              
          </div>
      </div>
  </div>
  <!-- footer bottom end -->
  <!-- coppy-right start -->
  <div class="coppy-right">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="border-top py-20">
                      <div class="row">
                          <div class="col-12 col-md-5 col-lg-4 col-xl-3 order-last order-md-first">
                              <div class="text-center text-lg-left">
                                  <p class="mb-3 mb-md-0">Copyright &copy; <a
                                          href="">Clever Mind</a>. All
                                      Rights Reserved</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- coppy-right end -->
</footer>
<!-- footer end -->

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