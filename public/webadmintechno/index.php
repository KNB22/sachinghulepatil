<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Login</title>
      <!-- Global stylesheets -->
      <link href="./asset/css/bootstrap.css" rel="stylesheet" type="text/css">
	  <link href="./asset/css/styles.css" rel="stylesheet" type="text/css">
      <link href="./asset/css/core.css" rel="stylesheet" type="text/css">
      <link href="./asset/css/components.css" rel="stylesheet" type="text/css">
      <link href="./asset/css/colors.css" rel="stylesheet" type="text/css">
      <!-- /global stylesheets -->
	  <style>
	     .login-container .page-container .login-form {
			width: 350px;
		}
		.login-container .page-container {
            padding-top: 130px;
        }
	  </style>
   </head>
   <body class="login-container pace-done">
      <div class="pace  pace-inactive">
         <div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
            <div class="pace-progress-inner"></div>
         </div>
         <div class="pace-activity"></div>
      </div>
      <!-- Page container -->
      <div class="page-container" style="min-height:845px;background: #e7e4e485;">
         <!-- Page content -->
         <div class="page-content">
            <!-- Main content -->
            <div class="content-wrapper">
               <!-- Content area -->
               <div class="content pb-20">
                  <!-- Form with validation -->			
                  <form action="authenticate1.php" class="form-validate" novalidate="novalidate" method="post">
                     <div class="panel panel-body login-form">
                        <div class="text-center">
						   <!-- <div class="col-md-12">
						      <img src="asset/img/adc_logo.png" style="width: 55%;margin-top: -30px;">
						      <h3 style="border: 2px solid grey;">Admin</h3>
							</div>-->
                           <h5 class="content-group">Sign In</h5>
                        </div>
						  <?php if (isset($_GET['action']) && $_GET['action'] == 'error1') { ?>
						  <div class="alert alert-danger alert-bordered" id="err1">
							<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
							<span class="text-semibold">Invalid Password</span>
						  </div>
						<?php } ?>
						 <?php if (isset($_GET['action']) && $_GET['action'] == 'error') { ?>
						  <div class="alert alert-danger alert-bordered" id="err2">
							<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
							<span class="text-semibold">This is not a registered user. Please Register first.</span>
						  </div>
						<?php } ?>
				        <?php if (isset($_GET['action']) && $_GET['action'] == 'logout') { ?>					
						  <div class="alert alert-success alert-bordered" id="err3">
							<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
							<span class="text-semibold">Logout Successfully !!!</span>
						  </div>
						<?php } ?>
                        <?php if (isset($_GET['action']) && $_GET['action'] == 'changepassword') { ?>					
						  <div class="alert alert-success alert-bordered" id="err4">
							<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
							<span class="text-semibold">Password Change Successfully !!!</span>
						  </div>
						<?php } ?>  
                        <div class="form-group has-feedback has-feedback-left">
                           <input type="text" class="form-control myclass" placeholder="User Name" name="username" required="required">
                           <div class="form-control-feedback">
                              <i class="icon-user text-muted"></i>
                           </div>
                        </div>
                        <div class="form-group has-feedback has-feedback-left">
                           <input type="password" class="form-control myclass" placeholder="Password" name="password" required="required">
                           <div class="form-control-feedback">
                              <i class="icon-lock2 text-muted"></i>
                           </div>
                        </div> 
                        <div class="form-group">
                           <button type="submit" class="btn bg-blue btn-block">Sign In </button>
                        </div>
			
					  </div>
                  </form>
                  <!-- /form with validation -->
				 
               </div>
               <!-- /content area -->
            </div>
            <!-- /main content -->
         </div>
         <!-- /page content -->
      </div>
      <!-- /page container -->
   </body>
<script type="text/javascript" src="./asset/js/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
   $('.myclass').on('click', function() {
	   $('#err1').css("display","none");
	   $('#err2').css("display","none");
	   $('#err3').css("display","none");
	   $('#err4').css("display","none");
   });			
}); 	
</script>   
</html>