<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 

?>

<div class="container-fluid">
	
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">EDIT Register Officer	
		</div>
		<div class="card-body">
		 <?php 
		 $connection=mysqli_connect("localhost","root","","studentportal"); 
            if(isset($_POST['edit_btn']))
    {
       $RO_ID=$_POST['edit_id'];
      	
      $query="SELECT * FROM registerofficer where RO_ID='$RO_ID' ";
      $query_run=mysqli_query($connection,$query); 
       foreach($query_run as $row){
       	    ?>
            <form action="code.php" method="POST">
                <input type="hidden" name="edit_id" value="<?php echo $row['RO_ID']?>">
			<div class="form-group">
                <label> Fullname </label>
                 <input type="text" name="edit_fullname" value="<?php echo $row['FullName']?>" class="form-control" >
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="edit_username" value="<?php echo $row['RO_username']?>" class="form-control" >
            </div>
            <a href="register.php" class="btn btn-danger" >CANCEL</a>
            <button type="submit" name="updatebtn" class="btn btn-primary">Update</button>
            </form>
                <?php
       }
    }
		 ?>
            </div>
 </div>           
	</div>
</div>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>