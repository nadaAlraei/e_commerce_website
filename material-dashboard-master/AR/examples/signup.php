<!--
=========================================================
 Material Dashboard - v2.1.2
=========================================================

 Product Page: https://www.creative-tim.com/product/material-dashboard
 Copyright 2020 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/material-dashboard/blob/master/LICENSE.md)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
 <!DOCTYPE html>
 <html lang="fa" dir="rtl">
 
 <head>
   <meta charset="utf-8" />
   <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
   <link rel="icon" type="image/png" href="../assets/img/favicon1.ico">
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
   <title>
     Zonan (Admin Store)
   </title>
   <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
   <!-- Extra details for Live View on GitHub Pages -->
   <!-- Canonical SEO -->
   <link rel="canonical" href="https://www.creative-tim.com/product/material-dashboard" />
   <!--  Social tags      -->
   <meta name="keywords" content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap 4 dashboard, bootstrap 4, css3 dashboard, bootstrap 4 admin, material dashboard bootstrap 4 dashboard, frontend, responsive bootstrap 4 dashboard, free dashboard, free admin dashboard, free bootstrap 4 admin dashboard">
   <meta name="description" content="Material Dashboard is a Free Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
   <!-- Schema.org markup for Google+ -->
   <meta itemprop="name" content="Material Dashboard by Creative Tim">
   <meta itemprop="description" content="Material Dashboard is a Free Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
   <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/50/opt_md_thumbnail.jpg">
   <!-- Twitter Card data -->
   <meta name="twitter:card" content="product">
   <meta name="twitter:site" content="@creativetim">
   <meta name="twitter:title" content="Material Dashboard by Creative Tim">
   <meta name="twitter:description" content="Material Dashboard is a Free Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
   <meta name="twitter:creator" content="@creativetim">
   <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/50/opt_md_thumbnail.jpg">
   <!-- Open Graph data -->
   <meta property="fb:app_id" content="655968634437471">
   <meta property="og:title" content="Material Dashboard by Creative Tim" />
   <meta property="og:type" content="article" />
   <meta property="og:url" content="https://demos.creative-tim.com/material-dashboard/examples/dashboard.php" />
   <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/50/opt_md_thumbnail.jpg" />
   <meta property="og:description" content="Material Dashboard is a Free Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design." />
   <meta property="og:site_name" content="Creative Tim" />
   <!--     Fonts and icons     -->
   <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
   <!-- Markazi Text font include just for persian demo purpose, don't include it in your project -->
   <link href="https://fonts.googleapis.com/css?family=Cairo&amp;subset=arabic" rel="stylesheet">
   <!-- CSS Files -->
   <link href="../assets/css/material-dashboard.min.css?v=2.1.2" rel="stylesheet" />
   <link href="../assets/css/material-dashboard-rtl.min.css?v=1.1" rel="stylesheet" />
   <!-- CSS Just for demo purpose, don't include it in your project -->
   <link href="../assets/demo/demo.css" rel="stylesheet" />
   <!-- Google Tag Manager -->
   
   <!-- End Google Tag Manager -->
   <!-- Style Just for persian demo purpose, don't include it in your project -->
   <style>
     body,
     h1,
     h2,
     h3,
     h4,
     h5,
     h6,
     .h1,
     .h2,
     .h3,
     .h4 {
       font-family: "Cairo";
 
     }
 
     .subList{
       display: none;
       list-style:none;
       color: #9c27b0;
       cursor: pointer;
       margin-right:-27%;
 
     }
 
     .show{
       display: block;
     }
   </style>
 </head>
 
 <body class="">
   <!-- Extra details for Live View on GitHub Pages -->
   <!-- Google Tag Manager (noscript) -->
   
   <!-- End Google Tag Manager (noscript) -->
   <div class="wrapper ">
    
     <div class="main-panel">
      
       <div class="content">
        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-8" style="text-align: right;">
                <div class="card">
                  <div class="card-header card-header-info">
                    <h4 class="card-title">انشاء حساب </h4>
                    <p class="card-category">ادخل البيانات</p>
                  </div>
                  <div class="card-body">
                  <form method="post" action="<?php
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
                  storeLogoAR VARCHAR(500) NOT NULL,
                  

                  
                  catAR VARCHAR(500) NOT NULL , 
                  subCatAR VARCHAR(500) NOT NULL,
                  proNameAR VARCHAR(500) NOT NULL,
                  materialAR VARCHAR(500) NOT NULL,
                  sizeAR VARCHAR(500) NOT NULL,
                  shortDisAR VARCHAR(500) NOT NULL,
                  fullDisAR VARCHAR(500) NOT NULL,
                  colorAR VARCHAR(500) NOT NULL,
                  priceAR VARCHAR(500) NOT NULL,
                  discountAR VARCHAR(500) NOT NULL,
                  newPriceAR VARCHAR(500) NOT NULL,
                  delPolAR VARCHAR(500) NOT NULL,
                  retPolAR VARCHAR(500) NOT NULL,
                  view VARCHAR(500) NOT NULL

                  
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
                            <label class="bmd-label-floating">اسم المستخدم</label>
                            <input name="username" type="text" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label class="bmd-label-floating">رقم الهاتف</label>
                            <input name="phone" type="tel" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="bmd-label-floating">البريد الالكتروني</label>
                            <input name="email" type="email" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="bmd-label-floating">اسم المتجر</label>
                            <input name="storeName" type="text" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="bmd-label-floating">شعار المتجر (127 x 127)</label>
                            <input name="storeLogo" type="text" class="form-control" placeholder="">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
  
                            <label class="bmd-label-floating">عنوان المتجر (انسخ URL من Google Map)</label>
                            <input name="map" type="text" class="form-control">
                            <a href="https://www.google.jo/maps?hl=ar" target="_blank">Google Map</a>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="bmd-label-floating">IBAN المحفظة او البنك</label>
                            <input name="wal" type="text" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="bmd-label-floating">اسم البطاقة(الاول+الثاني+الثالث+الرابع)</label>
                            <input name="card" type="text" class="form-control">
                          </div>
                        </div>
                        
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="bmd-label-floating">التصنيف</label>
                            <select name="cat" class="form-control">
                                <option>اختر --</option>
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
                            <label class="bmd-label-floating">التصنيف النانوي</label>
                            <select name="subCat" class="form-control">
                                <option>اختر --</option>
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
                              <label class="bmd-label-floating">كلمة السر</label>
                              <input name="pass" type="password" class="form-control">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="bmd-label-floating">اعادة كلمة السر</label>
                              <input name="pass2" type="password" class="form-control">
                            </div>
                          </div>
                          
                        </div>
  
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                                <input type="checkbox" required>
                              <label>الموافقة على الشروط والاحكام</label>
                              
                            </div>
                          </div>
                        </div>
  
                        
  
  
                      
                      <button name="add" type="submit" class="btn btn-info pull-left">انشاء</button>
                      <div class="clearfix"></div>
                    </form>
                  </div>
                </div>
              </div>

              <div class="col-md-4" style="text-align: right;">
                <div class="card card-profile">
                  <div class="card-avatar"style="width: 30%;">
                    <a href="javascript:;">
                      <p ><br>شعار<br> الصفحة</p>
                    </a>
                  </div>
                  <div class="card-body">
                    <h6 class="card-category text-gray">Zonan</h6>
                    <h4 class="card-title">Admin Store</h4>
                    <p class="card-description">
                     اعرض منتجات متجرك <br> مهما كان تصنيفها <br> واحصل على المزيد من الارباح
                    </p>
                    
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
         
       </div>
     </div>
     <script>
       function showList(){
         var list = document.getElementById('subList');
         list.classList.toggle("show");
       }
     </script>
     <!--   Core JS Files   -->
     <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
     <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
     <script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
     <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
     <!--  Google Maps Plugin    -->
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
     <!-- Place this tag in your head or just before your close body tag. -->
     <script async defer src="https://buttons.github.io/buttons.js"></script>
     <!-- Chartist JS -->
     <script src="../assets/js/plugins/chartist.min.js"></script>
     <!--  Notifications Plugin    -->
     <script src="../assets/js/plugins/bootstrap-notify.js"></script>
     <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
     <script src="../assets/js/material-dashboard.min.js?v=2.1.2" type="text/javascript"></script>
     <!-- Material Dashboard DEMO methods, don't include it in your project! -->
     <script src="../assets/demo/demo.js"></script>
     <script>
       $(document).ready(function() {
         // Javascript method's body can be found in assets/js/demos.js
         md.initDashboardPageCharts();
 
       });
     </script>
     <!-- Sharrre libray -->
     <script src="../assets/demo/jquery.sharrre.js"></script>
     <script>
       $(document).ready(function() {
 
         $('#facebook').sharrre({
           share: {
             facebook: true
           },
           enableHover: false,
           enableTracking: false,
           enableCounter: false,
           click: function(api, options) {
             api.simulateClick();
             api.openPopup('facebook');
           },
           template: '<i class="fab fa-facebook-f"></i> Facebook',
           url: 'https://demos.creative-tim.com/material-dashboard/examples/dashboard.php'
         });
 
         $('#google').sharrre({
           share: {
             googlePlus: true
           },
           enableCounter: false,
           enableHover: false,
           enableTracking: true,
           click: function(api, options) {
             api.simulateClick();
             api.openPopup('googlePlus');
           },
           template: '<i class="fab fa-google-plus"></i> Google',
           url: 'https://demos.creative-tim.com/material-dashboard/examples/dashboard.php'
         });
 
         $('#twitter').sharrre({
           share: {
             twitter: true
           },
           enableHover: false,
           enableTracking: false,
           enableCounter: false,
           buttons: {
             twitter: {
               via: 'CreativeTim'
             }
           },
           click: function(api, options) {
             api.simulateClick();
             api.openPopup('twitter');
           },
           template: '<i class="fab fa-twitter"></i> Twitter',
           url: 'https://demos.creative-tim.com/material-dashboard/examples/dashboard.php'
         });
 
         // Facebook Pixel Code Don't Delete
         ! function(f, b, e, v, n, t, s) {
           if (f.fbq) return;
           n = f.fbq = function() {
             n.callMethod ?
               n.callMethod.apply(n, arguments) : n.queue.push(arguments)
           };
           if (!f._fbq) f._fbq = n;
           n.push = n;
           n.loaded = !0;
           n.version = '2.0';
           n.queue = [];
           t = b.createElement(e);
           t.async = !0;
           t.src = v;
           s = b.getElementsByTagName(e)[0];
           s.parentNode.insertBefore(t, s)
         }(window,
           document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
 
         try {
           fbq('init', '111649226022273');
           fbq('track', "PageView");
 
         } catch (err) {
           console.log('Facebook Track Error:', err);
         }
 
       });
     </script>
     <noscript>
       <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1" />
     </noscript>
     <script>
       $(document).ready(function() {
         $().ready(function() {
           $sidebar = $('.sidebar');
           $sidebar_img_container = $sidebar.find('.sidebar-background');
 
           $full_page = $('.full-page');
 
           $sidebar_responsive = $('body > .navbar-collapse');
           sidebar_mini_active = true;
 
           window_width = $(window).width();
 
           fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();
 
           // if( window_width > 767 && fixed_plugin_open == 'Dashboard' ){
           //     if($('.fixed-plugin .dropdown').hasClass('show-dropdown')){
           //         $('.fixed-plugin .dropdown').addClass('show');
           //     }
           //
           // }
 
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
 
           $('.fixed-plugin .background-color span').click(function() {
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
 
           $('.switch-sidebar-image input').on("switchChange.bootstrapSwitch", function() {
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
 
           $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
             var $btn = $(this);
 
             if (sidebar_mini_active == true) {
               $('body').removeClass('sidebar-mini');
               sidebar_mini_active = false;
               materialDashboard.showSidebarMessage('Sidebar mini deactivated...');
             } else {
               $('body').addClass('sidebar-mini');
               sidebar_mini_active = true;
               materialDashboard.showSidebarMessage('Sidebar mini activated...');
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
         if (window_width > 767) {
           if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
             $('.fixed-plugin .dropdown').addClass('show');
             $('.fixed-plugin .dropdown-menu').addClass('show');
           }
         }
       });
     </script>
 </body>
 
 </html>