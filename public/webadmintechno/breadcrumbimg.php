<?php include("include/header.php")?>
<script>
function delphoto1(e,e1)
{
	var flag = "breadcrumb";
	$.ajax({
		url: "delete-img.php?id="+e+"&filename="+e1+"&flag="+flag,
		success:function(result){	
		  $("#divphoto1").html(result);
		}
	 });
}
</script>
<!-- Main content -->
<div class="page-container">
<!-- Page header -->
<div class="page-header page-header-default">
   <div class="breadcrumb-line">
      <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
      <ul class="breadcrumb">
         <li><a href="adminpanel.php"><i class="icon-home2 position-left"></i> Home</a></li>
         <li><a href="#">Home Page</a></li>
         <li class="">Breadcrumb Background</li>
      </ul>
   </div>
</div>
<!-- /page header -->
<!-- Content area -->
<div class="content">
<!-- Wizard with validation -->
<div class="panel panel-white">
<div class="panel-body">
   <form  action="dbfile.php"  method="post" enctype="multipart/form-data">
   <fieldset>
	   <style>
			#container {
			  height: 160px;
			  position: relative;
			}
			#image {
			  position: absolute;
			  left: 0;
			  top: 0;
			}
			#text {
			  position: absolute;
			  color: white;
			  font-size: 24px;
			  font-weight: bold;
			  left: 215px;
			  top: -8px;
			}
			#icon
			{
				font-size: 20px;
				background-color: black;
				width: 25px;
				height: 24px;
				padding-left: 5px;
			}	
	    </style>	 
        <div class="row">
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
			<div class="col-md-12">
			   <div class="col-md-12"><h4 class="text-semibold" style="color:#503a96">Breadcrumb Background Image:</h4></div>
			   <div class="form-group col-md-12">
					<?php
					    if (isset($row['breadcrumbimg']) && !empty($row['breadcrumbimg'])) 
					    {
						 $fpic1 = $row['breadcrumbimg'];	
						 $fphoto1 = "dbimages/".$row['breadcrumbimg'];	
					
					 ?>
						<div class="col-md-4" id="divphoto1">
						  <div id="container">
							  <img id="image" src="<?php echo $fphoto1;?>" style="width: 240px;height: 150px;"/>
							  <p id="text">
								<i class="fa fa-trash" id="icon" onClick="delphoto1('<?php echo $id?>','<?php echo $fpic1?>')"></i>
							  </p>
						   </div>
						</div>  
					<?php
						}
					?>
					<div class="col-md-12">
					  <input type="file" name="photo1" class="file-input" data-show-upload="false" title="Choose Breadcrumb Image">
					</div>		
			   </div>
			</div>
		</div>
   </fieldset>
   <div class="row">
    
      <div class="col-md-2 col-md-offset-5">	
         <br>
         <input type="submit" name="addbreadcrumb" value="Edit" class="btn btn-primary active" style="width:80%;" title="Submit Form">
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