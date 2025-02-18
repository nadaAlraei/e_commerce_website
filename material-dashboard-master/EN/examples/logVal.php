
<?php
 session_start();
include('linkToDB.php');
  



    if(isset($_POST['login'])){
        $data = mysqli_query($conn, 'SELECT * FROM stores');
        while ($row = mysqli_fetch_assoc($data)){
            if(($_POST['email'] == $row['email']) &&
            ($_POST['pass'] == $row['pass'])) {
                $_SESSION['email'] = $row['email'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['storeName'] = $row['storeName'];
                
                header("location: dashboard.php");
        }
        
        }
    }
     
 

 
?>


