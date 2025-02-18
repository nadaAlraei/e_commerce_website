<?php
 session_start();
include('linkToDB.php');
  



    if(isset($_POST['login'])){
        $data = mysqli_query($conn, 'SELECT * FROM login');
        while ($row = mysqli_fetch_assoc($data)){
            if(($_POST['username'] == $row['username']) &&
            ($_POST['pass'] == $row['pass'])) {
                header("location: dashboard.php");
        }
        
        }
    }
     
 

 
?>
 