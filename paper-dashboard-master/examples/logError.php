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

<body class="" style=" background-color:#f4f3ef; ">
  <div class="wrapper ">

    <div  style="padding-top: 10%; padding-left: 5%; padding-right: 5%;">
     
      <div class="content">
        <div class="row">
          <div class="col-md-4">
            <div class="card" style="height: 96%;">
                <div  style="width: 80%; height: 25%; text-align: center; margin-top: 40%; padding-top: 10%; border-radius: 50%; margin-left: 11%; box-shadow: 0 6px 10px -4px #51cbce;">
                    <img src="../assets/img/logo-dark.jpg">
                  </div>
              <h2 style="margin-top: 10%; margin-left: 38%; font-weight: bold;">Login</h2>
              
            </div>
            
          </div>
          <div class="col-md-8">
            <div class="card card-user" >
              <div class="card-header">
                <img src="../assets/img/account.png" style="width: 20%; margin-left: 38%;">
                <h3 style="color: red; font-size:12px; margin-left: 33%; margin-top:3%;" >Incorrect Username or Password !!! <b>Retry</b></h3>
              </div>

              <div class="card-body" >
                <form action="logVal.php" method="post">
                 
                  <div class="row">
                    
                   
                      <div class="form-group" style="margin-left: 10%; width: 80%;">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Username">
                      </div>
                    
                    
                  </div>
                  <div class="row">
                   
                      <div class="form-group"  style="margin-left: 10%; width: 80%;">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="password" name="pass" class="form-control" placeholder="Password">
                      </div>
                    </div>
                  
                  
                  
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <input type="submit" name="login" class="btn btn-primary btn-round" value="Login">
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
</body>

</html>