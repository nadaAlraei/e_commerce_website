<?php
 session_start();
include('linkToDB.php');
  



    if(isset($_POST['add'])){
        $data = mysqli_query($conn, 'SELECT * FROM users');
        while ($row = mysqli_fetch_assoc($data)){
            if(($_POST['username'] == $row['username']) &&
            ($_POST['pass'] == $row['pass'])) {
                $_SESSION['email'] = $row['email'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['id'] = $row['id'];
                header("location: index.php");
        }
        
        }
    }
     
 

 
?>
 