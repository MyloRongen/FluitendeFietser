<?php
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'phplogin3';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
?>

<!-- Hij maakt eerst connectie met de database.
daarna maakt hij een mysqli connectie 
als de connectie niet correct is dan sluit de connectie zichzelf af en geeft die een error. -->