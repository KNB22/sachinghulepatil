<?php 
include("include/header.php");
include("database.php");

$id = isset($_GET['id']) ? $_GET['id'] : '';
$query = "SELECT * FROM subservices_sub where prosubserviceid='$id'";
$result = mysqli_query($mysqli,$query)or die(mysql_error());
if($row = mysqli_fetch_array($result))
{
	extract($row);
	$fserviceid = $serviceid;
	$fsubserviceid = $subserviceid;
}
?>
<script>
function delphoto1(e,e1)
{
	var flag = "SubSubServicephoto";
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
function delphoto1(e,e1)
{
	var flag = "SubServicephoto";
	$.ajax({
		url: "delete-img.php?id="+e+"&filename="+e1+"&flag="+flag,
		success:function(result){	
		  $("#divphoto1").html(result);
		}
	 });
}
function delimage(e,e1)
{
	var flag = "SubSubServicephoto";
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
         <li><a href="all-service.php">All Sub Service/Product1</a></li>
         <li class="">Edit Sub Service/Product1</li>
      </ul>
   </div>
</div>
<!-- /page header -->
<!-- Content area -->
<div class="content">
<!-- Wizard with validation -->
<div class="panel panel-white">
<div class="panel-heading">
   <h6 class="panel-title">Edit Sub Service/Product1</h6>
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
    <input type="hidden" name="prosubserviceid" value="<?php echo $prosubserviceid;?>">
   <fieldset>
      <div class="row">
	      <div class="col-md-6">
			 <div class="form-group">
				<select name="serviceid" id="serviceid" data-placeholder="Select Service/Product" class="select">
					<option>Select Service/Product</option>
					<?php
						include("database.php");
						$query_dis = "select servicename,serviceid from services";
						$result_dis = mysqli_query($mysqli,$query_dis);  
						while($row11 = mysqli_fetch_array($result_dis))
						{
							extract($row11);
					?>
							  <option <?php if($fserviceid == $serviceid) {?>selected<?php } ?> value="<?php echo $serviceid;?>">
								   <?php echo $servicename;?>
							  </option>
					<?php				
						}
					?>						
				</select>
				<label>Select Service/Product: </label>
			 </div>
		 </div>
		 <div class="col-md-6">
			 <div class="form-group">
				<select name="subserviceid" id="subserviceid" data-placeholder="Select Sub Service/Product" class="select">
					<option></option>
					<?php
							$query_dis = "select subserviceid,subservicename from subservices where serviceid = '$fserviceid'";
							$result_dis = mysqli_query($mysqli,$query_dis);  
							echo "<option></option>";
							while($row11 = mysqli_fetch_array($result_dis))
							{
								extract($row11);
					?>
							  <option <?php if($fsubserviceid == $subserviceid) {?>selected<?php } ?> value="<?php echo $subserviceid;?>"><?php echo $subservicename;?></option>
					<?php					
							}	
		            ?>
				</select>
				<label>Select Sub Service/Product: </label>
			 </div>
		 </div>
	     <div class="col-md-6">
            <div class="form-group">
               <input type="text" name="subservicename" id="subservicename" value="<?php echo $prosubservicename;?>" class="form-control " placeholder="Subservice Name">
               <label>Sub Service/Product1 Name: </label>
            </div>
         </div>
		 <div class="col-md-6">
            <div class="form-group">
               <input type="text" name="rank" id="rank" value="<?php echo $rank;?>" class="form-control " placeholder="Rank">
               <label>Rank: </label>
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
			   <div class="col-md-12"><h4 class="text-semibold">Sub Service/Product1 Photo:</h4></div>
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
								<i class="fa fa-trash" id="icon" onClick="delphoto1('<?php echo $prosubserviceid?>','<?php echo $fpic1?>')"></i>
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
			   <label>Image Alt Tag: </label>
			</div>
		 </div>
		 <div class="col-md-6">
			<div class="form-group">
			   <input type="text" name="stitle" id="stitle" value="<?php echo $stitle;?>" class="form-control" placeholder="Image Title">
			   <label>Image Title : </label>
			</div>
		 </div> 
		 <div class="col-md-12">
			<div class="form-group">
			   <input type="text" name="sdescription" id="sdescription" value="<?php echo $sdescription;?>" class="form-control" placeholder="Image Description">
			   <label>Image Description : </label>
			</div>
		 </div>
        <div class="col-md-12">
            <div class="form-group">
			    <textarea name="description" id="editor"><?php echo $description;?></textarea>
               <label>Description-Paragraph1 : </label>
            </div>
        </div>	
        <div class="col-md-12">
            <div class="form-group">
			    <textarea name="description1" id="editor1"><?php echo $description1;?></textarea>
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
					  <p id="text">
						<i class="fa fa-trash" id="icon" onClick="delimage('<?php echo $prosubserviceid?>','<?php echo $serviceimg[0] ?>')"></i>
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
						<i class="fa fa-trash" id="icon" onClick="delimage('<?php echo $prosubserviceid?>','<?php echo $v?>')"></i>
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
			   <label>Title : </label>
			   <div id="textarea_feedback" style="color:red"></div>	
			</div>
		 </div>
		 <div class="col-md-4">
			<div class="form-group">
			   <textarea type="text" name="seodesc" id="seodesc" rows="4" class="form-control" placeholder="Description"><?php echo $seodesc;?></textarea>
			   <label>Description : </label>
			   <div id="textarea_feedback1" style="color:red"></div>	
			</div>
		 </div>
		 <div class="col-md-4">
			<div class="form-group">
			   <textarea type="text" name="seokeyword" id="seokeyword" rows="4" class="form-control" placeholder="Keywords"><?php echo $seokeyword;?></textarea>
			   <label>Keywords : </label>
			</div>
		 </div>		
      </div>
   </fieldset>
   <div class="row">
      <div class="col-md-5"></div>
      <div class="col-md-1">	
         <br>
         <input type="submit" name="editsubservice1" value="Edit" class="btn btn-primary active" style="width:145%;" title="Submit Form">
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