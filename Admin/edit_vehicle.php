<?php
session_start ();
session_regenerate_id();
include( "connection/connect.php" );

require_once('auth.php');
if(isset($_POST["sub"]))
{
	$id= $_POST['id'];
    
	$q1=mysqli_query($con,"SELECT * FROM vehicle WHERE vid='$id'");
	$re=mysqli_fetch_array($q1);
    $vname=$_POST['vname'];
    $vno=$_POST['vno'];
	if($_FILES["vimg"]["name"]!=""){
	$vimg = $_FILES['vimg']['name']; 
		$imagetmp = $_FILES['vimg']['tmp_name']; 
	$uploadfile = move_uploaded_file($imagetmp,"image/".$vimg);
}else{
    $vimg=$re['v_img'];
} 
   
//    $query1=mysqli_query($con,"Select * from vehicle where v_no='$vno'");
//	$result=mysqli_fetch_array($query1);
////    $num_row=mysqli_num_rows($query1);
//    if($result)
//    {
         $query=mysqli_query($con,"UPDATE `vehicle` SET `name`='$vname',`v_no`='$vno',`v_img`='$vimg' WHERE vid='$id'");
        
        if($query)
        {
            // header("location:login.php");
            echo "<script>   alert ('Data Updated Successfully')</script>";
           echo "<script>window.open('viewvehicle.php','_self')</script>";
            
        }
        else
        {
            echo "<script> alert ('Data Didn't Update')</script>";
        }
//    }
//    
//    else
//    {
//        
//        
//       
//}
//	
//	
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
                      <div class="main-content" style="min-height: 273px;">
        <section class="section">
          <br><br>
          <div class="section-body"  style="background:white">
          <div class="card-header card-header-auth">
                <h4>Vehicle Edit</h4>
              </div>
              <div class="card-body"> 
				  <?php
				 if(isset($_GET['eid']))
				 {
				  $id= $_GET['eid'];
				  $q="SELECT * FROM vehicle WHERE vid ='$id'";
				  $r=mysqli_query($con,$q);
				  while($row=mysqli_fetch_array($r))
				  {
				  ?>
          <form id="validateForm" method="post" enctype="multipart/form-data" >
                  <div class="row">
					  <input type="hidden" value="<?=$row['vid']?>" name="id">
                    <div class="form-group col-6">
                      <label for="vname">Vehicle Name</label>
                      <input id="vname" type="text" class="form-control" name="vname" autofocus value="<?=$row['name']?>">
                    </div>
                    <div class="form-group col-6">
                      <label for="vno">Vehicle No</label>
                      <input id="vno" type="text" class="form-control" name="vno" value="<?=$row['v_no']?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="vimg">Vehicle Image</label>
                    <input id="vimg" type="file" class="form-control" name="vimg">
                    
                  </div>
                  <?php
				  }
				 }
			  ?>
                  
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
	
vname: {
		validators: {
			stringLength: {
				min: 3,
				message: 'Please Enter your Vehicle Name with minimum 3 letters length'
			},
			notEmpty: {
				message: 'Please Enter your Vehicle Name'
			}
		}
	},
	vno: {
		validators: {
			stringLength: {
				min: 2,
				message: 'Please Enter your Vehicle Number with minimum 2 letters length'
			},
			notEmpty: {
				message: 'Please Enter your Vehicle Number'
			}

		}
	},

  vimg: {
		validators: {
			
			

		}
	}


	
	
		
	}
});
</script>