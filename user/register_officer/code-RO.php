<?php 
include('security-RO.php');

if (isset($_POST['login_btn'])) {
         $RO_username=$_POST['RO_username'];
         $password=$_POST['password']; 
         $query="SELECT * FROM registerofficer  WHERE RO_username='$RO_username' AND password='$password' ";
         $query_run=mysqli_query($connection,$query);

         if (mysqli_fetch_array($query_run)){
             $_SESSION['RO_username']=$RO_username;
             $_SESSION['role'] = 'register officer';
             header('Location:index.php');
         }
         else{
            $_SESSION['status']='username or password is invalid';
             header('Location:login-RO.php');
          }
  }


?>  