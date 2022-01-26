<?php
    extract($_GET);
    include('database.php');
   
	if((!empty($_GET['galleryid'])) && ($flag=="delgallery")) 
	{
		$id1 = $_GET['galleryid'];
		
		$query = "DELETE FROM gallery WHERE galleryid = '$id1'";
		$result =mysqli_query($mysqli,$query) or die(mysqli_error());
	}
	if((!empty($_GET['sliderid'])) && ($flag=="Slider")) 
	{
		$id1 = $_GET['sliderid'];
		
		$query = "DELETE FROM slider WHERE sliderid = '$id1'";
		$result =mysqli_query($mysqli,$query) or die(mysqli_error());
	}
	if((!empty($_GET['testimonialid'])) && ($flag=="testimonial")) 
	{
		$id1 = $_GET['testimonialid'];
		
		$query = "DELETE FROM testimonials WHERE testimonialid = '$id1'";
		$result =mysqli_query($mysqli,$query) or die(mysqli_error());
	}
	
	if((!empty($_GET['teamid'])) && ($flag=="team")) 
	{
		$id1 = $_GET['teamid'];
		
		$query = "DELETE FROM team WHERE teamid = '$id1'";
		$result =mysqli_query($mysqli,$query) or die(mysqli_error());
	}
	
	if((!empty($_GET['newsid'])) && ($flag=="News")) 
	{
		$id1 = $_GET['newsid'];
		
		$query = "DELETE FROM news WHERE newsid = '$id1'";
		$result =mysqli_query($mysqli,$query) or die(mysqli_error());
	}
	if((!empty($_GET['serviceid'])) && ($flag=="Service")) 
	{
		$id1 = $_GET['serviceid'];
		
		$query = "DELETE FROM services WHERE serviceid = '$id1'";
		$result =mysqli_query($mysqli,$query) or die(mysqli_error());
	}
	if((!empty($_GET['subserviceid'])) && ($flag=="Subservice")) 
	{
		$id1 = $_GET['subserviceid'];
		
		$query = "DELETE FROM subservices WHERE subserviceid = '$id1'";
		$result =mysqli_query($mysqli,$query) or die(mysqli_error());
	}
	if((!empty($_GET['prosubserviceid'])) && ($flag=="Subservicepro")) 
	{
		$id1 = $_GET['prosubserviceid'];
		
		$query = "DELETE FROM subservices_sub WHERE prosubserviceid = '$id1'";
		$result =mysqli_query($mysqli,$query) or die(mysqli_error());
	}
	if((!empty($_GET['galleryid'])) && ($flag=="dellogo")) 
	{
		$id1 = $_GET['galleryid'];
		
		$query = "DELETE FROM logo WHERE galleryid = '$id1'";
		$result =mysqli_query($mysqli,$query) or die(mysqli_error());
	}
	
	if((!empty($_GET['custid'])) && ($flag=="Customer")) 
	{
		$id1 = $_GET['custid'];
		
		$query = "DELETE FROM customer WHERE custid = '$id1'";
		$result =mysqli_query($mysqli,$query) or die(mysqli_error());
	}
	if((!empty($_GET['id'])) && ($flag=="servicebill")) 
	{
		$id1 = $_GET['id'];
		
		$query_dis = "select price from billservice where billserviceid = '$id1'";
		$result_dis = mysqli_query($mysqli,$query_dis);
		if($row = mysqli_fetch_array($result_dis)){
			$fprice = $row['price'];
		}
		
		$query = "DELETE FROM billservice WHERE billserviceid = '$id1'";
		$result =mysqli_query($mysqli,$query) or die(mysqli_error());
		
		if($result)
		{
			echo $fprice;
		}
	}
	if((!empty($_GET['serviceid'])) && ($flag=="homeservice")) 
	{
		$id1 = $_GET['serviceid'];
		
		$query5 = "update services set homerankig = '' where serviceid ='$id1'";
		$result =mysqli_query($mysqli,$query5) or die(mysqli_error());
	}
	if((!empty($_GET['serviceid'])) && ($flag=="ServiceRank")) 
	{
		$id1 = $_GET['serviceid'];
		
		$query5 = "update services set rank = '' where serviceid ='$id1'";
		$result =mysqli_query($mysqli,$query5) or die(mysqli_error());
	}
	if((!empty($_GET['videoid'])) && ($flag=="delvideo")) 
	{
		$id1 = $_GET['videoid'];
		
		$query = "DELETE FROM video WHERE videoid = '$id1'";
		$result =mysqli_query($mysqli,$query) or die(mysqli_error());
	}
	if((!empty($_GET['pvcid'])) && ($flag=="delpvc")) 
	{
		$id1 = $_GET['pvcid'];
		
		$query = "DELETE FROM pvc WHERE pvcid = '$id1'";
		$result =mysqli_query($mysqli,$query) or die(mysqli_error());
	}
?> 