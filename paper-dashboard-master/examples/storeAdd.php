<!--
=========================================================
* Paper Dashboard 2 - v2.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon1.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Zonan (Main Admin)
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="" style="background-color: #f4f3ef;">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        
        <a href="Dashboard.php" class="simple-text logo-normal">
          Welcome Zonan Admin
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="Header.php">
              <p>Header</p>
            </a>
          </li>
          <li >
            <a href="Footer.php" style="margin-top: -5%;">
              <p>Footer</p>
            </a>
          </li>
          <li>
            <a href="Slid Bar.php"  style="margin-top: -5%;">
              <p>Slid Bar</p>
            </a>
          </li>
          <li>
            <a href="Offer Section.php" style="margin-top: -5%;">
              <p>Offer Section </p>
            </a>
          </li>

          <li class="dropdown">
						<a class="dropdown-toggle pr-0" data-toggle="dropdown" style="margin-top: -5%;">Best Seller </a>
						<ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut" style="margin-left: 10%;">
							<li>
								<a href="Hot Category.php">Hot Category</a>
							</li>
							<li>
								<a href="Top Seller.php">Top Seller</a>
							</li>
							<li>
								<a href="Discount Products.php">Discount Products</a>
							</li>
						</ul>
					</li>

          <li class="dropdown">
						<a class="dropdown-toggle pr-0" data-toggle="dropdown" style="margin-top: -5%;">All Inner Slider </a>
						<ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut" style="margin-left: 10%;">
							<li style="margin-left: 5%;"></li>
							<li>
								<a href="Product Category.php">Each Product Category</a>
							</li>
							<li>
								<a href="View Basket.php">View Basket</a>
							</li>
							<li>
								<a href="Wish List.php">Wish List</a>
							</li>
							<li>
								<a href="Favorite Shop.php">Favorite Shop</a>
							</li>
              <li>
								<a href="Check Out.php">Check Out</a>
							</li>
						</ul>
					</li>
          <li>
            <a href="Feedback.php" style="margin-top: -5%;">
              <p>Feedback</p>
            </a>
          </li>

          <li>
            <a href="Contuct Us.php" style="margin-top: -5%;">
              <p>Contuct Us</p>
            </a>
          </li>
          <li>
            <a href="Users.php" style="margin-top: -5%;">
              <p>Users</p>
            </a>
          </li>
          <li class="active">
            <a href="Stores.php"  style="margin-top: -5%;">
              <p>Stores</p>
            </a>
          </li>

          <li>
            <a href="Orders.php"  style="margin-top: -5%;">
              <p>Orders</p>
            </a>
          </li>
          <li>
            <a href="Intro.php"  style="margin-top: -5%;">
              <p>Intro For The Admin Store</p>
            </a>
          </li>
          <li>
            <a href="Massages.php" style="margin-top: -5%;">
              <p>Messages</p>
            </a>
          </li>



        </ul>
      </div>
    </div>
    <div class="main-panel"style="height:100%">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">Store Add</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
          <ul class="navbar-nav">
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  
                  <?php
                            include('linkToDB.php');
                         
                                 $data2 = mysqli_query($conn,"SELECT * FROM mass WHERE done = 0 ");
                                 $count = 0;
                                 while ($row = mysqli_fetch_assoc($data2)){
                                    if($row['done']==0){
                                    $count++;
                                 }else{
                                   $count = 0;
                                 }}
                                 
                                 if($count >= 1){
                                  echo '<i class="nc-icon nc-bell-55" style="color:red;"></i>';
                                 }else{
                                  echo '<i class="nc-icon nc-bell-55"></i>';
                                 }
                                
                            ?>
                  
                </a>
                
                <?php
                            include('linkToDB.php');
                         
                                 $data2 = mysqli_query($conn,"SELECT * FROM mass WHERE done = 0 ");
                                 $count = 0;
                                 while ($row = mysqli_fetch_assoc($data2)){
                                    if($row['done']==0){
                                      echo '<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink"><a class="dropdown-item"  href="Massages.php">New Massege <br> <p style="color:red; margin-left:10%">';
                                      echo $row['sub'];
                                      echo '</p></a></div>';
                                 }}

                                 $data = mysqli_query($conn,"UPDATE mass SET done= '1' ");
                                    mysqli_query($conn,$data);
                                
                            ?>
                  
                  
                
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
         
          <div class="col-md-8">
            <div class="card card-user" >
              

              <div class="card-body" >
              <form method="post" action="<?php
                include ("linkToDB.php");
                if(isset($_POST['add'])){
                  $add = mysqli_query($conn,"INSERT INTO stores(storeName, storeLogo, email, phone, username, wall, card, addr, cat, subCat) VALUES ('$_POST[storeName]','$_POST[storeLogo]','$_POST[email]','$_POST[phone]','$_POST[username]','$_POST[wall]','$_POST[card]','$_POST[addr]','$_POST[cat]','$_POST[subCat]')");
                  mysqli_query($conn,$add);

                  $data = mysqli_query($conn,"SELECT * FROM stores");
                  $coun = mysqli_num_rows($data);
                  
                  $str;
                 
                  for($i=1;$i<=$coun;$i++){
                 
                      $row2 = mysqli_fetch_assoc($data);
                      $str = "Store" . $row2['id'];
                    
                 $create = "CREATE TABLE $str(
                  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
                  storeName VARCHAR(500) NOT NULL,
                  storeLogo VARCHAR(500) NOT NULL,
                  

                 
                  cat VARCHAR(500) NOT NULL , 
                  subCat VARCHAR(500) NOT NULL,
                  proName VARCHAR(500) NOT NULL,
                  proImg VARCHAR(500) NOT NULL,
                  rat VARCHAR(500) NOT NULL,
                  material VARCHAR(500) NOT NULL,
                  size VARCHAR(500) NOT NULL,
                  shortDis VARCHAR(500) NOT NULL,
                  fullDis VARCHAR(500) NOT NULL,
                  color VARCHAR(500) NOT NULL,
                  price VARCHAR(500) NOT NULL,
                  discount VARCHAR(500) NOT NULL,
                  newPrice VARCHAR(500) NOT NULL,
                  delPol VARCHAR(500) NOT NULL,
                  retPol VARCHAR(500) NOT NULL,

                  storeNameAR VARCHAR(500) NOT NULL,

                  catAR VARCHAR(500) NOT NULL , 
                  subCatAR VARCHAR(500) NOT NULL,
                  proNameAR VARCHAR(500) NOT NULL,
                  materialAR VARCHAR(500) NOT NULL,
                  shortDisAR VARCHAR(500) NOT NULL,
                  fullDisAR VARCHAR(500) NOT NULL,
                  delPolAR VARCHAR(500) NOT NULL,
                  retPolAR VARCHAR(500) NOT NULL,
                  view VARCHAR(500) NOT NULL,
                  stock VARCHAR(500) NOT NULL
                  
                  )";
                  
                  mysqli_query($conn,$create);
                }
                }
                  
                  ?>">
                    
                    <div class="row">
                        <div class="form-group" style="margin-left: 10%; width: 80%;">
                          <label>Store Name</label>
                          <input type="text" name="storeName" class="form-control" placeholder="">
                        </div>
                    </div>
                  <div class="row">
                      <div class="form-group" style="margin-left: 10%; width: 80%;">
                        <label>Store Logo  <span style="color: red;">(Select Image 127 x 127 )</span></label>
                      <input type="file" name="storeLogo" style="cursor: pointer;" class="form-control" placeholder="">
                      </div>
                  </div>

                  <div class="row">
                    <div class="form-group" style="margin-left: 10%; width: 80%;">
                      <label>Email</label>
                      <input type="email" name="email" class="form-control" placeholder="">
                    </div>
                </div>
              <div class="row">
                  <div class="form-group" style="margin-left: 10%; width: 80%;">
                    <label>Phone Number</label>
                    <input type="tel" name="phone" class="form-control" placeholder="">
                  </div>
              </div>

              <div class="row">
                <div class="form-group" style="margin-left: 10%; width: 80%;">
                  <label>Username</label>
                  <input type="text" name="username" class="form-control">
                </div>
            </div>
      <div class="row">
          <div class="form-group" style="margin-left: 10%; width: 80%;">
            <label>Wallet or Bank IBAN</label>
            <input type="text" name="wall" class="form-control" placeholder="">
          </div>
      </div>

      <div class="row">
        <div class="form-group" style="margin-left: 10%; width: 80%;">
          <label>Card Name</label>
          <input type="text" name="card" class="form-control" placeholder="Req(First+Second+Third+Fourth)">
        </div>
    </div>
<div class="row">
  <div class="form-group" style="margin-left: 10%; width: 80%;">
    <label>Shipping Address <a href="https://www.google.jo/maps/@31.9289191,35.8825136,15z?hl=ar">Google Map</a></label>
    <input type="text" name="addr" class="form-control" placeholder="Get URL from Google map">
  </div>
</div>

      <div class="row">
        <div class="form-group" style="margin-left: 10%; width: 80%;">
          <label>Category</label><br>
          
          <select name="cat" class="form-control">
            <option>Select --</option>
            <option>Clothing</option>
            <option>Shoes</option>
            <option>Bages</option>
            <option>Accessories</option>
            <option>Makeup</option>
            <option>Phone Accessories</option>
            <option>Hand Made</option>
            <option>Arts</option>
            <option>Perfumes</option>
            <option>Gamming</option>
          </select><br>

          <select name="subCat" class="form-control">
            <option>Select --</option>
            <option>Female</option>
            <option>Male</option>
            <option>Kids</option>
            <option>All</option>
            <option>Hand Made</option>
            <option>Gamming Accessories</option>
            <option>Figurnes</option>
          </select>

        </div>
    </div>
                  
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" name="add" class="btn btn-info btn-round">Add</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>



         
      </div>

    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
</body>

</html>
