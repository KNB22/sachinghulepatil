<?php 
    include("database.php");
	extract($_GET);
	
	/**************************** Gallery Image **********************************************/
	if (isset($_GET) && !empty($_GET['id']) && !empty($_GET['filename']) && ($flag=="galleryimage")) 
	{
		$id1 = $_GET['id'];
		$filename1 = $_GET['filename'].",";

		$query 	  = "select * from gallery where galleryid ='$id1'";
		$result   = mysqli_query($mysqli,$query) or die(mysqli_error());
		
		if ($row  = mysqli_fetch_array($result)) 
		{
		   extract($row);	
		}

		$galleryimg = str_replace($filename1,"",$galleryimg);

		$query = "UPDATE gallery SET 
				  galleryimg ='$galleryimg'
				  WHERE galleryid = '$id1'"; 
		$result = mysqli_query($mysqli,$query) or die (mysqli_error());	

		$query 	  = "select * from gallery where galleryid ='$id1'";
		$result   = mysqli_query($mysqli,$query) or die(mysqli_error());
		
		if ($row  = mysqli_fetch_array($result)) 
		{
		   extract($row);	
		}
?>
		<div class="col-md-12" id="imagedivid">
		   <?php 
				if (!empty($row['galleryimg'])) 
				{
					$img1 = $row['galleryimg'];
					$imgpath1 = rtrim($img1, ',');
					$imgpath1 = ltrim($imgpath1);
					$galleryimg = explode(',', $imgpath1 );
					if(!empty($galleryimg[0]))
					{	
			?>
		  <div class="col-md-4">
			  <div id="container">
				  <img id="image" src="<?php echo (isset($galleryimg[0]) && (!empty($galleryimg[0]))) ? 'dbimages/'.$galleryimg[0] : ''; ?>" style="width: 240px;height: 150px;"/>
				  <p id="text">
					<i class="fa fa-trash" id="icon" onClick="delimage('<?php echo $galleryid ?>','<?php echo $galleryimg[0] ?>')"></i>
				  </p>
			   </div>
		  </div>
			<?php	
					}
					array_shift($galleryimg);
					foreach($galleryimg as $v)    
					{
					   $path = (isset($v) && !empty($v)) ? "dbimages/".$v : '' ;
			?>
		   <div class="col-md-4">
			   <div id="container">
				  <img id="image" src="<?php echo("$path"); ?>" style="width: 240px;height: 150px;"/>
				  <p id="text">
					<i class="fa fa-trash" id="icon" onClick="delimage('<?php echo $galleryid?>','<?php echo $v?>')"></i>
				  </p>
			   </div>
		   </div>
		   <?php
					}	
				}	
			?>	
		</div>
<?php
    }
	/**************************** Service Images **********************************************/
	if (isset($_GET) && !empty($_GET['id']) && !empty($_GET['filename']) && ($flag=="Serivceimages")) 
	{
		$id1 = $_GET['id'];
		$filename1 = $_GET['filename'].",";

		$query 	  = "select * from services where serviceid ='$id1'";
		$result   = mysqli_query($mysqli,$query) or die(mysqli_error());
		
		if ($row  = mysqli_fetch_array($result)) 
		{
		   extract($row);	
		}

		$serviceimg = str_replace($filename1,"",$serviceimg);
        
		$query = "UPDATE services SET 
				  serviceimg ='$serviceimg'
				  WHERE serviceid = '$id1'"; 
		$result = mysqli_query($mysqli,$query) or die (mysqli_error());	

		$query 	  = "select * from services where serviceid ='$id1'";
		$result   = mysqli_query($mysqli,$query) or die(mysqli_error());
		
		if ($row  = mysqli_fetch_array($result)) 
		{
		   extract($row);	
		}
?>
		<div class="col-md-12" id="imagedivid">
		   <?php 
				if (!empty($row['serviceimg'])) 
				{
					$img1 = $row['serviceimg'];
					$imgpath1 = rtrim($img1, ',');
					$imgpath1 = ltrim($imgpath1);
					$serviceimg	 = explode(',', $imgpath1 );
					if(!empty($serviceimg[0]))
					{	
			?>
		  <div class="col-md-4">
			  <div id="container">
				  <img id="image" src="<?php echo (isset($serviceimg[0]) && (!empty($serviceimg[0]))) ? 'dbimages/'.$serviceimg[0] : ''; ?>" style="width: 240px;height: 150px;"/>
				  <p id="text">
					<i class="fa fa-trash" id="icon" onClick="delimage('<?php echo $serviceid?>','<?php echo $serviceimg[0] ?>')"></i>
				  </p>
			   </div>
		  </div>
			<?php	
					}
					array_shift($serviceimg	);
					foreach($serviceimg as $v)    
					{
					   $path = (isset($v) && !empty($v)) ? "dbimages/".$v : '' ;
			?>
		   <div class="col-md-4">
			   <div id="container">
				  <img id="image" src="<?php echo("$path"); ?>" style="width: 240px;height: 150px;"/>
				  <p id="text">
					<i class="fa fa-trash" id="icon" onClick="delimage('<?php echo $serviceid?>','<?php echo $v?>')"></i>
				  </p>
			   </div>
		   </div>
		   <?php
					}	
				}	
			?>	
		</div>
<?php
    }
	/**************************** Sub Service Images **********************************************/
	if (isset($_GET) && !empty($_GET['id']) && !empty($_GET['filename']) && ($flag=="SubSerivceimg")) 
	{
		$id1 = $_GET['id'];
		$filename1 = $_GET['filename'].",";

		$query 	  = "select * from subservices where subserviceid ='$id1'";
		$result   = mysqli_query($mysqli,$query) or die(mysqli_error());
		
		if ($row  = mysqli_fetch_array($result)) 
		{
		   extract($row);	
		}

		$serviceimg = str_replace($filename1,"",$serviceimg);

		$query = "UPDATE subservices SET 
				  serviceimg ='$serviceimg'
				  WHERE subserviceid = '$id1'"; 
		$result = mysqli_query($mysqli,$query) or die (mysqli_error());	

		$query 	  = "select * from subservices where subserviceid ='$id1'";
		$result   = mysqli_query($mysqli,$query) or die(mysqli_error());
		
		if ($row  = mysqli_fetch_array($result)) 
		{
		   extract($row);	
		}
?>
		<div class="col-md-12" id="imagedivid">
		   <?php 
				if (!empty($row['serviceimg'])) 
				{
					$img1 = $row['serviceimg'];
					$imgpath1 = rtrim($img1, ',');
					$imgpath1 = ltrim($imgpath1);
					$serviceimg	 = explode(',', $imgpath1 );
					if(!empty($serviceimg[0]))
					{	
			?>
		  <div class="col-md-4">
			  <div id="container">
				  <img id="image" src="<?php echo (isset($serviceimg[0]) && (!empty($serviceimg[0]))) ? 'dbimages/'.$serviceimg[0] : ''; ?>" style="width: 240px;height: 150px;"/>
				  <p id="text">
					<i class="fa fa-trash" id="icon" onClick="delimage('<?php echo $subserviceid?>','<?php echo $serviceimg[0] ?>')"></i>
				  </p>
			   </div>
		  </div>
			<?php	
					}
					array_shift($serviceimg	);
					foreach($serviceimg as $v)    
					{
					   $path = (isset($v) && !empty($v)) ? "dbimages/".$v : '' ;
			?>
		   <div class="col-md-4">
			   <div id="container">
				  <img id="image" src="<?php echo("$path"); ?>" style="width: 240px;height: 150px;"/>
				  <p id="text">
					<i class="fa fa-trash" id="icon" onClick="delimage('<?php echo $subserviceid?>','<?php echo $v?>')"></i>
				  </p>
			   </div>
		   </div>
		   <?php
					}	
				}	
			?>	
		</div>
<?php
    }
	/**************************** Sub Sub Services Images  **********************************************/
	if (isset($_GET) && !empty($_GET['id']) && !empty($_GET['filename']) && ($flag=="SubSubServicephoto")) 
	{
		$id1 = $_GET['id'];
		$filename1 = $_GET['filename'].",";

		$query 	  = "select * from subservices_sub where prosubserviceid ='$id1'";
		$result   = mysqli_query($mysqli,$query) or die(mysqli_error());
		
		if ($row  = mysqli_fetch_array($result)) 
		{
		   extract($row);	
		}

		$serviceimg = str_replace($filename1,"",$serviceimg);

		$query = "UPDATE subservices_sub SET 
				  serviceimg ='$serviceimg'
				  WHERE prosubserviceid = '$id1'"; 
		$result = mysqli_query($mysqli,$query) or die (mysqli_error());	

		$query 	  = "select * from subservices_sub where prosubserviceid ='$id1'";
		$result   = mysqli_query($mysqli,$query) or die(mysqli_error());
		
		if ($row  = mysqli_fetch_array($result)) 
		{
		   extract($row);	
		}
?>
		<div class="col-md-12" id="imagedivid">
		   <?php 
				if (!empty($row['serviceimg'])) 
				{
					$img1 = $row['serviceimg'];
					$imgpath1 = rtrim($img1, ',');
					$imgpath1 = ltrim($imgpath1);
					$serviceimg	 = explode(',', $imgpath1 );
					if(!empty($serviceimg[0]))
					{	
			?>
		  <div class="col-md-4">
			  <div id="container">
				  <img id="image" src="<?php echo (isset($serviceimg[0]) && (!empty($serviceimg[0]))) ? 'dbimages/'.$serviceimg[0] : ''; ?>" style="width: 240px;height: 150px;"/>
				  <p id="text">
					<i class="fa fa-trash" id="icon" onClick="delimage('<?php echo $prosubserviceid?>','<?php echo $serviceimg[0] ?>')"></i>
				  </p>
			   </div>
		  </div>
			<?php	
					}
					array_shift($serviceimg	);
					foreach($serviceimg as $v)    
					{
					   $path = (isset($v) && !empty($v)) ? "dbimages/".$v : '' ;
			?>
		   <div class="col-md-4">
			   <div id="container">
				  <img id="image" src="<?php echo("$path"); ?>" style="width: 240px;height: 150px;"/>
				  <p id="text">
					<i class="fa fa-trash" id="icon" onClick="delimage('<?php echo $prosubserviceid?>','<?php echo $v?>')"></i>
				  </p>
			   </div>
		   </div>
		   <?php
					}	
				}	
			?>	
		</div>
<?php
    }
	
	
	/****************************Testimonials Photo1 **********************************************/
	if (isset($_GET) && !empty($_GET['id']) && !empty($_GET['filename']) && ($flag=="profilephoto")) 
	{		
		$id1 = $_GET['id'];
		$filename1 = $_GET['filename'];
		
		$query 	  = "select * from testimonials where testimonialid ='$id1'";
		$result   = mysqli_query($mysqli,$query) or die(mysqli_error());
		
		if ($row  = mysqli_fetch_array($result)) 
		{
		   extract($row);	
		}

		$filePath ="dbimages/$filename1";
		if (file_exists($filePath)) 
	    {
		    unlink($filePath);
	    }
		
		$profilephoto = str_replace($filename1,"",$profilephoto);
		
		$query = "UPDATE testimonials SET 
				  profilephoto ='$profilephoto'
				  WHERE testimonialid = '$id1'"; 
		$result = mysqli_query($mysqli,$query) or die (mysqli_error());	
		
	}
	/****************************Logo**********************************************/
	if (isset($_GET) && !empty($_GET['id']) && !empty($_GET['filename']) && ($flag=="logo")) 
	{		
		$id1 = $_GET['id'];
		$filename1 = $_GET['filename'];
		
		$query 	  = "select * from indexpage where id ='$id1'";
		$result   = mysqli_query($mysqli,$query) or die(mysqli_error());
		
		if ($row  = mysqli_fetch_array($result)) 
		{
		   extract($row);	
		}

		$logo = str_replace($filename1,"",$logo);
		
		$query = "UPDATE indexpage SET 
				  logo ='$logo'
				  WHERE id = '$id1'"; 
		$result = mysqli_query($mysqli,$query) or die (mysqli_error());

        $filePath ="dbimages/$filename1";
		if (file_exists($filePath)) 
	    {
		    unlink($filePath);
	    }		
		
	}
	/****************************Breadcrumb Background**********************************************/
	if (isset($_GET) && !empty($_GET['id']) && !empty($_GET['filename']) && ($flag=="breadcrumb")) 
	{		
		$id1 = $_GET['id'];
		$filename1 = $_GET['filename'];
		
		$query 	  = "select * from indexpage where id ='$id1'";
		$result   = mysqli_query($mysqli,$query) or die(mysqli_error());
		
		if ($row  = mysqli_fetch_array($result)) 
		{
		   extract($row);	
		}

		$breadcrumbimg = str_replace($filename1,"",$breadcrumbimg);
		
		$query = "UPDATE indexpage SET 
				  breadcrumbimg ='$breadcrumbimg'
				  WHERE id = '$id1'"; 
		$result = mysqli_query($mysqli,$query) or die (mysqli_error());	
		
	}
	/****************************About Us**********************************************/
	if (isset($_GET) && !empty($_GET['id']) && !empty($_GET['filename']) && ($flag=="aboutusphoto")) 
	{		
		$id1 = $_GET['id'];
		$filename1 = $_GET['filename'];
		
		$query 	  = "select * from aboutus where aboutid ='$id1'";
		$result   = mysqli_query($mysqli,$query) or die(mysqli_error());
		
		if ($row  = mysqli_fetch_array($result)) 
		{
		   extract($row);	
		}

		$image = str_replace($filename1,"",$image);
		
		$query = "UPDATE aboutus SET 
				  image ='$image'
				  WHERE aboutid = '$id1'"; 
		$result = mysqli_query($mysqli,$query) or die (mysqli_error());	
		
	}
	
	/****************************Team Photo1 **********************************************/
	if (isset($_GET) && !empty($_GET['id']) && !empty($_GET['filename']) && ($flag=="teamprofilephoto")) 
	{		
		$id1 = $_GET['id'];
		$filename1 = $_GET['filename'];
		
		$query 	  = "select * from team where teamid ='$id1'";
		$result   = mysqli_query($mysqli,$query) or die(mysqli_error());
		
		if ($row  = mysqli_fetch_array($result)) 
		{
		   extract($row);	
		}

		$profilephoto = str_replace($filename1,"",$profilephoto);
		
		$query = "UPDATE team SET 
				  profilephoto ='$profilephoto'
				  WHERE teamid = '$id1'"; 
		$result = mysqli_query($mysqli,$query) or die (mysqli_error());	
		
	}
	
	/****************************News Photo1 **********************************************/
	if (isset($_GET) && !empty($_GET['id']) && !empty($_GET['filename']) && ($flag=="Newsphoto")) 
	{		
		$id1 = $_GET['id'];
		$filename1 = $_GET['filename'];
		
		$query 	  = "select * from news where newsid ='$id1'";
		$result   = mysqli_query($mysqli,$query) or die(mysqli_error());
		
		if ($row  = mysqli_fetch_array($result)) 
		{
		   extract($row);	
		}

		$image = str_replace($filename1,"",$image);
		
		$query = "UPDATE news SET 
				  image ='$image'
				  WHERE newsid = '$id1'"; 
		$result = mysqli_query($mysqli,$query) or die (mysqli_error());	
	}
	
	/**************************** Blog Gallery Image **********************************************/
	if (isset($_GET) && !empty($_GET['id']) && !empty($_GET['filename']) && ($flag=="bloggalleryimage")) 
	{
		$id1 = $_GET['id'];
		$filename1 = $_GET['filename'].",";

		$query 	  = "select * from news where newsid ='$id1'";
		$result   = mysqli_query($mysqli,$query) or die(mysqli_error());
		
		if ($row  = mysqli_fetch_array($result)) 
		{
		   extract($row);	
		}

		$galleryimg = str_replace($filename1,"",$galleryimg);

		$query = "UPDATE news SET 
				  galleryimg ='$galleryimg'
				  WHERE newsid = '$id1'"; 
		$result = mysqli_query($mysqli,$query) or die (mysqli_error());	

		$query 	  = "select * from news where newsid ='$id1'";
		$result   = mysqli_query($mysqli,$query) or die(mysqli_error());
		
		if ($row  = mysqli_fetch_array($result)) 
		{
		   extract($row);	
		}
?>
		<div class="col-md-12" id="imagedivid">
		   <?php 
				if (!empty($row['galleryimg'])) 
				{
					$img1 = $row['galleryimg'];
					$imgpath1 = rtrim($img1, ',');
					$imgpath1 = ltrim($imgpath1);
					$galleryimg = explode(',', $imgpath1 );
					if(!empty($galleryimg[0]))
					{	
			?>
		  <div class="col-md-4">
			  <div id="container">
				  <img id="image" src="<?php echo (isset($galleryimg[0]) && (!empty($galleryimg[0]))) ? 'dbimages/'.$galleryimg[0] : ''; ?>" style="width: 240px;height: 150px;"/>
				  <p id="text">
					<i class="fa fa-trash" id="icon" onClick="delimage('<?php echo $newsid ?>','<?php echo $galleryimg[0] ?>')"></i>
				  </p>
			   </div>
		  </div>
			<?php	
					}
					array_shift($galleryimg);
					foreach($galleryimg as $v)    
					{
					   $path = (isset($v) && !empty($v)) ? "dbimages/".$v : '' ;
			?>
		   <div class="col-md-4">
			   <div id="container">
				  <img id="image" src="<?php echo("$path"); ?>" style="width: 240px;height: 150px;"/>
				  <p id="text">
					<i class="fa fa-trash" id="icon" onClick="delimage('<?php echo $newsid?>','<?php echo $v?>')"></i>
				  </p>
			   </div>
		   </div>
		   <?php
					}	
				}	
			?>	
		</div>
<?php
    }
	
	/****************************Slider1**********************************************/
	if (isset($_GET) && !empty($_GET['id']) && !empty($_GET['filename']) && ($flag=="Slider")) 
	{		
		$id1 = $_GET['id'];
		$filename1 = $_GET['filename'];
		
		$query 	  = "select * from slider where sliderid ='$id1'";
		$result   = mysqli_query($mysqli,$query) or die(mysqli_error());
		
		if ($row  = mysqli_fetch_array($result)) 
		{
		   extract($row);	
		}

		$slider = str_replace($filename1,"",$slider);
		
		$query = "UPDATE slider SET 
				  slider ='$slider'
				  WHERE sliderid = '$id1'"; 
		$result = mysqli_query($mysqli,$query) or die (mysqli_error());	
	}
	
	/****************************Service Photo**********************************************/
	if (isset($_GET) && !empty($_GET['id']) && !empty($_GET['filename']) && ($flag=="Servicephoto1")) 
	{		
		$id1 = $_GET['id'];
		$filename1 = $_GET['filename'];
		
		$query 	  = "select * from services where serviceid ='$id1'";
		$result   = mysqli_query($mysqli,$query) or die(mysqli_error());
		
		if ($row  = mysqli_fetch_array($result)) 
		{
		   extract($row);	
		}

		$image = str_replace($filename1,"",$image);
		
		$query = "UPDATE services SET 
				  image ='$image'
				  WHERE serviceid = '$id1'"; 
		$result = mysqli_query($mysqli,$query) or die (mysqli_error());

        $filePath ="dbimages/$filename1";
		if (file_exists($filePath)) 
	    {
		    unlink($filePath);
	    }		
	}
	
	/****************************Sub Service Photo**********************************************/
	if (isset($_GET) && !empty($_GET['id']) && !empty($_GET['filename']) && ($flag=="Servicephoto")) 
	{		
		$id1 = $_GET['id'];
		$filename1 = $_GET['filename'];
			  
		$query 	  = "select * from subservices where subserviceid ='$id1'";
		$result   = mysqli_query($mysqli,$query) or die(mysqli_error());
		
		if ($row  = mysqli_fetch_array($result)) 
		{
		   extract($row);	
		}

		$image = str_replace($filename1,"",$image);
		
		$query = "UPDATE subservices SET 
				  image ='$image'
				  WHERE subserviceid = '$id1'"; 
		$result = mysqli_query($mysqli,$query) or die (mysqli_error());	
		
		$filePath ="dbimages/$filename1";
		if (file_exists($filePath)) 
	    {
		    unlink($filePath);
	    }
	}
	
	/****************************Sub Service1 Photo**********************************************/
	if (isset($_GET) && !empty($_GET['id']) && !empty($_GET['filename']) && ($flag=="SubServicephoto")) 
	{		
		$id1 = $_GET['id'];
		$filename1 = $_GET['filename'];
			  
		$query 	  = "select * from subservices_sub	where prosubserviceid ='$id1'";
		$result   = mysqli_query($mysqli,$query) or die(mysqli_error());
		
		if ($row  = mysqli_fetch_array($result)) 
		{
		   extract($row);	
		}

		$image = str_replace($filename1,"",$image);
		
		$query = "UPDATE subservices_sub SET 
				  image ='$image'
				  WHERE prosubserviceid = '$id1'"; 
		$result = mysqli_query($mysqli,$query) or die (mysqli_error());	
		
		$filePath ="dbimages/$filename1";
		if (file_exists($filePath)) 
	    {
		    unlink($filePath);
	    }
	}
	
	/**************************** Sucess Story **********************************************/
	if(isset($_GET) && !empty($_GET['id']) && !empty($_GET['filename']) && ($flag=="sucessstory")) 
	{
		$id1 = $_GET['id'];
		$filename1 = $_GET['filename'].",";

		$query 	  = "select * from sucessstory where galleryid ='$id1'";
		$result   = mysqli_query($mysqli,$query) or die(mysqli_error());
		
		if ($row  = mysqli_fetch_array($result)) 
		{
		   extract($row);	
		}

		$galleryimg = str_replace($filename1,"",$galleryimg);

		$query = "UPDATE sucessstory SET 
				  galleryimg ='$galleryimg'
				  WHERE galleryid = '$id1'"; 
		$result = mysqli_query($mysqli,$query) or die (mysqli_error());	

		$query 	  = "select * from sucessstory where galleryid ='$id1'";
		$result   = mysqli_query($mysqli,$query) or die(mysqli_error());
		
		if ($row  = mysqli_fetch_array($result)) 
		{
		   extract($row);	
		}
?>
		<div class="col-md-12" id="imagedivid">
		   <?php 
				if (!empty($row['galleryimg'])) 
				{
					$img1 = $row['galleryimg'];
					$imgpath1 = rtrim($img1, ',');
					$imgpath1 = ltrim($imgpath1);
					$galleryimg = explode(',', $imgpath1 );
					if(!empty($galleryimg[0]))
					{	
			?>
		  <div class="col-md-4">
			  <div id="container">
				  <img id="image" src="<?php echo (isset($galleryimg[0]) && (!empty($galleryimg[0]))) ? 'dbimages/'.$galleryimg[0] : ''; ?>" style="width: 240px;height: 150px;"/>
				  <p id="text">
					<i class="fa fa-trash" id="icon" onClick="delimage('<?php echo $galleryid ?>','<?php echo $galleryimg[0] ?>')"></i>
				  </p>
			   </div>
		  </div>
			<?php	
					}
					array_shift($galleryimg);
					foreach($galleryimg as $v)    
					{
					   $path = (isset($v) && !empty($v)) ? "dbimages/".$v : '' ;
			?>
		   <div class="col-md-4">
			   <div id="container">
				  <img id="image" src="<?php echo("$path"); ?>" style="width: 240px;height: 150px;"/>
				  <p id="text">
					<i class="fa fa-trash" id="icon" onClick="delimage('<?php echo $galleryid?>','<?php echo $v?>')"></i>
				  </p>
			   </div>
		   </div>
		   <?php
					}	
				}	
			?>	
		</div>
<?php
    }
	/**************************** Logo Image **********************************************/
	if (isset($_GET) && !empty($_GET['id']) && !empty($_GET['filename']) && ($flag=="logoimage")) 
	{
		$id1 = $_GET['id'];
		$filename1 = $_GET['filename'].",";

		$query 	  = "select * from logo where galleryid ='$id1'";
		$result   = mysqli_query($mysqli,$query) or die(mysqli_error());
		
		if ($row  = mysqli_fetch_array($result)) 
		{
		   extract($row);	
		}

		$galleryimg = str_replace($filename1,"",$galleryimg);

		$query = "UPDATE logo SET 
				  galleryimg ='$galleryimg'
				  WHERE galleryid = '$id1'"; 
		$result = mysqli_query($mysqli,$query) or die (mysqli_error());	

		$query 	  = "select * from logo where galleryid ='$id1'";
		$result   = mysqli_query($mysqli,$query) or die(mysqli_error());
		
		if ($row  = mysqli_fetch_array($result)) 
		{
		   extract($row);	
		}
?>
		<div class="col-md-12" id="imagedivid">
		   <?php 
				if (!empty($row['galleryimg'])) 
				{
					$img1 = $row['galleryimg'];
					$imgpath1 = rtrim($img1, ',');
					$imgpath1 = ltrim($imgpath1);
					$galleryimg = explode(',', $imgpath1 );
					if(!empty($galleryimg[0]))
					{	
			?>
		  <div class="col-md-4">
			  <div id="container">
				  <img id="image" src="<?php echo (isset($galleryimg[0]) && (!empty($galleryimg[0]))) ? 'dbimages/'.$galleryimg[0] : ''; ?>" style="width: 240px;height: 150px;"/>
				  <p id="text">
					<i class="fa fa-trash" id="icon" onClick="delimage('<?php echo $galleryid ?>','<?php echo $galleryimg[0] ?>')"></i>
				  </p>
			   </div>
		  </div>
			<?php	
					}
					array_shift($galleryimg);
					foreach($galleryimg as $v)    
					{
					   $path = (isset($v) && !empty($v)) ? "dbimages/".$v : '' ;
			?>
		   <div class="col-md-4">
			   <div id="container">
				  <img id="image" src="<?php echo("$path"); ?>" style="width: 240px;height: 150px;"/>
				  <p id="text">
					<i class="fa fa-trash" id="icon" onClick="delimage('<?php echo $galleryid?>','<?php echo $v?>')"></i>
				  </p>
			   </div>
		   </div>
		   <?php
					}	
				}	
			?>	
		</div>
<?php
    }
	/**************************** Other Image **********************************************/
	if (isset($_GET) && !empty($_GET['id']) && !empty($_GET['filename']) && ($flag=="imagepvc")) 
	{
		$id1 = $_GET['id'];
		$filename1 = $_GET['filename'].",";

		$query 	  = "select * from pvc where pvcid ='$id1'";
		$result   = mysqli_query($mysqli,$query) or die(mysqli_error());
		
		if ($row  = mysqli_fetch_array($result)) 
		{
		   extract($row);	
		}

		$imagepvc = str_replace($filename1,"",$imagepvc);

		$query = "UPDATE pvc SET 
				  imagepvc ='$imagepvc'
				  WHERE pvcid = '$id1'"; 
		$result = mysqli_query($mysqli,$query) or die (mysqli_error());	

		$query 	  = "select * from pvc where pvcid ='$id1'";
		$result   = mysqli_query($mysqli,$query) or die(mysqli_error());
		
		if ($row  = mysqli_fetch_array($result)) 
		{
		   extract($row);	
		}
?>
    <div class="col-md-12" id="imagedivid">
		   <?php 
				if (!empty($row['imagepvc'])) 
				{
					$img1 = $row['imagepvc'];
					$imgpath1 = rtrim($img1, ',');
					$imgpath1 = ltrim($imgpath1);
					$imagepvc = explode(',', $imgpath1 );
					if(!empty($imagepvc[0]))
					{	
			?>
		  <div class="col-md-4">
			  <div id="container">
				  <img id="image" src="<?php echo (isset($imagepvc[0]) && (!empty($imagepvc[0]))) ? 'dbimages/'.$imagepvc[0] : ''; ?>" style="width: 240px;height: 150px;"/>
				  <p id="text">
					<i class="fa fa-trash" id="icon" onClick="delimage('<?php echo $pvcid ?>','<?php echo $imagepvc[0] ?>')"></i>
				  </p>
			   </div>
		  </div>
			<?php	
					}
					array_shift($imagepvc);
					foreach($imagepvc as $v)    
					{
					   $path = (isset($v) && !empty($v)) ? "dbimages/".$v : '' ;
			?>
		   <div class="col-md-4">
			   <div id="container">
				  <img id="image" src="<?php echo("$path"); ?>" style="width: 240px;height: 150px;"/>
				  <p id="text">
					<i class="fa fa-trash" id="icon" onClick="delimage('<?php echo $pvcid?>','<?php echo $v?>')"></i>
				  </p>
			   </div>
		   </div>
		   <?php
					}	
				}	
			?>	
		</div>
<?php
    }	
?>
	