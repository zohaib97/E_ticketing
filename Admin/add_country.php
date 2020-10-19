<?php
session_start ();
session_regenerate_id();
include( "connection/connect.php" );

require_once('auth.php');
if(isset($_POST["addcountry"]))
{
    
    $countryname=$_POST['countryname'];
   
    $query1=mysqli_query($con,"Select * from country where cname ='$countryname'");
	$result1=mysqli_fetch_array($query1);
//    $num_row=mysqli_num_rows($query1);
    if($result1)
    {
        echo "<script>   alert ('This Country Already Exist Please Provide Another Country')</script>";
    }
    
    else
    {
        
        
        $query1=mysqli_query($con,"insert into country(cname) values('$countryname')");
        
        if($query1)
        {
            // header("location:login.php");
            echo "<script>   alert ('Data Insert Successfully')</script>";
           echo "<script>window.open('add_country.php','_self')</script>";
            
        }
        else
        {
            echo "error in your sql syntex...";
        }
}
	
	
}



if(isset($_POST["addcity"]))
{
    
    $cityname=$_POST['cityname'];
   $Countryid = $_POST['Countryid'];
    $query1=mysqli_query($con,"Select * from city where name ='$cityname'");
	$result1=mysqli_fetch_array($query1);
//    $num_row=mysqli_num_rows($query1);
    if($result1)
    {
        echo "<script>   alert ('This City Already Exist Please Provide Another City')</script>";
    }
    
    else
    {
        
        
        $query1=mysqli_query($con,"insert into city(name,country_id) values('$cityname','$Countryid')");
        
        if($query1)
        {
            // header("location:login.php");
            echo "<script>   alert ('Data Insert Successfully')</script>";
           echo "<script>window.open('add_country.php','_self')</script>";
            
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
  <title>E-Ticekt | Vehicle Registration</title>
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
                <h4>Add Country</h4>
              </div>
              <div class="card-body"> 
          <form id="validateForm" method="post" >
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="countryname">Country Name</label>
                      <input id="countryname" type="text" class="form-control" name="countryname" autofocus>
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="submit" class="btn btn-primary" name="addcountry" value="Add Country" />
                  </div>
                </form>
                </div>
        </section>

        <?php
        include('rightsetting.php');
        ?>
    </div>
  </div>
  <div class="main-content" style="margin-top:-100px;">
        <section class="section">
          <div class="section-body"  style="background:white">
          <div class="card-header card-header-auth">
                <h4>Add City</h4>
              </div>
              <div class="card-body"> 
          <form id="validateForm1" method="post" enctype="multipart/form-data" >
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="cityname">City name</label>
                      <input id="cityname" type="text" class="form-control" name="cityname" autofocus>
                    </div>
                    <div class="form-group col-6">
                        <label for="Countryid">Country name</label>
                      <select name="Countryid" class="form-control">
                          <option value="" selected>Select Country Name</option>
                        <?php
                        $query = "SELECT * FROM country";
                        $result = mysqli_query($con,$query);
                        While($row = mysqli_fetch_array($result))
                        {
                        ?>
                        
                          <option value="<?=$row['id']?>"><?=$row['cname']?></option>
                      <?php
                        }
                      ?>
                       </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="submit" class="btn btn-primary" name="addcity" value="Add City" />
                  </div>
                </form>
                </div>
        </section>
    
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
	
countryname: {
		validators: {
			stringLength: {
				min: 3,
				message: 'Please Enter Country Name with minimum 3 letters length'
			},
			notEmpty: {
				message: 'Please Enter Country Name'
			}
		}
	}


 
	
	
		
	}
});
$('#validateForm1').bootstrapValidator({
fields: {
	
cityname: {
		validators: {
			stringLength: {
				min: 3,
				message: 'Please Enter City Name with minimum 3 letters length'
			},
			notEmpty: {
				message: 'Please Enter City Name'
			}
		}
	},
	Countryid: {
		validators: {
			
			notEmpty: {
				message: 'Please Enter Country'
			}

		}
	}

 


	
	
		
	}
});
</script>