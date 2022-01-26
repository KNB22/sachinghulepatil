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
         <li>Welcome Note</li>
      </ul>
   </div>
</div>
<!-- /page header -->
<!-- Content area -->
<div class="content">
<!-- Wizard with validation -->
<div class="panel panel-white">
<div class="panel-heading">
   <h6 class="panel-title">Welcome Note</h6>
   <div class="heading-elements">
      <ul class="icons-list">
         <li><a data-action="collapse"></a></li>
         <li><a data-action="reload"></a></li>
         <li><a data-action="close"></a></li>
      </ul>
   </div>
</div>
<div class="panel-body">
   <form  action="dbfile.php"  method="post">
     <?php 
		include("database.php");
		
		$query = "SELECT * FROM indexpage";
		$result = mysqli_query($mysqli,$query)or die(mysqli_error());
		if($row = mysqli_fetch_array($result))
		{
			extract($row);
		}
	?>
    <input type="hidden" name="id" value="<?php echo $id;?>">
    <fieldset>
      <div class="row">
         <div class="col-md-12">
		     <div class="form-group">
			   <input type="text" value="<?php echo $welcomenotetitle;?>" name="welcomenotetitle" id="welcomenotetitle" class="form-control" placeholder="Welcome Note Title">
               <label>Welcome Note Title </label>
			 </div>  
		 </div>
         <div class="col-md-12">
            <div class="form-group">
			    <textarea name="welcomenote" id="editor"><?php echo $welcomenote;?></textarea>
               <label>Welcome Note </label>
            </div>
         </div>
      </div>
    </fieldset>
    <div class="row">
      <div class="col-md-5"></div>
      <div class="col-md-1">	
         <br>
         <input type="submit" name="editwelcomenote" value="Edit" class="btn btn-primary active" style="width:145%;" title="Submit Form">
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