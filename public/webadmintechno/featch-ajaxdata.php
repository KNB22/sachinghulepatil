<?php
    extract($_GET);
	include('database.php');
   
   	if($flag=="Subservice")
	{	
		$query_dis = "select * from subservices where serviceid = '$serviceid'";
		$result_dis = mysqli_query($mysqli,$query_dis);  
		echo "<option></option>";
		while($row11 = mysqli_fetch_array($result_dis))
		{
			extract($row11);
?>
		  <option value="<?php echo $subserviceid;?>"><?php echo $subservicename;?></option>
<?php					
	    }
	}
?>