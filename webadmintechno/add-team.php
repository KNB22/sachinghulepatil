<?php include("include/header.php")?>

<!-- Main content -->
<div class="page-container">
<!-- Page header -->
<div class="page-header page-header-default">
   <div class="breadcrumb-line">
      <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
      <ul class="breadcrumb">
			 <li><a href="adminpanel.php"><i class="icon-home2 position-left"></i> Home</a></li>
			 <li><a href="#">About Us</a></li>
			 <li class="">Add Team</li>
        </ul>
   </div>
</div>
<!-- /page header -->
<!-- Content area -->
<div class="content">
<!-- Wizard with validation -->
<div class="panel panel-white">
<div class="panel-heading">
   <h6 class="panel-title">Add Team</h6>
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
   <fieldset>
      <div class="row">
	     <div class="col-md-6">
            <div class="form-group">
               <input type="text" name="name" id="name" class="form-control " placeholder="Name">
               <label>Name </label>
            </div>
         </div>
         <div class="col-md-6">
            <div class="form-group">
               <input type="text" name="designation" id="designation"  class="form-control " placeholder="Designation" >
               <label>Designation  </label>
            </div>
         </div>
		 <div class="col-md-6">
			<div class="form-group">
				<div class="media no-margin-top">
					<div class="media-body">
						<input type="file" name="photo1" class="file-styled" title="" multiple>
					</div>
				</div>
				<label class="text-semibold">Profile Photo</label>
			</div>
		 </div>
		 </div> 
		 <div class="row"> 
		 <div class="col-md-6">
			<div class="form-group">
			   <input type="text" name="talttag" id="talttag" class="form-control" placeholder="Image Alt Tag">
			   <label>Image Alt Tag </label>
			</div>
		 </div>
		 <div class="col-md-6">
			<div class="form-group">
			   <input type="text" name="ttitle" id="ttitle" class="form-control" placeholder="Image Title">
			   <label>Image Title </label>
			</div>
		 </div> 
		 <div class="col-md-12">
			<div class="form-group">
			   <input type="text" name="tdescription" id="tdescription" class="form-control" placeholder="Image Description">
			   <label>Image Description </label>
			</div>
		 </div>
		 </div>
   </fieldset>
   <div class="row">
      <div class="col-md-5"></div>
      <div class="col-md-1">	
         <br>
         <input type="submit" name="addteam" value="Add" class="btn btn-primary active" style="width:145%;" title="Submit Form">
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