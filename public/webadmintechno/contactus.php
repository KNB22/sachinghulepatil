<?php 
include("include/header.php");
include("database.php");

$query = "SELECT * FROM contactus";
$result = mysqli_query($mysqli,$query)or die(mysqli_error());
if($row = mysqli_fetch_array($result))
{
	extract($row);
}
?>

<!-- Main content -->
<div class="page-container">
   <!-- Page header -->
   <div class="page-header page-header-default">
      <div class="breadcrumb-line">
         <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
         <ul class="breadcrumb">
            <li><a href="index.php"><i class="icon-home2 position-left"></i>Home</a></li>
            <li>Contact Us</li>
         </ul>
      </div>
   </div>
   <!-- /page header -->
   <!-- Content area -->
   <div class="content">
      <div class="panel panel-white">
         <div class="panel-heading">
            <h6 class="panel-title">Contact Us</h6>
            <div class="heading-elements">
               <ul class="icons-list">
                  <li><a data-action="collapse"></a></li>
                  <li><a data-action="reload"></a></li>
                  <li><a data-action="close"></a></li>
               </ul>
            </div>
         </div>
        <div class="panel-body">
		 <form class="" action="dbfile.php" method="post" enctype="multipart/form-data">
			<input type="hidden" name="contactid" id="contactid" value="<?php echo $contactid;?>">
			<div class="col-md-12">
				<div class="form-group">
				   <textarea name="contactinfo" id="editor"><?php echo $contactinfo;?></textarea>
				   <label>Contact Information  </label>
				</div>
			</div> 
			<div class="col-md-12">
				<div class="form-group">
				   <textarea name="address" id="editor1"><?php echo $address;?></textarea>
				   <label>Address </label>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
				   <input type="text" name="emailid" id="emailid"  value="<?php echo $emailid;?>" class="form-control " placeholder="Emailid1" >
				   <label>Emailid  </label>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
				   <input type="text" name="mobileno" id="mobileno"  value="<?php echo $mobileno;?>" class="form-control " placeholder="Helpline1" >
				   <label>Contact Number  </label>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
				   <input type="text" name="phoneno" id="phoneno"  value="<?php echo $phoneno;?>" class="form-control " placeholder="Helpline2" >
				   <label>Contact Number  </label>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
				   <input type="text" name="whatsapp" id="whatsapp"  value="<?php echo $whatsapp;?>" class="form-control " placeholder="WhatsApp Number" >
				   <label>WhatsApp  </label>
				</div>
			</div>
			<div class="col-md-6" style="display:none">
				<div class="form-group">
				   <input type="text" name="opendays" id="opendays"  value="<?php echo $opendays;?>" class="form-control" placeholder="Open Days" >
				   <label>Open Days</label>
				</div>
			</div>
            <div class="col-md-6" style="display:none">
				<div class="form-group">
				   <input type="text" name="opentime" id="opentime"  value="<?php echo $opentime;?>" class="form-control " placeholder="Open & Close Time" >
				   <label>Open & Close Time </label>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
				   <input type="text" name="facebook" id="facebook"  value="<?php echo $facebook;?>" class="form-control" placeholder="Facebook" >
				   <label>Facebook </label>
				</div>
			</div>
            <div class="col-md-6">
				<div class="form-group">
				   <input type="text" name="twitter" id="twitter"  value="<?php echo $twitter;?>" class="form-control " placeholder="Twitter" >
				   <label>Twitter </label>
				</div>
			</div>
           <div class="col-md-6">
				<div class="form-group">
				   <input type="text" name="linkedin" id="linkedin"  value="<?php echo $linkedin;?>" class="form-control " placeholder="Linkdin" >
				   <label>Linkdin </label>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
				   <input type="text" name="youtube" id="youtube"  value="<?php echo $youtube;?>" class="form-control " placeholder="Youtube" >
				   <label>Youtube  </label>
				</div>
			</div>
			
			<div class="row" >
			  <div class="col-md-2 col-md-offset-5">	
				 <br>
				 <input type="submit" name="editcontactus" value="Edit" class="btn btn-primary active" style="width:145%; margin-bottom: 20px;" title="Submit Form">
			  </div>
			</div>
	     </form>  
	   </div>	   
   <!-- /main content -->
    <?php include('include/footer.php')?>
         <!-- /footer -->
</div>
<!-- /page content -->
<!-- /page container -->
</body>
</html>