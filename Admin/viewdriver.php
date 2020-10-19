<?php
include( "connection/connect.php" );
session_start ();
require_once('auth.php');

if(isset($_GET["did"]))
{
	$id=$_GET["did"];
	
	$query=mysqli_query($con,"delete from users where id='$id'");
	
	if($query)
	{
		header("location:viewdriver.php");
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
  <title>E-Ticket | View Driver</title>
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
                    <h4>View  Driver</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                            <th>Serial No.</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Role</th>
                            <th>Contact</th>
                            <th>Address</th>
                            <th>Car No.</th>
                            <th>Lisense</th>
                            <th>Lisense Pic</th>
                            <th>Status</th>
                            <th>Action</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                            $sn=1;
                            $query=mysqli_query($con,"select * from users  join role on users.role=role.rid ORDER BY id desc");
                            while($rows=mysqli_fetch_array($query))
                            {
                              if($rows['role'] == 'driver' ) {  ?>
                          <tr>
                           
                                  <td><?php echo $sn?></td>
                                  <td><?php echo $rows["fname"]?></td>
                                  <td><?php echo $rows["lname"]?></td>
                                  <td><?php echo $rows["email"]?></td>
                                  <td><?php echo $rows["pass"]?></td>
                                  <td><?php echo $rows["role"]?></td>
                                  <td><?php echo $rows["Contact"]?></td>
                                  <td><?php echo $rows["address"]?></td>
                                  <td><?php echo $rows["carno"]?></td>
                                 
                                  <td><?php echo $rows["lisence"]?></td>
                                  <td>
                                    
                                  <img height="70" width="70" class="rounded rounded-circle" src="../images/<?php echo $rows["lisencepic"]?>"></td>
                                
                                  <td>		<form action="saveinfo.php" method="post">
							<?php
              $output ='';
							$status=$rows['status'];
							if ($status =='Approve') {
							
						$output.='
								<input type="hidden" value="'.$rows["id"].'" name="appid">
							 <button type="submit" name="approve" class="btn-sm" style="background:linear-gradient(to right, #04ACF7 , #13C8D9); border:none; color:white;">'.$status.'</button>';
						
							}
							elseif ($status =='Not Approve') {
								$output.='
								<input type="hidden" value="'.$rows["id"].'" name="appid">
							 <button type="submit" name="notapprove" class="btn-sm" style="background:linear-gradient(to right, #FF0000 , #ff4d4d); border:none; color:white;">'.$status.'</button>
								';
							}
          echo $output;
					
            ?>
            </form>

						</td>
                                                            					
				<td>
        <!-- <a href="viewbatch.php?q=<?php// echo $rows["Batchid"]?>"> -->
       <a href="edit_driver.php?eid=<?php echo $rows["id"]?>">  <p title="Edit" class="fa fa-edit" style="color: black"></p></a>
      <!-- </a> -->
				&nbsp;&nbsp;
				<a href="viewdriver.php?did=<?php echo $rows["id"]?>"> <p title="Delete" class="fa fa-times-circle" style="color: black"></p></a>
        &nbsp;&nbsp;
        <a href="detail.php?eid=<?php echo $rows["id"]?>"><i title="Detail" class="fa fa-info-circle" style="color: black"></i></a>
			</td>
                            <?php $sn++;}
                            }
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



