<?php include("include/header.php")?>
<script>
function delslider(e)
{
  var flag = "Slider";	
  if(confirm("Are you sure you want to delete record ?")){
	$.ajax({
		url: "delete-info.php?sliderid="+e+"&flag="+flag,
		success:function(result){
			 alert('Delete Successfully...');
			 location.reload();
		}
	});
  }
}
</script>
<!-- Main content -->
<div class="content-wrapper">
   <!-- Page header -->
   <div class="page-header">
      <div class="breadcrumb-line">
         <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
         <ul class="breadcrumb">
            <li><a href="adminpanel.php"><i class="icon-home2 position-left"></i>Home</a></li>
            <li><a href="#">Slider</a></li>
            <li><a href="#">All Slider</a></li>
         </ul>
      </div>
   </div>
   <!-- /page header -->
   <div class="row">
      <div class="panel panel-flat">
         <!-- Content area -->
         <div class="content">
            <!-- Simple lists -->
            <br>
            <div class="row">
               <div class="panel panel-flat">
                  <br>
                     <table class="table datatable-fixed-left" width="100%">
                        <thead>
                           <tr>
                              <th>Action</th>
                              <th>Slider Title</th>
                              <th>Slider Image</th>
                              <th>Created Date</th>
                              <th style="display:none"></th>
                              <th style="display:none"></th>
                              <th style="display:none"></th>
                           </tr>
                        </thead>
                        <tbody>
						   <?php
						        $i=1;
								$query_dis = "select * from slider order by sliderid ASC";
								$result_dis= mysqli_query($mysqli,$query_dis);
								while($row = mysqli_fetch_array($result_dis))
								{
									extract($row);
									
									$img1 = $row['slider'];
									
						   ?>
                           <tr>
						      <td>
                                 <a href="edit-slider.php?id=<?php echo $sliderid?>">
                                 <i class="fa fa-pencil" style="font-size: 20px;"></i></a>&nbsp;&nbsp
                                 <a onClick=delslider(<?php echo $sliderid?>) style="color:red">
                                 <i class="fa fa-trash" style="font-size: 20px;"></i>
                                 </a>
                                 
                              </td>
							  <td><?php echo $slidertitle?></td>
                              <td><img src="dbimages/<?php echo $img1;?>" style="height:50px"></td>
                              <td><?php echo $createdate?></td>
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
            </div>
            <!-- /simple lists -->
            <!-- Footer -->
            <?php include('include/footer.php')?>
            <!-- /footer -->
         </div>
         <!-- /content area -->
      </div>
      <!-- /main content -->
   </div>
   <!-- /page content -->
</div>
<!-- /page container -->

</body>
</html>