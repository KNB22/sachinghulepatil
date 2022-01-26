<script type="text/javascript" src="./asset/js/wizard_steps.js"></script>
<?php
  extract($_GET);
  include('database.php');
  $flag1=0;
  if($flag=="Emailblast")
  {
?>
<div class="col-md-12">
<div class="form-group">
	 <?php
		  include('database.php'); 
	
		  $query_dis = "select * from inquiry where createdate >='$selecttodate' AND createdate <='$selectfromdate' GROUP BY(email)";
		  $result_dis = mysqli_query($mysqli,$query_dis);

		  while($row = mysqli_fetch_array($result_dis))
		  {
			extract($row);
			if(!empty($email)){
	 ?>
			 <div class="col-md-4">	
			  <div class="checkbox">
				<label>
					<div class="checker">
					<input type="checkbox" class="styled" value="<?php echo $email?>" name="emailblast[]" id="emailblast" checked>
					</div>
					 <?php echo $name?>
				</label>
			   </div>	
			 </div>
	 <?php
	            $flag1++;
			}	
		  }

		  if($flag1==0){
	 ?>
	     <div class="col-md-4"><label style="color:red;">No Result Found</label></div>
	 <?php
		  }
	 ?> 
</div>
</div>
<?php
   }
   if($flag=="SMSblast")
   {
?>
<div class="col-md-12">
<div class="form-group">
	 <?php
		  $query_dis = "select * from inquiry where createdate >='$selecttodate' AND createdate<='$selectfromdate' GROUP BY(phoneno)";
		  $result_dis = mysqli_query($mysqli,$query_dis);

		  while($row = mysqli_fetch_array($result_dis))
		  {
			 extract($row);
	 ?>
			 <div class="col-md-4">	
			  <div class="checkbox">
				<label>
					<div class="checker">
					<input type="checkbox" class="styled" value="<?php echo $phoneno?>" name="smsblast[]" id="smsblast" checked>
					</div>
					 <?php echo $name?> (<?php echo $phoneno;?>)
				</label>
			   </div>	
			 </div>
	 <?php
	            $flag1++;
		  }
		  if($flag1==0){
	 ?>
	     <div class="col-md-4"><label style="color:red;">No Result Found</label></div>
	 <?php
		  }
	 ?>
</div>
</div>
<?php
   }
?>   
