<?php 
include("include/header.php");
include("database.php");

$id = isset($_GET['id']) ? $_GET['id'] : '';
$query = "SELECT * FROM team where teamid='$id'";
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
		 <li><a href="#">About Us</a></li>
		 <li><a href="all-team.php">All Team</a></li>
		 <li class="">View Team</li>
      </ul>
   </div>
</div>
<!-- /page header -->
<!-- Content area -->
<div class="content">
<!-- Wizard with validation -->
<div class="panel panel-white">
<div class="panel-heading">
   <h6 class="panel-title">View Team</h6>
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
    <input type="hidden" name="teamid" value="<?php echo $teamid;?>">
   <fieldset>
      <div class="row">
	    
	     <div class="col-md-6">
            <div class="form-group">
               <input type="text" name="name" id="name" value="<?php echo $name;?>" class="form-control " placeholder="Name" readonly>
               <label>Name </label>
            </div>
         </div>
         <div class="col-md-6">
            <div class="form-group">
               <input type="text" name="designation" id="designation"  value="<?php echo $designation;?>" class="form-control " placeholder="Designation" readonly>
               <label>Designation  </label>
            </div>
         </div>
		 
		<div class="row">
			<div class="col-md-12">
			   <div class="col-md-12"><h4 class="text-semibold">Profile Photo</h4></div>
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
						   </div>
						</div>  
					<?php
						   }
					?>	
			   </div>
			  </div>
		</div>	
      </div>
	  <div class="row"> 
		 <div class="col-md-6">
			<div class="form-group">
			   <input type="text" name="talttag" id="talttag" value="<?php echo $talttag;?>" class="form-control" placeholder="Image Alt Tag" readonly>
			   <label>Image Alt Tag </label>
			</div>
		 </div>
		 <div class="col-md-6">
			<div class="form-group">
			   <input type="text" name="ttitle" id="ttitle" value="<?php echo $ttitle;?>" class="form-control" placeholder="Image Title" readonly>
			   <label>Image Title </label>
			</div>
		 </div> 
		 <div class="col-md-12">
			<div class="form-group">
			   <input type="text" name="tdescription" id="tdescription" value="<?php echo $tdescription;?>" class="form-control" placeholder="Image Description" readonly>
			   <label>Image Description </label>
			</div>
		 </div>
	   </div>
   </fieldset>
   <div class="row">
      <div class="col-md-5"></div>
      <div class="col-md-1">	
         <br>
         <input type="submit" name="editteam" value="Edit" class="btn btn-primary active" style="width:145%;" title="Submit Form">
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