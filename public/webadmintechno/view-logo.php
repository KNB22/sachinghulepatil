<?php 
	include("include/header.php");
	include("database.php");

	$id = isset($_GET['id']) ? $_GET['id'] : '';
	$query = "SELECT * FROM logo where galleryid='$id'";
	$result = mysqli_query($mysqli,$query)or die(mysqli_error());
	if($row = mysqli_fetch_array($result))
	{
		extract($row);
	}
?>
<div class="content-wrapper">
   <!-- Page header -->
   <div class="page-header">
      <div class="breadcrumb-line">
         <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
         <ul class="breadcrumb">
            <li><a href="adminpanel.php"><i class="icon-home2 position-left"></i>Home</a></li>
            <li><a href="#">Logo</a></li>
            <li><a href="all-logo.php">All Logo</a></li>
		    <li><a href="#">View Logo</a></li>
         </ul>
      </div>
   </div>
   <!-- /page header -->
   <!-- Content area -->
   <div class="content">
      <!-- Simple lists -->
      <div class="row">
         <div class="panel panel-flat">
            <form  style="margin-top: 20px;">
                <div class="row">
                 	<?php
						  if(isset($galleryimg) and !empty($galleryimg))
						  {
							  $img1 = $row['galleryimg'];
							  $imgpath1 = rtrim($img1, ',');
							  $imgpath1 = ltrim($imgpath1);
							  $galleryimg = explode(',', $imgpath1 );
						  
					?>
							 <div class="row">
								<div class="col-md-12">
								   <div class="form-group col-md-2">
										<h4 class="text-semibold">Images :</h4>
								   </div>
								</div>			
								<div class="col-md-12">
								   <?php 
										foreach($galleryimg as $v)    
										{
										   $path = (isset($v) && !empty($v)) ? "dbimages/".$v : '' ;
									?>
										   <div class="col-md-4">
											   <div id="container">
												  <a href="<?php echo $path;?>" target="_blank"><img id="image" src="<?php echo $path;?>" style="width:240px;height:150px;"/></a>
											   </div>
											   <div style="margin-top:10px"></div>
										   </div>
								   <?php
										}	
									?>	
								</div>
							 </div>
					 <?php
						  }
					 ?>
                </div>
         </div>
      </div>
      </form>
      <!-- Footer -->
      <?php include('include/footer.php')?>
      <!-- /footer -->
   </div>
</div>
</div>
</div>
</body>
</html>