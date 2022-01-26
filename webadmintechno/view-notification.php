<?php 
include("include/header.php");
include("database.php");

$id = isset($_GET['id']) ? $_GET['id'] : '';
$query = "SELECT * FROM notification where notification='$id'";
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
         <li><a href="#">Notification</a></li>
         <li><a href="all-news.php">All Notification</a></li>
         <li class="">View Notification</li>
      </ul>
   </div>
</div>
<!-- /page header -->
<!-- Content area -->
<div class="content">
<!-- Wizard with validation -->
<div class="panel panel-white">
<div class="panel-heading">
   <h6 class="panel-title">View Notification</h6>
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
        <input type="hidden" name="newsid" value="<?php echo $notification;?>">
	    <fieldset>
		  <div class="row">
			 <div class="col-md-12">
				<div class="form-group">
				   <input type="text" name="title" id="title" class="form-control" value="<?php echo $Event;?>" placeholder="Title" readonly>
				   <label>Event</label>
				</div>
			 </div>
			 <div class="col-md-6">
				<div class="form-group">
				   <input type="text" name="newsdate" id="newsdate" class="form-control" value="<?php echo $Date;?>" placeholder="Posted Date" readonly>
				   <label>Posted Date </label>
				</div>
			 </div>
			 <div class="col-md-12">
				<div class="form-group">
				   <textarea type="text" name="descrption" id="descrption" rows="8" class="form-control" placeholder="Description" readonly><?php echo $Description;?></textarea>
				   <label>Description </label>
				</div>
			 </div>
             <div class="row">
				<div class="col-md-12">
				    <div class="col-md-12"><h4 class="text-semibold">Photo</h4></div>
				    <div class="form-group col-md-12">
						<?php
						   if (isset($row['img']) && !empty($row['img'])) 
						   {
							 $fpic1 = $row['img'];	
							 $fphoto1 = "dbimages/".$row['img'];	
						
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