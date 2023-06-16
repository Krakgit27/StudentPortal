<?php 
include('security-stu.php');

if (isset($_POST['login_btn'])) {
         $stud_username=$_POST['stud_username'];
         $password=$_POST['password']; 
         $query="SELECT * FROM student WHERE stud_username='$stud_username' AND password='$password' ";
         $query_run=mysqli_query($connection,$query);

         if (mysqli_fetch_array($query_run)){
             $_SESSION['stud_username']=$stud_username;
             header('Location:index.php');
         }
         else{
            $_SESSION['status']='username or password is invalid';
             header('Location:login-STU.php');
          }
  }


?>  