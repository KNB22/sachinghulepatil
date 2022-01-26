<?php
   $flag="";
   include('database.php');
   extract($_GET);
   extract($_POST);
   
if($flag == "Homeservice"){
   $j=1;
   
    $query_dis = "select * from services where homerankig != ''";
	$result= mysqli_query($mysqli,$query_dis);
   
   
    $num_rows = mysqli_num_rows($result);
    if($num_rows == 4){
	   echo 3;
    }	
	   else
	   {
		   $query_dis1 = "SELECT * FROM services where serviceid='$serviceid' AND homerankig != ''";
		   $result1= mysqli_query($mysqli,$query_dis1);
		   
		   
		   $num_rows1 = mysqli_num_rows($result1);
		   if($num_rows1 > 0){
			   echo 2;
		   }
		   else{
			   
				$query_dis1 = "SELECT * FROM services where homerankig = '$homerankig'";
				$result1= mysqli_query($mysqli,$query_dis1);
				
				
				$num_rows1 = mysqli_num_rows($result1);
				if($num_rows1 > 0){
				   echo 4;
				}
				else{
					$query_e1 = "update services set homerankig='$homerankig' where serviceid='$serviceid'";				
					$result_e1  = mysqli_query($mysqli,$query_e1);
					echo 1;
				}
		   }	   
	   }   
	}

	if($flag == "ServiceRank"){
	   $j=1;

		$query_dis = "SELECT * FROM services where serviceid='$serviceid' AND 	rank != ''";
		$result1= mysqli_query($mysqli,$query_dis);

	   
	   $num_rows1 = mysqli_num_rows($result1);
	   if($num_rows1 > 0){
		   echo 2;
	   }
	   else
	   {
			$query_dis = "SELECT * FROM services where rank = '$rank'";
			$result1= mysqli_query($mysqli,$query_dis);
			
			
			$num_rows1 = mysqli_num_rows($result1);
			if($num_rows1 > 0){
			   echo 4;
			}
			else{
				$query_e1 = "update services set rank='$rank' where serviceid='$serviceid'";				
				$result_e1  = mysqli_query($mysqli,$query_e1);
				echo 1;
			}
	   }	   
	   
	}


?>