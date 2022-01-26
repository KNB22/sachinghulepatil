<?php 
	include("include/header.php");
	include("database.php");

	$id = isset($_GET['id']) ? $_GET['id'] : '';
	$query = "SELECT * FROM gallery where galleryid='$id'";
	$result = mysqli_query($mysqli,$query)or die(mysqli_error());
	if($row = mysqli_fetch_array($result))
	{
		extract($row);
	}
?>
<link href="./asset/js/jquery.datepick.css" rel="stylesheet">
<script src="./asset/js/jquery.plugin.js"></script>
<script src="./asset/js/jquery.datepick.js"></script>
<script type="text/javascript">
$(function(){
	$("#createdate").datepick({dateFormat: 'yyyy-mm-dd'});
});
function delimage(e,e1)
{
	var flag = "galleryimage";
	$.ajax({
		url: "delete-img.php?id="+e+"&filename="+e1+"&flag="+flag,
		success:function(result){	
			$("#imagedivid").html(result);
		}
	 });
}
</script>	

<div class="page-container">

<div class="page-header page-header-default">
   <div class="breadcrumb-line">
      <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
       <ul class="breadcrumb">
		<li><a href="adminpanel.php"><i class="icon-home2 position-left"></i>Home</a></li>
		<li><a href="#">Gallery</a></li>
		<li><a href="all-gallery.php">All Gallery</a></li>
		<li><a href="#">Edit Gallery</a></li>
	   </ul>
   </div>
</div>

<div class="content">
<div class="panel panel-white">
   <div class="panel-heading">
      <h6 class="panel-title">Edit Gallery</h6>
      <div class="heading-elements">
         <ul class="icons-list">
            <li><a data-action="collapse"></a></li>
            <li><a data-action="reload"></a></li>
            <li><a data-action="close"></a></li>
         </ul>
      </div>
   </div>
   <form class="" action="dbfile.php" method="post" enctype="multipart/form-data">	
        <input type="hidden" value="<?php echo $galleryid;?>" name="galleryid">
	    <div class="row">
		<div class="col-md-12">
			<div class="col-md-6 col-md-offset-3"><br>
				<div class="form-group">
				   <input type="text" name="imgtitle" id="imgtitle" value="<?php echo $imgtitle?>" class="form-control" placeholder="Image Title" >
				   <label>Image Title </label>
				</div>
			</div>
	    </div>
	    </div>
	    <div class="panel-body">
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
			   <div class="form-group col-md-2">
					<h4 class="text-semibold">Images :</h4>
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
						<i class="fa fa-trash" id="icon" onClick="delimage('<?php echo $galleryid?>','<?php echo $galleryimg[0] ?>')"></i>
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
						<i class="fa fa-trash" id="icon" onClick="delimage('<?php echo $galleryid?>','<?php echo $v?>')"></i>
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
						<input type="file" name="galleryimage[]" class="file-input" title="Choose Gallery" multiple>
					</div>
				</div>
			</div>
		 </div>
		 <div class="col-md-6">
				<div class="form-group">
				   <input type="text" name="galttag" id="galttag" value="<?php echo $galttag?>" class="form-control" placeholder="Image Alt Tag">
				   <label>Image Alt Tag </label>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
				   <input type="text" name="gtitle" id="gtitle" value="<?php echo $gtitle?>" class="form-control" placeholder="Image Title">
				   <label>Image Title </label>
				</div>
			</div> 
			<div class="col-md-12">
				<div class="form-group">
				   <input type="text" name="gdescription" id="gdescription" value="<?php echo $gdescription?>" class="form-control" placeholder="Image Description">
				   <label>Image Description  </label>
				</div>
			</div>
	    </div>
	    <div class="row" >
		  <div class="col-md-2 col-md-offset-5">	
			 <br>
			 <input type="submit" name="editgallery" value="Edit" class="btn btn-primary active" style="width:145%; margin-bottom: 20px;" title="Submit Form">
		  </div>
	    </div>
   </form>
   <?php include('include/footer.php')?>
</div>
</body>
</html>