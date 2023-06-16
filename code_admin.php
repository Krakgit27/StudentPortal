<?php 
include('security.php');

if (isset($_POST['login_btn'])) {
         $admin_username=$_POST['admin_username'];
         $password=$_POST['password']; 
         $query="SELECT * FROM  administrator WHERE admin_username='$admin_username' AND password='$password' ";
         $query_run=mysqli_query($connection,$query);

         if (mysqli_fetch_array($query_run)){
             $_SESSION['admin_username']=$admin_username;
             header('Location:index.php');
         }
         else{
            $_SESSION['status']='username or password is invalid';
             header('Location:login.php');
          }
  }


?>  