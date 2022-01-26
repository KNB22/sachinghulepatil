<?php include("include/header.php")?>
<script>
$(function(){
	$('#allocatehomeservice').on('click', function (e) 
    {
		e.preventDefault();
		var flag = "Homeservice";
		var serviceid = $('#serviceid').val();
		var homerankig = $('#homerankig').val();
		$.ajax({
			url: "dbfile-ajax.php?serviceid="+serviceid+"&homerankig="+homerankig+"&flag="+flag,
			success:function(result){
				if(result == 1){
				  location.reload();
				} 
				else if(result == 2){	
				  $('#err1').show();
				}
				else if(result == 3){	
				  $('#err2').show();
				}
				else if(result == 4){	
				  $('#err3').show();
				}			
			}
		});
	});
});
function delhomeservicerank(e)
{
  var flag = "homeservice";	
  if(confirm("Are you sure you want to delete record ?")){
	$.ajax({
		url: "delete-info.php?serviceid="+e+"&flag="+flag,
		success:function(result){
			location.reload();
		}
	 });
	}
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
         <li><a href="#">Service</a></li>
         <li class="">Home Page - Services</li>
      </ul>
   </div>
</div>
<!-- /page header -->
<!-- Content area -->
<div class="content">
<!-- Wizard with validation -->
<div class="panel panel-white">
<div class="panel-heading">
   <h6 class="panel-title">Home Page - Services</h6>
   <div class="heading-elements">
      <ul class="icons-list">
         <li><a data-action="collapse"></a></li>
         <li><a data-action="reload"></a></li>
         <li><a data-action="close"></a></li>
      </ul>
   </div>
</div>
<div class="panel-body">
  
   <fieldset>
      <div class="row">
	     <br><br>
		  <div class="alert alert-danger alert-bordered" id="err1" style="display:none">
			<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
			<span class="text-semibold">Oh snap!</span> Service already Allocate <a href="#" class="alert-link">Try Again</a>.
		  </div>
		  <div class="alert alert-danger alert-bordered" id="err2" style="display:none">
			<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
			<span class="text-semibold">Oh snap!</span> Only Four Service allowed <a href="#" class="alert-link">Try Again</a>.
		  </div> 
		  <div class="alert alert-danger alert-bordered" id="err3" style="display:none">
			<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
			<span class="text-semibold">Oh snap!</span> Position already occupied <a href="#" class="alert-link">Try Again</a>.
		  </div>
		 <form method="post">
		 <div class="row">
         <div class="col-md-5">
			 <div class="form-group">
				<select name="serviceid" id="serviceid" data-placeholder="Select Service" class="select">
					<option>Select Service</option>
					<?php
						include("database.php");
						$query_dis = "select servicename,serviceid from services";
						$result_dis = mysqli_query($mysqli,$query_dis);  
						while($row11 = mysqli_fetch_array($result_dis))
						{
							extract($row11);
					?>
						<option value="<?php echo $serviceid;?>">
							<?php echo $servicename;?>
						</option>
					<?php				
						}
					?>						
				</select>
				<label style="color: green;">Select Service: <span class="text-danger">*</span></label>
			 </div>
		 </div>
		 <div class="col-md-5">
			 <div class="form-group">
				<select name="homerankig" id="homerankig" data-placeholder="Select Ranking" class="select">
					<option>Select Ranking</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
				</select>
             </div>				
         </div>				
		  <div class="col-md-1">	
			 <input type="button" id="allocatehomeservice" value="Add" class="btn btn-primary active" style="width:145%;" title="Submit Form">
		  </div>
		  </form>
		  <table class="table datatable-fixed-left" width="100%">
			<thead>
			   <tr>
				  <th>Action</th>
				  <th>Ranking</th>
				  <th>Service Name</th>
				  <th style="display:none"></th>
				  <th style="display:none"></th>
				  <th style="display:none"></th>
				  <th style="display:none"></th>
			   </tr>
			</thead>
			<tbody>
			   <?php
					$i=1;
					$query_dis = "select * from services where homerankig != '' order by homerankig ASC";
					$result_dis = mysqli_query($mysqli,$query_dis);
					while($row = mysqli_fetch_array($result_dis))
					{
						extract($row);
			   ?>
			   <tr>
				  <td>
					 <a onClick=delhomeservicerank(<?php echo $serviceid?>) style="color:red">
					 <i class="fa fa-trash" style="font-size: 20px;"></i>
					 </a>
					 </a>
				  </td>
				  <td><?php echo $homerankig;?></td>
				  <td><?php echo $servicename;?></td>
				  <td style="display:none"></td>
				  <td style="display:none"></td>
				  <td style="display:none"></td>
				  <td style="display:none"></td>
			   </tr>
			   <?php
					$i++;
				}
			   ?>
			</tbody>
		 </table>
      </div>
   </fieldset>
</div>
</div>
</div>
<?php include('include/footer.php')?>
</body>
</html>