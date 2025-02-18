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
          <li>
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
            <a class="navbar-brand" href="javascript:;">Wish List Edit</a>
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
                if(isset($_POST['edit'])){
                  $data = mysqli_query($conn,"SELECT * FROM Users");
                  $coun = mysqli_num_rows($data);
        
                for($i=1;$i<=$coun;$i++){
                  if($i == $_POST['uid']){
                    $row2 = mysqli_fetch_assoc($data);
                    echo $row2['id'];
                    $str = "User" . $row2['id'];
                  $add = mysqli_query($conn,"UPDATE $str SET email='$_POST[email]',proID='$_POST[proID]',proImg='$_POST[img]',proName='$_POST[pName]',price='$_POST[price]',dis='$_POST[dis]',available='$_POST[ava]',color='$_POST[color]',storeLogo='$_POST[storeLogo]',storeName='$_POST[storeName]' WHERE (proID='$_POST[proID]' AND type='wish') ");
                  mysqli_query($conn,$add);
                }else{
                  continue;
                }
              }
            
              }
              
                ?>">
                    <h6>Enter</h6>
                  <div class="row">
                    <div class="form-group" style="margin-left: 10%; width: 80%;">
                      <label>User ID</label>
                      <input name="uid" type="number" min="1" class="form-control" placeholder="">
                    </div>
                </div>

                <div class="row">
                        <div class="form-group" style="margin-left: 10%; width: 80%;">
                          <label>Product ID</label>
                          <input  name="proID" type="number" class="form-control" min="1" placeholder="">
                        </div>
                    </div>

                    <h6>Inforamtion Will Edit</h6>
                    <div class="row">
                    <div class="form-group" style="margin-left: 10%; width: 80%;">
                      <label>User Email</label>
                      <input name="email" type="email" class="form-control" placeholder="">
                    </div>
                </div>
               
                    <div class="row">
                        <div class="form-group" style="margin-left: 10%; width: 80%;">
                          <label>Product Image <span style="color: red;">(Select Image 360 x 480 )</span></label>
                          <input name="img" type="file" style="cursor: pointer;" class="form-control" placeholder="Image (360 x 480)">
                        </div>
                    </div>
                  <div class="row">
                      <div class="form-group" style="margin-left: 10%; width: 80%;">
                        <label>Product Name</label>
                        <input name="pName" type="text" class="form-control" placeholder="">
                      </div>
                  </div>

                  <div class="row">
          <div class="form-group" style="margin-left: 10%; width: 80%;">
            <label>Price</label>
            <input type="text" name="price" class="form-control" placeholder="5 JD">
          </div>
      </div>

<div class="row">
                <div class="form-group" style="margin-left: 10%; width: 80%;">
                  <label>Discription</label>
                  <textarea name="dis" cols="82" rows="2"></textarea>
                </div>
            </div>

      <div class="row">
                <div class="form-group" style="margin-left: 10%; width: 80%;">
                  <label>Availabilty</label>
                  <select name="ava" class="form-control">
                    <option>Select -- </option>
                    <option>Yes </option>
                    <option>No</option>
                  </select>
                </div>
            </div>

            <div class="row">
                    <div class="form-group" style="margin-left: 10%; width: 80%;">
                      <label>Weghit </label>
                      <input type="text" name="wei" style="cursor: pointer;" class="form-control" placeholder="">
                    </div>
                </div>

            <div class="row">
                    <div class="form-group" style="margin-left: 10%; width: 80%;">
                      <label>Colors </label>
                      <input type="color" name="color" style="cursor: pointer;" class="form-control" placeholder="">
                      
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
                    <label>Store Name</label>
                    <input type="text" name="storeName" class="form-control" placeholder="">
                  </div>
              </div>
          
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button name="edit" type="submit" class="btn btn-info btn-round">Edit</button>
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
