<?php include("include/header.php")?>
<script>
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
         <li><a href="#">Service</a></li>
         <li class="">Add Service</li>
      </ul>
   </div>
</div>
<!-- /page header -->
<!-- Content area -->
<div class="content">
<!-- Wizard with validation -->
<div class="panel panel-white">
<div class="panel-heading">
   <h6 class="panel-title">Add Service</h6>
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
               <input type="text" name="servicename" id="servicename" value="" class="form-control " placeholder="Service Name">
               <label>Service Name</label>
            </div>
         </div>
	     <div class="col-md-6">
			<div class="form-group">
				<div class="media no-margin-top">
					<div class="media-body">
						<input type="file" name="photo1" class="file-styled" title="Choose Image">
					</div>
				</div>
				<label class="text-semibold">Service Photo</label>
			</div>
		 </div>
		<div class="col-md-6">
			<div class="form-group">
			   <input type="text" name="salttag" id="salttag" class="form-control" placeholder="Image Alt Tag">
			   <label>Image Alt Tag</label>
			</div>
		 </div>
		 <div class="col-md-6">
			<div class="form-group">
			   <input type="text" name="stitle" id="stitle" class="form-control" placeholder="Image Title">
			   <label>Image Title  </label>
			</div>
		 </div> 
		 <div class="col-md-12">
			<div class="form-group">
			   <input type="text" name="sdescription" id="sdescription" class="form-control" placeholder="Image Description">
			   <label>Image Description  </label>
			</div>
		 </div>
		 <div class="col-md-12">
            <div class="form-group">
			   <textarea name="description" id="editor"></textarea>
               <label>Description  </label>
            </div>
         </div>
		 <div class="col-md-12">
            <div class="form-group">
			   <textarea name="description1" id="editor1"></textarea>
               <label>Description-Paragraph2 : </label>
            </div>
         </div>
		 <div class="row">
			<div class="col-md-12">
			   <div class="form-group col-md-4">
					<h4 class="text-semibold">Other Service Images :</h4>
			   </div>
			</div>	
			 <div class="col-md-12">
				<div class="form-group">
				  <div class="media no-margin-top">
					<div class="media-body">
						<input type="file" name="serviceimg[]" class="file-input" title="Choose Images" multiple>
					</div>
				  </div>
				  <label class="text-semibold">Other Service Images</label>
				</div>
			 </div>
		 </div>
		 <div class="col-md-12">
		       <h5><u>SEO</u></h5>
		 </div>
		 <div class="col-md-4">
			<div class="form-group">
			   <textarea type="text" name="seotitle" id="seotitle" rows="4" class="form-control" placeholder="Title"></textarea>
			   <label>Title </label>
			   <div id="textarea_feedback" style="color:red"></div>	
			</div>
		 </div>
		 <div class="col-md-4">
			<div class="form-group">
			   <textarea type="text" name="seodesc" id="seodesc" rows="4" class="form-control" placeholder="Description"></textarea>
			   <label>Description </label>
			   <div id="textarea_feedback1" style="color:red"></div>	
			</div>
		 </div>
		 <div class="col-md-4">
			<div class="form-group">
			   <textarea type="text" name="seokeyword" id="seokeyword" rows="4" class="form-control" placeholder="Keywords"></textarea>
			   <label>Keywords </label>
			</div>
		 </div>
      </div>
   </fieldset>
   <div class="row">
      <div class="col-md-5"></div>
      <div class="col-md-1">	
         <br>
         <input type="submit" name="addservice" value="Add" class="btn btn-primary active" style="width:145%;" title="Submit Form">
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