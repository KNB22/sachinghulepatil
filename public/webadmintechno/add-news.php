<?php include("include/header.php")?>
<script type="text/javascript">
$(function(){
  $("#newsdate").datepick({dateFormat: 'yyyy-mm-dd'});
});
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
         <li><a href="#">Blog / News</a></li>
         <li class="">Add Blog / News</li>
      </ul>
   </div>
</div>
<!-- /page header -->
<!-- Content area -->
<div class="content">
<!-- Wizard with validation -->
<div class="panel panel-white">
<div class="panel-heading">
   <h6 class="panel-title">Add Blog / News</h6>
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
	    <fieldset>
		  <div class="row">
			 <div class="col-md-12">
				<div class="form-group">
				   <input type="text" name="title" id="title" class="form-control" placeholder="Title">
				   <label>Title</label>
				</div>
			 </div>
			 <div class="col-md-6">
				<div class="form-group">
				   <input type="text" name="postby" id="postby"  class="form-control" placeholder="Post By">
				   <label>Post By </label>
				</div>
			 </div>
			 <div class="col-md-6">
				<div class="form-group">
				   <input type="text" name="newsdate" id="newsdate" class="form-control" placeholder="Posted Date">
				   <label>Posted Date</label>
				</div>
			 </div>
			 <div class="col-md-12">
				<div class="form-group">
					<div class="media no-margin-top">
						<div class="media-body">
							<input type="file" name="photo1" class="file-input" data-show-upload="false" title="Choose Photo">
						</div>
					</div>
					<label class="text-semibold">Photo</label>
				</div>
			 </div>
			 <div class="col-md-6">
				<div class="form-group">
				   <input type="text" name="balttag" id="balttag" class="form-control" placeholder="Image Alt Tag">
				   <label>Image Alt Tag</label>
				</div>
			 </div>
			 <div class="col-md-6">
				<div class="form-group">
				   <input type="text" name="btitle" id="btitle" class="form-control" placeholder="Image Title">
				   <label>Image Title</label>
				</div>
			 </div> 
			 <div class="col-md-12">
				<div class="form-group">
				   <input type="text" name="bdescription" id="bdescription" class="form-control" placeholder="Image Description">
				   <label>Image Description</label>
				</div>
			 </div>
			 <div class="col-md-12">
				<div class="form-group">
				   <textarea name="descrption" id="editor"></textarea>
				   <label>Description </label>
				</div>
			 </div>
			 <div class="col-md-12" style="display:none">
				<div class="form-group">
				  <div class="media no-margin-top">
					<div class="media-body">
						<input type="file" name="galleryimage[]" class="file-input" multiple="multiple" title="Choose Creative">
					</div>
				  </div>
				  <label class="text-semibold"> Gallery</label>
				</div>
		     </div>
		  </div>
		  <div class="col-md-12">
		       <h5><u>SEO</u></h5>
		 </div>
		 <div class="col-md-4">
			<div class="form-group">
			   <textarea type="text" name="seotitle" id="seotitle" rows="4" class="form-control" placeholder="Title"></textarea>
			   <label>Title  </label>
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
			   <label>Keywords</label>
			</div>
		 </div>
		  <div class="row">
			  <div class="col-md-2 col-md-offset-5"><br>
				 <input type="submit" name="addnews" value="Add" class="btn btn-primary active" style="width:80%;" title="Submit Form">
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