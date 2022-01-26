<?php include("include/header.php")?>
<script>
function delgallery(e)
{
  var flag = "delgallery";	
  if(confirm("Are you sure you want to delete record ?")){
	$.ajax({
		url: "delete-info.php?galleryid="+e+"&flag="+flag,
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
            <li><a href="#">Gallery</a></li>
            <li><a href="#">All Gallery</a></li>
         </ul>
      </div>
   </div>
   <!-- /page header -->
   <div class="row">
      <div class="panel panel-flat">
         <!-- Content area -->
         <div class="content">
            <!-- Simple lists -->
		   <div class="panel-heading border-bottom-info" style="background-color:#66cc33;padding: 10px;">
			    <?php 
				       include('database.php');
					   
					   $query_dis = "SELECT * FROM gallery";
					   $result= mysqli_query($mysqli,$query_dis);
					   
					   //$result = mysqli_query("SELECT * FROM gallery");
					   $num_rows = mysqli_num_rows($result);
				?> 	
				<h4><span class="text-semibold" style="color:#fff;"><?php echo $num_rows;?> Gallery</span></h4>
			</div>
            <br>
            <div class="row">
               <div class="panel panel-flat">
                  <br>
                     <table class="table datatable-fixed-left" width="100%">
                        <thead>
                           <tr>
                              <th>Action</th>
                              <th>Image Title</th>
                              <th>Image</th>
                              <th>Created Date</th>
                              <th style="display:none"></th>
                              <th style="display:none"></th>
                              <th style="display:none"></th>
                           </tr>
                        </thead>
                        <tbody>
						   <?php
						        $i=1;
								$query_dis = "select * from gallery order by createdate desc";
								$result_dis = mysqli_query($mysqli,$query_dis);
								while($row = mysqli_fetch_array($result_dis))
								{
									extract($row);
									
									$img1 = $row['galleryimg'];
									$imgpath1 = rtrim($img1, ',');
									$imgpath1 = ltrim($imgpath1);
									$galleryimg	 = explode(',', $imgpath1 );
									
						   ?>
                           <tr>
						      <td>
                                 <a href="view-gallery.php?id=<?php echo $galleryid?>"><i class="fa fa-eye" style="font-size: 25px;"></i></a>&nbsp;&nbsp
                                 <a href="edit-gallery.php?id=<?php echo $galleryid?>">
                                 <i class="fa fa-pencil" style="font-size: 20px;"></i></a>&nbsp;&nbsp
                                 <a onClick=delgallery(<?php echo $galleryid?>) style="color:red">
                                 <i class="fa fa-trash" style="font-size: 20px;"></i>
                                 </a>
                                 
                              </td>
                              <td><?php echo $imgtitle?></td>
                              <td><img src="dbimages/<?php echo $galleryimg[0];?>" style="height:50px"></td>
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