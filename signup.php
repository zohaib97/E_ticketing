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
    $carno=$_POST["carno"];
	$lisence=$_POST["lisence"];
	$lisencepic = $_FILES['lisencepic']['name']; 
	$imagetmp = $_FILES['lisencepic']['tmp_name']; 
$uploadfile = move_uploaded_file($imagetmp,"images/".$lisencepic);

    $query1=mysqli_query($con,"Select * from users where  email='$email' and Contact='$cnt'  and carno='$carno' and lisence='$lisence'");
    $num_row=mysqli_num_rows($query1);
    if($num_row>0)
    {
        echo "<script>   alert ('This Email Already Exist Please Provide Another Email')</script>";
        if($num_row>0)
        {
            echo "<script>   alert ('This Contact Already Exist Please Provide Another Contact')</script>";
        }
        if($num_row>0)
        {
            echo "<script>   alert ('This Car No. Already Exist Please Provide Another Car no.')</script>";
        }
        if($num_row>0)
        {
            echo "<script>   alert ('This Lisence Already Exist Please Provide Another Lisence')</script>";
        }
        
        
        
    }
  
    
    else
    {
        $query=mysqli_query($con,"insert into users (fname,lname,email,pass,role,Contact,address,carno,lisence,lisencepic) values('$fname','$lname','$email','$pass','$role','$cnt','$adr','$carno','$lisence','$lisencepic')");
	
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


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>

.tr-regi-form
{
	text-align: left !important;
}
.tr-register {
    background: url(images/a.jpg) #e6e6e6 !important;
    background-repeat: no-repeat;
    background-size: 100% 100% !important;
}
input
{
	box-shadow: 3px 3px 5px lightgrey !important;
}
	</style>
</head>
<body>
  <!--HEADER SECTION-->
  <?php
include_once('header.php');
?>
   
    <!--END HEADER SECTION-->
		
	<!--DASHBOARD-->
	<section>
		<div class="tr-register">
			<div class="tr-regi-form">
				<h4 class="text-center">Sign Up</h4>
				<br>
				<br>
				<ul class="nav nav-tabs " id="myTab" role="tablist" style="padding-left:38%">
  <li class="nav-item" role="presentation">
    <a class="nav-link active " id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Driver</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Passenger</a>
  </li>

</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  <form id="validateForm" method="post" enctype="multipart/form-data" >
                  <div class="row">
                  
                    <div class="form-group col-6">
                      <label for="frist_name">First Name</label>
                      <input id="frist_name" type="text" class="form-control" name="fname" placeholder="First Name" autofocus>
					  </div>
                    <div class="form-group col-6">
                      <label for="last_name">Last Name</label>
                      <input id="last_name" type="text" class="form-control" placeholder="Last Name" name="lname">
                    </div>
                    
                  </div>
                 
                  <div class="row">
				  
                  <div class="form-group col-12">
                  
                    <label for="email">Email</label>
                    <input id="email" type="email" placeholder="Email" class="form-control" name="email">
                    </div>
                  
                  
                    <div class="form-group col-6">
                      <label for="pass" class="d-block">Password</label>
                      <input id="pass" type="password" class="form-control pwstrength" placeholder="Password" data-indicator="pwindicator"
                      name="pass">
                      
                    </div>
                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Role</label>
                      
                      <select class="form-control" id="role" name="role" placeholder="Role" style="height: 42px;">

                      <option>Select Role</option>
					<?php
					$query = mysqli_query( $con, "select * from role" );
					while ( $rows = mysqli_fetch_array( $query ) ) {
                      if($rows['role'] == 'driver') { ?>
					<option value="<?=$rows['rid']?>">
						<?php echo $rows['role']?>
					</option>

					<?php
                    		}		}
								?>

                      </select>
                    </div>
						

						    
						
						
						<div class="form-group col-6">
                    <label for="cnt" class="d-block">Contact</label>
                   
                      <input id="cnt" type="text" placeholder="Contact" class="form-control" name="cnt" autofocus>
						</div>
					
                    
					
					<div class="form-group col-6">
                    <label for="adr" class="d-block">Address</label>
                    
                      <input id="adr" type="text" class="form-control" name="adr" placeholder="Address"/>
                    </div>
						

                 
                    
                    
					
					<div class="form-group col-6">
                    <label for="carno" class="d-block">Car No.</label>
                                                                
                    
                      <input id="carno" type="text" class="form-control" name="carno"  placeholder="Car Number"/>
					</div>
						
					<div class="form-group col-6">
                    <label for="lisence" class="d-block">License</label>
                                                                
                   
                      <input id="lisence" type="text" placeholder="Lisence" class="form-control" name="lisence" autofocus>
					</div>
						


						
					
						
					<div class="form-group col-12">
                    <label for="lisencepic" class="d-block">License Pic</label>
                                                                
                   
                      <input id="lisencepic" type="file" placeholder="Lisence" class="form-control" name="lisencepic" autofocus>
					</div>
					
                  </div>
                  
                  
                 
				  <div class="form-group">
                    <input type="submit" class="btn btn-primary" name="sub" value="Sign up" />
                        </div>  
                
                </form>
			
			</div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
	   <form id="validateForm" action="passengerinfo.php" method="post" >
			  <div class="row">
			
				<div class="form-group col-6">
				  <label for="frist_name">First Name</label>
				  <input id="frist_name" type="text" class="form-control" placeholder="First Name" name="fname" autofocus>
				</div>
				<div class="form-group col-6">
				  <label for="last_name">Last Name</label>
				  <input id="last_name" type="text" class="form-control" placeholder="Last Name" name="lname">
				</div>
				</div>
			  
			 
			  <div class="row">
			  
			  <div class="form-group col-12">
			  
				<label for="email">Email</label>
				<input id="email" type="email" class="form-control" placeholder="Email" name="email">
				
			  </div>
			  
				<div class="form-group col-6">
				  <label for="pass" class="d-block">Password</label>
				  <input id="pass" type="password" class="form-control pwstrength" placeholder="Password" data-indicator="pwindicator"
				  name="pass">
				  
				</div>
				<div class="form-group col-6">
				  <label for="password2" class="d-block">Role</label>
				  
				  <select class="form-control" id="role" name="role" placeholder="Role" style="height: 42px;">

				  <option>Select Role</option>
				<?php
				$query = mysqli_query( $con, "select * from role" );
				while ( $rows = mysqli_fetch_array( $query ) ) {
				  if($rows['role'] == 'passenger') { ?>
				<option value="<?=$rows['rid']?>">
					<?php echo $rows['role']?>
				</option>

				<?php
						}		}
							?>

				  </select>
				</div>
					

						
					
					
					<div class="form-group col-6">
				<label for="cnt" class="d-block">Contact</label>
			   
				  <input id="cnt" type="text" placeholder="Contact" class="form-control" name="cnt" autofocus>
					</div>
				
				
				
				<div class="form-group col-6">
				<label for="adr" class="d-block">Address</label>
				
				  <input id="adr" type="text" class="form-control" name="adr" placeholder="Address"/>
				</div>
					

			 
				
				
				<!-- <div class="menus d-sm-flex ftco-animate align-items-stretch">
				<div class="form-group col-6">
				<label for="carno" class="d-block">Car No.</label>
															
				
				  <input id="carno" type="text" class="form-control" name="carno"  placeholder="Car Number"/>
				</div>
					
				<div class="form-group col-6">
				<label for="lisence" class="d-block">License</label>
															
			   
				  <input id="lisence" type="text" placeholder="Lisence" class="form-control" name="lisence" autofocus>
				</div>
					</div> -->

					

			  </div>
			  
			  
			  
			  <div class="form-group">
				<input type="submit" class="btn btn-primary" name="sub" value="Sign up" />
					</div>  
			
			</form></div>
 
</div>






			
				
			</div>
		</div>
	</section>
	<!--END DASHBOARD-->
	<!--====== TIPS BEFORE TRAVEL ==========-->

	<!--====== FOOTER 1 ==========-->
    <?php
include_once('footer.php');
?>
<script>
$(document).ready(function(){
	$('#home').addClass("active in show");
})
</script>
</body>
</html>

<script>
		$('#validateForm').bootstrapValidator({
fields: {
	
fname: {
		validators: {
			stringLength: {
				min: 3,
				message: 'Please Enter your First Name with minimum 3 letters length'
			},
			notEmpty: {
				message: 'Please Enter your First Name'
			}
		}
	},
	lname: {
		validators: {
			stringLength: {
				min: 3,
				message: 'Please Enter your Last Name with minimum 3 letters length'
			},
			notEmpty: {
				message: 'Please Enter your Last Name'
			}

		}
	},
	email: {
		validators: {

			notEmpty: {
               


                message: 'Please Enter your email'
                
			}
		}
	},
	pass: {
		validators: {
			stringLength: {
				min: 8,
				message: 'Please Enter your password with minimum 8 letters and numbers length'
			},
			notEmpty: {
				message: 'Please Enter your password'
			}
		}
	},
	role: {
		validators: {
			notEmpty: {
                
				message: 'Select  your Role'
			}
		}
	},
	cnt: {
		validators: {
			notEmpty: {
				message: 'Please Enter your Number'
			}
		}
	},

	adr: {
		validators: {
			notEmpty: {
				message: 'Please Enter your Address'
			}
		}
	},
	carno: {
		validators: {
			notEmpty: {
				message: 'Please Enter your Car Number'
			}
		}
	},
	lisence: {
		validators: {
			notEmpty: {
				message: 'Please Enter your Lisence Number'
			}
		}
	},

	lisencepic: {
		validators: {
			notEmpty: {
				message: 'Please Select your Lisence Pic'
			}
		}
	},
	
	}
});
</script>