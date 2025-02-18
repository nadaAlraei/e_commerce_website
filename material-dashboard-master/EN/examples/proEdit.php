<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon1.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Zonan (Admin Store)
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <style>
    .subList{
      display: none;
      list-style:none;
      color: #9c27b0;
      cursor: pointer;
      margin-left:-7%;

    }

    .show{
      display: block;
    }
  </style>
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="dashboard.php" class="simple-text logo-normal">
      <?php 
    
    session_start();
    include ('linkToDB.php');

    echo $_SESSION['username'];
    ?>
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="info.php">
              <i class="material-icons">inforamtion</i>
              <p>Store Inforamtion</p>
            </a>
          </li>
          <li class="nav-item" style="cursor: pointer; ">
            <div class="nav-link">
              <div style="margin-left:7%;">
              <i class="material-icons">Products</i>
              <p onclick="showList()" class="list">Products</p>
              <ul id="subList" class="subList">
                <li><a href="addPro.php">Add New</a></li>
                <li><a href="allPro.php">All Products</a></li>
                <li><a href="numPro.php">Product View Number</a></li>
              </ul>
            </div>
          </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="orders.php">
              <i class="material-icons">Orders</i>
              <p>Orders</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="ads.php">
              <i class="material-icons">Ads</i>
              <p>Ads Sponsor</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="views.php">
              <i class="material-icons">Views</i>
              <p>Views</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="login.php">
              <i class="material-icons">Logout</i>
              <p>Logout</p>
            </a>
          </li>
          
          
          <li class="nav-item active-pro ">
            <a class="nav-link" href="../../AR/examples/rtl.php">
              <i class="material-icons">language</i>
              <p>Arabic Version</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          
          
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
                <div class="input-group no-border">
                  <input type="text" value="" class="form-control" placeholder="Search...">
                  <button type="submit" class="btn btn-white btn-round btn-just-icon">
                    <i class="material-icons">search</i>
                    <div class="ripple-container"></div>
                  </button>
                </div>
              </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="../assets/img/video.mp4" target="_blank">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">1</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="Orders.php">New Order</a>
                 
                </div>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-info">
                  <h4 class="card-title">Edit Product</h4>
                  <p class="card-category">Enter Product Information</p>
                </div>
                <div class="card-body">
                <form  class="personal-information" method="post" action="<?php
                include ("linkToDB.php");
                if(isset($_POST['edit'])){
                  $data = mysqli_query($conn,"SELECT * FROM stores");
                  $coun = mysqli_num_rows($data);

                for($i=1;$i<=$coun;$i++){
                  if($i == $_POST['sid']){
                    $row2 = mysqli_fetch_assoc($data);
                    echo $row2['id'];
                    $str = "store" . $row2['id'];
                  $add = mysqli_query($conn,"UPDATE $str SET storeName='$_POST[storeName]',storeLogo='$_POST[storeLogo]',cat='$_POST[cat]',subCat='$_POST[subCat]',proName='$_POST[proName]',material='$_POST[material]',size='$_POST[size]',shortDis='$_POST[shortDis]',fullDis='$_POST[fullDis]',color='$_POST[color]',price='$_POST[price]',discount='$_POST[disc]',newPrice='$_POST[nPrice]',delPol='$_POST[delPol]',retPol='$_POST[retPol]',storeNameAR='$_POST[storeNameAR]',catAR='$_POST[catAR]',subCatAR='$_POST[subCatAR]',proNameAR='$_POST[proNameAR]',materialAR='$_POST[materialAR]',shortDisAR='$_POST[shortDisAR]',fullDisAR='$_POST[fullDisAR]',delPolAR='$_POST[delPolAR]',retPolAR='$_POST[retPolAR]' WHERE id='$_POST[uid]'");
                  mysqli_query($conn,$add);
                }else{
                  continue;
                }
              }
              
              }
              
                ?>">
             <div class="col-md-12">
                         
                         <label class="bmd-label-floating" style="color:black; font-size:20px">Enter required information</label>
                    
                     </div>
                <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="bmd-label-floating">Store ID</label>
                            <input type="number" min="1" name="sid" class="form-control" required>
                          </div>
                        </div>
                        
                       
                      </div>
                <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="bmd-label-floating">Product ID</label>
                            <input type="number" min="1" name="uid" class="form-control" required>
                          </div>
                        </div>
                        
                       
                      </div>
                      <div class="col-md-12">
                         
                         <label class="bmd-label-floating" style="color:black; font-size:20px">Edit information</label>
                    
                     </div>
                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="bmd-label-floating">Store Name</label>
                            <input type="text" name="storeName" class="form-control" required>
                          </div>
                        </div>
                        
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="bmd-label-floating">Store Logo (127 x 127)</label>
                            <input type="text" name="storeLogo" class="form-control" placeholder="" required>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
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
                        <div class="col-md-6">
                          <div class="form-group">
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
                        
                      </div>


                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Product Name</label>
                          <input name="proName" type="text" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Product Material</label>
                          <input name="material" type="text" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Product Size</label>
                          <input name="size" type="text" class="form-control" required>
                        </div>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">

                          <label class="bmd-label-floating">Short Description</label>
                          <input name="shortDis" type="text" class="form-control" required>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
  
                            <label class="bmd-label-floating">Full Description</label>
                            <textarea name="fullDis" cols="200" rows="2" class="form-control" required></textarea>
                          </div>
                        </div>
                      </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Colors</label>
                          <input name="color" type="color" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Price</label>
                          <input name="price" type="text" class="form-control" required>
                        </div>
                      </div>
                      
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="bmd-label-floating">Discount Value</label>
                            <input name="disc" type="text" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="bmd-label-floating">New Price</label>
                            <input name="nPrice" type="text" class="form-control">
                          </div>
                        </div>
                        
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
  
                            <label class="bmd-label-floating">Delivery Policy </label>
                            <textarea name="delPol" cols="200" rows="2" class="form-control" required></textarea>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
  
                            <label class="bmd-label-floating">Return Policy</label>
                            <textarea name="retPol" cols="200" rows="2" class="form-control" required></textarea>
                          </div>
                        </div>
                      </div><br><br><br>

                      <div class="card-header card-header-info">
                        <h4 class="card-title">Add New Product (AR)</h4>
                        <p class="card-category">Enter Arabic Product Information</p>
                      </div><br>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="bmd-label-floating">Store Name (AR)</label>
                            <input name="storeNameAR" type="text" class="form-control" required>
                          </div>
                        </div>
                        
                        
                      </div>
            
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="bmd-label-floating">Category (AR)</label>
                            <select name="catAR" class="form-control">
                                <option>Select --</option>
                                <option>ملابس</option>
                                <option>احذية</option>
                                <option>حقائب</option>
                                <option>اكسسوارات</option>
                                <option>اداوات تجميل</option>
                                <option>اكسسوارات هواتف</option>
                                <option>صناعات يدوية</option>
                                <option>فنون</option>
                                <option>عطور</option>
                                <option>العاب</option>
                              </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="bmd-label-floating">Sub Catecory (AR)</label>
                            <select name="subCatAR" class="form-control">
                                <option>Select --</option>
                                <option>الاناث</option>
                                <option>الذكور</option>
                                <option>الاطفال</option>
                                <option>الكل</option>
                                <option>صناعات يدوية</option>
                                <option>اكسسوارات الالعاب</option>
                                <option>تماثيل</option>
                              </select>
                          </div>
                        </div>
                        
                      </div>
            
            
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Product Name (AR)</label>
                          <input name="proNameAR" type="text" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Product Material (AR)</label>
                          <input name="materialAR" type="text" class="form-control" required>
                        </div>
                      </div>
                      
                    </div>
                    
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
            
                          <label class="bmd-label-floating">Short Description (AR)</label>
                          <input name="shortDisAR" type="text" class="form-control" required>
                        </div>
                      </div>
                    </div>
            
                    <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
            
                            <label class="bmd-label-floating">Full Description (AR)</label>
                            <textarea name="fullDisAR" cols="200" rows="2" class="form-control" required></textarea>
                          </div>
                        </div>
                      </div>
            
                  
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
            
                            <label class="bmd-label-floating">Delivery Policy (AR)</label>
                            <textarea name="delPolAR" cols="200" rows="2" class="form-control" required></textarea>
                          </div>
                        </div>
                      </div>
            
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
            
                            <label class="bmd-label-floating">Return Policy (AR)</label>
                            <textarea name="retPolAR" cols="200" rows="2" class="form-control" required></textarea>
                          </div>
                        </div>
                      </div>
                      
                      

                      


                    
                    <button name="edit" type="submit" class="btn btn-info pull-right">Edit</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>

            
            
          </div>
          <div class="col-md-8">
            <div class="card">
              <div class="card-header card-header-info">
                <h4 class="card-title">Delete Product</h4>
                <p class="card-category">Enter Product ID</p>
              </div>
              <div class="card-body">
              <form  class="personal-information" method="post" action="<?php
                include ("linkToDB.php");
                if(isset($_POST['del'])){
                  $data = mysqli_query($conn,"SELECT * FROM stores");
                  $coun = mysqli_num_rows($data);

                for($i=1;$i<=$coun;$i++){
                  if($i == $_POST['sid']){
                    $row2 = mysqli_fetch_assoc($data);
                    echo $row2['id'];
                    $str = "store" . $row2['id'];
                  $add = mysqli_query($conn,"DELETE FROM $str WHERE id = '$_POST[uid]'");
                  mysqli_query($conn,$add);
                }else{
                  continue;
                }
              }
              
              }
              
                ?>">
                <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="bmd-label-floating">Store ID</label>
                            <input type="number" min="1" name="sid" class="form-control" required>
                          </div>
                        </div>
                        
                       
                      </div>
                  <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">

                          <label class="bmd-label-floating">ID</label>
                          <input type="number" min="1" name="uid"  class="form-control" required>
                        </div>
                      </div>
                    </div>

                 

                    


                  <button name="del" type="submit" class="btn btn-warring pull-right">Delete</button>
                  <div class="clearfix"></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
         
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made  by
            <a href="#" target="_blank">Clever Mind</a> POB.
          </div>
        </div>
      </footer>
    </div>
  </div>
  
  <!--   Core JS Files   -->
  <script>
    function showList(){
      var list = document.getElementById('subList');
      list.classList.toggle("show");
    }
  </script>
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="../assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="../assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="../assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="../assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="../assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="../assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="../assets/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
</body>

</html>