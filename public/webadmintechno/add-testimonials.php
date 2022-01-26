<?php include("include/header.php")?>

<!-- Main content -->
<div class="page-container">
<!-- Page header -->
<div class="page-header page-header-default">
   <div class="breadcrumb-line">
      <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
      <ul class="breadcrumb">
         <li><a href="adminpanel.php"><i class="icon-home2 position-left"></i> Home</a></li>
         <li><a href="#">Testimonials</a></li>
         <li class="">Add Testimonials</li>
      </ul>
   </div>
</div>
<!-- /page header -->
<!-- Content area -->
<div class="content">
<!-- Wizard with validation -->
<div class="panel panel-white">
<div class="panel-heading">
   <h6 class="panel-title">Add Testimonials</h6>
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
               <label>Name: </label>
               <input type="text" name="name" id="name" class="form-control " placeholder="Name">
            </div>
         </div>
         <div class="col-md-6">
            <div class="form-group">
               <label>Designation : </label>
               <input type="text" name="designation" id="designation"  class="form-control " placeholder="Designation" >
            </div>
         </div>
		 <div class="col-md-6">
			<div class="form-group">
				<label class="text-semibold"><b>Profile Photo:</b></label>
				<div class="media no-margin-top">
					<div class="media-body">
						<input type="file" name="photo1" class="file-styled" title="" multiple>
					</div>
				</div>
			</div>
		 </div>
	 </div>	 
	 <div class="row"> 
		 <div class="col-md-6">
			<div class="form-group">
			   <label>Image Alt Tag: </label>
			   <input type="text" name="tmalttag" id="tmalttag" class="form-control" placeholder="Image Alt Tag">
			</div>
		 </div>
		 <div class="col-md-6">
			<div class="form-group">
			   <label>Image Title : </label>
			   <input type="text" name="tmtitle" id="tmtitle" class="form-control" placeholder="Image Title">
			</div>
		 </div> 
		 <div class="col-md-12">
			<div class="form-group">
			   <label>Image Description : </label>
			   <input type="text" name="tmdescription" id="tmdescription" class="form-control" placeholder="Image Description">
			</div>
		 </div>
		  <div class="col-md-12">
            <div class="form-group">
               <label>Testimonial : </label>
			   <textarea name="testimonial" id="editor"></textarea>
            </div>
         </div>
	</div>
   </fieldset>
   <div class="row">
      <div class="col-md-5"></div>
      <div class="col-md-1">	
         <br>
         <input type="submit" name="addtestimonials" value="Add" class="btn btn-primary active" style="width:145%;" title="Submit Form">
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