<?php 
include("include/header.php");
include("database.php");
extract($_GET);
$query = "SELECT * FROM slider where sliderid='$id'";
$result = mysqli_query($mysqli,$query)or die(mysqli_error());
if($row = mysqli_fetch_array($result))
{
	extract($row);
}
?>
<script>
function delphoto1(e,e1)
{
	var flag = "Slider";
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
         <li><a href="#">Home Page</a></li>
         <li><a href="#">Slider</a></li>
         <li><a href="all-slider.php">All Slider</a></li>
		 <li><a href="#">Edit Slider</a></li>
      </ul>
   </div>
</div>
<!-- /page header -->
<!-- Content area -->
<div class="content">
<!-- Wizard with validation -->
<div class="panel panel-white">
<div class="panel-heading">
   <h6 class="panel-title">Edit Slider</h6>
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
		
		<div class="col-md-12"><h4 style="color:#503a96"><u>Slider</u></h4></div>
		<div class="col-md-12">
		<div class="col-md-6">
		    <div class="form-group">
			   <input type="text" name="slidertitle1" id="slidertitle1" class="form-control" value="<?php echo $slidertitle;?>" placeholder="Title">
			   <label>Slider Title </label>
			</div>
		</div>
		<div class="col-md-6">
		    <div class="form-group">
			     <textarea type="text" name="slidercontent1" id="slidercontent1" rows="5" class="form-control" placeholder="Content"><?php echo $slidercontent;?></textarea>
			   <label>Slider Content </label>
			</div>
		</div>
		</div>
	
		<div class="col-md-12">
			<div class="col-md-12"><label>Slider:</label></div>
			<div class="form-group col-md-12">
				<?php
				   if (isset($row['slider']) && !empty($row['slider'])) 
				   {
					 $fpic1 = $row['slider'];	
					 $fphoto1 = "dbimages/".$row['slider'];	
				
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
       <div class="col-md-6">
			<div class="form-group">
			   <input type="text" name="alttag1" id="alttag1" value="<?php echo $slideralt;?>" class="form-control" placeholder="Image Alt Tag">
			   <label>Alt Tag </label>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
			   <input type="text" name="title1" id="title1" value="<?php echo $sliderstitle;?>" class="form-control" placeholder="Image Title">
			   <label>Title</label>
			</div>
		</div> 
		<div class="col-md-12">
			<div class="form-group">
			   <input type="text" name="description1" id="description1" value="<?php echo $sliderdescription;?>" class="form-control" placeholder="Image Description">
			   <label>Description  </label>
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