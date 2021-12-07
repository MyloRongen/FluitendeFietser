<?php

include 'connectie.php';

if( isset($_GET['del']) )
{
$id = $_GET['del'];
$sql = "DELETE FROM fietskopen WHERE id='$id'";
$res = mysqli_query($con, $sql) or die("Failed".mysql_error());
echo "<meta http-equiv='refresh' content='0;url=winkelwagen.php'>";
}
?>