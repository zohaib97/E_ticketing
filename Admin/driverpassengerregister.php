<?php
include( "connection/connect.php" );
session_start ();
require_once('auth.php');
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
  $uploadfile = move_uploaded_file($imagetmp,"../images/".$lisencepic);

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
       echo "<script>window.open('driverpassengerregister.php','_self')</script>";
        
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


<!-- Mirrored from radixtouch.in/templates/snkthemes/grexsan/source/light/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Sep 2020 09:54:39 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>E-Ticket | Driver & Passenger Registration</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <link rel="stylesheet" href="assets/bundles/bootstrap-social/bootstrap-social.css">
  <link rel="stylesheet" href="assets/bundles/flag-icon-css/css/flag-icon.min.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/css/bootstrapValidator.min.css" integrity="sha512-YDChav1pUAodyH1Ja7PIpEDUOoFROpZi5Lb7pY8+9+kU8UTr3J8SI8QO7SRuf4qdDKb5OI0xSt4Vk1wiYjBXgw==" crossorigin="anonymous" />
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
  
  <style>
    .card-header:first-child {
    /* border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0; */
    background: #e0376f!important;
    color:white;
}

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
    #dcar
    {
      display: none;
    }
    #dlisence
    {
      display: none;
    }
    #dlisencepic
    {
      display: none;
    }
		
  </style>
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <!--start header -->
<?php
include_once('header.php');
?>
<!-- end header -->

<!-- start form -->

                      <div class="main-content" style="min-height: 273px;">
        <section class="section">
          <br><br>
          <div class="section-body"  style="background:white">
          <div class="card-header card-header-auth">
                <h4>Driver & Passenger Registration</h4>
              </div>
              <div class="card-body"> 
          <form id="validateForm" method="post" enctype="multipart/form-data">
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="frist_name">First Name</label>
                      <input id="fname" type="text" class="form-control" name="fname" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Last Name</label>
                      <input id="lname" type="text" class="form-control" name="lname">
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

                      <option>Select Role</option>
					<?php
					$query = mysqli_query( $con, "select * from role" );
					while ( $rows = mysqli_fetch_array( $query ) ) {
                      if($rows['role'] == 'driver' || $rows['role'] == 'passenger') { ?>
					<option value="<?=$rows["rid"]?>">
						<?php echo $rows["role"]?>
					</option>

					<?php
                    		}		}
								?>

                      </select>
                      
                    </div>
                    
                    
                    <div class="form-group col-6">
                    <label for="cnt">Contact</label>
                   
                      <input id="cnt" type="text" placeholder="Contact" class="form-control" name="cnt" autofocus>
                    </div>
                    <div class="form-group col-6">
                    <label for="adr">Address</label>
                    
                      <input id="adr" type="text" class="form-control" name="adr" placeholder="Address"/>
                    </div>
                  

                 
                    
                    <div class="form-group col-6" id="dcar">
                    <label for="carno">Car No.</label>
                                                                
                    
                      <input id="carno" type="text" class="form-control" name="carno"  placeholder="Car Number"/>
                    </div>

                    <div class="form-group col-6" id="dlisence">
                    <label for="lisence">License</label>
                                                                
                   
                      <input id="lisence" type="text" placeholder="Lisence" class="form-control" name="lisence" autofocus>
                    </div>

                    <div class="form-group col-12" id="dlisencepic">
                    <label for="lisencepic" class="d-block">License Pic</label>
                                                                
                   
                      <input id="lisencepic" type="file" placeholder="Lisence" class="form-control" name="lisencepic" autofocus>
					</div>

                 

                  </div>
                  
                  <div class="form-group">
                    <input type="submit" class="btn btn-primary" name="sub" value="Register" />
                  </div>
                </form>
                </div>
        </section>
       


            <!-- end Form -->


      <!-- Main Content -->
      
        <?php
        include('rightsetting.php');
        ?>
		
	  
      
    </div>
  </div>
                      </div>
                      </div>

  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="assets/bundles/echart/echarts.js"></script>
  
  <script src="assets/bundles/chartjs/chart.min.js"></script>
  <script src="assets/bundles/apexcharts/apexcharts.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/index.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/bundles/jquery.sparkline.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.min.js" integrity="sha512-Vp2UimVVK8kNOjXqqj/B0Fyo96SDPj9OCSm1vmYSrLYF3mwIOBXh/yRZDVKo8NemQn1GUjjK0vFJuCSCkYai/A==" crossorigin="anonymous"></script>
 
</body>


<!-- Mirrored from radixtouch.in/templates/snkthemes/grexsan/source/light/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Sep 2020 09:58:56 GMT -->
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
<!-- // if($num_row>0)
        // {
        //     echo "<script>   alert ('This Address Already Exist Please Provide Another Address')</script>";
        // }
        // if($num_row>0)
        // {
        //     echo "<script>   alert ('This Car No. Already Exist Please Provide Another Car No.')</script>";
        // }
        // if($num_row>0)
        // {
        //     echo "<script>   alert ('This Lisence Already Exist Please Provide Another Lisence')</script>";
        // } -->
        <script>

$('#role').on('change',function(){
  var role= $('#role').val();
            if(role==1)
            {
              $('#dcar').show();
              $('#dlisence').show();
              $('#dlisencepic').show();

            }
            else
            {
              if(role==2)
            {
              $('#dcar').hide();
              $('#dlisence').hide();
              $('#dlisencepic').hide();

            }
            }

});


          </script>