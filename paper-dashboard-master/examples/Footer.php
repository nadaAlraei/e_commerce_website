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
          <li  class="active">
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
            <a class="navbar-brand" href="javascript:;">Footer</a>
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
      <div class="content" >
        <div class="row">
          <div class="col-md-12">
            <div class="card"  style="width: 100%;">
              
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th style="width: 2%;">
                       Website Logo
                      </th>
                      <th style="width: 2%;">
                        SLogen
                      </th>
                      <th style="width: 2%;">
                        Facebook
                      </th>
                      <th style="width: 2%;">
                        Inestagram
                      </th>
                      <th style="width: 2%;">
                        Whats app
                       </th>
                      <th style="width: 3%;">
                        Edit
                      </th>
                    </thead>
                    <tbody>
                      <?php
                      include ("linkToDB.php");
                      $data = mysqli_query($conn,"SELECT * FROM footer");
                      while ($row = mysqli_fetch_assoc($data)){
                        echo '<tr>
                        <td>';
                        echo  $row['webLogo'];
                        echo '</td>
                        <td>';
                        echo $row['slog'];
                        echo'</td>
                        <td>';
                        echo $row['fac'];
                        echo '</td>
                        <td>';
                        echo $row['ins'];
                         echo '</td>
                          <td>';
                          echo   $row['what'];
                          echo '</td>
                              <td>
                                <a href="footerEdit.php"><img src="../assets/img/edit.png" width="20px" height="20px"></a>
                              </td>
                              
                              
                      </tr>';
                      }
                      ?>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

        </div>


        <div class="row">
            <div class="col-md-12">
              <div class="card" style="width:100%">
                
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th style="width: 3%;">
                            Security Title
                          </th>
                         <th style="width: 3%;">
                          Security Image
                         </th>
                         <th style="width: 3%;">
                           Security Description 1
                         </th>

                         <th style="width: 3%;">
                            Security Description 2
                          </th>

                          <th style="width: 3%;">
                            Security Description 3
                          </th>
                          <th style="width: 3%;">
                            Security Description 4
                          </th>
                          <th style="width: 3%;">
                           Security Description Arabic 1 
                         </th>

                         <th style="width: 3%;">
                            Security Description Arabic 2
                          </th>

                          <th style="width: 3%;">
                            Security Description Arabic 3
                          </th>
                          <th style="width: 3%;">
                            Security Description Arabic 4
                          </th>
                        <th style="width: 2%;">
                          Edit
                        </th>
                      </thead>
                      <tbody>
                        <?php 
                        include ('linkToDB.php');
                        $data = mysqli_query($conn,"SELECT * FROM sec");
                        $row = mysqli_fetch_assoc($data);
                        echo '<tr><td>';
                        echo $row['title'];
                        echo '</td><td>';
                        echo $row['img'];
                        echo '</td><td>';
                        echo $row['dis1'];
                        echo '</td><td>';
                        echo $row['dis2'];
                        echo '</td><td>';
                        echo $row['dis3'];
                        echo '</td><td>';
                        echo $row['dis4'];
                        echo '</td><td>';
                        echo $row['dis1AR'];
                        echo '</td><td>';
                        echo $row['dis2AR'];
                        echo '</td><td>';
                        echo $row['dis3AR'];
                        echo '</td><td>';
                        echo $row['dis4AR'];
                        echo '</td>
                         
                                <td>
                                  
                                  <a href="secEdit.php"><img src="../assets/img/edit.png" width="20px" height="20px"></a>
                                </td>
                                
                                
                        </tr>';
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
  
          </div>


          <div class="row">
            <div class="col-md-12">
              <div class="card">
                
                <div class="card-body">
                 
                  <div class="table-responsive"> 
                    <span style="float: right;">
                    <a href="addFqa.php">Add New FQA</a>
                   </span>
                    <table class="table">
                      <thead class=" text-primary">
                    <th  style="width: 3%;">ID</th>
                         <th style="width: 3%;">
                          Question 
                         </th>
                         <th style="width: 3%;">
                          Answer
                        </th>
                        <th style="width: 3%;">
                          Question Arabic
                         </th>
                         <th style="width: 3%;">
                          Answer Arabic
                        </th>
                        <th style="width: 3%;">
                         
                        </th>
                        
                      </thead>
                      <tbody>
                        <?php 
                        include ("linkToDB.php");
                        $data = mysqli_query($conn,"SELECT * FROM fqa");
                        while ($row = mysqli_fetch_assoc($data)){
                          echo '<tr><td>';
                          echo $row['id'];
                          echo '</td><td>';
                          echo $row['qus'];
                          echo '</td><td>';
                          echo $row['ans'];
                          echo '</td><td>';
                          echo $row['qusAR'];
                          echo '</td><td>';
                          echo $row['ansAR'];
                          
                          echo '</td>
                                <td>
                                  <a href="fqaEdit.php"><img src="../assets/img/edit.png" width="20px" height="20px"></a>
                                  <a href="fqaDel.php"><img src="../assets/img/del.png" width="20px" height="20px"></a>
                                </td>
                                
                                
                        </tr>';
                        }
                        ?>
                        
                             
                              
                                  
                                
                      </tbody>
                    </table>
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
