<?php
include( "connection/connect.php" );

if(isset($_POST["sub"]))
{
    
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
	$email=$_POST["email"];
    $pass=md5($_POST["pass"]);
    $role=$_POST["role"];

    $query1=mysqli_query($con,"Select * from users where  email='$email'");
    $num_row=mysqli_num_rows($query1);
    if($num_row>0)
    {
        echo "<script>   alert ('This Email Already Exist Please Provide Another Email')</script>";
    }
    
    else
    {
	$query=mysqli_query($con,"insert into users(fname,lname,email,pass,role) values('$fname','$lname','$email','$pass','$role')");
	
	if($query)
	{
        // header("location:login.php");
        echo "<script>   alert ('Data Insert Successfully')</script>";
       echo "<script>window.open('index.php','_self')</script>";
        
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


<!-- Mirrored from radixtouch.in/templates/snkthemes/grexsan/source/light/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Sep 2020 10:14:03 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>E-Ticket | User Registration</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <link rel="stylesheet" href="assets/bundles/jquery-selectric/selectric.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/css/bootstrapValidator.min.css" integrity="sha512-YDChav1pUAodyH1Ja7PIpEDUOoFROpZi5Lb7pY8+9+kU8UTr3J8SI8QO7SRuf4qdDKb5OI0xSt4Vk1wiYjBXgw==" crossorigin="anonymous" />
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
  <style>
		.has-error .form-check-label{
			color:red !important;
		}
		.has-error .form-control{
			border:1px solid red !important;
		}
		.has-success .form-control{
			border:1px solid green !important;
		}
		.help-block{
			color: red;
		}
		
</style>

</head>

<body class="background-image-body">
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand login-brand-color">
            	<img alt="image" src="assets/img/logo.png" />
              Grexsan
            </div>
            <div class="card card-auth">
              <div class="card-header card-header-auth">
                <h4>User Registration</h4>
              </div>
              <div class="card-body">
                <form id="validateForm" method="post" >
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="frist_name">First Name</label>
                      <input id="frist_name" type="text" class="form-control" name="fname" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Last Name</label>
                      <input id="last_name" type="text" class="form-control" name="lname">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email">
                    
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="pass" class="d-block">Password</label>
                      <input id="pass" type="password" class="form-control pwstrength" data-indicator="pwindicator"
                      name="pass">
                      
                    </div>
                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Role</label>
                      
                      <select class="form-control" id="role" name="role" placeholder="Role">

                      <option value="">Select Role</option>
					<?php
					$query = mysqli_query( $con, "select * from role" );
					while ( $rows = mysqli_fetch_array( $query ) ) {
                      if($rows['role'] == 'user' || $rows['role'] == 'admin') { ?>
					<option value="<?php echo $rows["rid"]?>">
						<?php echo $rows["role"]?>
					</option>

					<?php
                    		}		}
								?>

                      </select>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <input type="submit" class="btn btn-primary" name="sub" value="Sign up" />
                  </div>
                </form>
              </div>
              <div class="mb-4 text-muted text-center">
                Already Registered? <a href="#">Login</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
   <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="assets/bundles/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="assets/bundles/jquery-selectric/jquery.selectric.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/auth-register.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.min.js" integrity="sha512-Vp2UimVVK8kNOjXqqj/B0Fyo96SDPj9OCSm1vmYSrLYF3mwIOBXh/yRZDVKo8NemQn1GUjjK0vFJuCSCkYai/A==" crossorigin="anonymous"></script>
 
</body>


<!-- Mirrored from radixtouch.in/templates/snkthemes/grexsan/source/light/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Sep 2020 10:14:04 GMT -->
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
	
		
	}
});
</script>
