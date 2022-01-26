<?php 
include("include/header.php");
include("database.php");

$id = isset($_GET['id']) ? $_GET['id'] : '';
$query = "SELECT * FROM services where serviceid='$id'";
$result = mysqli_query($mysqli,$query)or die(mysqli_error());
if($row = mysqli_fetch_array($result))
{
	extract($row);
}
?>
<script>
function delphoto1(e,e1)
{
	var flag = "Servicephoto1";
	$.ajax({
		url: "delete-img.php?id="+e+"&filename="+e1+"&flag="+flag,
		success:function(result){	
		  $("#divphoto1").html(result);
		}
	 });
}
$(document).ready(function() {
    var text_max = 70;
    $('#textarea_feedback').html(text_max + ' characters remaining');

    $('#seotitle').keyup(function() {
        var text_length = $('#seotitle').val().length;
        var text_remaining = text_max - text_length;

        $('#textarea_feedback').html(text_remaining + ' characters remaining');
    });
	
	var text_max1 = 160;
    $('#textarea_feedback1').html(text_max1 + ' characters remaining');

    $('#seodesc').keyup(function() {
        var text_length = $('#seodesc').val().length;
        var text_remaining = text_max1 - text_length;

        $('#textarea_feedback1').html(text_remaining + ' characters remaining');
    });
});
function delimage(e,e1)
{
	var flag = "Serivceimages";
	$.ajax({
		url: "delete-img.php?id="+e+"&filename="+e1+"&flag="+flag,
		success:function(result){	
			$("#imagedivid").html(result);
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
         <li><a href="#">Service/Product</a></li>
         <li><a href="all-service.php">All Service/Product</a></li>
         <li class="">Edit Service/Product</li>
      </ul>
   </div>
</div>
<!-- /page header -->
<!-- Content area -->
<div class="content">
<!-- Wizard with validation -->
<div class="panel panel-white">
<div class="panel-heading">
   <h6 class="panel-title">Edit Service/Product</h6>
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
    <input type="hidden" name="serviceid" value="<?php echo $serviceid;?>">
   <fieldset>
      <div class="row">
	     <div class="col-md-6">
            <div class="form-group">
               <input type="text" name="servicename" id="servicename" value="<?php echo $servicename;?>" class="form-control " placeholder="Service/Product Name">
               <label>Service/Product Name </label>
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
			   <div class="col-md-12"><h4 class="text-semibold">Service/Product Photo</h4></div>
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
							  <p id="text">
								<i class="fa fa-trash" id="icon" onClick="delphoto1('<?php echo $serviceid?>','<?php echo $fpic1?>')"></i>
							  </p>
						   </div>
						</div>  
					<?php
						   }
					?>
					<div class="col-md-12">
					  <input type="file" name="photo1" class="file-input" data-show-upload="false" title="Choose Image">
					</div>		
			   </div>
			  </div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
			   <input type="text" name="salttag" id="salttag" value="<?php echo $salttag;?>" class="form-control" placeholder="Image Alt Tag">
			   <label>Image Alt Tag </label>
			</div>
		 </div>
		 <div class="col-md-6">
			<div class="form-group">
			   <input type="text" name="stitle" id="stitle" value="<?php echo $stitle;?>" class="form-control" placeholder="Image Title">
			   <label>Image Title  </label>
			</div>
		 </div> 
		 <div class="col-md-12">
			<div class="form-group">
			   <input type="text" name="sdescription" id="sdescription" value="<?php echo $sdescription;?>" class="form-control" placeholder="Image Description">
			   <label>Image Description  </label>
			</div>
		 </div>
        <div class="col-md-12">
            <div class="form-group">
			   <textarea name="description" id="editor"><?php echo $description;?></textarea>
               <label>Description-Paragraph1  </label>
            </div>
        </div>	
        <div class="col-md-12">
            <div class="form-group">
			   <textarea name="description1" id="editor1"><?php echo $description1;?></textarea>
               <label>Description-Paragraph2  </label>
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
					  <p id="text">
						<i class="fa fa-trash" id="icon" onClick="delimage('<?php echo $serviceid?>','<?php echo $serviceimg[0] ?>')"></i>
					  </p>
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
					  <p id="text">
						<i class="fa fa-trash" id="icon" onClick="delimage('<?php echo $serviceid?>','<?php echo $v?>')"></i>
					  </p>
				   </div>
			   </div>
			   <?php
						}	
					}	
				?>	
			</div>
			<div class="form-group col-md-12">
				<div class="media no-margin-top">
					<div class="media-body">
						<input type="file" name="serviceimg[]" class="file-input" title="Choose Images" multiple>
					</div>
				</div>
			</div>
		</div>
        <div class="col-md-12">
		       <h5><u>SEO</u></h5>
		 </div>
		 <div class="col-md-4">
			<div class="form-group">
			   <textarea type="text" name="seotitle" id="seotitle" rows="4" class="form-control" placeholder="Title"><?php echo $seotitle;?></textarea>
			   <label>Title </label>
			   <div id="textarea_feedback" style="color:red"></div>	
			</div>
		 </div>
		 <div class="col-md-4">
			<div class="form-group">
			   <textarea type="text" name="seodesc" id="seodesc" rows="4" class="form-control" placeholder="Description"><?php echo $seodesc;?></textarea>
			   <label>Description  </label>
			   <div id="textarea_feedback1" style="color:red"></div>	
			</div>
		 </div>
		 <div class="col-md-4">
			<div class="form-group">
			   <textarea type="text" name="seokeyword" id="seokeyword" rows="4" class="form-control" placeholder="Keywords"><?php echo $seokeyword;?></textarea>
			   <label>Keywords </label>
			</div>
		 </div>		
      </div>
   </fieldset>
   <div class="row">
      <div class="col-md-5"></div>
      <div class="col-md-1">	
         <br>
         <input type="submit" name="editservice" value="Edit" class="btn btn-primary active" style="width:145%;" title="Submit Form">
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