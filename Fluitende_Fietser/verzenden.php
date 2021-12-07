<?php 
// if(isset($_POST['submit'])){
//     $to = "rongenmylo@gmail.com"; 
//     $from = $_POST['email']; 
//     $first_name = $_POST['txtvoornaam'];
//     $last_name = $_POST['txtachternaam'];
//     $subject = "Form submission";
//     $message = $first_name . " " . $last_name . " schreef het volgende:" . "\n\n" . $_POST['vraag'];

//     if (mail($to, $subject, $message)) {
//         echo "De e-mail was verzonden. Dankjewel! " . $first_name . ", we doen zo snel mogelijk contact opnemen.";
//     } else {
//         echo "Email sending failed...";
//     }
// }


$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'phplogin3';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if (!isset($_POST['txtvoornaam'], $_POST['txtachternaam'], $_POST['email'], $_POST['vraag'])) {
exit('Regestratie niet compleet!');
}

if (empty($_POST['txtvoornaam']) || empty($_POST['txtachternaam']) || empty($_POST['email']) || empty($_POST['vraag'])) {
exit('Regestratie niet compleet!');
}

if ($stmt = $con->prepare('SELECT ID, achternaam FROM verzenden WHERE naam = ?')) {

$stmt->bind_param('s', $_POST['txtvoornaam']);
$stmt->execute();
$stmt->store_result();
    
if ($stmt = $con->prepare('INSERT INTO verzenden (naam, achternaam, email, vraag) VALUES (?, ?, ?, ?)')) {
$stmt->bind_param('ssss', $_POST['txtvoornaam'], $_POST['txtachternaam'], $_POST['email'], $_POST['vraag']);
$stmt->execute();
echo 'Nieuwe rij is aangemaakt ga terug om het te controleren!';
} else {
echo 'Kon geen statement maken!';
}

$stmt->close();
} else {
echo 'Kon geen statement maken!';
}
$con->close();
?>