<?php

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'phplogin3';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if (!isset($_POST['naam'], $_POST['email'], $_POST['adres'], $_POST['stad'], $_POST['postcode'])) {
exit('Regestratie niet compleet!');
}

if (empty($_POST['naam']) || empty($_POST['email']) || empty($_POST['adres']) || empty($_POST['stad']) || empty($_POST['postcode'])) {
exit('Regestratie niet compleet!');
}

if ($stmt = $con->prepare('SELECT ID, email FROM fiethuren WHERE naam = ?')) {

$stmt->bind_param('s', $_POST['naam']);
$stmt->execute();
$stmt->store_result();
    
if ($stmt = $con->prepare('INSERT INTO fiethuren (naam, email, adres, stad, postcode) VALUES (?, ?, ?, ?, ?)')) {
$stmt->bind_param('sssss', $_POST['naam'], $_POST['email'], $_POST['adres'], $_POST['stad'], $_POST['postcode']);
$stmt->execute();
echo 'De fiets huren is succesvol geregistreerd!';
} else {
echo 'Kon geen statement maken!';
}
$stmt->close();
} else {
echo 'Kon geen statement maken!';
}
$con->close();
?>