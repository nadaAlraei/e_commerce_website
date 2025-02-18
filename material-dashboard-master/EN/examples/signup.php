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
</head>

<body class="">
  <div class="wrapper ">

    <div class="main-panel" style="margin-right: 5%;">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Sign Up</h4>
                  <p class="card-category">Enter Your Information</p>
                </div>
                <div class="card-body">
                <form class="personal-information" method="post" action="<?php
                include ("linkToDB.php");
                if(isset($_POST['add'])){
                  if($_POST['pass'] == $_POST['pass2']){
                  $add = mysqli_query($conn,"INSERT INTO stores(storeName, storeLogo, email,pass, phone, username, wall,card,addr,cat,subCat) VALUES ('$_POST[storeName]','$_POST[storeLogo]','$_POST[email]','$_POST[pass]','$_POST[phone]','$_POST[username]','$_POST[wal]','$_POST[card]','$_POST[map]','$_POST[cat]','$_POST[subCat]')");
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
                } header("location:login.php");
                }
                else {
                  echo "sssssssssss";
                }

                }
                ?>">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input type="text" name="username" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Phone Number</label>
                          <input type="tel" name="phone" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email address</label>
                          <input type="email" name="email" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Store Name</label>
                          <input type="text" name="storeName" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Store Logo (127 x 127)</label>
                          <input type="text" name="storeLogo" class="form-control" placeholder="">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">

                          <label class="bmd-label-floating">Shipping Adress (copy URL from Google Map)</label>
                          <input name="map" type="text" class="form-control">
                          <a href="https://www.google.jo/maps?hl=ar" target="_blank">Google Map</a>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Wallet or Bank IBAN</label>
                          <input name="wal" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Card name Req(First+Second+Third+Fourth)</label>
                          <input name="card" type="text" class="form-control">
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
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="bmd-label-floating">Password</label>
                            <input name="pass" type="password" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="bmd-label-floating">Re-Password</label>
                            <input name="pass2" type="password" class="form-control">
                          </div>
                        </div>
                        
                      </div>


                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                            <input type="checkbox" required>
                          <label>I agree on the terms.</label>
                          
                        </div>
                      </div>
                    </div>
                    <button name="add" type="submit" class="btn btn-primary pull-right">Create Account</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar"style="width: 30%;">
                  <a href="javascript:;">
                    <p ><br>Website<br> Logo</p>
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">Zonan</h6>
                  <h4 class="card-title">Admin Store</h4>
                  <p class="card-description">
                    Display your products <br> whatever their category <br> and earn more profits
                  </p>
                  
                </div>
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
</body>

</html>