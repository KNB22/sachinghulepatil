

<?php
if (session_status() !== PHP_SESSION_ACTIVE) 
{
	session_start();
	if (isset($_SESSION) && isset($_SESSION['sess_username']) ) 
	{
		$uname = $_SESSION['sess_username'];
	}
}
	
if (!isset($_SESSION['sess_username'])) 
{
	header("Location: index.php?action=mustlogin");
}

require_once('database.php');
$query 	  = "select * from user where username='".$uname."'";
$result   = mysqli_query($mysqli,$query) or die(mysqli_error());
if ($row  = mysqli_fetch_array($result)) 
{
	extract($row);
	$name = $name;
	$finaluserid = $userid;
	$finalrole = $role;

	if (isset($row['profilephoto']) && !empty($row['profilephoto'])) {
		$profilepic = "./dbimage/".$row['profilephoto'];
	}
	else
	{
		$profilepic = "./dbimage/default.jpg";	
	}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MR.SACHIN SUBHASHRAO GHULE PATIL Panel</title>
    
	<link rel="apple-touch-icon" sizes="57x57" href="asset/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="asset/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="asset/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="asset/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="asset/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="asset/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="asset/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="asset/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="asset/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="asset/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="asset/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="asset/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="asset/favicon/favicon-16x16.png">
    <link rel="manifest" href="asset/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="asset/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
	
    <!-- Global stylesheets -->
    <link href="./asset/css/css" rel="stylesheet" type="text/css">
    <link href="./asset/css/styles.css" rel="stylesheet" type="text/css">
    <link href="./asset/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="./asset/css/core.css" rel="stylesheet" type="text/css">
    <link href="./asset/css/components.css" rel="stylesheet" type="text/css">
    <link href="./asset/css/colors.css" rel="stylesheet" type="text/css">
	  <link rel="stylesheet" type="text/css" href="./asset/css/pepdeckcss.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="./asset/js/pace.min.js"></script>
    <script type="text/javascript" src="./asset/js/jquery.min.js"></script>
    <script type="text/javascript" src="./asset/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./asset/js/blockui.min.js"></script>
	
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="./asset/js/d3.min.js"></script>
    <script type="text/javascript" src="./asset/js/d3_tooltip.js"></script>
    <script type="text/javascript" src="./asset/js/switchery.min.js"></script>
    <script type="text/javascript" src="./asset/js/uniform.min.js"></script>
    <script type="text/javascript" src="./asset/js/bootstrap_multiselect.js"></script>
    <script type="text/javascript" src="./asset/js/moment.min.js"></script>
    <script type="text/javascript" src="./asset/js/daterangepicker.js"></script>
    <script type="text/javascript" src="./asset/js/cookie.js"></script>
    <script type="text/javascript" src="./asset/js/jasny_bootstrap.min.js"></script>
    <script type="text/javascript" src="./asset/js/select2.min.js"></script>
    <script type="text/javascript" src="./asset/js/steps.min.js"></script>
    <script type="text/javascript" src="./asset/js/validate.min.js"></script>
    <script type="text/javascript" src="./asset/js/wizard_steps.js"></script>
    <script type="text/javascript" src="./asset/js/anytime.min.js"></script>
    <script type="text/javascript" src="./asset/js/picker.js"></script>
    <script type="text/javascript" src="./asset/js/picker.date.js"></script>
    <script type="text/javascript" src="./asset/js/picker.time.js"></script>
    <script type="text/javascript" src="./asset/js/picker_date.js"></script>
    <script type="text/javascript" src="./asset/js/pnotify.min.js"></script>
    <script type="text/javascript" src="./asset/js/form_multiselect.js"></script>
    <script type="text/javascript" src="./asset/js/fileinput.min.js"></script>
	<script type="text/javascript" src="./asset/js/uploader_bootstrap.js"></script>
	<script type="text/javascript" src="./asset/js/datatables_basic.js"></script>
	<script type="text/javascript" src="./asset/js/datatables.min.js"></script>
	<script type="text/javascript" src="./asset/js/jszip.min.js"></script>
	<script type="text/javascript" src="./asset/js/vfs_fonts.min.js"></script>
	<script type="text/javascript" src="./asset/js/buttons.min.js"></script>
	<script type="text/javascript" src="./asset/js/datatables_extension_fixed_columns.js"></script>
	
	<script type="text/javascript" src="./asset/js/datatables_extension_buttons_html5.js"></script>
	 <!-- <script type="text/javascript" src="./asset/js/switch.min.js"></script>
	<script type="text/javascript" src="./asset/js/form_checkboxes_radios.js"></script>-->

    <script type="text/javascript" src="./asset/js/app.js"></script>
 <!--   <script type="text/javascript" src="./asset/js/dashboard.js"></script>
		-->
    <!-- /theme JS files -->
	<link rel="stylesheet" type="text/css" href="./asset/css/pepdeckcss.css">
    
	<link href="./asset/js/jquery.datepick.css" rel="stylesheet">
	<script src="./asset/js/jquery.plugin.js"></script>
	<script src="./asset/js/jquery.datepick.js"></script> 
	
	<script src="ckeditor.js"></script>
	<script src="asset/js/mainckeditor.js"></script>
	
	<style>
	.labelled-textarea label,.labelled-input label,.labelled-input-short label,input.main-input
	{
	border: 1px solid rgba(51, 51, 51, 0.28);
	color: #000000;
	}
	.labelled-textarea label,.labelled-input label,.labelled-input-short label
	{
	  background-color: transparent;
	}	
	.labelled-textarea label {
		border-width: 1px 1px 0px 1px;
	}

	.labelled-input-short label {
		border-width: 1px 0 1px 1px;
	}
	textarea.main-input
	{
		border: 1px solid #ebebeb;
		color: #5d5d5d;
	}
	.row {
		margin-left: 0px;
		margin-right:0px;
	}

	.disabled {
		pointer-events:none; //This makes it not clickable
		opacity:0.6;         //This grays it out to look disabled
	}
	
	.disabled1 {
		opacity:0.6;
	}	
    .navbar-brand {
    height: 45px;
    }
	.navbar-brand>img {
		margin-top: -40%;
		height: 113px;
	}
	</style>
	<!--my changes-->
<script type="text/javascript" src="./asset/js/login_validation.js"></script>
<script>
	var tvt = tvt || {};
	tvt.captureVariables = function(a) {
		for (var b = new Date, c = {}, d = Object.keys(a || {}), e = 0, f; f = d[e]; e++)
			if (a.hasOwnProperty(f) &&
				"undefined" != typeof a[f]) try {
				var g = [];
				c[f] = JSON.stringify(a[f], function(a, b) {
					try {
						if ("function" !== typeof b) {
							if ("object" === typeof b && null !== b) {
								if (b instanceof HTMLElement || b instanceof Node || -1 != g.indexOf(b)) return;
								g.push(b)
							}
							return b
						}
					} catch (c) {}
				})
			} catch (l) {}
			a = document.createEvent("CustomEvent");
		a.initCustomEvent("TvtRetrievedVariablesEvent", !0, !0, {
			variables: c,
			date: b
		});
		window.dispatchEvent(a)
	};
	window.setTimeout(function() {
		tvt.captureVariables({
			'dataLayer': window['dataLayer']
		})
	}, 5000);
</script>
</head>

<body class="pace-done">
    <div class="pace  pace-inactive">
        <div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>

    <!-- Main navbar -->
    <div class="navbar navbar-inverse" style="background-color: #000;">
        <div class="navbar-header">
            <a class="navbar-brand" href="adminpanel.php" style="font-size: 20px;">
			  <img src="asset/img/adc-logo.png">
            </a>

            <ul class="nav navbar-nav visible-xs-block">
                <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a>
                </li>
                <li><a class="sidebar-mobile-main-toggle"><i class="fa fa-eye-slash"></i> Hide Menu</a>
                </li>
            </ul>
        </div>		
        <div class="navbar-collapse collapse" id="navbar-mobile" style="background-color:#000">
            <ul class="nav navbar-nav">
                <li>
				<a class="sidebar-control sidebar-main-toggle hidden-xs" style="color:#fff">
				<i class="fa fa-eye-slash" style="font-size: 16px;"></i> Hide Menu</a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown dropdown-user">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php echo $profilepic;?>" alt="">
						<span style="color:#fff"><?php echo $name;?></span>
                        <i class="caret" style="color:#fff"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">					
                        <li><a href="logout.php"><i class="icon-switch2"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- /main navbar -->


    <!-- Page container -->
    <div class="page-container" style="min-height:541px">	 
        <!-- Page content -->
        <div class="page-content">
             
            <!-- Main sidebar -->
            <div class="sidebar sidebar-main">
                <div class="sidebar-content">
				 <?php 
						$actual_link = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
				 ?>
		
		   <div class="sidebar-category sidebar-category-visible">
				<div class="category-content no-padding">
					<ul class="navigation navigation-main navigation-accordion">
						<!-- Main -->
						<li class="navigation-header"><span></span> 
						  <i class="icon-menu" title="" data-original-title="Main pages"></i>
						</li>
						<li <?php if($actual_link=="adminpanel.php"){?>class="active"<?php } ?>><a href="adminpanel.php"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
						<?php
							$slider = ($actual_link=="edit-slider.php") || ($actual_link=="all-slider.php");	
						?>	
						
					<!--	<li>
							<a class="has-ul"><i class="icon-home"></i><span>Home Page</span></a>
							<ul>
							  <li <?php if($actual_link=="add-logo.php"){?>class="active"<?php } ?>>
							     <a href="add-logo.php">Logo</a>
							  </li> 
                              <li <?php if($actual_link=="add-slider.php"){?>class="active"<?php } ?>>
							     <a href="add-slider.php">Add Slider</a>
							  </li> 
                              <li <?php if($slider){?>class="active"<?php } ?>>
							     <a href="all-slider.php">All Slider</a>
							  </li> 							  
							  <li <?php if($actual_link=="welcomenote.php"){?>class="active"<?php } ?>>
							     <a href="welcomenote.php">Welcome Note</a>
							  </li>
							  <li <?php if($actual_link=="breadcrumbimg.php"){?>class="active"<?php } ?>>
							     <a href="breadcrumbimg.php">Breadcrumb Background</a>
							  </li>
							</ul>
						</li>						
						
						 <?php
							$team = ($actual_link=="all-team.php") || ($actual_link=="edit-team.php") || ($actual_link=="view-team.php");	
						?>	
                        <li>
							<a class="has-ul"><i class="icon-droplet2"></i><span>About Us</span></a>
							<ul>
							  <li <?php if($actual_link=="aboutus.php"){?>class="active"<?php } ?>>
							     <a href="aboutus.php">About Us</a>
							  </li>
							  <li <?php if($actual_link=="add-team.php"){?>class="active"<?php } ?>><a href="add-team.php"> Add Team</a></li>
							  <li <?php if($team){?>class="active"<?php } ?>><a href="all-team.php">All Team</a></li>  
							</ul>
						</li>	
						<?php
							$testimonials = ($actual_link=="all-testimonials.php") || ($actual_link=="edit-testimonials.php") || ($actual_link=="view-testimonials.php");	
						?>						
						<li>
							<a class="has-ul"><i class="icon-clipboard3"></i><span>Testimonials</span></a>
							<ul>
							   <li <?php if($actual_link=="add-testimonials.php"){?>class="active"<?php } ?>><a href="add-testimonials.php"> Add Testimonials</a></li>
							   <li <?php if($testimonials){?>class="active"<?php } ?>><a href="all-testimonials.php">All Testimonials</a></li>  
							</ul>
						</li>
						<?php
						  $logo = ($actual_link=="all-logo.php") || ($actual_link=="edit-logo.php") || ($actual_link=="view-logo.php");	
						?>
						<li>
							<a class="has-ul"><i class="icon-images2"></i><span>Client Logo</span></a>
							<ul>
							  <li <?php if($actual_link=="add-logos.php"){?>class="active"<?php } ?>><a href="add-logos.php"> Add Logo</a></li>
							  <li <?php if($logo){?>class="active"<?php } ?>><a href="all-logo.php">All Logo</a></li> 
							</ul>
						</li>
                        <?php
							$service = ($actual_link=="all-service.php") || ($actual_link=="edit-service.php") || ($actual_link=="view-service.php");	
							
							$subservice = ($actual_link=="all-subservice.php") || ($actual_link=="edit-subservice.php") || ($actual_link=="view-subservice.php");
							
							$subservice1 = ($actual_link=="all-sub-service.php") || ($actual_link=="edit-sub-service.php") || ($actual_link=="view-sub-service.php");
						?>
						<li>
							<a class="has-ul"><i class="icon-clipboard3"></i><span>Service/Product</span></a>
							<ul>
							    <li <?php if($actual_link=="service-menu.php"){?>class="active"<?php } ?>><a href="service-menu.php"> Service/Product Menu Setting</a></li>
							   <li <?php if($actual_link=="add-service.php"){?>class="active"<?php } ?>><a href="add-service.php"> Add Service/Product</a></li>
							   <li <?php if($service){?>class="active"<?php } ?>><a href="all-service.php">All Service/Product</a></li>  
							   
							    <li <?php if($actual_link=="add-subservice.php"){?>class="active"<?php } ?>><a href="add-subservice.php"> Add Sub Service/Product</a></li>
							   <li <?php if($subservice){?>class="active"<?php } ?>><a href="all-subservice.php">All Sub Service/Product</a></li>  
							   
							   <li <?php if($actual_link=="add-sub-service.php"){?>class="active"<?php } ?>><a href="add-sub-service.php"> Add Sub Service/Product 1</a></li>
							   <li <?php if($subservice1){?>class="active"<?php } ?>><a href="all-sub-service.php">All Sub Service/Product 1</a></li>  
							   
							   <li <?php if($actual_link=="home-service.php"){?>class="active"<?php } ?>><a href="home-service.php"> Home Page - Service/Product</a></li>
							   <li <?php if($actual_link=="service-rank.php"){?>class="active"<?php } ?>><a href="service-rank.php"> Service/Product Ranking</a></li>
							</ul>
						</li>-->							
						<?php
						  $gallery = ($actual_link=="all-gallery.php") || ($actual_link=="edit-gallery.php") || ($actual_link=="view-gallery.php");	
						?><!-- Gallary-->
						<li>
							<a class="has-ul"><i class="icon-images2"></i><span>Gallery</span></a>
							<ul>
							  <li <?php if($actual_link=="add-gallery.php"){?>class="active"<?php } ?>><a href="add-gallery.php"> Add Gallery</a></li>
							  <li <?php if($gallery){?>class="active"<?php } ?>><a href="all-gallery.php">All Gallery</a></li> 
							</ul>
						</li>
						<?php
						  $images = ($actual_link=="all-images.php") || ($actual_link=="edit-images.php") || ($actual_link=="view-images.php");	
						?>
						<!--Notification-->
						<li>
							<a class="has-ul"><i class="fa fa-bell"></i><span>Notification</span></a>
							<ul>
							  <li <?php if($actual_link=="add-notification.php"){?>class="active"<?php } ?>><a href="add-notification.php"> Add Notification</a></li>
							  <li <?php if($gallery){?>class="active"<?php } ?>><a href="all-Notification.php">All Notification</a></li> 
							</ul>
						</li>
						<?php
						  $images = ($actual_link=="all-images.php") || ($actual_link=="edit-images.php") || ($actual_link=="view-images.php");	
						?>
						
						
					<!--	<li>
							<a class="has-ul"><i class="icon-images2"></i><span>Other Images</span></a>
							<ul>
							  <li <?php if($actual_link=="add-images.php"){?>class="active"<?php } ?>><a href="add-images.php"> Add Images</a></li>
							  <li <?php if($images){?>class="active"<?php } ?>><a href="all-images.php">All Images</a></li> 
							</ul>
						</li>
                   	    <?php
						  $video = ($actual_link=="all-video.php") || ($actual_link=="edit-video.php") || ($actual_link=="view-video.php");	
						?>
						<li>
							<a class="has-ul"><i class="icon-video-camera"></i><span>Video</span></a>
							<ul>
							  <li <?php if($actual_link=="add-video.php"){?>class="active"<?php } ?>><a href="add-video.php"> Add Video</a></li>
							  <li <?php if($video){?>class="active"<?php } ?>><a href="all-video.php">All Video</a></li> 
							</ul>
						</li>-->
						<?php
							$news = ($actual_link=="all-news.php") || ($actual_link=="edit-news.php") || ($actual_link=="view-news.php");	
						?>						
					<!--	<li>
							<a class="has-ul"><i class="icon-clipboard3"></i><span>Blog / News</span></a>
							<ul>
							   <li <?php if($actual_link=="add-news.php"){?>class="active"<?php } ?>><a href="add-news.php"> Add Blog / News</a></li>
							   <li <?php if($news){?>class="active"<?php } ?>><a href="all-news.php">All Blog / News</a></li>  
							</ul>
						</li>
						<li>
							<a class="has-ul"><i class="icon-clipboard3"></i><span>SEO</span></a>
							<ul>
							   <li <?php if($actual_link=="seo-index.php"){?>class="active"<?php } ?>><a href="seo-index.php"> Index Page</a></li>
							   <li <?php if($actual_link=="seo-aboutus.php"){?>class="active"<?php } ?>><a href="seo-aboutus.php">About Us</a></li>  
							   <li <?php if($actual_link=="seo-service.php"){?>class="active"<?php } ?>><a href="seo-service.php">Service/Product</a></li>  
							   <li <?php if($actual_link=="seo-gallery.php"){?>class="active"<?php } ?>><a href="seo-gallery.php">Gallery</a></li>  
							   <li <?php if($actual_link=="seo-video.php"){?>class="active"<?php } ?>><a href="seo-video.php">Video</a></li> 
							   <li <?php if($actual_link=="seo-blog.php"){?>class="active"<?php } ?>><a href="seo-blog.php">Blog</a></li>  
							   <li <?php if($actual_link=="seo-contactus.php"){?>class="active"<?php } ?>><a href="seo-contactus.php">Contact Us</a></li>  
							</ul>
						</li>			
						<li <?php if($actual_link=="contactus.php"){?>class="active"<?php } ?>><a href="contactus.php"><i class="icon-phone2"></i> <span>Contact Us</span></a></li>	
				
						<li <?php if(($actual_link=="inquiry.php") || ($actual_link=="inquiryview.php")){?>class="active"<?php } ?>><a href="inquiry.php"><i class="icon-envelop2"></i> <span>Inquiry</span></a></li>	
						<?php
							$customer = ($actual_link=="all-customer.php") || ($actual_link=="edit-customer.php") || ($actual_link=="view-customer.php") || ($actual_link =="custview.php");	
						?>						
					<!--	<li>
							<a class="has-ul"><i class="icon-clipboard3"></i><span>Customers</span></a>
							<ul>
							   <li <?php if($actual_link=="add-customer.php"){?>class="active"<?php } ?>><a href="add-customer.php"> Add Customer</a></li>
							   <li <?php if($customer){?>class="active"<?php } ?>><a href="all-customer.php">All Customer</a></li>  
							</ul>
						</li>
					    <!--<li>
							<a href="#"><i class="icon-price-tags"></i><span>Billing</span></a>
							<ul>
							  <li <?php if($actual_link=="invoicedetails.php"){?>class="active"<?php } ?>>
							    <a href="invoicedetails.php"><i class="icon-price-tag3"></i><span>Invoice Deatils</span></a>
							  </li>
							  <li <?php if($actual_link=="generatebill.php"){?>class="active"<?php } ?>>
							    <a href="generatebill.php"><i class="icon-price-tag3"></i><span>Generate Bill</span></a>
							  </li>
							  <li <?php if(($actual_link=="allbill.php") || ($actual_link=="custbillview.php")){?>class="active"<?php } ?>>
							    <a href="allbill.php"><i class="icon-price-tag2"></i><span>All Bills</span></a>
							  </li>  
							</ul>
						</li>
						<li <?php if($actual_link=="themecolor.php"){?>class="active"<?php } ?>><a href="themecolor.php"><i class="icon-home4"></i> <span>Theme Color</span></a></li>-->
						<li>
							<a href="#"><i class="icon-cog3"></i><span>Setting</span></a>
							<ul>
								<li <?php if($actual_link=="changepassword.php"){?>class="active"<?php } ?>>
								<a href="changepassword.php">Change Password</a>
								</li>
							</ul>
						</li>						
						<!-- /main -->
					</ul>
				</div>
			</div>
			<!-- /main navigation -->

                </div>
            </div>
            <!-- /main sidebar -->