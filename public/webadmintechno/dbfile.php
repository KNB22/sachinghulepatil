<?php
    extract($_POST);
    extract($_GET);
    include('database.php');
	$remove[] = "'";
	$remove[] = '"';
	
	/************************************** Gallery ***************************************************/
	if(isset($_POST['addgallery']) && $_POST['addgallery']=='Add' )
    {
		if((isset($_FILES['galleryimage']['name']) && !empty($_FILES['galleryimage']['name'])) ? $_FILES['galleryimage']['name'] : '')
		{
				$cnt = 0;
				$i = 0;
				$photo1=" ";				
				foreach ($_FILES['galleryimage']['name'] as $name => $value)
				{
					if(is_uploaded_file($_FILES['galleryimage']['tmp_name'][$name])) 
					{
						$sourcePath = $_FILES['galleryimage']['tmp_name'][$name];
						$imagepic = $_FILES['galleryimage']['name'][$name];
						$targetPath = "dbimages/". $imagepic;
						if(move_uploaded_file($sourcePath,$targetPath)) 
						{
							$arrayimg[$i] = ($imagepic);
							$photo1 .= $arrayimg[$i].",";
							$cnt++;$i++;
						}
					}
				}	 
		}
		 
		$query = "insert into gallery(imgtitle, galleryimg,galttag, gtitle, gdescription)values('$imgtitle','$photo1','$galttag','$gtitle','$gdescription')";
		$result = mysqli_query($mysqli,$query) or die(mysqli_error());
		  
		header('location:all-gallery.php');	
    } 

    if(isset($_POST['editgallery']) && $_POST['editgallery']=='Edit' )
    {	     
		$query_dis = "select galleryimg from gallery where galleryid='$galleryid'";
		$result_dis = mysqli_query($mysqli,$query_dis);
		if($row = mysqli_fetch_array($result_dis))
		{
			$galleryimg1 = $row['galleryimg'];
		}
		
		if(!empty($_FILES))
		{
		   if((isset($_FILES['galleryimage']['name']) && !empty($_FILES['galleryimage']['name'])) ? $_FILES['galleryimage']['name'] : '')
		   {
				$cnt = 0;
				$i = 0;
				$photo5=" ";				
				foreach ($_FILES['galleryimage']['name'] as $name => $value)
				{
					if(is_uploaded_file($_FILES['galleryimage']['tmp_name'][$name])) 
					{
						$sourcePath = $_FILES['galleryimage']['tmp_name'][$name];
						$imagepic = $_FILES['galleryimage']['name'][$name];
						$targetPath = "dbimages/". $imagepic;
						if(move_uploaded_file($sourcePath,$targetPath)) 
						{
							$arrayimg[$i] = ($imagepic);
							$photo5 .= $arrayimg[$i].",";
							$cnt++;$i++;
						}
					}
				}	
			  
				if(!empty($galleryimg1))
				{
					
					$strcreative = $galleryimg1.''.ltrim($photo5);

					$query5 = "update gallery set 
					 galleryimg ='".$strcreative."'
					 where galleryid='".$_POST['galleryid']."'";
					 
					 $result5 = mysqli_query($mysqli,$query5) or die (mysqli_error());
				}
				else
				{
				   $query5 = "update gallery set 
					 galleryimg ='".$photo5."'
					 where galleryid='".$_POST['galleryid']."'";

					 $result5 = mysqli_query($mysqli,$query5) or die (mysqli_error());
				} 			
		   }
		} 
		
		$query6 = "update gallery set
				imgtitle='".$imgtitle."',
				galttag='".$galttag."', 
				gtitle='".$gtitle."', 
				gdescription='".$gdescription."'
				where galleryid='".$_POST['galleryid']."'";
	
	    $result6 = mysqli_query($mysqli,$query6) or die (mysqli_error());
	   
	    header('location:all-gallery.php');	
    }
	
	/*************************************** Contact Us **************************************************/
	if(isset($_POST['editcontactus']) && $_POST['editcontactus']=='Edit' )
    {
	   $contactinfo = str_replace( $remove, "", $contactinfo);
	   $address = str_replace( $remove, "", $address);
	   
       $query6 = "update contactus set 
	             contactinfo='".$contactinfo."', 
				 address='".$address."', 
				 emailid='".$emailid."', 
				 mobileno='".$mobileno."', 
				 phoneno='".$phoneno."', 
				 opendays='".$opendays."', 
				 opentime='".$opentime."', 
				 facebook='".$facebook."', 
				 twitter='".$twitter."', 
				 linkedin='".$linkedin."', 
				 whatsapp='".$whatsapp."', 
				 youtube='".$youtube."'
				 where contactid ='".$_POST['contactid']."'";
	
	   $result6 = mysqli_query($mysqli,$query6) or die (mysqli_error());
	   
	   header('location:contactus.php');	
    }
	
	/**************************************** About Us *************************************************/
	if(isset($_POST['editaboutus']) && $_POST['editaboutus']=='Edit' )
    {
		$aboutus = str_replace( $remove, "", $aboutus);
	  
		$query6 = "update aboutus set 
				 aboutus='".$aboutus."',
				 aboutus1='".$aboutus1."',
				 aalttag ='".$aalttag."', 
				 atitle ='".$atitle."', 
				 adescrption ='".$adescription."'
				 where aboutid ='".$_POST['aboutid']."'";
	
	    $result6 = mysqli_query($mysqli,$query6) or die (mysqli_error());
	   
	    if((isset($_FILES['photo1']['name']) && !empty($_FILES['photo1']['name'])) ? $_FILES['photo1']['name'] : '')
	    { 	
			$profileimg1 = $_FILES['photo1']['name'];
			$tmp_name = $_FILES['photo1']['tmp_name'];
			$path = 'dbimages/';
			if(!empty($profileimg1)) {
				move_uploaded_file($tmp_name,$path.$profileimg1);  
			}
			
			$query5 = "update aboutus set 
				 image ='".$profileimg1."'
				 where aboutid ='".$_POST['aboutid']."'";

			$result5 = mysqli_query($mysqli,$query5) or die (mysqli_error());
	    }
		
		header('location:aboutus.php');	
	}	
	
	/************************************* Testimonials ****************************************************/
	if(isset($_POST['addtestimonials']) && $_POST['addtestimonials']=='Add' )
    {
		$testimonial = str_replace( $remove, "", $testimonial);
		
		if((isset($_FILES['photo1']['name']) && !empty($_FILES['photo1']['name'])) ? $_FILES['photo1']['name'] : '')
	    {	
			$profileimg1 = $_FILES['photo1']['name'];
			$tmp_name = $_FILES['photo1']['tmp_name'];
			$path = 'dbimages/';
			if(!empty($profileimg1)) {
				move_uploaded_file($tmp_name,$path.$profileimg1);  
			}
			
	    } 
	  
	  	$query = "insert into testimonials(name, designation, testimonial, profilephoto, tmalttag, tmtitle, tmdescription)
		values('$name','$designation','$testimonial','$profileimg1','$tmalttag', '$tmtitle', '$tmdescription')";
		$result = mysqli_query($mysqli,$query) or die(mysqli_error());
		  
		header('location:all-testimonials.php');	
	}
	
	if(isset($_POST['edittestimonials']) && $_POST['edittestimonials']=='Edit' )
    {
		if((isset($_FILES['photo1']['name']) && !empty($_FILES['photo1']['name'])) ? $_FILES['photo1']['name'] : '')
	    { 	
			$profileimg1 = $_FILES['photo1']['name'];
			$tmp_name = $_FILES['photo1']['tmp_name'];
			$path = 'dbimages/';
			if(!empty($profileimg1)) {
				move_uploaded_file($tmp_name,$path.$profileimg1);  
			}
			
			$query5 = "update testimonials set 
				 profilephoto ='".$profileimg1."'
				 where testimonialid='".$_POST['testimonialid']."'";

			$result5 = mysqli_query($mysqli,$query5) or die (mysqli_error());
	    }
	  
	   $testimonial = str_replace( $remove, "", $testimonial);
	   
       $query6 = "update testimonials set 
				 name='".$name."',
				 designation='".$designation."',
				 testimonial='".$testimonial."',
				 tmalttag = '".$tmalttag."', 
				 tmtitle='".$tmtitle."', 
				 tmdescription='".$tmdescription."'
				 where testimonialid ='".$_POST['testimonialid']."'";
	
	   $result6 = mysqli_query($mysqli,$query6) or die (mysqli_error());
	   
	   header('location:all-testimonials.php');	
    }
	
	/*********************************** Logo Edit ******************************************************/
	if(isset($_POST['addlogo']) && $_POST['addlogo']=='Edit' )
    {
		if((isset($_FILES['photo1']['name']) && !empty($_FILES['photo1']['name'])) ? $_FILES['photo1']['name'] : '')
	    { 	
			$profileimg1 = $_FILES['photo1']['name'];
			$tmp_name = $_FILES['photo1']['tmp_name'];
			$path = 'dbimages/';
			if(!empty($profileimg1)) {
				move_uploaded_file($tmp_name,$path.$profileimg1);  
			}
			
			$query5 = "update indexpage set 
			logo ='".$profileimg1."'
			where id='".$_POST['id']."'";

			$result5 = mysqli_query($mysqli,$query5) or die (mysqli_error());
	    }
		
		$query5 = "update indexpage set 
		lalttag ='".$alttag."',
		ltitle ='".$title."',
		ldescrption ='".$description."'
		where id='".$_POST['id']."'";

		$result5 = mysqli_query($mysqli,$query5) or die (mysqli_error());
		  
		header('location:add-logo.php');	
	}	
	
	/*********************************** Logo Edit ******************************************************/
	if(isset($_POST['addbreadcrumb']) && $_POST['addbreadcrumb']=='Edit' )
    {
		if((isset($_FILES['photo1']['name']) && !empty($_FILES['photo1']['name'])) ? $_FILES['photo1']['name'] : '')
	    { 	
			$profileimg1 = $_FILES['photo1']['name'];
			$tmp_name = $_FILES['photo1']['tmp_name'];
			$path = 'dbimages/';
			if(!empty($profileimg1)) {
				move_uploaded_file($tmp_name,$path.$profileimg1);  
			}
			
			$query5 = "update indexpage set 
			breadcrumbimg ='".$profileimg1."'
			where id='".$_POST['id']."'";

			$result5 = mysqli_query($mysqli,$query5) or die (mysqli_error());
	    }
		  
		header('location:breadcrumbimg.php');	
	}	
	
	/********************************** Welcome Note*******************************************************/
	if(isset($_POST['editwelcomenote']) && $_POST['editwelcomenote']=='Edit' )
    {
		$welcomenote = str_replace( $remove, "", $welcomenote);

		$query5 = "update indexpage set 
			welcomenotetitle ='".$welcomenotetitle."',
			welcomenote ='".$welcomenote."'
			where id ='".$_POST['id']."'";

		$result5 = mysqli_query($mysqli,$query5) or die (mysqli_error());

		header('location:welcomenote.php');	
		
	}	

	
	/************************************* Team ****************************************************/
	if(isset($_POST['addteam']) && $_POST['addteam']=='Add' )
    {
		if((isset($_FILES['photo1']['name']) && !empty($_FILES['photo1']['name'])) ? $_FILES['photo1']['name'] : '')
	    {	
			$profileimg1 = $_FILES['photo1']['name'];
			$tmp_name = $_FILES['photo1']['tmp_name'];
			$path = 'dbimages/';
			if(!empty($profileimg1)) {
				move_uploaded_file($tmp_name,$path.$profileimg1);  
			}
			
	    } 
	  
	  	$query = "insert into team(name, designation, profilephoto,talttag, ttitle, tdescription)
		values('$name','$designation','$profileimg1','$talttag','$ttitle','$tdescription')";
		$result = mysqli_query($mysqli,$query) or die(mysqli_error());
		  
		header('location:all-team.php');	
	}
	
	if(isset($_POST['editteam']) && $_POST['editteam']=='Edit' )
    {
		if((isset($_FILES['photo1']['name']) && !empty($_FILES['photo1']['name'])) ? $_FILES['photo1']['name'] : '')
	    { 	
			$profileimg1 = $_FILES['photo1']['name'];
			$tmp_name = $_FILES['photo1']['tmp_name'];
			$path = 'dbimages/';
			if(!empty($profileimg1)) {
				move_uploaded_file($tmp_name,$path.$profileimg1);  
			}
			
			$query5 = "update team set 
				 profilephoto ='".$profileimg1."'
				 where teamid='".$_POST['teamid']."'";

			$result5 = mysqli_query($mysqli,$query5) or die (mysqli_error());
	    }
	  
       $query6 = "update team set 
				 name='".$name."',
				 designation='".$designation."',
				 talttag='".$talttag."', 
				 ttitle='".$ttitle."', 
				 tdescription='".$tdescription."'
				 where teamid ='".$_POST['teamid']."'";
	
	   $result6 = mysqli_query($mysqli,$query6) or die (mysqli_error());
	   
	   header('location:all-team.php');	
    }
	
	
	/************************************* News ****************************************************/
	if(isset($_POST['addnews']) && $_POST['addnews']=='Add')
    {
		if((isset($_FILES['photo1']['name']) && !empty($_FILES['photo1']['name'])) ? $_FILES['photo1']['name'] : '')
	    {	
			$profileimg1 = $_FILES['photo1']['name'];
			$tmp_name = $_FILES['photo1']['tmp_name'];
			$path = 'dbimages/';
			if(!empty($profileimg1)) {
				move_uploaded_file($tmp_name,$path.$profileimg1);  
			}	
	    } 
		if((isset($_FILES['galleryimage']['name']) && !empty($_FILES['galleryimage']['name'])) ? $_FILES['galleryimage']['name'] : '')
		{
			$cnt = 0;
			$i = 0;
			$photo1=" ";				
			foreach ($_FILES['galleryimage']['name'] as $name => $value)
			{
				if(is_uploaded_file($_FILES['galleryimage']['tmp_name'][$name])) 
				{
					$sourcePath = $_FILES['galleryimage']['tmp_name'][$name];
					$imagepic = $_FILES['galleryimage']['name'][$name];
					$targetPath = "dbimages/". $imagepic;
					if(move_uploaded_file($sourcePath,$targetPath)) 
					{
						$arrayimg[$i] = ($imagepic);
						$photo1 .= $arrayimg[$i].",";
						$cnt++;$i++;
					}
				}
			}	 
		}
	  
	    $description = str_replace( $remove, "", $description);
	    $seotitle = str_replace( $remove, "", $seotitle);
	    $seodesc = str_replace( $remove, "", $seodesc);
	    $seokeyword = str_replace( $remove, "", $seokeyword);
		
	  	$query = "insert into news(title, postby, descrption, image, galleryimg, balttag, btitle, bdescrption, seotitle, seodesc, seokeyword, newsdate)values('$title','$postby','$descrption','$profileimg1','$photo1','$balttag','$btitle','$bdescrption','$seotitle','$seodesc',
		'$seokeyword','$newsdate')";
		$result = mysqli_query($mysqli,$query) or die(mysqli_error());
		  
		header('location:all-news.php');	
	}
	
	if(isset($_POST['editnews']) && $_POST['editnews']=='Edit' )
    {
		if((isset($_FILES['photo1']['name']) && !empty($_FILES['photo1']['name'])) ? $_FILES['photo1']['name'] : '')
	    { 	
			$profileimg1 = $_FILES['photo1']['name'];
			$tmp_name = $_FILES['photo1']['tmp_name'];
			$path = 'dbimages/';
			if(!empty($profileimg1)) {
				move_uploaded_file($tmp_name,$path.$profileimg1);  
			}
			
			$query5 = "update news set 
				 image ='".$profileimg1."'
				 where newsid ='".$_POST['newsid']."'";

			$result5 = mysqli_query($mysqli,$query5) or die (mysqli_error());
	    }
		
		$query_dis = "select galleryimg from news where newsid='$newsid'";
		$result_dis = mysqli_query($mysqli,$query_dis);
		if($row = mysqli_fetch_array($result_dis))
		{
			$galleryimg1 = $row['galleryimg'];
		}
		
		if(!empty($_FILES))
		{
		   if((isset($_FILES['galleryimage']['name']) && !empty($_FILES['galleryimage']['name'])) ? $_FILES['galleryimage']['name'] : '')
		   {
				$cnt = 0;
				$i = 0;
				$photo5=" ";				
				foreach ($_FILES['galleryimage']['name'] as $name => $value)
				{
					if(is_uploaded_file($_FILES['galleryimage']['tmp_name'][$name])) 
					{
						$sourcePath = $_FILES['galleryimage']['tmp_name'][$name];
						$imagepic = $_FILES['galleryimage']['name'][$name];
						$targetPath = "dbimages/". $imagepic;
						if(move_uploaded_file($sourcePath,$targetPath)) 
						{
							$arrayimg[$i] = ($imagepic);
							$photo5 .= $arrayimg[$i].",";
							$cnt++;$i++;
						}
					}
				}	
			  
				if(!empty($galleryimg1))
				{
					
					$strcreative = $galleryimg1.''.ltrim($photo5);

					$query5 = "update news set 
					 galleryimg ='".$strcreative."'
					 where newsid='".$_POST['newsid']."'";
					 
					 $result5 = mysqli_query($mysqli,$query5) or die (mysqli_error());
				}
				else
				{
				   $query5 = "update news set 
					 galleryimg ='".$photo5."'
					 where newsid='".$_POST['newsid']."'";

					 $result5 = mysqli_query($mysqli,$query5) or die (mysqli_error());
				} 			
		   }
		}

		$description = str_replace( $remove, "", $description);
	    $seotitle = str_replace( $remove, "", $seotitle);
	    $seodesc = str_replace( $remove, "", $seodesc);
	    $seokeyword = str_replace( $remove, "", $seokeyword);
		
        $query6 = "update news set 
				 title='".$title."',
				 postby='".$postby."',
				 descrption='".$descrption."',
				 newsdate='".$newsdate."',
				 balttag = '".$balttag."', 
				 btitle='".$btitle."', 
				 bdescrption ='".$bdescrption."',
				 seotitle = '".$seotitle."', 
				 seodesc = '".$seodesc."', 
				 seokeyword = '".$seokeyword."'
				 where newsid ='".$_POST['newsid']."'";

	    $result6 = mysqli_query($mysqli,$query6) or die (mysqli_error());
	   
	    header('location:all-news.php');	
    }
	
    /************************************* Slider ****************************************************/
	if(isset($_POST['addslider']) && $_POST['addslider']=='Add' )
    {
		if((isset($_FILES['photo1']['name']) && !empty($_FILES['photo1']['name'])) ? $_FILES['photo1']['name'] : '')
	    { 	
			$slider1 = $_FILES['photo1']['name'];
			$tmp_name = $_FILES['photo1']['tmp_name'];
			$path = 'dbimages/';
			if(!empty($slider1)) {
				move_uploaded_file($tmp_name,$path.$slider1);  
			}
	    }
		
		$remove[] = "'";
		$remove[] = '"';
		$slidercontent1 = str_replace( $remove, "", $slidercontent1);
		
		$query = "insert into slider(slider, slidertitle, slidercontent, slideralt, sliderstitle, sliderdescription, createdate)
		values('$slider1','$slidertitle1','$slidercontent1','$alttag1','$title1','$description1',NOW())";
		$result = mysqli_query($mysqli,$query) or die(mysqli_error());
		  
		header('location:all-slider.php');	
		
	}	
	if(isset($_POST['editslider']) && $_POST['editslider']=='Edit' )
    {
		if((isset($_FILES['photo1']['name']) && !empty($_FILES['photo1']['name'])) ? $_FILES['photo1']['name'] : '')
	    { 	
			$slider1 = $_FILES['photo1']['name'];
			$tmp_name = $_FILES['photo1']['tmp_name'];
			$path = 'dbimages/';
			if(!empty($slider1)) {
				move_uploaded_file($tmp_name,$path.$slider1);  
			}
			
			$query5 = "update slider set 
				 slider ='".$slider1."'
				 where sliderid='".$_POST['sliderid']."'";

			$result5 = mysqli_query($mysqli,$query5) or die (mysqli_error());
	    }
		
		$remove[] = "'";
		$remove[] = '"';
		$slidercontent1 = str_replace( $remove, "", $slidercontent1);
	
		$query6 = "update slider set 
			       slidertitle ='".$slidertitle1."',
			       slidercontent ='".$slidercontent1."',
				   slideralt ='".$alttag1."', 
				   sliderstitle ='".$title1."', 
				   sliderdescription ='".$description1."'
			       where sliderid='".$_POST['sliderid']."'";
		$result6 = mysqli_query($mysqli,$query6) or die (mysqli_error());
		
		header('location:all-slider.php');	
    }
	
	
	/************************************* Service ****************************************************/
	if(isset($_POST['addservice']) && $_POST['addservice']=='Add' )
    {
		if((isset($_FILES['photo1']['name']) && !empty($_FILES['photo1']['name'])) ? $_FILES['photo1']['name'] : '')
	    {	
			$profileimg1 = $_FILES['photo1']['name'];
			$tmp_name = $_FILES['photo1']['tmp_name'];
			$path = 'dbimages/';
			if(!empty($profileimg1)) {
				move_uploaded_file($tmp_name,$path.$profileimg1);  
			}
			
	    } 
		if((isset($_FILES['serviceimg']['name']) && !empty($_FILES['serviceimg']['name'])) ? $_FILES['serviceimg']['name'] : '')
		{
				$cnt = 0;
				$i = 0;
				$photo1=" ";				
				foreach ($_FILES['serviceimg']['name'] as $name => $value)
				{
					if(is_uploaded_file($_FILES['serviceimg']['tmp_name'][$name])) 
					{
						$sourcePath = $_FILES['serviceimg']['tmp_name'][$name];
						$imagepic = $_FILES['serviceimg']['name'][$name];
						$targetPath = "dbimages/". $imagepic;
						if(move_uploaded_file($sourcePath,$targetPath)) 
						{
							$arrayimg[$i] = ($imagepic);
							$photo1 .= $arrayimg[$i].",";
							$cnt++;$i++;
						}
					}
				}	 
		}
	    $description = str_replace( $remove, "", $description);
	    $seotitle = str_replace( $remove, "", $seotitle);
	    $seodesc = str_replace( $remove, "", $seodesc);
	    $seokeyword = str_replace( $remove, "", $seokeyword);
		
	  	$query = "insert into services(servicename, image, description, description1, serviceimg, salttag, stitle, sdescription, seotitle, seodesc, seokeyword, createdate)
		values('$servicename','$profileimg1','$description','$description1','$photo1','$salttag','$stitle','$sdescription','$seotitle','$seodesc','$seokeyword',NOW())";
		$result = mysqli_query($mysqli,$query) or die(mysqli_error());
		  
		header('location:all-service.php');	
	}
	
	if(isset($_POST['editservice']) && $_POST['editservice']=='Edit' )
    {
		if((isset($_FILES['photo1']['name']) && !empty($_FILES['photo1']['name'])) ? $_FILES['photo1']['name'] : '')
	    { 	
			$profileimg1 = $_FILES['photo1']['name'];
			$tmp_name = $_FILES['photo1']['tmp_name'];
			$path = 'dbimages/';
			if(!empty($profileimg1)) {
				move_uploaded_file($tmp_name,$path.$profileimg1);  
			}
			
			$query5 = "update services set 
				 image ='".$profileimg1."'
				 where serviceid='".$_POST['serviceid']."'";

			$result5 = mysqli_query($mysqli,$query5) or die (mysqli_error());
	    }
		
		
		$query_dis = "select serviceimg from services where serviceid='$serviceid'";
		$result_dis = mysqli_query($mysqli,$query_dis);
		if($row = mysqli_fetch_array($result_dis))
		{
			$serviceimg1 = $row['serviceimg'];
		} 
				
		if(!empty($_FILES))
		{
		   if((isset($_FILES['serviceimg']['name']) && !empty($_FILES['serviceimg']['name'])) ? $_FILES['serviceimg']['name'] : '')
		   {
				$cnt = 0;
				$i = 0;
				$photo1=" ";				
				foreach ($_FILES['serviceimg']['name'] as $name => $value)
				{
					if(is_uploaded_file($_FILES['serviceimg']['tmp_name'][$name])) 
					{
						$sourcePath = $_FILES['serviceimg']['tmp_name'][$name];
						$imagepic = $_FILES['serviceimg']['name'][$name];
						$targetPath = "dbimages/". $imagepic;
						if(move_uploaded_file($sourcePath,$targetPath)) 
						{
							$arrayimg[$i] = ($imagepic);
							$photo1 .= $arrayimg[$i].",";
							$cnt++;$i++;
						}
					}
				}	 	
			  
			   
				if(!empty($serviceimg1))
				{
					
					$strcreative = $serviceimg1.''.ltrim($photo1);

					$query5 = "update services set 
					 serviceimg ='".$strcreative."'
					 where serviceid='".$_POST['serviceid']."'";
					 
					 $result5 = mysqli_query($mysqli,$query5) or die (mysqli_error());
					 echo $query5;
				}
				else
				{
				   $query5 = "update services set 
					 serviceimg ='".$photo1."'
					 where serviceid='".$_POST['serviceid']."'";

					 $result5 = mysqli_query($mysqli,$query5) or die (mysqli_error());
				} 			
		   }
		}
		
	    $description = str_replace( $remove, "", $description);
	    $seotitle = str_replace( $remove, "", $seotitle);
	    $seodesc = str_replace( $remove, "", $seodesc);
	    $seokeyword = str_replace( $remove, "", $seokeyword);
		
        $query6 = "update services set 
				 servicename='".$servicename."',
				 description='".$description."',
				 description1='".$description1."',
				 salttag ='".$salttag."', 
				 stitle ='".$stitle."', 
				 sdescription ='".$sdescription."',
				 seotitle = '".$seotitle."', 
				 seodesc = '".$seodesc."', 
				 seokeyword = '".$seokeyword."'
				 where serviceid ='".$_POST['serviceid']."'";
	
	    $result6 = mysqli_query($mysqli,$query6) or die (mysqli_error());
	   
	    header('location:all-service.php');	
    }
	
	
	/************************************* Sub Service ****************************************************/
	if(isset($_POST['addsubservice']) && $_POST['addsubservice']=='Add' )
    {
		if((isset($_FILES['photo1']['name']) && !empty($_FILES['photo1']['name'])) ? $_FILES['photo1']['name'] : '')
	    {	
			$profileimg1 = $_FILES['photo1']['name'];
			$tmp_name = $_FILES['photo1']['tmp_name'];
			$path = 'dbimages/';
			if(!empty($profileimg1)) {
				move_uploaded_file($tmp_name,$path.$profileimg1);  
			}
			
	    } 
	    if((isset($_FILES['serviceimg']['name']) && !empty($_FILES['serviceimg']['name'])) ? $_FILES['serviceimg']['name'] : '')
		{
				$cnt = 0;
				$i = 0;
				$photo1=" ";				
				foreach ($_FILES['serviceimg']['name'] as $name => $value)
				{
					if(is_uploaded_file($_FILES['serviceimg']['tmp_name'][$name])) 
					{
						$sourcePath = $_FILES['serviceimg']['tmp_name'][$name];
						$imagepic = $_FILES['serviceimg']['name'][$name];
						$targetPath = "dbimages/". $imagepic;
						if(move_uploaded_file($sourcePath,$targetPath)) 
						{
							$arrayimg[$i] = ($imagepic);
							$photo1 .= $arrayimg[$i].",";
							$cnt++;$i++;
						}
					}
				}	 
		}
	    $description = str_replace( $remove, "", $description);
	    $seotitle = str_replace( $remove, "", $seotitle);
	    $seodesc = str_replace( $remove, "", $seodesc);
	    $seokeyword = str_replace( $remove, "", $seokeyword);
		
	  	$query = "insert into subservices(subservicename, image, description, description1, serviceimg, serviceimgtitle, salttag, stitle, sdescription, seotitle, seodesc, seokeyword, serviceid, createdate)
		values('$subservicename','$profileimg1','$description','$description1','$photo1','$serviceimgtitle','$salttag','$stitle','$sdescription','$seotitle','$seodesc','$seokeyword',
		'$serviceid',NOW())";
		$result = mysqli_query($mysqli,$query) or die(mysqli_error());
		  
		header('location:all-subservice.php');	
	}
	
	if(isset($_POST['editsubservice']) && $_POST['editsubservice']=='Edit' )
    {
		if((isset($_FILES['photo1']['name']) && !empty($_FILES['photo1']['name'])) ? $_FILES['photo1']['name'] : '')
	    { 	
			$profileimg1 = $_FILES['photo1']['name'];
			$tmp_name = $_FILES['photo1']['tmp_name'];
			$path = 'dbimages/';
			if(!empty($profileimg1)) {
				move_uploaded_file($tmp_name,$path.$profileimg1);  
			}
			
			$query5 = "update subservices set 
				 image ='".$profileimg1."'
				 where subserviceid='".$_POST['subserviceid']."'";

			$result5 = mysqli_query($mysqli,$query5) or die (mysqli_error());
	    }
	    
	    $query_dis = "select serviceimg from subservices where subserviceid='$subserviceid'";
		$result_dis = mysqli_query($mysqli,$query_dis);
		if($row = mysqli_fetch_array($result_dis))
		{
			$serviceimg1 = $row['serviceimg'];
		}
		
		if(!empty($_FILES))
		{
		   if((isset($_FILES['serviceimg']['name']) && !empty($_FILES['serviceimg']['name'])) ? $_FILES['serviceimg']['name'] : '')
		   {
				$cnt = 0;
				$i = 0;
				$photo5=" ";				
				foreach ($_FILES['serviceimg']['name'] as $name => $value)
				{
					if(is_uploaded_file($_FILES['serviceimg']['tmp_name'][$name])) 
					{
						$sourcePath = $_FILES['serviceimg']['tmp_name'][$name];
						$imagepic = $_FILES['serviceimg']['name'][$name];
						$targetPath = "dbimages/". $imagepic;
						if(move_uploaded_file($sourcePath,$targetPath)) 
						{
							$arrayimg[$i] = ($imagepic);
							$photo5 .= $arrayimg[$i].",";
							$cnt++;$i++;
						}
					}
				}	
			  
				if(!empty($serviceimg1))
				{
					
					$strcreative = $serviceimg1.''.ltrim($photo5);

					 $query5 = "update subservices set 
					 serviceimg ='".$strcreative."'
					 where subserviceid='".$_POST['subserviceid']."'";

					 $result5 = mysqli_query($mysqli,$query5) or die (mysqli_error());
				}
				else
				{
				     $query5 = "update subservices set 
					 serviceimg ='".$photo5."'
					 where subserviceid='".$_POST['subserviceid']."'";
					 $result5 = mysqli_query($mysqli,$query5) or die (mysqli_error());
				} 			
		   }
		}
		
	    $description = str_replace( $remove, "", $description);
	    $seotitle = str_replace( $remove, "", $seotitle);
	    $seodesc = str_replace( $remove, "", $seodesc);
	    $seokeyword = str_replace( $remove, "", $seokeyword);
		
        $query6 = "update subservices set 
				 subservicename='".$subservicename."',
				 description='".$description."',
				 description1='".$description1."',
				 salttag ='".$salttag."', 
				 stitle ='".$stitle."', 
				 sdescription ='".$sdescription."',
				 serviceimgtitle ='".$serviceimgtitle."',
				 seotitle = '".$seotitle."', 
				 seodesc = '".$seodesc."', 
				 seokeyword = '".$seokeyword."',
				 serviceid = '".$serviceid."'
				 where subserviceid ='".$_POST['subserviceid']."'";
	
	    $result6 = mysqli_query($mysqli,$query6) or die (mysqli_error());
	   
	    header('location:all-subservice.php');	
    }
	
	
	/************************************* Sub Service1 ****************************************************/
	if(isset($_POST['addsubservice1']) && $_POST['addsubservice1']=='Add' )
    {
		if((isset($_FILES['photo1']['name']) && !empty($_FILES['photo1']['name'])) ? $_FILES['photo1']['name'] : '')
	    {	
			$profileimg1 = $_FILES['photo1']['name'];
			$tmp_name = $_FILES['photo1']['tmp_name'];
			$path = 'dbimages/';
			if(!empty($profileimg1)) {
				move_uploaded_file($tmp_name,$path.$profileimg1);  
			}
			
	    } 
		 if((isset($_FILES['serviceimg']['name']) && !empty($_FILES['serviceimg']['name'])) ? $_FILES['serviceimg']['name'] : '')
		{
				$cnt = 0;
				$i = 0;
				$photo1=" ";				
				foreach ($_FILES['serviceimg']['name'] as $name => $value)
				{
					if(is_uploaded_file($_FILES['serviceimg']['tmp_name'][$name])) 
					{
						$sourcePath = $_FILES['serviceimg']['tmp_name'][$name];
						$imagepic = $_FILES['serviceimg']['name'][$name];
						$targetPath = "dbimages/". $imagepic;
						if(move_uploaded_file($sourcePath,$targetPath)) 
						{
							$arrayimg[$i] = ($imagepic);
							$photo1 .= $arrayimg[$i].",";
							$cnt++;$i++;
						}
					}
				}	 
		}
		
	    $description = str_replace( $remove, "", $description);
	    $description1 = str_replace( $remove, "", $description1);
	    $seotitle = str_replace( $remove, "", $seotitle);
	    $seodesc = str_replace( $remove, "", $seodesc);
	    $seokeyword = str_replace( $remove, "", $seokeyword);
		
	  	$query = "insert into subservices_sub(prosubservicename, image, description, description1, serviceimg, salttag, stitle, sdescription, seotitle, seodesc, seokeyword, serviceid, subserviceid, createdate)
		values('$subservicename','$profileimg1','$description','$description1','$photo1','$salttag','$stitle','$sdescription','$seotitle','$seodesc','$seokeyword',
		'$serviceid','$subserviceid',NOW())";
		$result = mysqli_query($mysqli,$query) or die(mysqli_error());
		  
		header('location:all-sub-service.php');	
	}
	
	if(isset($_POST['editsubservice1']) && $_POST['editsubservice1']=='Edit' )
    {
		if((isset($_FILES['photo1']['name']) && !empty($_FILES['photo1']['name'])) ? $_FILES['photo1']['name'] : '')
	    { 	
			$profileimg1 = $_FILES['photo1']['name'];
			$tmp_name = $_FILES['photo1']['tmp_name'];
			$path = 'dbimages/';
			if(!empty($profileimg1)) {
				move_uploaded_file($tmp_name,$path.$profileimg1);  
			}
			
			$query5 = "update subservices_sub set 
				 image ='".$profileimg1."'
				 where prosubserviceid='".$_POST['prosubserviceid']."'";

			$result5 = mysqli_query($mysqli,$query5) or die (mysqli_error());
	    }
		
		$query_dis = "select serviceimg from subservices_sub where prosubserviceid='$prosubserviceid'";
		$result_dis = mysqli_query($mysqli,$query_dis);
		if($row = mysqli_fetch_array($result_dis))
		{
			$serviceimg1 = $row['serviceimg'];
		}
		
		if(!empty($_FILES))
		{
		   if((isset($_FILES['serviceimg']['name']) && !empty($_FILES['serviceimg']['name'])) ? $_FILES['serviceimg']['name'] : '')
		   {
				$cnt = 0;
				$i = 0;
				$photo5=" ";				
				foreach ($_FILES['serviceimg']['name'] as $name => $value)
				{
					if(is_uploaded_file($_FILES['serviceimg']['tmp_name'][$name])) 
					{
						$sourcePath = $_FILES['serviceimg']['tmp_name'][$name];
						$imagepic = $_FILES['serviceimg']['name'][$name];
						$targetPath = "dbimages/". $imagepic;
						if(move_uploaded_file($sourcePath,$targetPath)) 
						{
							$arrayimg[$i] = ($imagepic);
							$photo5 .= $arrayimg[$i].",";
							$cnt++;$i++;
						}
					}
				}	
			  
				if(!empty($serviceimg1))
				{
					
					$strcreative = $serviceimg1.''.ltrim($photo5);

					$query5 = "update subservices_sub set 
					 serviceimg ='".$strcreative."'
					 where prosubserviceid='".$_POST['prosubserviceid']."'";
					 
					 $result5 = mysqli_query($mysqli,$query5) or die (mysqli_error());
				}
				else
				{
				   $query5 = "update subservices_sub set 
					 serviceimg ='".$photo5."'
					 where prosubserviceid='".$_POST['prosubserviceid']."'";

					 $result5 = mysqli_query($mysqli,$query5) or die (mysqli_error());
				} 			
		   }
		}
	    $description = str_replace( $remove, "", $description);
	    $description1 = str_replace( $remove, "", $description1);
	    $seotitle = str_replace( $remove, "", $seotitle);
	    $seodesc = str_replace( $remove, "", $seodesc);
	    $seokeyword = str_replace( $remove, "", $seokeyword);
		
        $query6 = "update subservices_sub set 
				 prosubservicename='".$subservicename."',
				 description='".$description."',
				 description1='".$description1."',
				 salttag ='".$salttag."', 
				 stitle ='".$stitle."', 
				 sdescription ='".$sdescription."',
				 seotitle = '".$seotitle."', 
				 seodesc = '".$seodesc."', 
				 seokeyword = '".$seokeyword."',
				 rank = '".$rank."',
				 serviceid = '".$serviceid."',
				 subserviceid = '".$subserviceid."'
				 where prosubserviceid ='".$_POST['prosubserviceid']."'";
	
	    $result6 = mysqli_query($mysqli,$query6) or die (mysqli_error());
	   
	    header('location:all-sub-service.php');	
    }
	
	/****************************************** Success Story *********************************************/
	if(isset($_POST['addsuccessstory']) && $_POST['addsuccessstory']=='Edit' )
    {	     
		$query_dis = "select * from sucessstory where galleryid='$galleryid'";
		$result_dis = mysqli_query($mysqli,$query_dis);
		if($row = mysqli_fetch_array($result_dis))
		{
			$galleryimg1 = $row['galleryimg'];
		}
		
		if(!empty($_FILES))
		{
		   if((isset($_FILES['galleryimage']['name']) && !empty($_FILES['galleryimage']['name'])) ? $_FILES['galleryimage']['name'] : '')
		   {
				$cnt = 0;
				$i = 0;
				$photo5=" ";				
				foreach ($_FILES['galleryimage']['name'] as $name => $value)
				{
					if(is_uploaded_file($_FILES['galleryimage']['tmp_name'][$name])) 
					{
						$sourcePath = $_FILES['galleryimage']['tmp_name'][$name];
						$imagepic = $_FILES['galleryimage']['name'][$name];
						$targetPath = "dbimages/". $imagepic;
						if(move_uploaded_file($sourcePath,$targetPath)) 
						{
							$arrayimg[$i] = ($imagepic);
							$photo5 .= $arrayimg[$i].",";
							$cnt++;$i++;
						}
					}
				}	
			  
				if(!empty($galleryimg1))
				{
					
					$strcreative = $galleryimg1.''.ltrim($photo5);

					$query5 = "update sucessstory set 
					 galleryimg ='".$strcreative."'
					 where galleryid='".$_POST['galleryid']."'";
					 
					$result5 = mysqli_query($mysqli,$query5) or die (mysqli_error());
				}
				else
				{
				    $query5 = "update sucessstory set 
					 galleryimg ='".$photo5."'
					 where galleryid='".$_POST['galleryid']."'";

					$result5 = mysqli_query($mysqli,$query5) or die (mysqli_error());
				} 			
		    }
		} 
	  
	    header('location:storyofsuccess.php');	
    }
	
	/********************************** SEO*******************************************************/
	if(isset($_POST['editindexseo']) && $_POST['editindexseo']=='Edit' )
    {
		$indextitle = str_replace( $remove, "", $indextitle);
	    $indexdesc = str_replace( $remove, "", $indexdesc);
	    $indexkeyword = str_replace( $remove, "", $indexkeyword);
		
		$query5 = "update seo set 
			indextitle = '$indextitle', 
			indexdesc ='$indexdesc', 
			indexkeyword ='$indexkeyword'
			where seoid ='".$_POST['id']."'";

		$result5 = mysqli_query($mysqli,$query5) or die (mysqli_error());

		header('location:seo-index.php');			
	}	
	if(isset($_POST['editaboutseo']) && $_POST['editaboutseo']=='Edit' )
    {
		$abouttitle = str_replace( $remove, "", $abouttitle);
	    $aboutdesc = str_replace( $remove, "", $aboutdesc);
	    $aboutkeyword = str_replace( $remove, "", $aboutkeyword);
		
		$query5 = "update seo set 
			abouttitle ='$abouttitle', 
			aboutdesc ='$aboutdesc', 
			aboutkeyword ='$aboutkeyword'
			where seoid ='".$_POST['id']."'";

		$result5 = mysqli_query($mysqli,$query5) or die (mysqli_error());

		header('location:seo-aboutus.php');			
	}	
	if(isset($_POST['editserviceseo']) && $_POST['editserviceseo']=='Edit' )
    {
		$servicetitle = str_replace( $remove, "", $servicetitle);
	    $servicedesc = str_replace( $remove, "", $servicedesc);
	    $servicekeyword = str_replace( $remove, "", $servicekeyword);
		
		$query5 = "update seo set 
			servicetitle ='$servicetitle', 
			servicedesc ='$servicedesc', 
			servicekeyword ='$servicekeyword'
			where seoid ='".$_POST['id']."'";

		$result5 = mysqli_query($mysqli,$query5) or die (mysqli_error());

		header('location:seo-service.php');			
	}	
	if(isset($_POST['editgalleryseo']) && $_POST['editgalleryseo']=='Edit' )
    {
		$gallerytitle = str_replace( $remove, "", $gallerytitle);
	    $gallerydesc = str_replace( $remove, "", $gallerydesc);
	    $gallerykeyword = str_replace( $remove, "", $gallerykeyword);
		
		$query5 = "update seo set 
		    gallerytitle ='$gallerytitle', 
			gallerydesc ='$gallerydesc', 
			gallerykeyword ='$gallerykeyword'
			where seoid ='".$_POST['id']."'";

		$result5 = mysqli_query($mysqli,$query5) or die (mysqli_error());

		header('location:seo-gallery.php');			
	}	
	if(isset($_POST['editblogseo']) && $_POST['editblogseo']=='Edit' )
    {
		$blogtitle = str_replace( $remove, "", $blogtitle);
	    $blogdesc = str_replace( $remove, "", $blogdesc);
	    $blogkeyword = str_replace( $remove, "", $blogkeyword);
		
		$query5 = "update seo set 
		    blogtitle = '$blogtitle', 
			blogdesc = '$blogdesc', 
			blogkeyword = '$blogkeyword'
			where seoid ='".$_POST['id']."'";

		$result5 = mysqli_query($mysqli,$query5) or die (mysqli_error());

		header('location:seo-blog.php');			
	}	
	if(isset($_POST['editcontactseo']) && $_POST['editcontactseo']=='Edit' )
    {
		$contacttitle = str_replace( $remove, "", $contacttitle);
	    $contactdesc = str_replace( $remove, "", $contactdesc);
	    $contactkeyword = str_replace( $remove, "", $contactkeyword);
		
		$query5 = "update seo set 
		    contacttitle = '$contacttitle', 
			contactdesc = '$contactdesc', 
			contactkeyword = '$contactkeyword'
			where seoid ='".$_POST['id']."'";

		$result5 = mysqli_query($mysqli,$query5) or die (mysqli_error());

		header('location:seo-contactus.php');			
	}	

	if(isset($_POST['editvideoseo']) && $_POST['editvideoseo']=='Edit' )
    {
		$videotitle = str_replace( $remove, "", $videotitle);
	    $videodesc = str_replace( $remove, "", $videodesc);
	    $videokeyword = str_replace( $remove, "", $videokeyword);
		
		$query5 = "update seo set 
		    videotitle = '$videotitle', 
			videodesc = '$videodesc', 
			videokeyword = '$videokeyword'
			where seoid ='".$_POST['id']."'";

		$result5 = mysqli_query($mysqli,$query5) or die (mysqli_error());

		header('location:seo-video.php');			
	}	 
   /************************************** Client Logo ***************************************************/
	if(isset($_POST['addlogo']) && $_POST['addlogo']=='Add' )
    {
		if((isset($_FILES['galleryimage']['name']) && !empty($_FILES['galleryimage']['name'])) ? $_FILES['galleryimage']['name'] : '')
		{
				$cnt = 0;
				$i = 0;
				$photo1=" ";				
				foreach ($_FILES['galleryimage']['name'] as $name => $value)
				{
					if(is_uploaded_file($_FILES['galleryimage']['tmp_name'][$name])) 
					{
						$sourcePath = $_FILES['galleryimage']['tmp_name'][$name];
						$imagepic = $_FILES['galleryimage']['name'][$name];
						$targetPath = "dbimages/". $imagepic;
						if(move_uploaded_file($sourcePath,$targetPath)) 
						{
							$arrayimg[$i] = ($imagepic);
							$photo1 .= $arrayimg[$i].",";
							$cnt++;$i++;
						}
					}
				}	 
		}
		 
		$query = "insert into logo(galleryimg,clalttag, cltitle, cldescription)values('$photo1','$clalttag','$cltitle',
		'$cldescription')";
		$result = mysqli_query($mysqli,$query) or die(mysqli_error());
		  
		header('location:all-logo.php');	
    } 

    if(isset($_POST['editlogo']) && $_POST['editlogo']=='Edit' )
    {	     
		$query_dis = "select galleryimg from logo where galleryid='$galleryid'";
		$result_dis = mysqli_query($mysqli,$query_dis);
		if($row = mysqli_fetch_array($result_dis))
		{
			$galleryimg1 = $row['galleryimg'];
		}
		
		if(!empty($_FILES))
		{
		   if((isset($_FILES['galleryimage']['name']) && !empty($_FILES['galleryimage']['name'])) ? $_FILES['galleryimage']['name'] : '')
		   {
				$cnt = 0;
				$i = 0;
				$photo5=" ";				
				foreach ($_FILES['galleryimage']['name'] as $name => $value)
				{
					if(is_uploaded_file($_FILES['galleryimage']['tmp_name'][$name])) 
					{
						$sourcePath = $_FILES['galleryimage']['tmp_name'][$name];
						$imagepic = $_FILES['galleryimage']['name'][$name];
						$targetPath = "dbimages/". $imagepic;
						if(move_uploaded_file($sourcePath,$targetPath)) 
						{
							$arrayimg[$i] = ($imagepic);
							$photo5 .= $arrayimg[$i].",";
							$cnt++;$i++;
						}
					}
				}	
			  
				if(!empty($galleryimg1))
				{
					
					$strcreative = $galleryimg1.''.ltrim($photo5);

					$query5 = "update logo set 
					 galleryimg ='".$strcreative."'
					 where galleryid='".$_POST['galleryid']."'";
					 
					 $result5 = mysqli_query($mysqli,$query5) or die (mysqli_error());
				}
				else
				{
				   $query5 = "update logo set 
					 galleryimg ='".$photo5."'
					 where galleryid='".$_POST['galleryid']."'";

					 $result5 = mysqli_query($mysqli,$query5) or die (mysqli_error());
				} 			
		   }
		} 
		$query5 = "update logo set 
				   clalttag ='".$clalttag."',
				   cltitle ='".$cltitle."',
				   cldescription ='".$cldescription."'
				   where galleryid='".$_POST['galleryid']."'";

		$result5 = mysqli_query($mysqli,$query5) or die (mysqli_error());
		 
	    header('location:all-logo.php');	
    }

	/********************************** Customer *******************************************************/
	if(isset($_POST['addcustomer']) && $_POST['addcustomer']=='Add' )
    {
		$address = str_replace( $remove, "", $address);
		$message = str_replace( $remove, "", $message);
		
		$query = "insert into customer(name, phoneno, email, companyname, gstno, landline, website, address, 
		message, createdate)values('$name','$phoneno','$email','$companyname','$gstno','$landline','$website','$address',
		'$message',NOW())";
		$result = mysqli_query($mysqli,$query) or die(mysqli_error());
		  
		header('location:all-customer.php');	
	}	
	
	if(isset($_POST['editcustomer']) && $_POST['editcustomer']=='Edit' )
    {
		$address = str_replace( $remove, "", $address);
		$message = str_replace( $remove, "", $message);
		
		$query5 = "update customer set 
				   name = '$name', 
				   phoneno = '$phoneno', 
				   email = '$email', 
				   companyname = '$companyname', 
				   gstno = '$gstno', 
				   landline = '$landline', 
				   website = '$website', 
				   address = '$address', 
				   message = '$message'
			where custid ='".$_POST['custid']."'";

		$result5 = mysqli_query($mysqli,$query5) or die (mysqli_error());
		header('location:all-customer.php');	
	}

    if(isset($_POST['editcustdetails']) && $_POST['editcustdetails']=='Edit' )
    {
		$address = str_replace( $remove, "", $address);
		
		$query5 = "update companydetail set 
				   companyname = '$companyname', 
				   gstno = '$gstno', 
				   address = '$address'
			where id ='".$_POST['id']."'";

		$result5 = mysqli_query($mysqli,$query5) or die (mysqli_error());
		header('location:invoicedetails.php');	
	}	
	
	/********************************** Theme Color *******************************************************/
	if(isset($_POST['addcolor']) && $_POST['addcolor']=='Change' )
    {
		$query5 = "update indexpage set 
				   themecolor = '$themecolor'
			where id ='".$_POST['id']."'";

		$result5 = mysqli_query($mysqli,$query5) or die (mysqli_error());
		header('location:themecolor.php');	
	}	
	
	/********************************** Service Menu *******************************************************/
	if(isset($_POST['addmenu']) && $_POST['addmenu']=='Change' )
    {
		$query5 = "update indexpage set 
				   servicemenu = '$servicemenu'
			where id ='".$_POST['id']."'";

		$result5 = mysqli_query($mysqli,$query5) or die (mysqli_error());
		header('location:service-menu.php');	
	}
   
   /********************************** Video *******************************************************/	 
   if(isset($_POST['addvideo']) && $_POST['addvideo']=='Add' )
   {  
	  $query="insert into video(title, link, description, stitle, sdescription, createdate)values('$title','$link','$description', 
	  '$stitle','$sdescription',NOW())";
	  
      $result   = mysqli_query($mysqli,$query) or die(mysqli_error());
	  
	  header('location:all-video.php');	
    } 

    if(isset($_POST['editvideo']) && $_POST['editvideo']=='Edit' )
    {
        $query = "update video set 
				 title='".$title."',
				 link='".$link."',
				 description='".$description."',
				 stitle='".$stitle."',
				 sdescription='".$sdescription."'
				 where videoid ='".$_POST['videoid']."'";
	    $result = mysqli_query($mysqli,$query) or die (mysqli_error());
	    
	    header('location:all-video.php');	
    }
	/************************************** Other Images ***************************************************/
	if(isset($_POST['addimages']) && $_POST['addimages']=='Add' )
    {
		if((isset($_FILES['imagepvc']['name']) && !empty($_FILES['imagepvc']['name'])) ? $_FILES['imagepvc']['name'] : '')
		{
				$cnt = 0;
				$i = 0;
				$photo1=" ";				
				foreach ($_FILES['imagepvc']['name'] as $name => $value)
				{
					if(is_uploaded_file($_FILES['imagepvc']['tmp_name'][$name])) 
					{
						$sourcePath = $_FILES['imagepvc']['tmp_name'][$name];
						$imagepic = $_FILES['imagepvc']['name'][$name];
						$targetPath = "dbimages/". $imagepic;
						if(move_uploaded_file($sourcePath,$targetPath)) 
						{
							$arrayimg[$i] = ($imagepic);
							$photo1 .= $arrayimg[$i].",";
							$cnt++;$i++;
						}
					}
				}	 
		}
		 
		$query = "insert into pvc(imgtitle, imagepvc, pvcalttag, pvctitle, pvcdescription)values('$imgtitle','$photo1','$pvcalttag','$pvctitle','$pvcdescription')";
		$result = mysqli_query($mysqli,$query) or die(mysqli_error());
		  
		header('location:all-images.php');	
    } 

    if(isset($_POST['editimages']) && $_POST['editimages']=='Edit' )
    {	     
		$query_dis = "select imagepvc from pvc where galleryid='$galleryid'";
		$result_dis = mysqli_query($mysqli,$query_dis);
		if($row = mysqli_fetch_array($result_dis))
		{
			$imagepvc1 = $row['imagepvc'];
		}
		
		if(!empty($_FILES))
		{
		   if((isset($_FILES['imagepvc']['name']) && !empty($_FILES['imagepvc']['name'])) ? $_FILES['imagepvc']['name'] : '')
		   {
				$cnt = 0;
				$i = 0;
				$photo5=" ";				
				foreach ($_FILES['imagepvc']['name'] as $name => $value)
				{
					if(is_uploaded_file($_FILES['imagepvc']['tmp_name'][$name])) 
					{
						$sourcePath = $_FILES['imagepvc']['tmp_name'][$name];
						$imagepic = $_FILES['imagepvc']['name'][$name];
						$targetPath = "dbimages/". $imagepic;
						if(move_uploaded_file($sourcePath,$targetPath)) 
						{
							$arrayimg[$i] = ($imagepic);
							$photo5 .= $arrayimg[$i].",";
							$cnt++;$i++;
						}
					}
				}	
			  
				if(!empty($imagepvc1))
				{
					
					$strcreative = $imagepvc1.''.ltrim($photo5);

					$query5 = "update pvc set 
					 imagepvc ='".$strcreative."'
					 where pvcid='".$_POST['pvcid']."'";
					 
					 $result5 = mysqli_query($mysqli,$query5) or die (mysqli_error());
				}
				else
				{
				   $query5 = "update pvc set 
					 imagepvc ='".$photo5."'
					 where pvcid='".$_POST['pvcid']."'";

					 $result5 = mysqli_query($mysqli,$query5) or die (mysqli_error());
				} 			
		   }
		} 
		
		
		
		$query6 = "update pvc set
				imgtitle='".$imgtitle."',
				pvcalttag='".$pvcalttag."', 
				pvctitle='".$pvctitle."', 
				pvcdescription='".$pvcdescription."'
				where pvcid='".$_POST['pvcid']."'";
	
	    $result6 = mysqli_query($mysqli,$query6) or die (mysqli_error());
	   
	     header('location:all-images.php');	
    }
	/************************************* Notification ****************************************************/
	if(isset($_POST['addnotification']) && $_POST['addnotification']=='Add')
    {
		if((isset($_FILES['photo1']['name']) && !empty($_FILES['photo1']['name'])) ? $_FILES['photo1']['name'] : '')
	    {	
			$profileimg1 = $_FILES['photo1']['name'];
			$tmp_name = $_FILES['photo1']['tmp_name'];
			$path = 'dbimages/';
			if(!empty($profileimg1)) {
				move_uploaded_file($tmp_name,$path.$profileimg1);  
			}	
	    } 
	if((isset($_FILES['galleryimage']['name']) && !empty($_FILES['galleryimage']['name'])) ? $_FILES['galleryimage']['name'] : '')
		{
			$cnt = 0;
			$i = 0;
			$photo1=" ";				
			foreach ($_FILES['galleryimage']['name'] as $name => $value)
			{
				if(is_uploaded_file($_FILES['galleryimage']['tmp_name'][$name])) 
				{
					$sourcePath = $_FILES['galleryimage']['tmp_name'][$name];
					$imagepic = $_FILES['galleryimage']['name'][$name];
					$targetPath = "dbimages/". $imagepic;
					if(move_uploaded_file($sourcePath,$targetPath)) 
					{
						$arrayimg[$i] = ($imagepic);
						$photo1 .= $arrayimg[$i].",";
						$cnt++;$i++;
					}
				}
			}	 
		}
	  
	  
	    $description =  $_REQUEST['descrption'];
		$event=  $_REQUEST['event'];
		
	  	$query = "insert into notification(Event,Date,img,Description)values('$event','$newsdate','$profileimg1','$descrption')";
		$result = mysqli_query($mysqli,$query) or die(mysqli_error());
		  
		header('location:all-notification.php');	
	}
	
	if(isset($_POST['editnotification']) && $_POST['editnotification']=='Edit' )
    {
		if((isset($_FILES['photo1']['name']) && !empty($_FILES['photo1']['name'])) ? $_FILES['photo1']['name'] : '')
	    { 	
			$profileimg1 = $_FILES['photo1']['name'];
			$tmp_name = $_FILES['photo1']['tmp_name'];
			$path = 'dbimages/';
			if(!empty($profileimg1)) {
				move_uploaded_file($tmp_name,$path.$profileimg1);  
			}
			
			$query5 = "update news set 
				 image ='".$profileimg1."'
				 where newsid ='".$_POST['newsid']."'";

			$result5 = mysqli_query($mysqli,$query5) or die (mysqli_error());
	    }
		
		
		
	    $description =  $_REQUEST['descrption'];
		$event=  $_REQUEST['event'];
		$newsdate=$_REQUEST['newsdate'];
	  
        $query6 = "update notification set 
				 Event='".$event."',
				 Date='".$newsdate."',
				 Description='".$descrption."'
				 where notification  ='".$_POST['newsid']."'";

	    $result6 = mysqli_query($mysqli,$query6) or die (mysqli_error());
	   
	    header('location:all-notification.php');	
    }
		
?>   