<?php 
include("include/header.php");
?>
<!-- Main content -->
<div class="page-container">
<!-- Page header -->
<div class="page-header page-header-default">
   <div class="breadcrumb-line">
      <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
      <ul class="breadcrumb">
         <li><a href="adminpanel.php"><i class="icon-home2 position-left"></i> Home</a></li>
         <li><a href="#">Home Page</a></li>
         <li class="">Add Slider</li>
      </ul>
   </div>
</div>
<!-- /page header -->
<!-- Content area -->
<div class="content">
<!-- Wizard with validation -->
<div class="panel panel-white">
<div class="panel-heading">
   <h6 class="panel-title">Add Slider</h6>
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
		<div class="col-md-12">
		<div class="col-md-6">
		    <div class="form-group">
			   <input type="text" name="slidertitle1" id="slidertitle1" class="form-control" value="" placeholder="Title">
			   <label>Slider Title </label>
			</div>
		</div>
		<div class="col-md-6">
		    <div class="form-group">
			     <textarea type="text" name="slidercontent1" id="slidercontent1" rows="5" class="form-control" placeholder="Content"></textarea>
			   <label>Slider Content </label>
			</div>
		</div>
		</div>
		<div class="col-md-12">
			<div class="col-md-12"><label>Slider:</label></div>
			<div class="form-group col-md-12">
				  <input type="file" name="photo1" class="file-input" data-show-upload="false" title="Choose Slider">	
			</div>
		</div>	
		<div class="col-md-6">
			<div class="form-group">
			   <input type="text" name="alttag1" id="alttag1" value="" class="form-control" placeholder="Image Alt Tag">
			   <label>Alt Tag </label>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
			   <input type="text" name="title1" id="title1" value="" class="form-control" placeholder="Image Title">
			   <label>Title</label>
			</div>
		</div> 
		<div class="col-md-12">
			<div class="form-group">
			   <input type="text" name="description1" id="description1" value="" class="form-control" placeholder="Image Description">
			   <label>Description  </label>
			</div>
		</div>
      </div>
    </fieldset>
    <div class="row">
      <div class="col-md-2 col-md-offset-5">	
         <br>
         <input type="submit" name="addslider" value="Add" class="btn btn-primary active" style="width:145%;" title="Submit Form">
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