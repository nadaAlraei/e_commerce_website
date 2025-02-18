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
            <a class="navbar-brand" href="javascript:;">Discount Products Add</a>
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
                  $add = mysqli_query($conn,"INSERT INTO dispro(img, proName,storeLogo,storeName,rat,offerVal,oldPri,newPri,cat,subCat,color,dis,wight,stock,proNameAR, catAR, subCatAR, colorAR, disAR, storeNameAR, stockAR) VALUES ('$_POST[img]','$_POST[proName]','$_POST[storeLogo]','$_POST[storeName]','$_POST[rat]','$_POST[offVal]','$_POST[oldPri]','$_POST[newPri]','$_POST[cat]','$_POST[subCat]','$_POST[color]','$_POST[dis]','$_POST[weight]','$_POST[state]','$_POST[proNameAR]','$_POST[storeNameAR]','$_POST[catAR]','$_POST[subCatAR]','$_POST[colorAR]','$_POST[disAR]','$_POST[stateAR]')");
                  mysqli_query($conn,$add);
                }

                ?>">
                    <div class="row">
                        <div class="form-group" style="margin-left: 10%; width: 80%;">
                          <label>Product Image <span style="color: red;">(Select Image 360 x 480 )</span></label>
                          <input type="file" name="img" style="cursor: pointer;" class="form-control" placeholder="Image ">
                        </div>
                    </div>
                  <div class="row">
                      <div class="form-group" style="margin-left: 10%; width: 80%;">
                        <label>Product Name</label>
                        <input type="text" name="proName" class="form-control" placeholder="">
                      </div>
                  </div>
                  <div class="row">
                    <div class="form-group" style="margin-left: 10%; width: 80%;">
                    <label class="bmd-label-floating">Category</label>
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
                              </select>
                    </div>
                </div>
                
                <div class="row">
                    <div class="form-group" style="margin-left: 10%; width: 80%;">
                    <label class="bmd-label-floating">Sub Catecory</label>
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
                    <div class="form-group" style="margin-left: 10%; width: 80%;">
                    <label class="bmd-label-floating">Color</label>
                            <select name="color" class="form-control">
                                <option>Select --</option>
                                <option>Red</option>
                                <option>Blue</option>
                                <option>Black</option>
                                <option>Green</option>
                                <option>Yellow</option>
                                <option>Pink</option>
                                <option>White</option>
                              </select>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group" style="margin-left: 10%; width: 80%;">
                        <label class="bmd-label-floating">Description</label>
                        <input name="dis" type="text" class="form-control" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group" style="margin-left: 10%; width: 80%;">
                        <label class="bmd-label-floating">Weight</label>
                        <input name="weight" type="text" class="form-control" placeholder="Ex: 15 kg" required>
                    </div>
                </div>


                  <div class="row">
                    <div class="form-group" style="margin-left: 10%; width: 80%;">
                      <label>Store Logo  <span style="color: red;">(Select Image 127 x 127 )</span> </label>
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
                <div class="form-group" style="margin-left: 10%; width: 80%;">
                  <label>Rating</label>
                  <input type="number" name="rat" class="form-control" min="1" max="5" placeholder="1-5">
                </div>
            </div>
          <div class="row">
              <div class="form-group" style="margin-left: 10%; width: 80%;">
                <label>Offer Value</label>
                <input type="text" name="offVal" class="form-control" placeholder="10%">
              </div>
          </div>

          <div class="row">
            <div class="form-group" style="margin-left: 10%; width: 80%;">
              <label>Old Price</label>
              <input type="text" name="oldPri" class="form-control" placeholder="10 JD">
            </div>
        </div>
      <div class="row">
          <div class="form-group" style="margin-left: 10%; width: 80%;">
            <label>New Price</label>
            <input type="text" name="newPri" class="form-control" placeholder="5 JD">
          </div>
      </div>
      <div class="row">
                    <div class="form-group" style="margin-left: 10%; width: 80%;">
                    <label class="bmd-label-floating">State</label>
                            <select name="state" class="form-control">
                                <option>Select --</option>
                                <option>In Stock</option>
                                <option>Out Stock</option>
                              </select>
                    </div>
                </div>

                <div class="row">
                      <div class="form-group" style="margin-left: 10%; width: 80%;">
                        <label>Product Name Arabic</label>
                        <input type="text" name="proNameAR" class="form-control" placeholder="">
                      </div>
                  </div>
                  <div class="row">
                    <div class="form-group" style="margin-left: 10%; width: 80%;">
                    <label class="bmd-label-floating">Category Arabic</label>
                            <select name="catAR" class="form-control">
                                <option>Select --</option>
                                <option>ملابس</option>
                                <option>الاحذية</option>
                                <option>الحقائب</option>
                                <option>الاكسسوارات</option>
                                <option>اداوات المكياج</option>
                                <option>اكسسوارات الهاتف</option>
                                <option>صناعات اليدوية</option>
                                <option>الفنون</option>
                                <option>العطور</option>
                                <option>الالعاب</option>
                              </select>
                    </div>
                </div>
                
                <div class="row">
                    <div class="form-group" style="margin-left: 10%; width: 80%;">
                    <label class="bmd-label-floating">Sub Catecory Arabic</label>
                            <select name="subCatAR" class="form-control">
                                <option>Select --</option>
                                <option>الاناث</option>
                                <option>الذكور</option>
                                <option>الاطفال</option>
                                <option>الكل</option>
                                <option>صناعات اليدوية</option>
                                <option>اكسسوارات الهاتف</option>
                                <option>التماثيل</option>
                              </select>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group" style="margin-left: 10%; width: 80%;">
                    <label class="bmd-label-floating">Color Arabic</label>
                            <select name="colorAR" class="form-control">
                                <option>Select --</option>
                                <option>الاحمر</option>
                                <option>الازرق</option>
                                <option>الاسود</option>
                                <option>الاخضر</option>
                                <option>الاصفر</option>
                                <option>الوردي</option>
                                <option>الابيض</option>
                              </select>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group" style="margin-left: 10%; width: 80%;">
                        <label class="bmd-label-floating">Description Arabic</label>
                        <input name="disAR" type="text" class="form-control" required>
                    </div>
                </div>



              <div class="row">
                  <div class="form-group" style="margin-left: 10%; width: 80%;">
                    <label>Store Name Arabic</label>
                    <input type="text" name="storeNameAR" class="form-control" placeholder="">
                  </div>
              </div>

              
      <div class="row">
                    <div class="form-group" style="margin-left: 10%; width: 80%;">
                    <label class="bmd-label-floating">State Arabic</label>
                            <select name="stateAR" class="form-control">
                                <option>Select --</option>
                                <option>متوفر</option>
                                <option>غير متوفر</option>
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
