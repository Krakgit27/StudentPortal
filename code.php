<?php 
include('security.php');
 if(isset($_POST['registerbtn']))
 {

 	$fullname=$_POST['fullname'];
 	$RO_username=$_POST['RO_username'];
 	$password=$_POST['password'];
    $cpassword=$_POST['confirmpassword'];
     
    if($password===$cpassword){
    	$query="INSERT INTO `registerofficer`(`FullName`, `RO_username`, `password`) VALUES ('$fullname','$RO_username','$password')";
        $query_run=mysqli_query($connection,$query);

    if ($query_run) 
    {
      $_SESSION['success']="Register Officer Added";
      header('Location:register.php');
    }
    else
    {
      $_SESSION['status']="Admin Profile Not Added";
      header('Location:register.php');
 	 }
    }
    else{
    	$_SESSION['status']='Password and Confirm Password Does Not Match';
    	header('Location:register.php');
    }
    
    }


  if (isset($_POST['updatebtn'])) {
       $RO_ID=$_POST['edit_id'];
       $fullname=$_POST['edit_fullname'];
       $RO_username=$_POST['edit_username'];

       $query="UPDATE registerofficer  SET FullName='$fullname',RO_username='$RO_username' where RO_ID='$RO_ID' ";
       $query_run=mysqli_query($connection,$query);

       if ($query_run) {
         $_SESSION['success']="Register Officer Data is Updated";
         header('Location:register.php');
       }
       else{
        $_SESSION['status']="Register Officer Data is NOT Updated";
         header('Location:register.php');
       }
  }


  if (isset($_POST['delete_btn'])) {
     $RO_ID=$_POST['delete_id'];

     $query="DELETE FROM registerofficer WHERE RO_ID='$RO_ID'";
     $query_run=mysqli_query($connection,$query);

     if ($query_run) {
         $_SESSION['success']="Your Data is DELETED";
         header('Location:register.php');
     }
     else{
        $_SESSION['status']="Your Data is NOT DELETED";
         header('Location:register.php');
     }
  }
    
?>