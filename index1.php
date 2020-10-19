<?php
require_once "connection/connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Country</title>
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<!-- Styles -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<style>
	
html, body {
background-color: #fff;
color: #636b6f;
font-family: 'Nunito', sans-serif;
font-weight: 200;
height: 100vh;
margin: 0;
}
.full-height {
height: 100vh;
}
.flex-center {
align-items: center;
display: flex;
justify-content: center;
}
.position-ref {
position: relative;
}
.top-right {
position: absolute;
right: 10px;
top: 18px;
}
.content {
text-align: center;
}
.title {
font-size: 84px;
}
.links > a {
color: #636b6f;
padding: 0 25px;
font-size: 13px;
font-weight: 600;
letter-spacing: .1rem;
text-decoration: none;
text-transform: uppercase;
}
.m-b-md {
margin-bottom: 30px;
}
</style>
</head>
<body>
<div class="container mt-5">
<div class="row">
<div class="card">
<div class="card-header">
<h2 class="text-success">Country</h2>
</div>
<div class="card-body">
<form>
<div class="form-group">
<label for="country">Country</label>
<select class="form-control js-example-disabled-results" id="country-dropdown">
<option value="">Select Country</option>
<?php

$result = mysqli_query($con,"SELECT * FROM country");
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row['id'];?>"><?php echo $row["name"];?></option>
<?php
}
?>
</select>
</div>
<div class="form-group">
<label for="city">City</label>
<select class="form-control js-example-disabled-results" id="city-dropdown">
</select>
</div>
	<div class="form-group">
<label for="places">Places</label>
<select class="form-control js-example-disabled-results" id="places-dropdown">
</select>
</div> 

</div>
</div>
</div>
</div> 
</div>
<script>
	var $disabledResults = $(".js-example-disabled-results");
$disabledResults.select2();
$(document).ready(function() {
$('#country-dropdown').on('change', function() {
var country_id = this.value;
$.ajax({
url: "state-country.php",
type: "POST",
data: {
country_id: country_id
},
cache: false,
success: function(result){
$("#city-dropdown").html(result);
$('#places-dropdown').html('<option value="">Select City First</option>'); 
}
});
});    
$('#city-dropdown').on('change', function() {
var place_id = this.value;
$.ajax({
url: "city-state.php",
type: "POST",
data: {
place_id: place_id
},
cache: false,
success: function(result){
$("#places-dropdown").html(result);
}
});
});
});
</script>
</body>
</html>