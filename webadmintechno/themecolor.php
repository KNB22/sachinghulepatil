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
            <li>Theme Color</li>
         </ul>
      </div>
   </div>
   <!-- /page header -->
      <!-- Content area -->
    <div class="content">
		<div class="panel panel-white">
				<div class="panel-heading">
					<h6 class="panel-title">Theme Color</h6>
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
							<div class="col-md-2" style="margin-top: 8px;"><label>Select Color : </label></div>
						     <div class="col-md-10">
								  <div class="col-md-2">	
									 <div class="checkbox">
									   <label>
										<div class="checker">
										<input type="radio" class="styled" value="Pink" <?php if(($themecolor == 'Pink')) echo("checked=true"); ?> name="themecolor" id="themecolor1">
										</div>
										Pink
									   </label>
									 </div>	
								 </div>
								 <div class="col-md-3">	
									 <div class="checkbox">
									   <label>
										<div class="checker">
										<input type="radio" class="styled" value="Green" <?php if(($themecolor == 'Green')) echo("checked=true"); ?> name="themecolor" id="themecolor2">
										</div>
										Yellow Green
									   </label>
									 </div>	
								 </div> 
								 <div class="col-md-2">	
									 <div class="checkbox">
									   <label>
										<div class="checker">
										<input type="radio" class="styled" value="Orange" <?php if(($themecolor == 'Orange')) echo("checked=true"); ?> name="themecolor" id="themecolor3">
										</div>
										Orange
									   </label>
									 </div>	
								 </div> 
								 <div class="col-md-2">	
									 <div class="checkbox">
									   <label>
										<div class="checker">
										<input type="radio" class="styled" value="Jade Green" <?php if(($themecolor == 'Jade Green')) echo("checked=true"); ?> name="themecolor" id="themecolor4">
										</div>
										 Jade green
									   </label>
									 </div>	
								 </div> 
								 <div class="col-md-2">	
									 <div class="checkbox">
									   <label>
										<div class="checker">
										<input type="radio" class="styled" value="Blue" <?php if(($themecolor == 'Blue')) echo("checked=true"); ?> name="themecolor" id="themecolor4">
										</div>
										 Blue
									   </label>
									 </div>	
								 </div>
								 <div class="col-md-2">	
									 <div class="checkbox">
									   <label>
										<div class="checker">
										<input type="radio" class="styled" value="Purple" <?php if(($themecolor == 'Purple')) echo("checked=true"); ?> name="themecolor" id="themecolor5">
										</div>
										 Purple
									   </label>
									 </div>	
								 </div>
								 <div class="col-md-2">	
									 <div class="checkbox">
									   <label>
										<div class="checker">
										<input type="radio" class="styled" value="Yellow" <?php if(($themecolor == 'Yellow')) echo("checked=true"); ?> name="themecolor" id="themecolor6">
										</div>
										 Yellow
									   </label>
									 </div>	
								 </div>
								
							 </div>
							 <div class="col-md-2 col-md-offset-5">	
								 <br>
								 <input type="submit" name="addcolor" value="Change" class="btn btn-primary active" style="width:90%;margin-top:6px" title="Submit Form">
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