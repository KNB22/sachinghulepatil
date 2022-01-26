<?php 
include("include/header.php");
include("database.php");

$id = isset($_GET['id']) ? $_GET['id'] : '';
$query = "SELECT * FROM subservices where subserviceid='$id'";
$result = mysqli_query($mysqli,$query)or die(mysqli_error());
if($row = mysqli_fetch_array($result))
{
	extract($row);
	$fserviceid = $serviceid;
}
?>
<!-- Main content -->
<div class="page-container">
<!-- Page header -->
<div class="page-header page-header-default">
   <div class="breadcrumb-line">
      <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
      <ul class="breadcrumb">
         <li><a href="adminpanel.php"><i class="icon-home2 position-left"></i> Home</a></li>
         <li><a href="#">Service/Product</a></li>
         <li><a href="all-service.php">All Service/Product</a></li>
         <li class="">View Sub Service/Product</li>
      </ul>
   </div>
</div>
<!-- /page header -->
<!-- Content area -->
<div class="content">
<!-- Wizard with validation -->
<div class="panel panel-white">
<div class="panel-heading">
   <h6 class="panel-title">View Sub Service/Product</h6>
   <div class="heading-elements">
      <ul class="icons-list">
         <li><a data-action="collapse"></a></li>
         <li><a data-action="reload"></a></li>
         <li><a data-action="close"></a></li>
      </ul>
   </div>
</div>
<div class="panel-body">
   <form  action="dbfile.php"  method="post" enctype="multipart/form-data">
    <input type="hidden" name="subserviceid" value="<?php echo $subserviceid;?>">
   <fieldset>
      <div class="row">
	      <div class="col-md-6">
			 <div class="form-group">
				<?php
					include("database.php");
					$query_dis = "select servicename,serviceid from services";
					$result_dis = mysqli_query($mysqli,$query_dis);  
					while($row11 = mysqli_fetch_array($result_dis))
					{
						extract($row11);	
					}
				?>						
				<input type="text" name="serviceid" id="serviceid" value="<?php echo $servicename;?>" class="form-control " placeholder="Service/Product Name" readonly>
				<label style="color: green;">Select Sub Service/Product: <span class="text-danger">*</span></label>
			 </div>
		 </div>
	     <div class="col-md-6">
            <div class="form-group">
               <input type="text" name="subservicename" id="subservicename" value="<?php echo $subservicename;?>" class="form-control " placeholder="Sub Service/Product Name" readonly>
               <label>Sub Service/Product Name: </label>
            </div>
         </div>
		
		<div class="row">
			<div class="col-md-12">
			   <div class="col-md-12"><h4 class="text-semibold">Sub Service/Product Photo:</h4></div>
			   <div class="form-group col-md-12">
					<?php
					   if (isset($row['image']) && !empty($row['image'])) 
					   {
						 $fpic1 = $row['image'];	
						 $fphoto1 = "dbimages/".$row['image'];	
					
					 ?>
						<div class="col-md-4" id="divphoto1">
						  <div id="container">
							  <img id="image" src="<?php echo $fphoto1;?>" style="width: 240px;height: 150px;"/>
						   </div>
						</div>  
					<?php
						   }
					?>	
			   </div>
			  </div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
			   <input type="text" name="salttag" id="salttag" value="<?php echo $salttag;?>" class="form-control" placeholder="Image Alt Tag" readonly>
			   <label>Image Alt Tag: </label>
			</div>
		 </div>
		 <div class="col-md-6">
			<div class="form-group">
			   <input type="text" name="stitle" id="stitle" value="<?php echo $stitle;?>" class="form-control" placeholder="Image Title" readonly>
			   <label>Image Title : </label>
			</div>
		 </div> 
		 <div class="col-md-12">
			<div class="form-group">
			   <input type="text" name="sdescription" id="sdescription" value="<?php echo $sdescription;?>" class="form-control" placeholder="Image Description" readonly>
			   <label>Image Description : </label>
			</div>
		 </div>
        <div class="col-md-12">
            <div class="form-group">
               <textarea type="text" name="description" id="description" rows="12" class="form-control" placeholder="Description" readonly><?php echo $description;?></textarea>
               <label>Description-Paragraph1 : </label>
            </div>
        </div>	
         <div class="col-md-12">
            <div class="form-group">
               <textarea type="text" name="description1" id="description1" rows="12" class="form-control" placeholder="Description" readonly><?php echo $description1;?></textarea>
               <label>Description-Paragraph2 : </label>
            </div>
        </div>	
		<div class="row">
			<div class="col-md-12">
			   <div class="form-group col-md-4">
					<h4 class="text-semibold">Other Sub Service Images :</h4>
			   </div>
			</div>			
			<div class="col-md-12" id="imagedivid">
			   <?php 
					if (!empty($row['serviceimg'])) 
					{
						$img1 = $row['serviceimg'];
						$imgpath1 = rtrim($img1, ',');
						$imgpath1 = ltrim($imgpath1);
						$serviceimg	 = explode(',', $imgpath1 );
						if(!empty($serviceimg[0]))
						{	
				?>
			  <div class="col-md-4">
				  <div id="container">
					  <img id="image" src="<?php echo (isset($serviceimg[0]) && (!empty($serviceimg[0]))) ? 'dbimages/'.$serviceimg[0] : ''; ?>" style="width: 240px;height: 150px;"/>
					
				   </div>
			  </div>
				<?php	
						}
						array_shift($serviceimg	);
						foreach($serviceimg as $v)    
						{
						   $path = (isset($v) && !empty($v)) ? "dbimages/".$v : '' ;
				?>
			   <div class="col-md-4">
				   <div id="container">
					  <img id="image" src="<?php echo("$path"); ?>" style="width: 240px;height: 150px;"/>
					 
				   </div>
			   </div>
			   <?php
						}	
					}	
				?>	
			</div>
			
		</div><br>
		<div class="col-md-6">
			<div class="form-group">
			   <input type="text" name="serviceimgtitle" id="serviceimgtitle" value="<?php echo $serviceimgtitle;?>" class="form-control" placeholder="Other Image Title" readonly>
			   <label>Other Image Title</label>
			</div>
		 </div>
		
        <div class="col-md-12">
		       <h5><u>SEO</u></h5>
		 </div>
		 <div class="col-md-4">
			<div class="form-group">
			   <textarea type="text" name="seotitle" id="seotitle" rows="4" readonly class="form-control" placeholder="Title"><?php echo $seotitle;?></textarea>
			   <label>Title : </label>
			   <div id="textarea_feedback" style="color:red"></div>	
			</div>
		 </div>
		 <div class="col-md-4">
			<div class="form-group">
			   <textarea type="text" name="seodesc" id="seodesc" rows="4" readonly class="form-control" placeholder="Description"><?php echo $seodesc;?></textarea>
			   <label>Description : </label>
			   <div id="textarea_feedback1" style="color:red"></div>	
			</div>
		 </div>
		 <div class="col-md-4">
			<div class="form-group">
			   <textarea type="text" name="seokeyword" id="seokeyword" readonly rows="4" class="form-control" placeholder="Keywords"><?php echo $seokeyword;?></textarea>
			   <label>Keywords : </label>
			</div>
		 </div>		
      </div>
   </fieldset>
   </form>
</div>
</div>
</div>

   <!-- /footer -->
   <?php include('include/footer.php')?>

</body>
</html>