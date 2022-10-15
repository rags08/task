<?php
require_once "db.php";
$standard = $_POST["standard"];

$result = mysqli_query($conn,"SELECT * FROM tbl_sec where standard = ".$standard);
?>
<option value="">Select section</option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row["section"];?>"><?php echo $row["section"];?></option>
<?php
}
?>