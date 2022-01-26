<?php 
include("include/header.php");
include("database.php");

$id = isset($_GET['id']) ? $_GET['id'] : '';
$query = "SELECT * FROM video where videoid='$id'";
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
		<li><a href="adminpanel.php"><i class="icon-home2 position-left"></i>Home</a></li>
		<li><a href="#">Video</a></li>
		<li><a href="all-video.php">All Video</a></li>
		<li><a href="#">View Video</a></li>
	   </ul>
   </div>
</div>
<!-- /page header -->
<!-- Content area -->
<div class="content">
<div class="panel panel-white">
   <div class="panel-heading">
      <h6 class="panel-title">View Video</h6>
      <div class="heading-elements">
         <ul class="icons-list">
            <li><a data-action="collapse"></a></li>
            <li><a data-action="reload"></a></li>
            <li><a data-action="close"></a></li>
         </ul>
      </div>
   </div>
   <form class="" action="dbfile.php" method="post" enctype="multipart/form-data">	
        <input type="hidden" value="<?php echo $videoid;?>" name="videoid">
	    <div class="panel-body">
		    <div class="row">
				<div class="col-md-6">
				   <div class="form-group">
					  <input type="text" name="title" id="title" value="<?php echo $title?>" class="form-control " placeholder="Title" readonly>
					  <label>Title </label>
				   </div>
				</div>
				<div class="col-md-6">
				   <div class="form-group">
					  <input type="text" name="title" id="title" value="<?php echo $link?>" class="form-control " placeholder="Link" readonly>
					  <label>Video Link </label>
				   </div>
				</div>
				<div class="col-md-6">
				   <iframe src="<?php echo $link?>"></iframe>
				</div>
				<div class="col-md-12">
					<div class="form-group">
					   <textarea type="text" name="description" id="description" rows="5" class="form-control" placeholder="Description" readonly><?php echo $description;?></textarea>
					   <label>Description </label>
					</div>
				 </div>
				 <div class="col-md-6">
					<div class="form-group">
					   <input type="text" name="stitle" id="stitle" value="<?php echo $stitle;?>" class="form-control" placeholder="Title" readonly>
					   <label>Title </label>
					</div>
				 </div> 
				 <div class="col-md-6">
					<div class="form-group">
					   <input type="text" name="salttag" id="salttag" value="<?php echo $salttag;?>" class="form-control" placeholder="Alt Tag" readonly>
					   <label>Alt Tag</label>
					</div>
				 </div>
				 <div class="col-md-12">
					<div class="form-group">
					   <input type="text" name="sdescription" id="sdescription" value="<?php echo $sdescription;?>" class="form-control" placeholder="SEO Description" readonly>
					   <label>Description </label>
					</div>
				 </div>
		    </div>
		 </div>
	    </div>
	   
   </form>
   <!-- /main content -->
   <?php include('include/footer.php')?>
   <!-- /footer -->
</div>
<!-- /page content -->
<!-- /page container -->
</body>
</html>