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
         <li class="">View Blog / News</li>
      </ul>
   </div>
</div>
<!-- /page header -->
<!-- Content area -->
<div class="content">
<!-- Wizard with validation -->
<div class="panel panel-white">
<div class="panel-heading">
   <h6 class="panel-title">View Blog / News</h6>
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
				   <input type="text" name="title" id="title" class="form-control" value="<?php echo $title;?>" placeholder="Title" readonly>
				   <label>Title</label>
				</div>
			 </div>
			 <div class="col-md-6">
				<div class="form-group">
				   <input type="text" name="postby" id="postby"  class="form-control" value="<?php echo $postby;?>" placeholder="Post By" readonly>
				   <label>Post By </label>
				</div>
			 </div>
			 <div class="col-md-6">
				<div class="form-group">
				   <input type="text" name="newsdate" id="newsdate" class="form-control" value="<?php echo $newsdate;?>" placeholder="Posted Date" readonly>
				   <label>Posted Date  </label>
				</div>
			 </div>
			 <div class="col-md-12">
				<div class="form-group">
				   <textarea type="text" name="descrption" id="descrption" rows="8" class="form-control" placeholder="Description" readonly><?php echo $descrption;?></textarea>
				   <label>Description </label>
				</div>
			 </div>
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
				   <input type="text" name="balttag" id="balttag" value="<?php echo $balttag;?>" class="form-control" placeholder="Image Alt Tag" readonly>
				   <label>Image Alt Tag </label>
				</div>
			 </div>
			 <div class="col-md-6">
				<div class="form-group">
				   <input type="text" name="btitle" id="btitle" value="<?php echo $btitle;?>" class="form-control" placeholder="Image Title" readonly>
				   <label>Image Title </label>
				</div>
			 </div> 
			 <div class="col-md-12">
				<div class="form-group">
				   <input type="text" name="bdescrption" id="bdescrption" value="<?php echo $bdescrption;?>" class="form-control" placeholder="Image Description" readonly>
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
					   </div>
				   </div>
				   <?php
							}	
						}	
					?>	
				</div>
			 </div>	
		  </div>
		 <div class="col-md-12">
		       <h5><u>SEO</u></h5>
		 </div>
		 <div class="col-md-4">
			<div class="form-group">
			   <textarea type="text" name="seotitle" id="seotitle" rows="4" class="form-control" placeholder="Title" readonly><?php echo $seotitle;?></textarea>
			   <label>Title </label>
			   <div id="textarea_feedback" style="color:red"></div>	
			</div>
		 </div>
		 <div class="col-md-4">
			<div class="form-group">
			   <textarea type="text" name="seodesc" id="seodesc" rows="4" class="form-control" placeholder="Description" readonly><?php echo $seodesc;?></textarea>
			   <label>Description </label>
			   <div id="textarea_feedback1" style="color:red"></div>	
			</div>
		 </div>
		 <div class="col-md-4">
			<div class="form-group">
			   <textarea type="text" name="seokeyword" id="seokeyword" rows="4" class="form-control" placeholder="Keywords" readonly><?php echo $seokeyword;?></textarea>
			   <label>Keywords</label>
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