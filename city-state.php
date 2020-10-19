<?php
require_once "connection/connect.php";
$place_id = $_POST["place_id"];
$result = mysqli_query($con,"SELECT * FROM places where city_id = $place_id");
?>
<option value="">Select Place</option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row["id"];?>"><?php echo $row["name"];?></option>
<?php
}
?>