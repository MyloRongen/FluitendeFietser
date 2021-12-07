<?php

include 'connectie.php';

if ($stmt = $con->prepare('SELECT ID FROM fietskopen WHERE naam = ?')) {

$stmt->bind_param('s', $_POST['naam']);
$stmt->execute();
$stmt->store_result();
    
if ($stmt = $con->prepare('INSERT INTO fietskopen (naam, prijs) VALUES (?, ?)')) {
$stmt->bind_param('ss', $_POST['naam'], $_POST['prijs']);
$stmt->execute();
echo 'De fiets is succesvol in de winkelwagen geplaatst!';
} else {
echo 'Kon geen statement maken!';
}

$stmt->close();
} else {
echo 'Kon geen statement maken!';
}
$con->close();
?>