<?php
include( "connection/connect.php" );
session_start ();
require_once('auth.php');
if(isset($_POST["sub"]))
 {
	$id= $_POST['id'];
	$q1=mysqli_query($con,"SELECT * FROM user_profile WHERE id='$id'");
	$re=mysqli_fetch_array($q1);
 	$firstname=$_POST["fname"];
   $lastname=$_POST["lname"];
   $license=$_POST["license"];
   $address=$_POST["address"];
   $contact=$_POST["contact"];
	if($_FILES['image']['name']!=""){
		
		 $image = $_FILES['image']['name'];
	$imagetmp = $_FILES['image']['tmp_name'];
	$uploadfile= move_uploaded_file($imagetmp,"image/".$image);
	}
	else{
    $image=$re['image'];
}
 
   $description=$_POST["description"];
  $role=$_POST["role"];

      
     
       $query="UPDATE `user_profile` SET `image`='$image',`first_name`='$firstname',`last_name`='$lastname',`license_no`='$license',`address`='$address',`contact`='$contact',`description`='$description',`rid`='$role' WHERE id='$id'";
	$result= mysqli_query($con,$query);
       if ($result) {
          echo "<script>   alert ('Data Updated Successfully')</script>";
       echo "<script>window.open('profileview.php','_self')</script>";
       }
       else{
         echo "<script>   alert ('Data Did not update')</script>";
       }

	
}

?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from radixtouch.in/templates/snkthemes/grexsan/source/light/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Sep 2020 09:54:39 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>User Registration</title>
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
<!-- <section class="section">
<div class="section-header">
						<div class="row">
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

                      <option>Select Role</option>
				

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
                      </section> -->
                      <div class="main-content" style="min-height: 273px;">
        <section class="section">
          <br><br>
          <div class="section-body"  style="background:white">
          <div class="card-header card-header-auth">
                <h4>User Registration</h4>
              </div>
               <div class="card-body">
				   <?php
				   $id =$_GET['eid'];

				   $q="SELECT * FROM user_profile WHERE id='$id'";
				   $r=mysqli_query($con,$q);
				   $row=mysqli_fetch_array($r);
				   ?>
                <form id="validateForm" method="post" enctype="multipart/form-data" >
                  <div class="row">
					  <input type="hidden" value="<?=$row['id']?>" name="id">
                    <div class="form-group col-6">
                      <label for="image">Profile Pic</label>
                      <input id="image" type="file" class="form-control" name="image" autofocus value="<?=$row['image']?>">
                    </div>
					   <div class="form-group col-6">
                      <label for="frist_name">First Name</label>
                      <input id="frist_name" type="text" class="form-control" name="fname" autofocus value="<?=$row['first_name']?>">
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Last Name</label>
                      <input id="last_name" type="text" class="form-control" name="lname" value="<?=$row['last_name']?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email">License Number</label>
                    <input id="email" type="text" class="form-control" name="license" value="<?=$row['license_no']?>">
                    
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="address" class="d-block">Address</label>
                      <input id="address" type="text" class="form-control pwstrength" data-indicator="pwindicator"
                      name="address" value="<?=$row['address']?>">
                      
                    </div>
					  <div class="form-group col-6">
                      <label for="contact" class="d-block">Contact No.</label>
                      <input id="contact" type="number" class="form-control pwstrength" data-indicator="pwindicator"
                      name="contact" value="<?=$row['contact']?>">
                      
                    </div>
					  <div class="form-group col-6">
                      <label for="description" class="d-block">Description</label>
                     <textarea id="description" class="form-control"  name="description" rows="1" cols="20" data-indicator="pwindicator" value="<?=$row['description']?>">
						 <?=$row['description']?>
					</textarea>
                      
                    </div>
                    <div class="form-group col-6">
                      <label for="role" class="d-block">Role</label>
                      
                      <select class="form-control" id="role" name="role" placeholder="Role">

                      <option value="">Select Role</option>
					<?php
					$query1 = mysqli_query( $con, "select * from role" );
					while ( $rows = mysqli_fetch_array( $query1 ) ) {
						 if($rows['rid']==$row['rid']) {
                      ?>
					<option value="<?php echo $rows['rid']?>" selected>
						<?php echo $rows["role"]?>
					</option>

					<?php
						 }else{
						?>	
						  <option value="<?php echo $rows['rid']?>">
						<?php echo $rows["role"]?>
					</option>
							<?php 
						 }	}
								?>

                      </select>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <input type="submit" class="btn btn-primary" name="sub" value="Update" />
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
	image: {
		validators: {
			

		}
	},
	
	license: {
		validators: {
				stringLength: {
				max: 10,
				message: 'Please Enter your License number with maximum 10 numbers length'
			},
			notEmpty: {
               


                message: 'Please Enter your License no'
                
			}
		}
	},
	contact: {
		validators: {
				stringLength: {
				max: 20,
				message: 'Please Enter your Number with maximum 20 numbers length'
			},
			notEmpty: {
               


                message: 'Please Enter your contact no'
                
			}
		}
	},
	description: {
		validators: {
			stringLength: {
				max: 100,
				message: 'Please Enter your descrition with maximum 100 letters length'
			},
			notEmpty: {
				message: 'Please Enter your description'
			}
		}
	},
	address: {
		validators: {
			stringLength: {
				max: 100,
				message: 'Please Enter your Address with maximum 100 letters length'
			},
			notEmpty: {
				message: 'Please Enter your Address'
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