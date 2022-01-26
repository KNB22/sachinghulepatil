<?php 
include("include/header.php");
include("database.php");

$id = isset($_GET['id']) ? $_GET['id'] : '';
$query = "SELECT * FROM testimonials where testimonialid='$id'";
$result = mysqli_query($mysqli,$query)or die(mysqli_error());
if($row = mysqli_fetch_array($result))
{
	extract($row);
}
?>
<script>
function delphoto1(e,e1)
{
	var flag = "profilephoto";
	$.ajax({
		url: "delete-img.php?id="+e+"&filename="+e1+"&flag="+flag,
		success:function(result){	
		  $("#divphoto1").html(result);
		}
	 });
}
</script>
<!-- Main content -->
<div class="page-container">
<!-- Page header -->
<div class="page-header page-header-default">
   <div class="breadcrumb-line">
      <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
      <ul class="breadcrumb">
         <li><a href="adminpanel.php"><i class="icon-home2 position-left"></i> Home</a></li>
         <li><a href="#">Testimonials</a></li>
         <li><a href="all-testimonials.php">All Testimonials</a></li>
         <li class="">Edit Testimonials</li>
      </ul>
   </div>
</div>
<!-- /page header -->
<!-- Content area -->
<div class="content">
<!-- Wizard with validation -->
<div class="panel panel-white">
<div class="panel-heading">
   <h6 class="panel-title">Edit Testimonials</h6>
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
    <input type="hidden" name="testimonialid" value="<?php echo $testimonialid;?>">
   <fieldset>
      <div class="row">
	     <div class="col-md-6">
            <div class="form-group">
               <label>Name: </label>
               <input type="text" name="name" id="name" value="<?php echo $name;?>" class="form-control " placeholder="Name">
            </div>
         </div>
         <div class="col-md-6">
            <div class="form-group">
               <label>Designation : </label>
               <input type="text" name="designation" id="designation"  value="<?php echo $designation;?>" class="form-control " placeholder="Designation" >
            </div>
         </div>
         <div class="col-md-12">
            <div class="form-group">
               <label>Testimonial : </label>
			   <textarea name="testimonial" id="editor"><?php echo $testimonial;?></textarea>
            </div>
         </div>
		 <style>
				#container {
				  height: 160px;
				  position: relative;
				}
				#image {
				  position: absolute;
				  left: 0;
				  top: 0;
				}
				#text {
				  position: absolute;
				  color: white;
				  font-size: 24px;
				  font-weight: bold;
				  left: 215px;
				  top: -8px;
				}
				#icon
				{
					font-size: 20px;
					background-color: black;
					width: 25px;
					height: 24px;
					padding-left: 5px;
				}	
		</style>	
		<div class="row">
			<div class="col-md-12">
			   <div class="col-md-12"><h4 class="text-semibold">Profile Photo:</h4></div>
			   <div class="form-group col-md-12">
					<?php
					   if (isset($row['profilephoto']) && !empty($row['profilephoto'])) 
					   {
						 $fpic1 = $row['profilephoto'];	
						 $fphoto1 = "dbimages/".$row['profilephoto'];	
					
					 ?>
						<div class="col-md-4" id="divphoto1">
						  <div id="container">
							  <img id="image" src="<?php echo $fphoto1;?>" style="width: 240px;height: 150px;"/>
							  <p id="text">
								<i class="fa fa-trash" id="icon" onClick="delphoto1('<?php echo $testimonialid?>','<?php echo $fpic1?>')"></i>
							  </p>
						   </div>
						</div>  
					<?php
						   }
					?>
					<div class="col-md-12">
					  <input type="file" name="photo1" class="file-input" data-show-upload="false" title="Choose Logo">
					</div>		
			   </div>
			  </div>
		</div>	
      </div>
	  <div class="row"> 
		 <div class="col-md-6">
			<div class="form-group">
			   <label>Image Alt Tag: </label>
			   <input type="text" name="tmalttag" id="tmalttag" value="<?php echo $tmalttag;?>" class="form-control" placeholder="Image Alt Tag">
			</div>
		 </div>
		 <div class="col-md-6">
			<div class="form-group">
			   <label>Image Title : </label>
			   <input type="text" name="tmtitle" id="tmtitle" value="<?php echo $tmtitle;?>" class="form-control" placeholder="Image Title">
			</div>
		 </div> 
		 <div class="col-md-12">
			<div class="form-group">
			   <label>Image Description : </label>
			   <input type="text" name="tmdescription" id="tmdescription" value="<?php echo $tmdescription;?>" class="form-control" placeholder="Image Description">
			</div>
		 </div>
	</div>
   </fieldset>
   <div class="row">
      <div class="col-md-5"></div>
      <div class="col-md-1">	
         <br>
         <input type="submit" name="edittestimonials" value="Edit" class="btn btn-primary active" style="width:145%;" title="Submit Form">
      </div>
   </div>
   </form>
</div>
</div>
</div>

   <!-- /footer -->
   <?php include('include/footer.php')?>

</body>
</html>