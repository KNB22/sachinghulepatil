<?php include("include/header.php")?>
<script>
function delservice(e)
{
  var flag = "Subservice";	
  if(confirm("Are you sure you want to delete record ?")){
	$.ajax({
		url: "delete-info.php?subserviceid="+e+"&flag="+flag,
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
            <li><a href="#">Service/Product</a></li>
            <li><a href="#">All Sub Service/Product</a></li>
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
				   
					$query_dis = "SELECT * FROM subservices";
					$result= mysqli_query($mysqli,$query_dis);
					
					$num_rows = mysqli_num_rows($result);
				?> 	
				<h4><span class="text-semibold" style="color:#fff;"><?php echo $num_rows;?> Sub Service/Product</span></h4>
			</div>
            <br>
            <div class="row">
               <div class="panel panel-flat">
                  <br>
                     <table class="table datatable-fixed-left" width="100%">
                        <thead>
                           <tr>
                              <th>Action</th>
                              <th>Sr.No</th>
                              <th>Rank</th>
                              <th>Service/Product Name</th>
                              <th>Sub Service/Product Name</th>
                              <th>Description</th>
                              <th>CreatDate</th>
                              <th style="display:none"></th>
                           </tr>
                        </thead>
                        <tbody>
						   <?php
						        $i=1;
								$query_dis = "select s.servicename,ss.rank,ss.subserviceid,ss.subservicename,ss.description,ss.createdate from services as s, subservices as ss where s.serviceid=ss.serviceid order by ss.createdate desc";
								$result_dis = mysqli_query($mysqli,$query_dis);
								while($row = mysqli_fetch_array($result_dis))
								{
									extract($row);
									$descrption_str = (strlen($description ) > 30) ? substr($description ,0,30).'...' : $description;
						   ?>
                           <tr>
						      <td>
                                 <a href="view-subservice.php?id=<?php echo $subserviceid?>"><i class="fa fa-eye" style="font-size: 25px;"></i></a>&nbsp;&nbsp
                                 <a href="edit-subservice.php?id=<?php echo $subserviceid?>">
                                 <i class="fa fa-pencil" style="font-size: 20px;"></i>&nbsp;&nbsp
                                 <a onClick=delservice(<?php echo $subserviceid?>) style="color:red">
                                 <i class="fa fa-trash" style="font-size: 20px;"></i>
                                 </a>
                                 </a>
                              </td>
                              <td><?php echo $i?></td>
                              <td><?php echo $rank?></td>
                              <td><?php echo $servicename;?></td>
                              <td><?php echo $subservicename;?></td>
                              <td><?php echo $descrption_str;?></td>
                              <td><?php echo $createdate?></td>
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