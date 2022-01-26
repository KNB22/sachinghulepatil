<?php 
include("include/header.php");
include("database.php");

$query = "SELECT * FROM aboutus";
$result = mysqli_query($mysqli,$query)or die(mysqli_error());
if($row = mysqli_fetch_array($result))
{
	extract($row);
}
?>
<script>
function delphoto1(e,e1)
{
	var flag = "aboutusphoto";
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
         <li><a href="#">About Us</a></li>
         <li class="">About Us</li>
      </ul>
   </div>
</div>
<!-- /page header -->
<!-- Content area -->
<div class="content">
<!-- Wizard with validation -->
<div class="panel panel-white">
<div class="panel-heading">
   <h6 class="panel-title">About Us</h6>
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
    <input type="hidden" name="aboutid" value="<?php echo $aboutid;?>">
   <fieldset>
      <div class="row">
         <div class="col-md-12">
            <div class="form-group">
			   <textarea name="aboutus" id="editor"><?php echo $aboutus;?></textarea>
               <label>About Us-Paragraph1 : </label>
            </div>
         </div>
         <div class="col-md-12">
            <div class="form-group">
			   <textarea name="aboutus1" id="editor1"><?php echo $aboutus1;?></textarea>
               <label>About Us-Paragraph2 : </label>
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
			<div class="col-md-6">
				<div class="form-group">
				   <input type="text" name="aalttag" id="aalttag" value="<?php echo $aalttag;?>" class="form-control" placeholder="Alt Tag">
				   <label>Alt Tag: </label>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
				   <input type="text" name="atitle" id="atitle"  value="<?php echo $atitle;?>" class="form-control" placeholder="Title">
				   <label>Title : </label>
				</div>
			</div> 
			<div class="col-md-12">
				<div class="form-group">
				   <input type="text" name="adescription" id="adescription" value="<?php echo $adescrption;?>" class="form-control" placeholder="Description">
				   <label>Description : </label>
				</div>
			</div>
			<div class="col-md-12">
			   <div class="col-md-12"><h4 class="text-semibold">Image:</h4></div>
			   <div class="form-group col-md-12">
					<?php
					   if (isset($row['image']) && !empty($row['image'])) 
					   {
						 $fpic1 = $row['image'];	
						 $fphoto1 = "dbimages/".$row['image'];	
					
					 ?>
						<div class="col-md-4" id="divphoto1">
						  <div id="container">
							  <img id="image" src="<?php echo $fphoto1;?>" style="width: 240px;height: 180px;"/>
							  <p id="text">
								<i class="fa fa-trash" id="icon" onClick="delphoto1('<?php echo $aboutid?>','<?php echo $fpic1?>')"></i>
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
   </fieldset>
   <div class="row">
      <div class="col-md-5"></div>
      <div class="col-md-1">	
         <br>
         <input type="submit" name="editaboutus" value="Edit" class="btn btn-primary active" style="width:145%;" title="Submit Form">
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