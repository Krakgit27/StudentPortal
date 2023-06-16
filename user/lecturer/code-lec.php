<?php 
include('security-lec.php');

if (isset($_POST['login_btn'])) {
         $lect_username=$_POST['lect_username'];
         $password=$_POST['password']; 
         $query="SELECT * FROM  lecturer WHERE lect_username='$lect_username' AND password='$password' ";
         $query_run=mysqli_query($connection,$query);

         if (mysqli_fetch_array($query_run)){
             $_SESSION['lect_username']=$lect_username;
             header('Location:index.php');
         }
         else{
            $_SESSION['status']='username or password is invalid';
             header('Location:login-lec.php');
          }
  }


?>  