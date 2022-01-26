<?php 
require 'database.php';
if (session_status() == PHP_SESSION_NONE)
{
	session_start();
}
$username = "";
$password = "";

extract($_POST);
if(isset($_POST['username'])){
	$username = $_POST['username'];
}
if(isset($_POST['password'])) 
{
	$password = $_POST['password'];
}

/*********************************USER Name Check*************************/
$q = 'SELECT * FROM user WHERE username=:username';
$query = $dbh->prepare($q);

$query->execute(array(':username' => $username));

$row = $query->fetch(PDO::FETCH_ASSOC);

if($row['password'] != $_POST['password'])
{	 
   header('Location: index.php?action=error1');
}
else
{
	$q = 'SELECT * FROM user WHERE username=:username AND password=:password';

	$query = $dbh->prepare($q)or die(mysqli_error());

	$query->execute(array(':username' => $username, ':password' => $password))or die(mysqli_error());

	if($query->rowCount() == 0){
		header('Location: index.php?action=error');
	}
	else
	{
		$row = $query->fetch(PDO::FETCH_ASSOC);
		$flag = $row['status'];
		if($flag=='0')
		{
			echo('Your account is blocked');
		}
		else
		{
			session_regenerate_id();
			$_SESSION['sess_user_id']  = $row['userid'];
			$_SESSION['sess_username'] = $row['username'];
			$_SESSION['sess_userrole'] = $row['role'];
			
			session_write_close();
				
			if (isset($_SESSION['redirectlink'])) 
			{
				$redirectTo = 'Location: adminpanel.php';
			}	
			else 
			{
				$redirectTo = 'Location: adminpanel.php';	
			}
			
			header($redirectTo);
		}
	}
}
?>