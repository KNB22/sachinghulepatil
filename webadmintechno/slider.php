<?php 
include("include/header.php");
include("database.php");

$query = "SELECT * FROM slider";
$result = mysqli_query($mysqli,$query)or die(mysqli_error());
if($row = mysqli_fetch_array($result))
{
	extract($row);
}
?>
<script>
function delphoto1(e,e1)
{
	var flag = "Slider1";
	$.ajax({
		url: "delete-img.php?id="+e+"&filename="+e1+"&flag="+flag,
		success:function(result){	
		  $("#divphoto1").html(result);
		}
	});
}
function delphoto2(e,e1)
{
	var flag = "Slider2";
	$.ajax({
		url: "delete-img.php?id="+e+"&filename="+e1+"&flag="+flag,
		success:function(result){	
		  $("#divphoto2").html(result);
		}
	});
}
function delphoto3(e,e1)
{
	var flag = "Slider3";
	$.ajax({
		url: "delete-img.php?id="+e+"&filename="+e1+"&flag="+flag,
		success:function(result){	
		  $("#divphoto3").html(result);
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
         <li><a href="#">Home Page</a></li>
         <li class="">Slider</li>
      </ul>
   </div>
</div>
<!-- /page header -->
<!-- Content area -->
<div class="content">
<!-- Wizard with validation -->
<div class="panel panel-white">
<div class="panel-heading">
   <h6 class="panel-title">Slider</h6>
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
    <input type="hidden" name="sliderid" value="<?php echo $sliderid;?>"> 
    <fieldset>
      <div class="row">
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
		
		<div class="col-md-12"><h4 style="color:#503a96"><u>Slider1</u></h4></div>
		<div class="col-md-12">
		<div class="col-md-6">
			<div class="form-group">
			   <input type="text" name="alttag1" id="alttag1" value="<?php echo $slideralt1;?>" class="form-control" placeholder="Image Alt Tag">
			   <label>Alt Tag </label>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
			   <input type="text" name="title1" id="title1" value="<?php echo $sliderstitle1;?>" class="form-control" placeholder="Image Title">
			   <label>Title</label>
			</div>
		</div> 
		<div class="col-md-12">
			<div class="form-group">
			   <input type="text" name="description1" id="description1" value="<?php echo $sliderdescription1;?>" class="form-control" placeholder="Image Description">
			   <label>Description  </label>
			</div>
		</div>
		<div class="col-md-6">
		    <div class="form-group">
			   <input type="text" name="slidertitle1" id="slidertitle1" class="form-control" value="<?php echo $slidertitle1;?>" placeholder="Title">
			   <label>Slider1 Title </label>
			</div>
		</div>
		<div class="col-md-6">
		    <div class="form-group">
			     <textarea type="text" name="slidercontent1" id="slidercontent1" rows="5" class="form-control" placeholder="Content"><?php echo $slidercontent1;?></textarea>
			   <label>Slider1 Content </label>
			</div>
		</div>
		</div>
	
		<div class="col-md-12">
			<div class="col-md-12"><label>Slider1:</label></div>
			<div class="form-group col-md-12">
				<?php
				   if (isset($row['slider1']) && !empty($row['slider1'])) 
				   {
					 $fpic1 = $row['slider1'];	
					 $fphoto1 = "dbimages/".$row['slider1'];	
				
				 ?>
					<div class="col-md-4" id="divphoto1">
					  <div id="container">
						  <img id="image" src="<?php echo $fphoto1;?>" style="width: 240px;height: 150px;"/>
						  <p id="text">
							<i class="fa fa-trash" id="icon" onClick="delphoto1('<?php echo $sliderid?>','<?php echo $fpic1?>')"></i>
						  </p>
					   </div>
					</div>  
				<?php
					   }
				?>
				<div class="">
				  <input type="file" name="photo1" class="file-input" data-show-upload="false" title="Choose Slider">
				</div>		
			</div>
		</div>
		
		<div class="col-md-12"><h4 style="color:#503a96"><u>Slider2</u></h4></div>
		<div class="col-md-12">
		<div class="col-md-6">
			<div class="form-group">
			   <input type="text" name="alttag2" id="alttag2" value="<?php echo $slideralt2;?>" class="form-control" placeholder="Image Alt Tag">
			   <label>Alt Tag </label>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
			   <input type="text" name="title2" id="title2"  value="<?php echo $sliderstitle2;?>" class="form-control" placeholder="Image Title">
			   <label>Title  </label>
			</div>
		</div> 
		<div class="col-md-12">
			<div class="form-group">
			   <input type="text" name="description2" id="description2" value="<?php echo $sliderdescription2;?>"  class="form-control" placeholder="Image Description">
			   <label>Description  </label>
			</div>
		</div>
	    <div class="col-md-6">
		    <div class="form-group">
			   <input type="text" name="slidertitle2" id="slidertitle2" class="form-control" value="<?php echo $slidertitle2;?>" placeholder="Title">
			   <label>Slider2 Title </label>
			</div>
		</div>
		<div class="col-md-6">
		    <div class="form-group">
			    <textarea type="text" name="slidercontent2" id="slidercontent2" rows="5" class="form-control" placeholder="Content"><?php echo $slidercontent2;?></textarea>
			   <label>Slider2 Content </label>
			</div>
		</div>
		</div> 
		
		<div class="col-md-12">
			<div class="col-md-12"><label>Slider2:</label></div>
			<div class="form-group col-md-12">
				<?php
				   if (isset($row['slider2']) && !empty($row['slider2'])) 
				   {
					 $fpic2 = $row['slider2'];	
					 $fphoto2 = "dbimages/".$row['slider2'];	
				
				 ?>
					<div class="col-md-4" id="divphoto2">
					  <div id="container">
						  <img id="image" src="<?php echo $fphoto2;?>" style="width: 240px;height: 150px;"/>
						  <p id="text">
							<i class="fa fa-trash" id="icon" onClick="delphoto2('<?php echo $sliderid?>','<?php echo $fpic2?>')"></i>
						  </p>
					   </div>
					</div>  
				<?php
					   }
				?>
				<div class="">
				  <input type="file" name="photo2" class="file-input" data-show-upload="false" title="Choose Slider">
				</div>		
			</div>
		</div>

		<div class="col-md-12"><h4 style="color:#503a96"><u>Slider3</u></h4></div>
		<div class="col-md-12">
		<div class="col-md-6">
			<div class="form-group">
			   <input type="text" name="alttag3" id="alttag3" value="<?php echo $slideralt3;?>" class="form-control" placeholder="Image Alt Tag">
			   <label>Alt Tag </label>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
			   <input type="text" name="title3" id="title3"  value="<?php echo $sliderstitle3;?>" class="form-control" placeholder="Image Title">
			   <label>Title  </label>
			</div>
		</div> 
		<div class="col-md-12">
			<div class="form-group">
			   <input type="text" name="description3" id="description3"  value="<?php echo $sliderdescription3;?>" class="form-control" placeholder="Image Description">
			   <label>Description  </label>
			</div>
		</div>
		<div class="col-md-6">
		    <div class="form-group">
			   <input type="text" name="slidertitle3" id="slidertitle3" class="form-control" value="<?php echo $slidertitle3;?>" placeholder="Title">
			   <label>Slider3 Title </label>
			</div>
		</div>
		<div class="col-md-6">
		    <div class="form-group">
			     <textarea type="text" name="slidercontent3" id="slidercontent3" rows="5" class="form-control" placeholder="Content"><?php echo $slidercontent3;?></textarea>
			     <label>Slider3 Content</label>
			</div>
		</div> 
		</div> 
		
		<div class="col-md-12">
			<div class="col-md-12"><label>Slider3:</label></div>
			<div class="form-group col-md-12">
				<?php
				   if (isset($row['slider3']) && !empty($row['slider3'])) 
				   {
					 $fpic3 = $row['slider3'];	
					 $fphoto3 = "dbimages/".$row['slider3'];	
				
				 ?>
					<div class="col-md-4" id="divphoto3">
					  <div id="container">
						  <img id="image" src="<?php echo $fphoto3;?>" style="width: 240px;height: 150px;"/>
						  <p id="text">
							<i class="fa fa-trash" id="icon" onClick="delphoto3('<?php echo $sliderid?>','<?php echo $fpic3?>')"></i>
						  </p>
					   </div>
					</div>  
				<?php
					   }
				?>
				<div class="">
				  <input type="file" name="photo3" class="file-input" data-show-upload="false" title="Choose Slider">
				</div>		
			</div>
		</div>
				
      </div>
    </fieldset>
    <div class="row">
      <div class="col-md-2 col-md-offset-5">	
         <br>
         <input type="submit" name="editslider" value="Edit" class="btn btn-primary active" style="width:145%;" title="Submit Form">
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