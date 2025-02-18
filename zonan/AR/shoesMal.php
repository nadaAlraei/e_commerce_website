<?php

session_start();

include ("linkToDB.php");

if(isset($_POST['add_to_cart'])){
                  $data = mysqli_query($conn,"SELECT * FROM Users");
                  $coun = mysqli_num_rows($data);
                 
         while($row = mysqli_fetch_assoc($data)){
          if($row['email'] == $_SESSION['email']){
            $id = $row['id'];
            $str = "User" . $id;
                  $add = mysqli_query($conn,"INSERT INTO $str(type,email, proID, proImg, proName, storeLogo, storeName, stock, qty, price,cat,subCat,color,dis,weight) VALUES ('order','$_SESSION[email]','$_GET[id]','$_POST[img]','$_POST[proName]','$_POST[storeImg]','$_POST[storeName]','$_POST[state]','1','$_POST[price]','$_POST[cat]','$_POST[subCat]','$_POST[color]','$_POST[dis]','$_POST[wight]')");
                  mysqli_query($conn,$add);
          }
         }} 
    else if(isset($_POST['add_to_wish'])){
      
                  
                    $data = mysqli_query($conn,"SELECT * FROM Users");
                    $coun = mysqli_num_rows($data);
          
           while($row = mysqli_fetch_assoc($data)){
            if($row['email'] == $_SESSION['email']){
              $id = $row['id'];
              $str = "User" . $id;
                    
              $add2 = mysqli_query($conn,"INSERT INTO $str(type,email, proID, proImg, proName, storeLogo, storeName, stock,qty, price,color,dis,weight) VALUES ('wish','$_SESSION[email]','$_GET[id]','$_POST[img]','$_POST[proName]','$_POST[storeImg]','$_POST[storeName]','$_POST[state]','1','$_POST[price]','$_POST[color]','$_POST[dis]','$_POST[wight]')");
              mysqli_query($conn,$add2);
            }
           }}

      else if(isset($_POST['add_to_fav'])){
        
         
                    
                      $data = mysqli_query($conn,"SELECT * FROM Users");
                      $coun = mysqli_num_rows($data);
            
             while($row = mysqli_fetch_assoc($data)){
              if($row['email'] == $_SESSION['email']){
                $id = $row['id'];
                $str = "User" . $id;
                      
                      $add3 = mysqli_query($conn,"INSERT INTO $str(type,email, proID, storeLogo, storeName) VALUES ('favorite','$_SESSION[email]','$_GET[id]','$_POST[storeImg]','$_POST[storeName]')");
                      mysqli_query($conn,$add3);
              }
             }}

?>

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
      <button class="offcanvas-close">×</button>
      <span class="title">قائمة المفضلة</span>
      
    </div>
    <ul class="minicart-product-list" style="float:right; text-align:right">
    <?php
        include ("linkToDB.php");
        $data = mysqli_query($conn,"SELECT * FROM Users WHERE email='$_SESSION[email]'");
        
        $coun = mysqli_num_rows($data);
        for($i=1;$i<=$coun;$i++){
       
        
          
                $row2 = mysqli_fetch_assoc($data);
                 
                 $str = "User" . $row2['id'];
                
                    $data2 = mysqli_query($conn,"SELECT * FROM $str");
       while($row = mysqli_fetch_assoc($data2)){
        if($row['type'] == "wish"){
                     echo"  <li>
                     
                     <div class='content' style='margin-right:4%'>
                       <a href='' class='title'>$row[proName]</a>
                       <span class='quantity-price'
                         >$row[qty] x <span class='amount'>$row[price]</span></span
                       >
                     </div>
                     <a href='' class='image'
                       > <img src='assets/img/$row[proImg]' alt='Cart product Image'
                     /></a>
                   </li>";
}}}
        ?>
     
      
      
    </ul>
    <a style="float:right;"
      href="compare.php"
      class="btn theme--btn1 btn--lg text-uppercase d-block d-sm-inline-block mt-30"
      >عرض القائمة المفضلة</a
    >
  </div>
</div>
<!-- OffCanvas Wishlist End -->

<!-- OffCanvas Cart Start -->
<div id="offcanvas-cart" class="offcanvas offcanvas-cart theme1">
  <div class="inner">
    <div class="head d-flex flex-wrap justify-content-between">
      <button class="offcanvas-close">×</button>
      <span class="title">السلة</span>
      
    </div>
    <ul class="minicart-product-list" style=" text-align:right">
    <?php
        include ("linkToDB.php");
        $data = mysqli_query($conn,"SELECT * FROM Users WHERE email='$_SESSION[email]'");
        
        $coun = mysqli_num_rows($data);
        for($i=1;$i<=$coun;$i++){
       
        
          
                $row2 = mysqli_fetch_assoc($data);
                 
                 $str = "User" . $row2['id'];
                
                    $data2 = mysqli_query($conn,"SELECT * FROM $str");
       while($row = mysqli_fetch_assoc($data2)){
        if($row['type'] == "order"){
          echo"  <li>
                     
          <div class='content' style='margin-right:4%'>
            <a href='' class='title'>$row[proName]</a>
            <span class='quantity-price'
              >$row[qty] x <span class='amount'>$row[price]</span></span
            >
          </div>
          <a href='' class='image'
            > <img src='assets/img/$row[proImg]' alt='Cart product Image'
          /></a>
        </li>";
}}}
        ?>
    </ul>
    <div class="sub-total d-flex flex-wrap justify-content-between" >
      
      <span class="amount">
      <?php
        include ("linkToDB.php");
        $data = mysqli_query($conn,"SELECT * FROM Users WHERE email='$_SESSION[email]'");
        
        $coun = mysqli_num_rows($data);
        for($i=1;$i<=$coun;$i++){
       
        
          
                $row2 = mysqli_fetch_assoc($data);
                 
                 $str = "User" . $row2['id'];
                
                    $data2 = mysqli_query($conn,"SELECT * FROM $str");
       while($row = mysqli_fetch_assoc($data2)){
        if($row['type'] == "order"){
          $total = $total + $row['price'] * $row['qty'];
                   
}}}  echo $total;
        ?>JD</span>
        <strong>:المجموع الجزئي</strong>
    </div>
    <a style="float:right"
      href="cart.php"
      class="btn theme--btn1 btn--lg text-uppercase d-block d-sm-inline-block mr-sm-2"
      >عرض السلة</a
    >
    <a
      href="checkout.php"
      class="btn theme--btn1 btn--lg text-uppercase d-block d-sm-inline-block mt-4 mt-sm-0"
      >اتمام الطلب</a
    >
    <p class="minicart-message" style="float:right" >! JD توصيل مجاني لطلبات اكثر من 50   </p>
  </div>
</div>
<!-- OffCanvas Cart End -->
<!-- offcanvas-setting Start (account) -->
<div id="offcanvasNo-setting" style="text-align:right" class="offcanvas offcanvas-cart theme1">
  <div class="inner">
    <div class="head d-flex justify-content-between">
      
      <button class="offcanvas-close">×</button>
      <span class="title">اعدادات الحساب</span>
    </div>
    <div class="content_setting">
      <div class="info_setting">
        <h3 class="title_setting"><?php echo $_SESSION['username'] ?></h3>
        <ul>
          <li>
            <a href="myaccount.php">حسابي</a>
          </li>
          
          <li>
            <a href="login.php">تسجيل الخروج</a>
          </li>
        </ul>
      </div>

      <div class="info_setting">
        <h3 class="title_setting">اللغة</h3>
        <ul>
          <li> 
            الانجليزية
            <a href="../EN/index.php">
              <img
                src="http://demo.posthemes.com/pos_zonan/img/l/1.jpg"
                alt="img"
              />
             
            </a>
          </li>
          <li class="active">
            العربية
            <a href="index.php">
              <img
                src="assets/img/arbic.jpg"
                alt="img" width="16px"
              />
            </a>
          </li>
        </ul>
      </div>
      <div class="info_setting">
        <div class="title_setting">العملة :</div>
        <ul>
          
          <li class="active"><img src="assets/img/jordan.png" alt="img"/><a href="#"> JD</a></li>
        </ul>
      </div>
      <div class="info_setting">
        <div class="title_setting">هل تمتلك متجر؟</div>
        <ul>
          <li class="active"><a href="index.php"><b style="color:blue">انضم لنا</b></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!--offcanvas-setting End -->

<!-- offcanvas-setting Start (no account) -->
<div id="offcanvas-setting" class="offcanvas offcanvas-cart theme1" style="text-align:right">
  <div class="inner">
    <div class="head d-flex justify-content-between">
      <span class="title">اعدادت الحساب</span>
      <button class="offcanvas-close">×</button>
    </div>
    <div class="content_setting">
      <div class="info_setting">
        <h3 class="title_setting">حسابي</h3>
        <ul>
          <li>
            <a href="login.php">تسجيل الدخول/انشاء حساب</a>
          </li>
          
        </ul>
      </div>

      <div class="info_setting">
        <h3 class="title_setting">اللغة</h3>
        <ul>
          <li> 
            الانجليزية
            <a href="../EN/index.php">
              <img
                src="http://demo.posthemes.com/pos_zonan/img/l/1.jpg"
                alt="img"
              />
             
            </a>
          </li>
          <li class="active">
            العربية
            <a href="index.php">
              <img
                src="assets/img/arbic.jpg"
                alt="img" width="16px"
              />
            </a>
          </li>
        </ul>
      </div>
      <div class="info_setting">
        <div class="title_setting">العملة :</div>
        <ul>
          
          <li class="active"><img src="assets/img/jordan.png" alt="img"/><a href="#"> JD</a></li>
        </ul>
      </div>
      <div class="info_setting">
        <div class="title_setting">هل تمتلك متجر؟</div>
        <ul>
          <li class="active"><a href="index.php"><b style="color:blue">انضم لنا</b></a></li>
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
                  <a href="index.php" class="pl-0">الصفحة الرئيسية</a>
                <li class="position-static">
                  <a href="#">المحلات <i class="ion-ios-arrow-down"></i></a>
                  <ul class="mega-menu mega-menu-custom-with row">
                    <li class="col-3">
                      <ul class="border-right h-100 pr-20">
                        <li class="mega-menu-title">
                          <a href="#">الملابس</a>
                        </li>
                        <li>
                          <a href="clothFem.php">الاناث</a>
                        </li>
                        <li>
                          <a href="clothMal.php">الذكور</a>
                        </li>
                        <li>
                          <a href="clothKid.php"
                            >الاطفال</a
                          >
                        </li>
                        <li>
                          <a href="cloth.php #all"
                            >الكل</a
                          >
                        </li>
                      </ul>
                    </li>

                    <li class="col-3">
                        <ul class="border-right h-100 pr-20">
                          <li class="mega-menu-title">
                            <a href="#">الاحذية</a>
                          </li>
                          <li>
                            <a href="shoesFem.php">الاناث</a>
                          </li>
                          <li>
                            <a href="shoesMal.php">الذكور</a>
                          </li>
                          <li>
                            <a href="shoesKid.php"
                              >الاطفال</a
                            >
                          </li>
                          <li>
                            <a href="shoes.php"
                              >الكل</a
                            >
                          </li>
                        </ul>
                    </li>


                    <li class="col-3">
                        <ul class="border-right h-100 pr-20">
                          <li class="mega-menu-title">
                            <a href="#">الحقائب</a>
                          </li>
                          <li>
                            <a href="bagsFem.php">الاناث</a>
                          </li>
                          <li>
                            <a href="bagsMal.php">الذكور</a>
                          </li>
                          <li>
                            <a href="bagsKid.php"
                              >الاطفال</a
                            >
                          </li>
                          <li>
                            <a href="bags.php"
                              >الكل</a
                            >
                          </li>
                        </ul>
                      </li>

                    <li class="col-3">
                      <ul class="border-right h-100 pr-20">
                        <li class="mega-menu-title">
                          <a href="#">الاكسسوارات</a>
                        </li>
                        <li><a href="accessHand.php">مصنوعة يدويا</a></li>
                        <li><a href="access.php ">الكل</a></li>
                      </ul>
                    </li>

                    <li class="col-3">
                        <br><ul class="border-right h-100 pr-20">
                          <li class="mega-menu-title">
                            <a href="#">منتجات التجميل</a>
                          </li>
                          <li>
                            <a href="makeup.php">الكل</a>
                          </li>
                        </ul>
                      </li>

                      <li class="col-3">
                       <br> <ul class="border-right h-100 pr-20">
                          <li class="mega-menu-title">
                            <a>اكسسوارات هاتف</a>
                          </li>
                          <li>
                            <a href="phoneAcc.php">الكل</a>
                          </li>
                        </ul>
                      </li>

                      <li class="col-3">
                        <br><ul class="border-right h-100 pr-20">
                          <li class="mega-menu-title">
                            <a>مصنوعات يدوية</a>
                          </li>
                          <li>
                            <a href="handmade.php">الكل</a>
                          </li>
                        </ul>
                      </li>

                      <li class="col-3">
                        <br><ul class="border-right h-100 pr-20">
                          <li class="mega-menu-title">
                            <a >الفنون</a>
                          </li>
                          <li>
                            <a href="arts.php">الكل</a>
                          </li>
                        </ul>
                      </li>

                    <li class="col-3">
                        <br><ul class="border-right h-100 pr-20">
                          <li class="mega-menu-title">
                            <a href="#">العطور</a>
                          </li>
                          <li>
                    <a href="perFem.php">الاناث</a>
                  </li>
                  <li>
                    <a href="perMal.php">الذكور</a>
                  </li>
                  <li>
                    <a href="perKid.php"
                      >الاطفال</a
                    >
                  </li>
                  <li>
                    <a href="perfum.php"
                      >الكل</a
                    >
                  </li>
                        </ul>
                      </li>
                      <li class="col-3">
                       <br> <ul class="border-right h-100 pr-20">
                          <li class="mega-menu-title">
                            <a href="#">الالعاب</a>
                          </li>
                          <li>
                            <a href="gameAcc.php"
                              >اكسسوارات الالعاب</a
                            >
                          </li>
                          <li>
                            <a href="gameFig.php"
                              >التماثيل</a
                            >
                          </li>
                          <li>
                            <a href="game.php "
                              >الكل</a
                            >
                          </li>
                        </ul>
                      </li>
                     
                    

                    <li class="col-12 mt-4">
                      <a
                        href=""
                        class="zoom-in overflow-hidden d-block"
                      >
                        <img
                          class="w-100" width="1009px" height="208px"
                          src="assets/img/shopList.jpg"
                          alt="img"
                        />
                      </a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="stores.php"><span class="menu-text">المتاجر</span></a>
                </li>
                <li><a href="contact.php">تواصل معنا</a></li>
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
                  <a class="offcanvas-toggle" href="#offcanvas-wishlist">
                    <i class="ion-ios-shuffle-strong"></i>
                    <span class="badge cbdg1"> <?php
        include ("linkToDB.php");
        $data = mysqli_query($conn,"SELECT * FROM Users WHERE email='$_SESSION[email]'");
        
        $coun = mysqli_num_rows($data);
        for($i=1;$i<=$coun;$i++){
       
        
          
                $row2 = mysqli_fetch_assoc($data);
                 
                 $str = "User" . $row2['id'];
                
                    $data2 = mysqli_query($conn,"SELECT * FROM $str WHERE type='wish'");
  
        
          $count = mysqli_num_rows($data2);
                     echo $count;
}
        ?></span>
                  </a>
                </li>
                <li class="position-relative d-none d-sm-block">
                  <a href="wishlist.php">
                    <i class="ion-android-favorite-outline"></i>
                    <span class="badge cbdg1"><?php
        include ("linkToDB.php");
        $data = mysqli_query($conn,"SELECT * FROM Users WHERE email='$_SESSION[email]'");
        
        $coun = mysqli_num_rows($data);
        for($i=1;$i<=$coun;$i++){
       
        
          
                $row2 = mysqli_fetch_assoc($data);
                 
                 $str = "User" . $row2['id'];
                
                    $data2 = mysqli_query($conn,"SELECT * FROM $str WHERE type='favorite'");
       
       
          $count = mysqli_num_rows($data2);
                     echo $count;
}
        ?></span>
                  </a>
                </li>
                <li class="cart-block position-relative d-none d-sm-block">
                  <a class="offcanvas-toggle" href="#offcanvas-cart">
                    <i class="ion-bag"></i>
                    <span class="badge cbdg1" style="background-color: red; width: 10px; height: 10px; border-radius: 5px; margin-right: 5px;
                    margin-top: 2px;"><span></span></span>
                  </a>
                </li>
                <li class="mr-0 cart-block">
                  <a class="offcanvas-toggle" href="#offcanvasNo-setting">
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
                    <h2 class="title text-dark text-capitalize">الاحذية</h2>
                </div>
            </div>
            <div class="col-12">
                <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
                    
                    <li class="breadcrumb-item active" aria-current="page">الاحذية (الذكور)</li>
                    <li class="breadcrumb-item"><a href="index.php">الصفحة الرئيسية</a></li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<!-- breadcrumb-section end -->
<!-- product tab start -->
<div class="product-tab pb-70">
    <div class="container grid-wraper">
        <div class="grid-nav-wraper mb-30">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 mb-3 mb-md-0">
                    <nav class="shop-grid-nav">
                        <ul class="nav nav-pills align-items-center" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                    role="tab" aria-controls="pills-home" aria-selected="true">
                                    <i class="fa fa-th"></i>

                                </a>
                            </li>
                            <li class="nav-item mr-0">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                    role="tab" aria-controls="pills-profile" aria-selected="false"><i
                                        class="fa fa-list"></i></a>
                            </li>
                            
                            <li> <span class="total-products text-capitalize">هناك 
                            <?php 
                 
                   include ("linkToDB.php");
                   $data = mysqli_query($conn,"SELECT * FROM stores");
                   $coun = mysqli_num_rows($data);
                  $sum = 0;
          while($row = mysqli_fetch_assoc($data)){
           
             $id = $row['id'];
             $str = "store" . $id;
             $data2 = mysqli_query($conn,"SELECT * FROM $str WHERE (cat = 'Shoes' AND subCat = 'Male')");
             $coun2 = mysqli_num_rows($data2);
             if($coun2 > 0){
              $sum += $coun2;
             }else{
               $sum = $sum;
              }
           
          }echo $sum;?>  
                            من المنتجات</span></li>

                            
                        </ul>
                    </nav>
                </div>
                <div class="col-12 col-md-6 position-relative">
                    <div class="shop-grid-button d-flex align-items-center">
                        
                        <button class="btn-dropdown d-flex justify-content-between" type="button"
                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            حسب <span class="ion-android-arrow-dropdown"></span>
                        </button>
                        <div class="dropdown-menu shop-grid-menu" aria-labelledby="dropdownMenuButton" style="text-align: right;">
                            
                            <a class="dropdown-item" href="index.php #shop"> الفئات</a>
                            <form action="" method="post">
                            <input name="low_to_highR" type="submit"  class="dropdown-item" value="التقييم, الاقل الى الاعلى"> 
                            <input name="high_to_lowR" type="submit"  class="dropdown-item" value="التقييم, الاغلى الى الاقل">
                            <input name="low_to_highP" type="submit"  class="dropdown-item" value="السعر, الاقل الى الاعلى">
                            <input name="high_to_lowP" type="submit"  class="dropdown-item" value="السعر, الاعلى الى الاقل">
                          </form>
                            <a class="dropdown-item" href="index.php #bs"> عرض المنتجات</a>
                        </div>
                        <span class="sort-by">:الترتيب حسب</span>
                    </div>
                </div>
            </div>
            
        </div>
        
        <!-- product-tab-nav end -->
        <div class="tab-content" id="pills-tabContent">
            <!-- first tab-pane -->
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row grid-view theme1">
                <h2 class="title text-dark text-capitalize mb-20" style="text-align: right;">الكل</h2>
                  <?php 
                 
                 include ("linkToDB.php");
                   $data = mysqli_query($conn,"SELECT * FROM stores");
                   $coun = mysqli_num_rows($data);
                  
          while($row = mysqli_fetch_assoc($data)){
           
             $id = $row['id'];
             $str = "store" . $id;
             if(isset($_POST['low_to_highR'])){

              $data2 = mysqli_query($conn,"SELECT * FROM $str WHERE (cat = 'Shoes' AND subCat = 'Male') ORDER BY rat ASC");
              }
              else if(isset($_POST['high_to_lowR'])){
              
               $data2 = mysqli_query($conn,"SELECT * FROM $str WHERE (cat = 'Shoes' AND subCat = 'Male') ORDER BY rat DESC");
              }
              else if(isset($_POST['low_to_highP'])){
              
               $data2 = mysqli_query($conn,"SELECT * FROM $str WHERE (cat = 'Shoes' AND subCat = 'Male') ORDER BY Price ASC");
              }
              else if(isset($_POST['high_to_lowP'])){
              
               $data2 = mysqli_query($conn,"SELECT * FROM $str WHERE (cat = 'Shoes' AND subCat = 'Male') ORDER BY Price DESC");
              }
              else{
               $data2 = mysqli_query($conn,"SELECT * FROM $str WHERE (cat = 'Shoes' AND subCat = 'Male')");
              }
                   while($row = mysqli_fetch_assoc($data2)){?>
                   
                   <div class='col-sm-6 col-md-4 mb-30'>
                        <div class='card product-card'>
                            <div class='card-body p-0'>
                                <div class='product-thumbnail position-relative'>
                                    <span class='badge badge-danger top-left'>New</span>
                                    <a href=''>
                                        <img class='first-img' src='assets/img/<?php echo $row['proImg']?>' style='width:360px; height:480px' alt='thumbnail'>
                                    </a>
                                    <!-- product links -->
                                    <form  method="post" action="shoesMal.php?id=<?= $row['id'] ?>">
                                   <div class='product-links d-flex d-flex justify-content-between' style="width:83%">

                                   <input type="submit" name="add_to_cart" class="btn btn-block" value="اضافة الى السلة"> 
                                                
                                                <button name="add_to_wish"><li><a>
                                                                <span data-toggle='tooltip' data-placement='bottom'
                                                                    title='اضافة الى المفضلة'
                                                                    class='ion-ios-shuffle-strong'></span></a>
                                                        </li></button>
                                                        
                                                       <button name="add_to_fav"> <li>
                                                       <a>
                                                                <span data-toggle='tooltip' data-placement='bottom'
                                                                    title='اضافة الى المتاجر المفضلة'
                                                                    class='ion-android-favorite-outline'></span></a>
                                                            
                                                        </li></button>
               
                                                    <!-- product links end-->
                                                </div>
                                    <!-- product links end-->
                                </div>
                                <div class='product-desc'>
                                    <h3 class='title'><a> <?php echo $row['proNameAR']?></a></h3>
                                                <h3 class='title'><a><?php echo $row['storeNameAR']?> </a></h3>
                                   <?php echo "<div class='star-rating my-10'>";
                                    for($i=1; $i<=$row['rat']; $i++){
                                      echo "<span class='ion-ios-star'></span>";
                                    }
                                     ?>  
                                   </div>
                                    <h6 class='product-price'><?php echo $row['price'] ?></h6>

                                     <!--////ProName --><input type="hidden" name="proName" value="<?= $row['proNameAR'] ?>">
                                                        <!--////StoreName --><input type="hidden" name="storeName" value="<?= $row['storeName'] ?>">
                                                        <!--////Price --><input type="hidden" name="price" value="<?= $row['price'] ?>">
                                                        <!--////ProName --><input type="hidden" name="img" value="<?= $row['proImg'] ?>">
                                                        <!--////StoreName --><input type="hidden" name="state" value="<?= $row['stock'] ?>">
                                                        <!--////StoreName --><input type="hidden" name="storeImg" value="<?= $row['storeLogo'] ?>">
                                                        <!--////StoreName --><input type="hidden" name="cat" value="<?= $row['catAR'] ?>">
             <!--////StoreName --><input type="hidden" name="subCat" value="<?= $row['subCatAR'] ?>">
             <!--////StoreName --><input type="hidden" name="color" value="<?= $row['color'] ?>">
             <!--////StoreName --><input type="hidden" name="dis" value="<?= $row['fullDisAR'] ?>">
             <!--////StoreName --><input type="hidden" name="wight" value="<?= $row['size'] ?>">
                                </div>
                            </div>
                        </div>
                        <!-- product-list End -->
                    </div></form>
                  <?php  }
                  }
                  ?>
                 
                    
                   
                    
                </div>
            </div>
            <!-- second tab-pane -->
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <h2 class="title text-dark text-capitalize mb-20" style="text-align: right;">الكل</h2>

              <div class="row grid-view-list theme1">
              <?php 
                 
                 include ("linkToDB.php");
                   $data = mysqli_query($conn,"SELECT * FROM stores");
                   $coun = mysqli_num_rows($data);
                  
          while($row = mysqli_fetch_assoc($data)){
           
             $id = $row['id'];
             $str = "store" . $id;
             if(isset($_POST['low_to_highR'])){

              $data2 = mysqli_query($conn,"SELECT * FROM $str WHERE (cat = 'Shoes' AND subCat = 'Male') ORDER BY rat ASC");
              }
              else if(isset($_POST['high_to_lowR'])){
              
               $data2 = mysqli_query($conn,"SELECT * FROM $str WHERE (cat = 'Shoes' AND subCat = 'Male') ORDER BY rat DESC");
              }
              else if(isset($_POST['low_to_highP'])){
              
               $data2 = mysqli_query($conn,"SELECT * FROM $str WHERE (cat = 'Shoes' AND subCat = 'Male') ORDER BY Price ASC");
              }
              else if(isset($_POST['high_to_lowP'])){
              
               $data2 = mysqli_query($conn,"SELECT * FROM $str WHERE (cat = 'Shoes' AND subCat = 'Male') ORDER BY Price DESC");
              }
              else{
               $data2 = mysqli_query($conn,"SELECT * FROM $str WHERE (cat = 'Shoes' AND subCat = 'Male')");
              }
                while($row = mysqli_fetch_assoc($data2)){?>
                <form method="post" action="shoesMal.php?id=<?= $row['id'] ?>">
                <div class='col-12 mb-30'>
                        <div class='card product-card'>
                            <div class='card-body p-0'>
                              
                                <div class='media flex-column flex-sm-row' style=" text-align:right;">
                                <div class='media-body pl-sm-4 mt-30 mt-sm-0' style="margin-right: 4%;">
                                        <div class='product-desc'>
                                            <h3 class='title'><a><?php echo $row['proNameAR']?></a></h3>
                                                    <h3 class='title'><a><?php echo $row['storeNameAR']?> <img src='assets/img/<?php echo$row['storeLogo']?>' width='50px'></a></h3>
                                            <div class='star-rating mb-10 mt-10'>
                                           <?php for($i=1; $i<=$row['rat']; $i++){
                                              echo "<span class='ion-ios-star'></span>";
                                            }?>
                                         </div>
                                            <h6 class='product-price'><?php echo $row['price'] ?></h6>
                                        </div>
                                        <div class='availability-list pb-30 mt-20 border-bottom'>
                                            <p> <span><?php echo $row['stock']?></span>: التوفر</p>
                                        </div>
                                        <ul class='product-list-des'>
                                            <li>
                                              <?php echo $row['shortDisAR']?>
                                            </li>
                                            <li>
                                            <?php echo $row['fullDisAR']?>
                                            </li>
                                           
                                        </ul>

                                         <!--////ProName --><input type="hidden" name="proName" value="<?= $row['proNameAR'] ?>">
                                                        <!--////StoreName --><input type="hidden" name="storeName" value="<?= $row['storeNameAR'] ?>">
                                                        <!--////Price --><input type="hidden" name="price" value="<?= $row['price'] ?>">
                                                        <!--////ProName --><input type="hidden" name="img" value="<?= $row['proImg'] ?>">
                                                        <!--////StoreName --><input type="hidden" name="state" value="<?= $row['stock'] ?>">
                                                        <!--////StoreName --><input type="hidden" name="storeImg" value="<?= $row['storeLogo'] ?>">
                                                        <!--////StoreName --><input type="hidden" name="cat" value="<?= $row['cat'] ?>">
             <!--////StoreName --><input type="hidden" name="subCat" value="<?= $row['subCatAR'] ?>">
             <!--////StoreName --><input type="hidden" name="color" value="<?= $row['color'] ?>">
             <!--////StoreName --><input type="hidden" name="dis" value="<?= $row['fullDisAR'] ?>">
             <!--////StoreName --><input type="hidden" name="wight" value="<?= $row['size'] ?>">
                                    </div>
                                    <div class='product-thumbnail position-relative'>
                                        <span class='badge badge-danger top-left'>New</span>
                                        <a href=''>
                                            <img  class='first-img' src='assets/img/<?php echo $row['proImg']?>' style='width:360px; height:480px' alt='thumbnail'>
                                        </a>
                                        <!-- product links -->
                                        <div class='product-links d-flex d-flex justify-content-between' style="width:83%">

<input type="submit" name="add_to_cart" class="btn btn-block" value="اضافة الى السلة"> 
                                                
                                                <button name="add_to_wish"><li><a>
                                                                <span data-toggle='tooltip' data-placement='bottom'
                                                                    title='اضافة الى المفضلة'
                                                                    class='ion-ios-shuffle-strong'></span></a>
                                                        </li></button>
                                                        
                                                       <button name="add_to_fav"> <li>
                                                       <a>
                                                                <span data-toggle='tooltip' data-placement='bottom'
                                                                    title='اضافة الى المتاجر المفضلة'
                                                                    class='ion-android-favorite-outline'></span></a>
                                                            
                                                        </li></button>

    <!-- product links end-->
</div>
                                        <!-- product links end-->
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- product-list End -->
                    </div></form>
               <?php }
              }
                ?>
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
<!-- product tab end -->

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
                          <h2 class="title text mb-20 text-capitalize">تابعنا على وسائل التواصل الاجتماعي</h2>
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
              <div class="col-12 col-sm-6 col-lg-2 mb-30"  style="margin-left:30%; text-align:right">
                  <div class="footer-widget">
                      <div class="section-title mb-20">
                          <h2 class="title text-dark text-capitalize">معلومات عنا</h2>
                      </div>
                      <address class="mb-0">
                          <span><a href="secuirty.php">الامان</a></span>
                          <span>اسئلة و اجابات</span>
                          <span><a href="faq.php">؟هل تحتاج مساعدة</a></span>
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

<!-- modals start -->

<!-- first modal -->
<div class="modal fade theme1 style1" id="quick-view" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 col-lg-6 mb-5 mb-lg-0">
                        <div class="product-sync-init mb-20">
                            <div class="single-product">
                                <div class="product-thumb">
                                    <img src="assets/img/slider/thumb/1.jpg" alt="product-thumb">
                                </div>
                            </div>
                            <!-- single-product end -->
                            <div class="single-product">
                                <div class="product-thumb">
                                    <img src="assets/img/slider/thumb/2.jpg" alt="product-thumb">
                                </div>
                            </div>
                            <!-- single-product end -->
                            <div class="single-product">
                                <div class="product-thumb">
                                    <img src="assets/img/slider/thumb/3.jpg" alt="product-thumb">
                                </div>
                            </div>
                            <!-- single-product end -->
                            <div class="single-product">
                                <div class="product-thumb">
                                    <img src="assets/img/slider/thumb/4.jpg" alt="product-thumb">
                                </div>
                            </div>
                            <!-- single-product end -->
                        </div>

                        <div class="product-sync-nav slick-nav-sync">
                            <div class="single-product">
                                <div class="product-thumb">
                                    <a href="javascript:void(0)"> <img src="assets/img/slider/thumb/1.1.jpg"
                                            alt="product-thumb"></a>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <div class="single-product">
                                <div class="product-thumb">
                                    <a href="javascript:void(0)"> <img src="assets/img/slider/thumb/2.1.jpg"
                                            alt="product-thumb"></a>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <div class="single-product">
                                <div class="product-thumb">
                                    <a href="javascript:void(0)"><img src="assets/img/slider/thumb/3.1.jpg"
                                            alt="product-thumb"></a>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <div class="single-product">
                                <div class="product-thumb">
                                    <a href="javascript:void(0)"><img src="assets/img/slider/thumb/4.1.jpg"
                                            alt="product-thumb"></a>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <div class="single-product">
                                <div class="product-thumb">
                                    <a href="javascript:void(0)"><img src="assets/img/slider/thumb/2.1.jpg"
                                            alt="product-thumb"></a>
                                </div>
                            </div>
                            <!-- single-product end -->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 mt-5 mt-md-0">
                        <div class="modal-product-info">
                            <div class="product-head">
                                <h2 class="title">Brixton Patrol All Terrain Anorak Jacket</h2>
                                <h4 class="sub-title">Reference: demo_5</h4>
                                <div class="star-content mb-20">
                                    <span class="star-on"><i class="ion-ios-star"></i> </span>
                                    <span class="star-on"><i class="ion-ios-star"></i> </span>
                                    <span class="star-on"><i class="ion-ios-star"></i> </span>
                                    <span class="star-on"><i class="ion-ios-star"></i> </span>
                                    <span class="star-on de-selected"><i class="ion-ios-star"></i> </span>
                                </div>
                            </div>
                            <div class="product-body">
                                <span class="product-price text-center"> <span class="new-price">$29.00</span>
                                </span>
                                <p class="border-top pt-30">Whether you're exploring the woods or the city, the Brixton™
                                    Patrol All </p>
                                <ul>
                                    <li>Terrain Anorak Jacket has got you covered.</li>
                                    <li>Camo jacket crafted from 4.5 oz nylon ripstop with two-way stretch, and a
                                        water-repellent coating.</li>
                                    <li>Drawstring hood.</li>
                                </ul>
                            </div>
                            <div class="product-size d-flex align-items-center mt-30">
                                <h3 class="title">Dimension</h3>
                                <select>
                                    <option value="0">S</option>
                                    <option value="1">M</option>
                                    <option value="2">L</option>
                                    <option value="3">XL</option>
                                    
                                </select>
                            </div>
                            <div class="product-footer">
                                <div class="product-count style d-flex flex-column flex-sm-row my-4">
                                    <div class="count d-flex">
                                        <input type="number" min="1" max="10" step="1" value="1">
                                        <div class="button-group">
                                            <button class="count-btn increment"><i
                                                    class="fas fa-chevron-up"></i></button>
                                            <button class="count-btn decrement"><i
                                                    class="fas fa-chevron-down"></i></button>
                                        </div>
                                    </div>
                                    <div>
                                        <button class="btn theme-btn--dark3 btn--xl mt-30 mt-sm-0">
                                            <span class="mr-2"><i class="ion-bag"></i></span>
                                            Add to cart
                                        </button>
                                    </div>
                                </div>
                                <div class="addto-whish-list">
                                    <a href="#"><i class="icon-heart"></i> Add to wishlist</a>
                                    <a href="#"><i class="icon-shuffle"></i> Add to compare</a>
                                </div>
                                <div class="pro-social-links mt-10">
                                    <ul class="d-flex align-items-center">
                                        <li class="share">Share</li>
                                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                        <li><a href="#"><i class="ion-social-google"></i></a></li>
                                        <li><a href="#"><i class="ion-social-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- second modal -->
<div class="modal fade style2" id="compare" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 class="title"><i class="fa fa-check"></i> Product added to compare.</h5>
            </div>
        </div>
    </div>
</div>
<!-- second modal -->
<div class="modal fade style3" id="add-to-cart" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header justify-content-center bg-dark">
                <h5 class="modal-title" id="add-to-cartCenterTitle"> <span class="ion-checkmark-round"></span>
                    Product successfully added to your shopping cart</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-5 divide-right">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="assets/img/modal/1.jpg" alt="img">
                            </div>
                            <div class="col-md-6 mb-2 mb-md-0">
                                <h4 class="product-name">New Balance Running Arishi trainers in triple</h4>
                                <h5 class="price">$$29.00</h5>
                                <h6 class="color"><strong>Dimension: </strong>: <span class="dmc">40x60cm</span> </h6>
                                <h6 class="quantity"><strong>Quantity:</strong>&nbsp;1</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="modal-cart-content">
                            <p class="cart-products-count">There is 1 item in your cart.</p>
                            <p><strong>Total products:</strong>&nbsp;$123.72</p>
                            <p><strong>Total shipping:</strong>&nbsp;$7.00 </p>
                            <p><strong>Taxes</strong>&nbsp;$0.00</p>
                            <p><strong>Total:</strong>&nbsp;$130.72 (tax excl.)</p>
                            <div class="cart-content-btn">
                                <button type="button" class="btn theme-btn--dark1 btn--md mt-4"
                                    data-dismiss="modal">Continue
                                    shopping</button>
                                <button class="btn theme-btn--dark1 btn--md mt-4"><i
                                        class="ion-checkmark-round"></i>Proceed to
                                    checkout</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modals end -->



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