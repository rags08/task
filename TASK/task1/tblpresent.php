<?php
require_once "db.php";
$section = $_POST["section"];
$standard = $_POST["standard"];
//  echo "SELECT * FROM tbl_atten where standard = ".$standard." and section = '".$section."'";

$result = mysqli_query($conn,"SELECT * FROM tbl_atten where standard = ".$standard." and section = '".$section."'" );


?>
<?php
while($row = mysqli_fetch_array($result)) {
?>

<style>
    table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  padding:10px;
}
</style>
<table class="tablaClientes" >
    <tr>
        <th>standard</th>
        <th>section</th>
        <th>present</th>
    </tr>
    <tr>
<td><?php echo $row["standard"];?></td>
<td><?php echo $row["section"];?></td>
<td><?php echo $row["present"];?></td>
</table>
<?php
}
?>