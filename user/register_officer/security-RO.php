<?php 
 session_start();
  include('../../database/db.php');
  
  if ($connection) {
	 //echo "database connected";
    }

   else{
   	header('Location:database/db.php');
   }
    
  if(!$_SESSION['RO_username'])
   {
      header('Location:login-RO.php');
   }
  

?>