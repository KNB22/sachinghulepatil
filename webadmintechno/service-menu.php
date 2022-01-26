<?php
    include("include/header.php");	  
?>
<!-- Main content -->
<div class="page-container">
    <!-- Page header -->
   <div class="page-header page-header-default">
      <div class="breadcrumb-line">
         <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
         <ul class="breadcrumb">
            <li>Service Menu Setting</li>
         </ul>
      </div>
   </div>
   <!-- /page header -->
      <!-- Content area -->
    <div class="content">
		<div class="panel panel-white">
				<div class="panel-heading">
					<h6 class="panel-title">Service Menu Setting</h6>
					<div class="heading-elements">
					   <ul class="icons-list">
						  <li><a data-action="collapse"></a></li>
						  <li><a data-action="reload"></a></li>
						  <li><a data-action="close"></a></li>
					   </ul>
					</div>
				</div>
			    
				<div class="panel-body">
				        <form class="" action="dbfile.php" method="POST">
						     <?php 
								include("database.php");
								$query = "SELECT * FROM indexpage";
								$result = mysqli_query($mysqli,$query)or die(mysqli_error());
								if($row = mysqli_fetch_array($result))
								{
									extract($row);
								}
							 ?>
							<input type="hidden" name="id" value="<?php echo $id;?>">
							<div class="col-md-2" style="margin-top: 8px;"><label>Select Menu Name : </label></div>
						     <div class="col-md-10">
								  <div class="col-md-2">	
									 <div class="checkbox">
									   <label>
										<div class="checker">
										<input type="radio" class="styled" value="Services" <?php if(($servicemenu == 'Services')) echo("checked=true"); ?> name="servicemenu" id="servicemenu1">
										</div>
										Services
									   </label>
									 </div>	
								 </div>
								 <div class="col-md-3">	
									 <div class="checkbox">
									   <label>
										<div class="checker">
										<input type="radio" class="styled" value="Products" <?php if(($servicemenu == 'Products')) echo("checked=true"); ?> name="servicemenu" id="servicemenu2">
										</div>
										Products
									   </label>
									 </div>	
								 </div> 
							 </div>
							 <div class="col-md-2 col-md-offset-5">	
								 <br>
								 <input type="submit" name="addmenu" value="Change" class="btn btn-primary active" style="width:90%;margin-top:6px" title="Submit Form">
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