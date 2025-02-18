<?php

session_start();

include ("linkToDB.php");

if(isset($_POST['add_info'])){
                  $data = mysqli_query($conn,"SELECT * FROM Users");
                  $coun = mysqli_num_rows($data);
                 
         while($row = mysqli_fetch_assoc($data)){
          if($row['email'] == $_SESSION['email']){
            $id = $row['id'];
            $str = "User" . $id;
                  $add = mysqli_query($conn,"INSERT INTO $str(type, email, proID, proName, qty, price, color, cat, subCat, fName, lName, phone, addr, Ostate,orderID) VALUES ('order2','$_SESSION[email]','$_POST[pid]','$_POST[proName]','$_POST[qty]','$_POST[price]','$_POST[color]','$_POST[cat]','$_POST[subCat]','$_POST[fn]','$_POST[ln]','$_POST[phone]','$_POST[addr]','No Complete Info','$_GET[id]')");
                  mysqli_query($conn,$add);
                  
          }
         }
        
        } 
    else if(isset($_POST['more_info'])){
      
                  
                    $data = mysqli_query($conn,"SELECT * FROM Users");
                    $coun = mysqli_num_rows($data);
          
           while($row = mysqli_fetch_assoc($data)){
            if($row['email'] == $_SESSION['email']){
              $id = $row['id'];
              $str = "User" . $id;
              $ship = 0;
              if($_POST['pro'] == 'Amman'){
                $ship = 1;
              }else if($_POST['pro'] == 'Zarqa' || $_POST['pro'] == 'Madabaa' || $_POST['pro'] == 'Balqa'){
                $ship = 2;
              }else if($_POST['pro'] == 'Mafraq'){
                $ship = 3;
              }else if($_POST['pro'] == 'Jerash' || $_POST['pro'] == 'Irbid' || $_POST['pro'] == 'Ajloun'){
                $ship = 4;
              }else if($_POST['pro'] == 'Tafileh' || $_POST['pro'] =='Karak'){
                $ship = 5;
              }else if($_POST['pro'] == 'Maan' || $_POST['pro'] =='Aqaba'){
                $ship = 6;
              }
              $add2 = mysqli_query($conn,"UPDATE $str SET ship='$ship',oaddr='$_POST[pro] - $_POST[area] - $_POST[street] - $_POST[build]' WHERE orderID='$_GET[id]'");
              mysqli_query($conn,$add2);
            }
           }}

      else if(isset($_POST['add_card'])){
        
         
                    
                      $data = mysqli_query($conn,"SELECT * FROM Users");
                      $coun = mysqli_num_rows($data);
            
             while($row = mysqli_fetch_assoc($data)){
              if($row['email'] == $_SESSION['email']){
                $id = $row['id'];
                $str = "User" . $id;
                      
                      $add3 = mysqli_query($conn,"UPDATE $str SET card='$_POST[number]',cardM='$_POST[month]',cardY='$_POST[year]',cardName='$_POST[nCard]',cardSec='$_POST[sCard]' WHERE orderID='$_GET[id]'");
                      mysqli_query($conn,$add3);
              }
             }}else if(isset($_POST['done'])){
        
         
                    
              $data = mysqli_query($conn,"SELECT * FROM Users");
              $coun = mysqli_num_rows($data);
    
     while($row = mysqli_fetch_assoc($data)){
      if($row['email'] == $_SESSION['email']){
        $id = $row['id'];
        $str = "User" . $id;
              
              $add3 = mysqli_query($conn,"UPDATE $str SET Ostate='Complete info' WHERE orderID='$_GET[id]'");
              mysqli_query($conn,$add3);
      }
     }}else if(isset($_POST['check'])){
        
         
                    
      $data = mysqli_query($conn,"SELECT * FROM Users");
      $coun = mysqli_num_rows($data);

while($row = mysqli_fetch_assoc($data)){
if($row['email'] == $_SESSION['email']){
$id = $row['id'];
$str = "User" . $id;
      
      $add3 = mysqli_query($conn,"UPDATE $str SET Ostate='Done' WHERE orderID='$_GET[id]'");
      mysqli_query($conn,$add3);

      $del = mysqli_query($conn,"DELETE FROM $str WHERE uid='$_GET[id]'");
      echo "<script>alert('Your Order Done !!!')</script>";
}
}}

?>

<?php
   
                            $data = mysqli_query($conn,"SELECT * FROM Users");
                            $coun = mysqli_num_rows($data);
                            if(isset($_POST['buy'])){
                                            while($row = mysqli_fetch_assoc($data)){
                                              
                      if($row['email'] == $_SESSION['email']){
                      $id = $row['id'];
                      $str = "User" . $id;
                       
                            $del2 = mysqli_query($conn,"UPDATE $str SET qty='$_POST[qtn]'  WHERE uid='$_GET[id]'");

                            
                            
                      }}
                      }?>

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

 #myPopup{
  display: none;
 }

 #myPopup .show{
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
        $data = mysqli_query($conn,"SELECT * FROM Users WHERE email='$_SESSION[email]'");
        
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
        $data = mysqli_query($conn,"SELECT * FROM Users WHERE email='$_SESSION[email]'");
        
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
<div id="offcanvasNo-setting" class="offcanvas offcanvas-cart theme1">
  <div class="inner">
    <div class="head d-flex justify-content-between">
      <span class="title">Setting</span>
      <button class="offcanvas-close">×</button>
    </div>
    <div class="content_setting">
      <div class="info_setting">
        <h3 class="title_setting"><?php echo $_SESSION['username'] ?></h3>
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
            <a href="login.php">Login/Sign-up</a>
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
                  <a href="#">Shop <i class="ion-ios-arrow-down"></i></a>
                  <ul class="mega-menu mega-menu-custom-with row">
                    <li class="col-3">
                      <ul class="border-right h-100 pr-20">
                        <li class="mega-menu-title">
                          <a href="#">Clothing</a>
                        </li>
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

                    <li class="col-3">
                        <ul class="border-right h-100 pr-20">
                          <li class="mega-menu-title">
                            <a href="#">Shoes</a>
                          </li>
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


                    <li class="col-3">
                        <ul class="border-right h-100 pr-20">
                          <li class="mega-menu-title">
                            <a href="#">Bags</a>
                          </li>
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

                    <li class="col-3">
                      <ul class="border-right h-100 pr-20">
                        <li class="mega-menu-title">
                          <a href="#">Accessories</a>
                        </li>
                        <li><a href="accessHand.php">Hand Made</a></li>
                        <li><a href="access.php ">All</a></li>
                      </ul>
                    </li>

                    <li class="col-3">
                        <br><ul class="border-right h-100 pr-20">
                          <li class="mega-menu-title">
                            <a href="#">Makeup</a>
                          </li>
                          <li>
                            <a href="makeup.php">All</a>
                          </li>
                        </ul>
                      </li>

                      <li class="col-3">
                       <br> <ul class="border-right h-100 pr-20">
                          <li class="mega-menu-title">
                            <a>Phone Accessories</a>
                          </li>
                          <li>
                            <a href="phoneAcc.php">All</a>
                          </li>
                        </ul>
                      </li>

                      <li class="col-3">
                        <br><ul class="border-right h-100 pr-20">
                          <li class="mega-menu-title">
                            <a>Hand Made</a>
                          </li>
                          <li>
                            <a href="handmade.php">All</a>
                          </li>
                        </ul>
                      </li>

                      <li class="col-3">
                        <br><ul class="border-right h-100 pr-20">
                          <li class="mega-menu-title">
                            <a >Arts</a>
                          </li>
                          <li>
                            <a href="arts.php">All</a>
                          </li>
                        </ul>
                      </li>

                    <li class="col-3">
                        <br><ul class="border-right h-100 pr-20">
                          <li class="mega-menu-title">
                            <a href="#">Perfumes</a>
                          </li>
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
                      <li class="col-3">
                       <br> <ul class="border-right h-100 pr-20">
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
                  <a href="stores.php"><span class="menu-text">Stores</span></a>
                </li>
                <li><a href="contact.php">contact Us</a></li>
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
          <h2 class="title text-dark text-capitalize">checkout</h2>
        </div>
      </div>
      <div class="col-12">
        <ol
          class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center"
        >
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">
            checkout page
          </li>
        </ol>
      </div>
    </div>
  </div>
</nav>
<!-- breadcrumb-section end -->

<!-- product tab start -->
<section class="check-out-section pb-40">
    <div class="container grid-wraper">
        <div class="row">
            <div class="col-lg-8 mb-30">
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    1 Personal Information
                                </button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordion">
                            <div class="card-body">
                                <form action="" method="post" class="personal-information">
                                    
                                <?php
                           
                           $order2 = mysqli_query($conn, "SELECT * FROM $str WHERE orderID='$_GET[id]' AND type='order2'");
                    $orderInfo2 = mysqli_fetch_assoc($order2);
                     
                   ?>
                                    <div class="form-group row">
                                        <label for="firstname" class="col-md-3 col-form-label">First name</label>
                                        <div class="col-md-6">
                                            <input name="fn" type="text" placeholder="<?php echo $orderInfo2['fName'] ?>" id="firstname" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lastname" class="col-md-3 col-form-label">last name</label>
                                        <div class="col-md-6">
                                            <input name="ln" type="text" placeholder="<?php echo $orderInfo2['lName'] ?>" id="lastname" class="form-control" required>
                                        </div>
                                    </div>
                                  

                                    <div class="form-group row">
                                      <label for="email" class="col-md-3 col-form-label">Phone number</label>
                                      <div class="col-md-6">
                                          <input name="phone" type="tel" placeholder="<?php echo $orderInfo2['phone'] ?>" id="phone" class="form-control" required>
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <label for="email" class="col-md-3 col-form-label">Address</label>
                                      <div class="col-md-6">
                                          <input name="addr" type="text" id="addr" placeholder="<?php echo $orderInfo2['addr'] ?>" class="form-control" required>
                                      </div>
                                    </div>

                                    
                                    <div class="form-group row">
                                        <div class="col-md-3"></div>
                                        <div class="col-md-6">
                                            <div class="check-box-inner pt-0">
                                                <div class="filter-check-box">
                                                    <input type="checkbox" id="20820" required>
                                                    <label for="20820">Receive offers from our partners</label>
                                                </div>
                                                <div class="filter-check-box">
                                                    <input type="checkbox" id="20821" required>
                                                    <label for="20821">Sign up for our newsletter</label>
                                                    <p class="pl-25">Be the First to Know. Sign up for
                                                        newsletter
                                                        today !</p>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                           
                                  $order = mysqli_query($conn, "SELECT * FROM $str WHERE uid='$_GET[id]'");
                           $orderInfo = mysqli_fetch_assoc($order);
                            $total = $orderInfo['price'] * $orderInfo['qty'];
                          ?>
                          
                          <input type="hidden" name="pid" value="<?= $orderInfo['proID'] ?>">
                          <input type="hidden" name="proName" value="<?= $orderInfo['proName'] ?>">
                          <input type="hidden" name="cat" value="<?= $orderInfo['cat'] ?>">
                          <input type="hidden" name="subCat" value="<?= $orderInfo['subCat'] ?>">
                          <input type="hidden" name="price" value="<?= $total ?>">
                          <input type="hidden" name="color" value="<?= $orderInfo['color'] ?>">
                          <input type="hidden" name="qty" value="<?= $orderInfo['qty'] ?>">                             
                         
                                        <div class="col-12">
                                            <div class="sign-btn text-right">
                                                <input type="submit" name="add_info" value="Next" class="btn theme-btn--dark1 btn--md">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    2 Addresses
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <div class="checkout-inner border-0">
                                    <div class="checkout-address p-0">
                                        <p>
                                            The selected address will be used both as your personal address (for
                                            invoice) and as your delivery address.
                                        </p>
                                    </div>
                                    <div class="check-out-content">
                                        <form id="contact-form" class="p-0" action="" method="post">
                                        <?php
                           
                           $order2 = mysqli_query($conn, "SELECT * FROM $str WHERE orderID='$_GET[id]' AND type='order2'");
                    $orderInfo2 = mysqli_fetch_assoc($order2);
                     
                   ?>
                                           <div class="form-group row">
                                              <label class="col-md-3" for="city">Selected Address</label>
                                              <div class="col-md-6">
                                                 <h5> <?php echo $orderInfo2['oaddr'] ?></h5>
                                              </div>
                                          </div> 
                                            <div class="form-group row">
                                                <label class="col-md-3">Provinces</label>
                                                <div class="col-md-6">
                                                    <select class="form-control" name="pro">
                                                        <option>-- please choose --</option>
                                                        <option value="Amman">Amman (the capital)</option>
                                                        <option value="Balqa">Balqa</option>
                                                        <option value="Madaba">Madabaa</option>
                                                        <option value="Zarqa">Zarqa</option>

                                                        <option value="Mafraq">Mafraq</option>

                                                        <option value="Jerash">Jerash</option>
                                                        <option value="Irbid">Irbid</option>
                                                        <option value="Ajloun">Ajloun</option>

                                                        <option value="Karak">Karak</option>
                                                        <option value="Tafileh">Tafileh</option>

                                                        <option value="Maan">Maan</option>
                                                        <option value="Aqaba">Aqaba</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                              <label class="col-md-3" for="city">Area Name</label>
                                              <div class="col-md-6">
                                                  <input class="form-control" id="area" name="area" type="text"
                                                      required="" placeholder="">
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="col-md-3" for="city">Street Name</label>
                                            <div class="col-md-6">
                                                <input class="form-control" id="street" name="street" type="text"
                                                    required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                          <label class="col-md-3" for="city">Building number</label>
                                          <div class="col-md-6">
                                              <input class="form-control" id="bulid" name="build" type="text"
                                                  required="">
                                          </div>
                                      </div>
                                            
                                            <div class="form-group row">
                                                <div class="col-md-9 col-md-offset-3">
                                                    <div class="filter-check-box mb-0">
                                                        <input type="checkbox" id="20824" required>
                                                        <label class="checkout" for="20824">check out</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-0">
                                                <div class="col-12 text-right">
                                                    <input value="Next"  name="more_info" type="submit"
                                                        class="btn theme-btn--dark1 btn--md">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <span>3</span> Card Details
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordion">
                            <div class="card-body">
                              
                                <div class="delivery-options-list">
                                   
                                    <h5> Enter Card Details</h5>
                                    <form id="contact-form"  method="post">
                                    <?php
                           
                           $order2 = mysqli_query($conn, "SELECT * FROM $str WHERE orderID='$_GET[id]' AND type='order2'");
                    $orderInfo2 = mysqli_fetch_assoc($order2);
                     
                   ?>
                                      <div class="form-group row">
                                          <label class="col-md-3" for="firstName2">Card Number</label>
                                          <div class="col-md-6">
                                            <br>  
                                            
                                            <input class="form-control" style="margin-bottom: 5px;" placeholder="<?php echo $orderInfo2['card'] ?>" id="firstName2" name="number"
                                                  type="text" required="">
                                              
                                              <div id="paypal-button"></div><label style="color: gray; font-size: 10px;">Accepted credit and debit card types</label>
                                          </div>
                                      </div>
                                      <div class="form-group row">
                                          <label class="col-md-3" for="lastName2">Expire date</label>
                                          <div class="col-md-6" >
                                              <label>Month </label> <label style="margin-left: 25px;"> Year</label>
                                              <br><input  placeholder="<?php echo $orderInfo2['cardY'] ?>" id="lastName2" name="year"
                                                  type="number" style="width: 50px; margin-right: 6px;" maxlength="2" min="1" max="12" required=""> / 
                                              <input  placeholder="<?php echo $orderInfo2['cardM'] ?>" id="lastName2" name="month"
                                                  type="number" maxlength="2" style="width: 50px; margin-left: 6px;" required=""><br>
                                                  <label style="color: gray; font-size: 10px;">For exmaple, 10/20</label>
                                          </div>
                                      </div>
                                      
                                      <div class="form-group row">
                                        <label class="col-md-3" for="city">Name Of Card</label>
                                        <div class="col-md-6">
                                            <input class="form-control"  placeholder="<?php echo $orderInfo2['cardName'] ?>" id="area" name="nCard" type="text"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-md-3" for="city">Card security code</label>
                                      <div class="col-md-6">
                                          <input class="form-control" maxlength="3" id="street" placeholder="<?php echo $orderInfo2['cardSec'] ?>" name="sCard" type="text"
                                              required="">
                                          <label style="color: gray; font-size: 10px;">The last 3 digits on the back of the card</label>
                                      </div>
                                  </div>
                                 
                                      <div class="form-group row mb-0">
                                          <div class="col-12 text-right">
                                              <button name="add_card" type="submit"
                                                  class="btn theme-btn--dark1 btn--md">Next</button>
                                          </div>
                                      </div>
                                  </form>
                                 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <span>4</span> Payment
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                            <div class="card-body pt-0">
                                <div class="custom-radio mb-4">
                                    <label for="test5">Final Price</label>
                                </div>
                                
                                <form method="post">
                                <div class="filter-check-box mb-4">
                                    <input type="checkbox" id="20828" required="">
                                    <label class="checkout" for="20828">I agree to the terms and Conditions</label>
                                </div>
                                <input value="Confitm" name="done" type="submit"
                                  class="btn theme-btn--dark1 btn--md">
                                </form>

                                <div class="popup" onclick="popup()">
                                  
                                  <span class="popuptext" id="myPopup">
                                    <p>Order ID : 2fgt@</p>
                                    <p>Thank You !</p>
                                    <p>We will contact you soon to deliver your basket</p>
                                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-30">
                <ul class="list-group cart-summary rounded-0">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <ul class="items">
                            <li><?php
        include ("linkToDB.php");
        $data = mysqli_query($conn,"SELECT * FROM Users WHERE email='$_SESSION[email]'");
        
        $coun = mysqli_num_rows($data);
        for($i=1;$i<=$coun;$i++){
                $row2 = mysqli_fetch_assoc($data);
                 
                 $str = "User" . $row2['id'];
                    $data2 = mysqli_query($conn,"SELECT * FROM $str WHERE uid='$_GET[id]'");
       while($row = mysqli_fetch_assoc($data2)){
       
                     echo   $row['qty'] ;
}}
        ?>
                             item</li>
                            <li>Shipping</li>
                        </ul>
                        <ul class="amount">
                            <li><?php
      
        $data = mysqli_query($conn,"SELECT * FROM Users WHERE email='$_SESSION[email]'");
        $sum = 0;
        $coun = mysqli_num_rows($data);
        for($i=1;$i<=$coun;$i++){
       
        
          
                $row2 = mysqli_fetch_assoc($data);
                 
                 $str = "User" . $row2['id'];
                
                    $data2 = mysqli_query($conn,"SELECT * FROM $str WHERE uid='$_GET[id]'");
       while($row = mysqli_fetch_assoc($data2)){
        $sum +=  $row['price'] * $row['qty']  ;
}}
echo $sum. " JD";
        ?></li>
                            <li><?php
        
        $data = mysqli_query($conn,"SELECT * FROM Users WHERE email='$_SESSION[email]'");
        $sum2 = 0;
        $coun = mysqli_num_rows($data);
        for($i=1;$i<=$coun;$i++){
       
        
          
                $row2 = mysqli_fetch_assoc($data);
                 
                 $str = "User" . $row2['id'];
                
                    $data2 = mysqli_query($conn,"SELECT * FROM $str WHERE orderID='$_GET[id]'");
       while($row = mysqli_fetch_assoc($data2)){

                    $sum2 +=  $row['ship'] ;}
                  
                    
}
echo $sum2. " JD";   
 ?></li>
                        </ul>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <ul class="items">
                            <li>Total (tax excl.)</li>
                            <li>Taxes</li>
                        </ul>
                        <ul class="amount">
                            <li><?php
      
      $data = mysqli_query($conn,"SELECT * FROM Users WHERE email='$_SESSION[email]'");
      $sum3 = 0;
      $coun = mysqli_num_rows($data);
      for($i=1;$i<=$coun;$i++){
     
      
        
              $row2 = mysqli_fetch_assoc($data);
               
               $str = "User" . $row2['id'];
              
                  $data2 = mysqli_query($conn,"SELECT * FROM $str WHERE orderID='$_GET[id]' AND type='order2'");
     while($row = mysqli_fetch_assoc($data2)){
  
                   $sum3 +=   ($row['price']) + $row['ship']  ;
}}
echo $sum3  . " JD";
      ?></li>
                            <li>$0</li>
                        </ul>
                    </li>
                    <form method="post">
                    <li class="list-group-item text-center">
                      
                        <input type="submit" value="Proceed to checkout" name="check" class="btn theme-btn--dark1 btn--md">
                      
                    </li></form>
                </ul>

                <div class="delivery-info mt-20">
                    <ul>
                        <li>
                            <img src="assets/img/icon/10.png" alt="icon"> Security policy (edit with Customer
                            reassurance module)
                        </li>
                        <li>
                            <img src="assets/img/icon/11.png" alt="icon"> Delivery policy (edit with Customer
                            reassurance module)
                        </li>
                        <li class="mb-0">
                            <img src="assets/img/icon/12.png" alt="icon"> Return policy (edit with Customer
                            reassurance module)
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
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
                          <span><a href="secuirty.php">Security</a></span>
                          <span>FAQ</span>
                          <span><a href="faq.php">Need Help?</a></span>
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

  <script>
    function popup(){
      var text = document.getElementById("myPopup");
      text.classList.toggle("show");
    }
  </script>

<script>
  
  function list(){
    var popup = document.getElementById("type");
    popup.classList.toggle("showList");
  }

  
  </script>

    <!--****************************************************** 
        jquery,modernizr ,poppe,bootstrap,plugins and main js
     ******************************************************-->
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
  // payPal button
  paypal.Button.render({
    // Configure environment
    env: 'sandbox',
    client: {
      sandbox: 'demo_sandbox_client_id',
      production: 'demo_production_client_id'
    },
    // Customize button (optional)
    locale: 'en_US',
    style: {
      size: 'tiny',
      color: 'gold',
      shape: 'pill',
    },

    // Enable Pay Now checkout flow (optional)
    commit: true,

    // Set up a payment
    payment: function(data, actions) {
      return actions.payment.create({
        transactions: [{
          amount: {
            total: '0.01',
            currency: 'USD'
          }
        }]
      });
    },
    // Execute the payment
    onAuthorize: function(data, actions) {
      return actions.payment.execute().then(function() {
        // Show a confirmation message to the buyer
        window.alert('Thank you for your purchase!');
      });
    }
  }, '#paypal-button');

  // action the payPal button
  /*
  payment: function create(data, actions) {
  return actions.payment.create({
    transactions: [{
      amount: {
        total: '0.01',
        currency: 'USD'
      }
    }]
  });
}*/

// action the payPal button
payment: function crete(data, actions) {
  return actions.payment.create({
    transactions: [{
      amount: {
        total: '30.11',
        currency: 'USD',
        details: {
          subtotal: '30.00',
          tax: '0.07',
          shipping: '0.03',
          handling_fee: '1.00',
          shipping_discount: '-1.00',
          insurance: '0.01'
        }
      },
      description: 'The payment transaction description.',
      custom: '90048630024435',
      //invoice_number: '12345', Insert a unique invoice number
      payment_options: {
        allowed_payment_method: 'INSTANT_FUNDING_SOURCE'
      },
      soft_descriptor: 'ECHI5786786',
      item_list: {
        items: [
        {
          name: 'hat',
          description: 'Brown hat.',
          quantity: '5',
          price: '3',
          tax: '0.01',
          sku: '1',
          currency: 'USD'
        },
        {
          name: 'handbag',
          description: 'Black handbag.',
          quantity: '1',
          price: '15',
          tax: '0.02',
          sku: 'product34',
          currency: 'USD'
        }],
        shipping_address: {
          recipient_name: 'Brian Robinson',
          line1: '4th Floor',
          line2: 'Unit #34',
          city: 'San Jose',
          country_code: 'US',
          postal_code: '95131',
          phone: '011862212345678',
          state: 'CA'
        }
      }
    }],
    note_to_payer: 'Contact us for any questions on your order.'
  });
}

// execute the operation
onAuthorize: function execute(data, actions)
{
  return actions.payment.execute().then(function()
  {
    // Show a confirmation message to the buyer
    window.alert('Thank you for your purchase!');
  });
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