<?php
include( "connection/connect.php" );
session_start ();
require_once('auth.php');

if(@$_GET["id"])
{
	$id=$_GET["id"];
	
	$query=mysqli_query($con,"delete from vehicle where vid='$id'");
	
	if($query)
	{
		header("location:viewvehicle.php");
	}
	else
	{
		echo "Error in your sql syntex..";
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
  <link rel="stylesheet" href="assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  
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

                      <div class="main-content" style="min-height: 273px;background:#eff1f1">
        
          
          <div class="section-body"  style="background:white">
          
              <!-- start table -->
        
        <section class="section">
          
       
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>View Vehicle</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                            <th>Serial No.</th>
                            <th>Vehicle Name</th>
                            <th>Vehicle Number</th>
                            <th>Vehicle Image</th>
                            
                            <th>Action</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                            $sn=1;
                            $query=mysqli_query($con,"select * from vehicle  ");
                            while($rows=mysqli_fetch_array($query))
                            { ?>
                          <tr>
                           
                                  <td><?php echo $sn?></td>
                                  <td><?php echo $rows["name"]?></td>
                                  <td><?php echo $rows["v_no"]?></td>
                                  <td><?php echo $rows["v_img"]?></td>
                                  			
				<td>
        <!-- <a href="viewbatch.php?q=<?php// echo $rows["Batchid"]?>"> -->
        <p title="Edit" class="fa fa-edit" style="color: black"></p>
      <!-- </a> -->
				&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="viewvehicle.php?id=<?php echo $rows["vid"]?>"> <p title="Delete" class="fa fa-times-circle" style="color: black"></p></a>
				
			</td>
                            <?php $sn++;}
                            ?>
                          </tr>
                         
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
         
        </section>
        
      


            <!-- end table -->


      <!-- Main Content -->
      
        <?php
        include('rightsetting.php');
        ?>
		
	  
      
    </div>
  </div>

 
    <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <script src="assets/bundles/datatables/datatables.min.js"></script>
  <script src="assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="assets/bundles/datatables/export-tables/dataTables.buttons.min.js"></script>
  <script src="assets/bundles/datatables/export-tables/buttons.flash.min.js"></script>
  <script src="assets/bundles/datatables/export-tables/jszip.min.js"></script>
  <script src="assets/bundles/datatables/export-tables/pdfmake.min.js"></script>
  <script src="assets/bundles/datatables/export-tables/vfs_fonts.js"></script>
  <script src="assets/bundles/datatables/export-tables/buttons.print.min.js"></script>
  <script src="assets/js/page/datatables.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/bundles/jquery.sparkline.min.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.min.js" integrity="sha512-Vp2UimVVK8kNOjXqqj/B0Fyo96SDPj9OCSm1vmYSrLYF3mwIOBXh/yRZDVKo8NemQn1GUjjK0vFJuCSCkYai/A==" crossorigin="anonymous"></script>
 
</body>


<!-- Mirrored from radixtouch.in/templates/snkthemes/grexsan/source/light/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Sep 2020 09:58:56 GMT -->
</html>
<



