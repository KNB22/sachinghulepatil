<?php 
   include("include/header.php");
   include("database.php");
?>

<!-- Main content -->
<div class="page-container">
<!-- Page header -->
<div class="page-header page-header-default">
   <div class="breadcrumb-line">
      <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
      <ul class="breadcrumb">
         <li><a href="index.php"><i class="icon-home2 position-left"></i>Home</a></li>
         <li>Logo</li>
         <li>Add Logo</li>
      </ul>
   </div>
</div>
<!-- /page header -->
<!-- Content area -->
<div class="content">
<div class="panel panel-white">
   <div class="panel-heading">
      <h6 class="panel-title">Add Logo</h6>
      <div class="heading-elements">
         <ul class="icons-list">
            <li><a data-action="collapse"></a></li>
            <li><a data-action="reload"></a></li>
            <li><a data-action="close"></a></li>
         </ul>
      </div>
   </div>
   <form class="" action="dbfile.php" method="post" enctype="multipart/form-data">	
	    <div class="panel-body">
		   <div class="col-md-12">
				<div class="form-group">
				  <div class="media no-margin-top">
					<div class="media-body">
						<input type="file" name="galleryimage[]" class="file-input" title="Choose Gallery">
					</div>
				  </div>
				  <label class="text-semibold">Images</label>
				</div>
		   </div>
		   <div class="row"> 
				 <div class="col-md-6">
					<div class="form-group">
					   <input type="text" name="clalttag" id="clalttag" class="form-control" placeholder="Image Alt Tag">
					   <label>Image Alt Tag </label>
					</div>
				 </div>
				 <div class="col-md-6">
					<div class="form-group">
					   <input type="text" name="cltitle" id="cltitle" class="form-control" placeholder="Image Title">
					   <label>Image Title  </label>
					</div>
				 </div> 
				 <div class="col-md-12">
					<div class="form-group">
					   <input type="text" name="cldescription" id="cldescription" class="form-control" placeholder="Image Description">
					   <label>Image Description  </label>
					</div>
				 </div>
			</div>
	    </div>
	    <div class="row" >
		  <div class="col-md-2 col-md-offset-5">	
			 <br>
			 <input type="submit" name="addlogo" value="Add" class="btn btn-primary active" style="width:145%; margin-bottom: 20px;" title="Submit Form">
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