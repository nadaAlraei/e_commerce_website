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

  <style>
    .subhint{
      display: none;
      color: white;
      background-color: rgb(66, 57, 57);
      width: 15%;
      text-align: center;
      height: 5%;
    }

    .show{
    display: block;
    }

  </style>
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
          <li>
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

          <li >
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

          <li class="active">
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
            <a class="navbar-brand" href="javascript:;">Orders</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
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
      <?php
        include ("linkToDB.php");
        $data = mysqli_query($conn,"SELECT * FROM Users");
        $coun = mysqli_num_rows($data);
        for($i=1;$i<=$coun;$i++){
        $str = "User" . $i;
        
          echo "<div class='row'>
          <div class='col-md-12'>
            <div class='card'>
            <div class='card-header'>
                <h6 class='card-title' style='float:right;'> <a href='Orders.php'>View All</a>  </h6>
               
                <h6 class='card-title' style='float:left; cursor: pointer;'><a onclick='ExportToExcel('table')'><img src='../assets/img/down.png' width='20px' height='20px'></a> 
                  </h6>
              
              </div>
              <div class='card-header'>
                <h6 class='card-title'> User ID ";
                $row2 = mysqli_fetch_assoc($data);
                echo $row2['id'];
                $str = "User" . $row2['id'];
                 echo "</h6>
              </div>
              <div class='card-body'>
                <div class='table-responsive'>
                 
                  <table class='table'>
                    <thead class=' text-primary'>
                    <th>
                    Order ID
                 </th>
               <th>
                Customer name
               </th>
               <th>
                 Customer Phone Number
               </th>
               <th>
                 Product Name
               </th>
               <th>
                 Order Category
               </th>
               <th>
                 Order sub Category
                </th>
                <th>
                 QTY
               </th>
               <th>
                 Total
                </th>
                    </thead>
                    <tbody>";
                    $data2 = mysqli_query($conn,"SELECT * FROM $str WHERE type='order2'");
       while($row = mysqli_fetch_assoc($data2)){
        
                     echo" <tr>
                    
                      <td>
                      $row[uid]
                      </td>
                      <td>
                      $row2[fName] $row2[lName]
                      </td>
                      <td>
                      $row2[phone]
                      </td>
                      <td>
                      $row[proName]
                      </td>
                      <td>
                      $row[cat]
                      </td>
                      <td>
                      $row[subCat]
                      </td>
                      <td>
                      $row[stock]
                      </td>
                      <td>
                      $row[qty]
                      </td>
                      <td>
                      $row[tot]
                      </td>
                          
                       
                      </tr>";
                   }
                    echo "</tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

        </div>";
}
        ?>
        


      </div>

    </div>
  </div>
  <script type="text/javascript">
    function ExportToExcel(mytblId){
           var htmltable= document.getElementById('table');
           var html = htmltable.outerHTML;
           window.open('data:application/vnd.ms-excel,' + encodeURIComponent(html));
        }
    </script>

  <script>
    function hint(){
      var hints = document.getElementById("subhint");
      hints.classList.toggle("show");
    }
  </script>
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
