<?php
session_start();
// DATABASE CONNECRION
include_once 'connection/connect.php';

if(!$con)
{
	echo "Database not connected";
}
// $date = "2456  ";
// $components = str_split($date);
// print_r($components);
// ADD SUBJECTS


if(isset($_POST["approve"]))
{
	$appid=$_POST["appid"];
	
	
		$query=mysqli_query($con,"UPDATE users SET status='Not Approve' where id='$appid'");

if($query > 0)
	{
		$_SESSION['status']="Driver Not Approved Sccessfully!";
        $_SESSION['status_code']="success";
     	header('location:viewdriver.php');
	}
	else
	{
		$_SESSION['status']="Driver Did Not Approved";
        $_SESSION['status_code']="error";
		header('location: viewdriver.php');
	}
	
}
if(isset($_POST["notapprove"]))
{
	$appid=$_POST["appid"];

		$query=mysqli_query($con,"UPDATE users SET status='Approve' where id='$appid'");
			if($query > 0)
	{
		$_SESSION['status']="Driver Approved Sccessfully!";
        $_SESSION['status_code']="success";
	  $to      = 'zohaibkhan4822@gmail.com';
 	$subject = 'Confirmation';
 	$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	
	$headers .= 
    'From: zohaibkhan4822@gmail.com';
    'Reply-To: zohaibkhan4822@gmail.com';
    'X-Mailer: PHP/' . phpversion();
$message = '<html><head><style>div:hover{background-color:#C8C8C8;}</style></head<body>';
$message = '<div style=""><h1 style="text-align: center;background: linear-gradient(to right, #01a6fd 0%, #17d0cf 51%, #01a6fd 100%);">Welcome</h1><p style="text-align: center"><b>Your Account Has Verified</b></p><p style="text-align: center" ><b>Click this link to Login:</b><a style="text-align: center" href="https://extremeearn.com/">WowOnlineTutors</a></p></div>';
$message .= '</body></html>';

mail($to, $subject, $message, $headers);
	
		header('location: viewdriver.php');
	}
	else
	{
		$_SESSION['status']="Tutor Did Not Approve";
        $_SESSION['status_code']="error";
		header('location: viewdriver.php');
	}
	

	
}

// DELETE STUDENT
// if(isset($_GET['id']))
// {
// 	$delete_id = $_GET['id'];
// 	$query = mysqli_query($con, "delete from users where id = '$delete_id'");
// 	 mysqli_query($con, "delete from t_subject where t_id = '$delete_id'");
// 	if($query > 0)
// 	{
// 		$_SESSION['status']="Tutor Deleted Sccessfully!";
//         $_SESSION['status_code']="success";
// 				header('location:index.php');
// 	}
// 	else
// 	{
// 		$_SESSION['status']="Tutor Did Not Delete";
//         $_SESSION['status_code']="error";
// 		header('location: index.php');
// 	}
// }
if(isset($_POST["emailbtn"])){
	$src=$_POST["email"];
	$res=mysqli_query($con,"select * from users where email='$src'");
	if($res->num_rows>0){
		echo "<span style='color:red'>Email Exist</span>";
	}
	else{
		echo "<span style='color:green'>Email Available</span>";
	}
}

?>