<?php 
include("include/header.php");
include("database.php");

$id = isset($_GET['id']) ? $_GET['id'] : '';
$query = "SELECT * FROM news where newsid='$id'";
$result = mysqli_query($mysqli,$query)or die(mysqli_error());
if($row = mysqli_fetch_array($result))
{
	extract($row);
}
?>
<script type="text/javascript">
$(function(){
  $("#newsdate").datepick({dateFormat: 'yyyy-mm-dd'});
});
</script>
<script>
function delphoto1(e,e1)
{
	var flag = "Newsphoto";
	$.ajax({
		url: "delete-img.php?id="+e+"&filename="+e1+"&flag="+flag,
		success:function(result){	
		  $("#divphoto1").html(result);
		}
	 });
}
function delimage(e,e1)
{
	var flag = "bloggalleryimage";
	$.ajax({
		url: "delete-img.php?id="+e+"&filename="+e1+"&flag="+flag,
		success:function(result){	
			$("#imagedivid").html(result);
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
</script>
<!-- Main content -->
<div class="page-container">
<!-- Page header -->
<div class="page-header page-header-default">
   <div class="breadcrumb-line">
      <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
      <ul class="breadcrumb">
         <li><a href="adminpanel.php"><i class="icon-home2 position-left"></i> Home</a></li>
         <li><a href="#">Blog / News</a></li>
         <li><a href="all-news.php">All Blog / News</a></li>
         <li class="">Edit Blog / News</li>
      </ul>
   </div>
</div>
<!-- /page header -->
<!-- Content area -->
<div class="content">
<!-- Wizard with validation -->
<div class="panel panel-white">
<div class="panel-heading">
   <h6 class="panel-title">Edit Blog / News</h6>
   <div class="heading-elements">
      <ul class="icons-list">
         <li><a data-action="collapse"></a></li>
         <li><a data-action="reload"></a></li>
         <li><a data-action="close"></a></li>
      </ul>
   </div>
</div>
<div class="panel-body">   
   <form action="dbfile.php"  method="post" enctype="multipart/form-data">
        <input type="hidden" name="newsid" value="<?php echo $newsid;?>">
	    <fieldset>
		  <div class="row">
			 <div class="col-md-12">
				<div class="form-group">
				   <input type="text" name="title" id="title" class="form-control" value="<?php echo $title;?>" placeholder="Title">
				   <label>Title</label>
				</div>
			 </div>
			 <div class="col-md-6">
				<div class="form-group">
				   <input type="text" name="postby" id="postby"  class="form-control" value="<?php echo $postby;?>" placeholder="Post By">
				   <label>Post By </label>
				</div>
			 </div>
			 <div class="col-md-6">
				<div class="form-group">
				   <input type="text" name="newsdate" id="newsdate" class="form-control" value="<?php echo $newsdate;?>" placeholder="Posted Date">
				   <label>Posted Date  </label>
				</div>
			 </div>
			 <div class="col-md-12">
				<div class="form-group">
				   <textarea name="descrption" id="editor"><?php echo $descrption;?></textarea>
				   <label>Description </label>
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
				    <div class="col-md-12"><h4 class="text-semibold">Photo</h4></div>
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
									<i class="fa fa-trash" id="icon" onClick="delphoto1('<?php echo $newsid?>','<?php echo $fpic1?>')"></i>
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
	         <div class="col-md-6">
				<div class="form-group">
				   <input type="text" name="balttag" id="balttag" value="<?php echo $balttag;?>" class="form-control" placeholder="Image Alt Tag">
				   <label>Image Alt Tag </label>
				</div>
			 </div>
			 <div class="col-md-6">
				<div class="form-group">
				   <input type="text" name="btitle" id="btitle" value="<?php echo $btitle;?>" class="form-control" placeholder="Image Title">
				   <label>Image Title </label>
				</div>
			 </div> 
			 <div class="col-md-12">
				<div class="form-group">
				   <input type="text" name="bdescrption" id="bdescrption" value="<?php echo $bdescrption;?>" class="form-control" placeholder="Image Description">
				   <label>Image Description</label>
				</div>
			 </div>			 
			 <div class="row" style="display:none">
				<div class="col-md-12">
				   <div class="form-group col-md-2">
						<h4 class="text-semibold">Gallery </h4>
				   </div>
				</div>			
				<div class="col-md-12" id="imagedivid">
				   <?php 
						if (!empty($row['galleryimg'])) 
						{
							$img1 = $row['galleryimg'];
							$imgpath1 = rtrim($img1, ',');
							$imgpath1 = ltrim($imgpath1);
							$galleryimg	 = explode(',', $imgpath1 );
							if(!empty($galleryimg[0]))
							{	
					?>
				  <div class="col-md-4">
					  <div id="container">
						  <img id="image" src="<?php echo (isset($galleryimg[0]) && (!empty($galleryimg[0]))) ? 'dbimages/'.$galleryimg[0] : ''; ?>" style="width: 240px;height: 150px;"/>
						  <p id="text">
							<i class="fa fa-trash" id="icon" onClick="delimage('<?php echo $newsid?>','<?php echo $galleryimg[0] ?>')"></i>
						  </p>
					   </div>
				  </div>
					<?php	
							}
							array_shift($galleryimg	);
							foreach($galleryimg as $v)    
							{
							   $path = (isset($v) && !empty($v)) ? "dbimages/".$v : '' ;
					?>
				   <div class="col-md-4">
					   <div id="container">
						  <img id="image" src="<?php echo("$path"); ?>" style="width: 240px;height: 150px;"/>
						  <p id="text">
							<i class="fa fa-trash" id="icon" onClick="delimage('<?php echo $newsid?>','<?php echo $v?>')"></i>
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
							<input type="file" name="galleryimage[]" class="file-input" multiple="multiple" title="Choose Gallery">
						</div>
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
			   <label>Description </label>
			   <div id="textarea_feedback1" style="color:red"></div>	
			</div>
		 </div>
		 <div class="col-md-4">
			<div class="form-group">
			   <textarea type="text" name="seokeyword" id="seokeyword" rows="4" class="form-control" placeholder="Keywords"><?php echo $seokeyword;?></textarea>
			   <label>Keywords</label>
			</div>
		 </div>	
		  <div class="row">
			  <div class="col-md-2 col-md-offset-5"><br>
				 <input type="submit" name="editnews" value="Edit" class="btn btn-primary active" style="width:80%;" title="Submit Form">
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