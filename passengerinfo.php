<?php
include( "connection/connect.php" );
session_start ();

if(isset($_POST["sub"]))
{
    
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
	$email=$_POST["email"];
    $pass=md5($_POST["pass"]);
    $role=$_POST["role"];
    $cnt=$_POST["cnt"];
    $adr=$_POST["adr"];
   

    $query1=mysqli_query($con,"Select * from users where  email='$email' and Contact='$cnt'");
    $num_row=mysqli_num_rows($query1);
    if($num_row>0)
    {
        echo "<script>   alert ('This Email Already Exist Please Provide Another Email')</script>";
        if($num_row>0)
        {
            echo "<script>   alert ('This Contact Already Exist Please Provide Another Contact')</script>";
        }
       
        
        
    }
  
    
    else
    {
        $query=mysqli_query($con,"insert into users (fname,lname,email,pass,role,Contact,address) values('$fname','$lname','$email','$pass','$role','$cnt','$adr')");
	
	if($query)
	{
        // header("location:login.php");
        echo "<script>   alert ('Data Insert Successfully')</script>";
       echo "<script>window.open('signup.php','_self')</script>";
        
	}
	else
	{
		echo "error in your sql syntex...";
    }
}
	
	
}

?>
