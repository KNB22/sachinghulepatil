<?php
    include("include/header.php");
	
	include('database.php');	

	$query 	  = "select * from user where username='".$uname."'";
	$result   = mysqli_query($mysqli,$query) or die(mysqli_error());
	if ($row  = mysqli_fetch_array($result)) 
	{
		extract($row);

		if(isset($_POST) && !empty($_POST))
		{
			extract($_POST);
			if($newpassword == $confirmpassword)
			{	
				$up_pass = "UPDATE user SET password ='$newpassword' WHERE username = '$username' AND password ='$oldpass'";
				$up_res = mysqli_query($up_pass);
				
				if(mysqli_affected_rows())
				{
					header("Location: index.php?action=changepassword");			
				}
				else
				{
					header("Location: changepassword.php?err=1");
				}
		    }
            else
            {
				header("Location: changepassword.php?err=2");
            }		
			
		 }
	}
	  
?>


<script type="text/javascript">
	
	function checkPass()
   {
		//Store the password field objects into variables ...
		var pass1 = document.getElementById('pass1');
		var pass2 = document.getElementById('pass2');
		//Store the Confimation Message Object ...
		var message = document.getElementById('confirmMessage');
		//Set the colors we will be using ...
		var goodColor = "#66cc66";
		var badColor = "#ff6666";
		//Compare the values in the password field 
		//and the confirmation field
		if(pass1.value == pass2.value){
			//The passwords match. 
			//Set the color to the good color and inform
			//the user that they have entered the correct password 
			pass2.style.backgroundColor = goodColor;
			message.style.color = goodColor;
			message.innerHTML = "Passwords Match!"
		}else{
			//The passwords do not match.
			//Set the color to the bad color and
			//notify the user.
			pass2.style.backgroundColor = badColor;
			message.style.color = badColor;
			message.innerHTML = "Passwords Do Not Match!"
		}
   }  
</script>
<!-- Main content -->
<div class="page-container">
    <!-- Page header -->
   <div class="page-header page-header-default">
      <div class="breadcrumb-line">
         <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
         <ul class="breadcrumb">
            <li><a href="adminpanel.php"><i class="icon-home2 position-left"></i>Home</a></li>
            <li>Change Password</li>
         </ul>
      </div>
   </div>
   <!-- /page header -->
      <!-- Content area -->
    <div class="content">
		<div class="panel panel-white">
				<div class="panel-heading">
					<h6 class="panel-title">Change Password</h6>
					<div class="heading-elements">
					   <ul class="icons-list">
						  <li><a data-action="collapse"></a></li>
						  <li><a data-action="reload"></a></li>
						  <li><a data-action="close"></a></li>
					   </ul>
					</div>
				</div>
			    
				<div class="panel-body">
				         <?php 
							$errors = array(
								1=>"Invalid old password, Try again",
								2=>"Password Not match Try again",
								);

							$error_id = isset($_GET['err']) ? (int)$_GET['err'] : 0;

							if ($error_id == 1) 
							{
								
				         ?>
						  <div class="alert alert-danger alert-bordered">
							<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
							<span class="text-semibold">Oh snap!</span> Invalid old password <a href="#" class="alert-link">Try Again</a>.
						  </div>
						<?php
						    }
							if ($error_id == 2) 
							{
						?>
						 <div class="alert alert-danger alert-bordered">
							<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
							<span class="text-semibold">Oh snap!</span> New password and Confirms Password Not Match<a href="#" class="alert-link">Try Again</a>.
						  </div>
						<?php
						    }
						?>	
				      <form class="" action="changepassword.php" method="POST">
							<div class="col-md-6 col-md-offset-2">
								<div class="form-group form-group-material">
									<label class="control-label">Old Password</label>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock"></i></span>
										<input type="password" name="oldpass" id="oldpass" class="form-control" value="" placeholder="Old Password">
									</div>
								</div> 
								<div class="form-group form-group-material">
									<label class="control-label">New Password</label>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock"></i></span>
										<input type="password" id="pass1" name="newpassword" class="form-control" value="" placeholder="New Password">
									</div>
								</div>
                                <div class="form-group form-group-material">
									<label class="control-label">Confirm Password</label>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock"></i></span>
										<input type="password" class="form-control" id="pass2" name="confirmpassword" placeholder="Confirm Password" onkeyup="checkPass(); return false;">
									</div>
									<span id="confirmMessage" class="confirmMessage"></span>
								</div> 									
							</div> 
							
							<div class="col-md-12">
							   <div class="col-md-3 col-md-offset-3">
							     <input type="submit" name="changepass" id="changepass" value="Change Password" class="btn btn-primary active" style="width:120%;" title="Change Password">
							   </div> 
							</div> 
					    </form>				
				</div> 
			 <?php include('include/footer.php')?>
		   <!-- /footer -->
		</div>
	</div>
<!-- /main content -->
</div>
<!-- /page content -->

<!-- /page container -->
</body>
</html>