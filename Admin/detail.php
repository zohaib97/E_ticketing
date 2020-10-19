<?php
include( "connection/connect.php" );
session_start ();
require_once('auth.php');

?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from radixtouch.in/templates/snkthemes/grexsan/source/light/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Sep 2020 09:54:39 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>E-Ticket | Detail</title>
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
  <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
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
    .card-header:first-child
  {
    background-color: #1a73e8b8 !important;
  }
  
  .card-header
  {
    font-size: 16px !important;
    font-family: 'Source Code Pro', monospace;
    font-style: italic;
  }
  p {
    font-size: 16px;
    
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
                <h4>Detail</h4>
              </div>

              <div class="card-body"> 
				  <?php
				  if(isset($_GET['eid']))
				  {
					  $id=$_GET['eid'];
				 
					   $q=mysqli_query($con,"SELECT * FROM `users`  join role on users.role=role.rid WHERE id='$id'");
					  while($row=mysqli_fetch_array($q))
					  {
                  ?>
                   <input type="hidden" value="<?=$row['id']?>" name="id">
                 

                   
              <div class="card bg-dark text-white">
                  <br>
                  <br>
                <div class="row">
                <div class="col-md-2 col-sm-2" >
  <img src="https://www.w3schools.com/howto/img_avatar.png" style="width:80%; " class="card-img rounded-circle p-10 m-5" alt="...">
    </div>
  <div class="col-md-5 col-sm-10" >
    <br>
    <br>
    <br>
    <br>
    <h4><?=$row['fname']?> <?=$row['lname']?></h4>
  </div>
  <div class="col-md-3  col-sm-12 " style="box-shadow:1px 1px 20px lightgrey ; border-radius:10px" >
    
    <br>
    <br>
    <p class="text-center" style="font-size: 16px !important;font-family: 'Source Code Pro', monospace;font-style: italic;">Lisence Pic</p>
                  <img  class="pb-5" width="230" class="" src="../images/<?=$row['lisencepic']?>" style="">
                  </div>
  </div>  <br>
                  <br>
                  
                  
                 
</div>

<div class="row">
    
    <div class="col-md-3 col-sm-12"  >
<div class="card  g-light mb-3" style="box-shadow:1px 1px 20px lightgrey ;">
  <!-- <div class="card-header h3"></div> -->
  <div class="card-body">
      <h3  style="border-bottom: 1px solid #1a73e8b8 ;max-width: 80%;font-family: 'Source Code Pro', monospace;font-style: italic;">Email:</h3>
    <p class="card-title text-center ">
    <br>    
    <?=$row['email']?>
    <br>
    <br>
</p>
   
  </div>
</div>
</div>

<div class="col-md-3 col-sm-12">
<div class="card  g-light mb-3" style="box-shadow:1px 1px 20px lightgrey ;" >
  <!-- <div class="card-header h3">Role</div> -->
  
  <div class="card-body">
  <h3  style="border-bottom: 1px solid #1a73e8b8 ;max-width: 80%;font-family: 'Source Code Pro', monospace;font-style: italic;">Role:</h3>
  <p class="card-title text-center">
        
        <br>
        <?=$row['role']?>
        <br>
        <br>

                          </p>
   
  </div>
</div>
</div>





<div class="col-md-3 col-sm-12">

<div class="card  g-light mb-3" style="box-shadow:1px 1px 20px lightgrey ;">
  
  <!-- <div class="card-header h3">Contact</div> -->
 
  <div class="card-body">
  <h3  style="border-bottom: 1px solid #1a73e8b8 ;max-width: 80%;font-family: 'Source Code Pro', monospace;font-style: italic;">Contact:</h3>
  <p class="card-title text-center">
        <br>   <?=$row['Contact']?>
    <br><br>
</p>
   
  </div>
</div>
</div>


    <div class="col-md-3 col-sm-12">
    
<div class="card  g-light mb-3" style="box-shadow:1px 1px 20px lightgrey ;">
  <!-- <div class="card-header h3">Lisence</div> -->

  <div class="card-body">
  <h3  style="border-bottom: 1px solid #1a73e8b8 ;max-width: 80%;font-family: 'Source Code Pro', monospace;font-style: italic;">Lisence:</h3>

  <p class="card-title text-center">
    <br>    
    <?=$row['lisence']?>
                    <br>
                    <br>
</p>
   
  </div>
</div>
</div>


</div>


</div>


          
				  <?php
				  }
				  }
				  ?>
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