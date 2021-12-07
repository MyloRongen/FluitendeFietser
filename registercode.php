	<?php

include 'connectie.php';

if (!isset($_POST['username'], $_POST['password'], $_POST['email'])) {
	exit('Registratie niet compleet!');
}

if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])) {
	exit('Registratie niet compleet!');
}

// Kijkt of de invoer velden niet leeg zijn.

if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')) {

	// Doet een statement voorbereiden

	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();

	// Maakt een parameter van de gebruikersnaam.

	if ($stmt->num_rows > 0) {
		echo 'gebruikersnaam bestaat al, kies een andere!';
		// Als de gebruikersnaam overeen komt krijg je een melding dat die al bestond.
	} else {
	
		
if ($stmt = $con->prepare('INSERT INTO accounts (username, password, email) VALUES (?, ?, ?)')) {

	// Doet nog een statement voorbereiden

	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

	// Hij doet de value van het wachtwoord hashen met bcrypt wat redelijk oud is maar nog goed werkt.

	$stmt->bind_param('sss', $_POST['username'], $password, $_POST['email']);

	// Vervolgens bind die alle ites dus gebruikersnaam, wachtwoord en de e-mail in een statement als parameter.

	$stmt->execute();

	// Hier wordt de statement uitgevoerd

	echo 'Je bent succesvol geregistreerd, je kunt nu inloggen';
} else {
	echo 'Kon geen statement maken!';
}
	}
	$stmt->close();

	// Hier wordt de statement afgesloten

} else {
	echo 'Kon geen statement maken!';
}
$con->close();

// Hier wordt de connectie afgesloten voor veiligheid.
?>
