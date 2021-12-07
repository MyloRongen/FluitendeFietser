<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=0.5"/>
    <title>Fluitende Fietser</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/login.css">
    <script src="hoofdjava.js"></script>
    <script src="zoeken.js"></script>
    <script src="zoekfunctie.js"></script>
    <link rel="stylesheet" href="css/zoek.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.27/moment-timezone-with-data-10-year-range.min.js"></script>
    <link rel = "icon" href ="afb/logo20x20.ico" type = "image/x-icon"> 
</head>
<body id="index">

    <header>
      <div id="headerpagina" >
              <h1 class="paddingl" id="groter">De Fluitende Fietser</h1>  
            <div class="paddingr" id="header2">     
              <input id="zoeken" type="text" onkeyup="zoekfunctie()" name="Zoeken" placeholder="Zoeken..." size="50">
              <img id="zoekimg" src="afb/zoek.png" alt="zoeken" onclick="changedata();" style="width:100px;height:50px;"/>
              <a href="winkelwagen.php"><img id="winkelwagen" src="afb/winkelwagen.png" alt="winkelwagen" style="width: 75px;height:50px;"/></a>
              &nbsp &nbsp
              <img src="afb/logot.png" id="size2">
            </div>
          </div>
          <div id="zoeklijst">
              <ul id="myUL">
              <li><a href="fietsen.php">Fietsen</a></li> <br>

              <li><a href="fietsenverhuur.php">Fietsenverhuur</a></li> <br>
              <li><a href="contact.php">Contact</a></li> <br>

              <li><a href="openingstijden.php">Openingstijden</a></li> <br>
              <li><a href="overons.php">Over ons</a></li> <br>

              <li><a href="https://www.bovag.nl/BovagWebsite/media/BovagMediaFiles/Downloads/Garantie%20en%20voorwaarden/Algemene-voorwaarden-BOVAG-tweewielerbedrijven-april-2018.pdf">Algemene voorwaarden</a></li> <br>
              <li><a href="index2.php">Home</a></li> <br>
            </ul>
            </div>
    </header>

    <nav>
    <ul>
        <li class="paddingl"><a href="index2.php">Home</a></li>
        <li><a href="fietsen.php">Fietsverkoop</a></li>
        <li><a href="fietsenverhuur.php">Fietsverhuur</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="openingstijden.php">Openingstijden</a></li>
        <li><a href="overons.php">Over ons</a></li>
        <li id="loginnn"><a class="active"  href="index.php">Login</a></li>
    </ul> 
    </nav>

    <section>
    	
    <?php
    session_start();
    
    include 'connectie.php';

    if (!isset($_POST['username'], $_POST['password']) ) {
	exit('Vul de gebruikersnaam en het wachtwoord in!');
	}

	$mysqli = new mysqli("localhost", "root", "", "phplogin3");

  // Hij maakt een nieuwe mysqli aan.

    if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')) {

      //Hij doet de connectie preparen.

	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();

	if ($stmt->num_rows > 0) {
		$stmt->bind_result($id, $password);
		$stmt->fetch();
		
		if (password_verify($_POST['password'], $password)) {
      // Password verify verifies of het wachtwoord overeen komt met de hash.

			session_regenerate_id();

      // Session regenerate zorgt ervoor dat de sessie wordt geupdated en dat er een nieuwe wordt aangemaakt.

			$_SESSION['loggedin'] = TRUE;
			$_SESSION['name'] = $_POST['username'];
			$_SESSION['id'] = $id;

      // Als alles correct is gegaan krijg je een melding met ingelogd met daaronder de administratie beheer.

			echo "<script type='text/javascript'>alert('Ingelogd :)');</script>";
			echo 'Welkom ' . $_SESSION['name'] . '!';
      echo '<br>';
      echo '<br>';
      echo '<br>';
			echo '<a id="blauw" href="administratie.php">Product huren toevoegen</a> <br>';
      echo '<br>';
      echo '<br>';
      echo '<a id="blauw" href="bestellijstbeheer.php">Bestellijst bekijken</a> <br>';
      echo '<br>';
      echo '<br>';
      echo '<a id="blauw" href="mails.php">E-mails bekijken</a>';
		} else {
			echo 'Incorrect wachtwoord of gebruikersnaam!';
		}
	} else {
		echo 'Incorrect wachtwoord of gebruikersnaam!';
	}

	$stmt->close();
}
?>

  </section>

  <footer>
  <div class="margint" id="div2">
    <div class="paddingl" id="divcolumn">
      <a id="groottetussenkopf">De Fluitende Fietser</a>
      <a href="register.php"><img src="afb/logot.png" id="size3"></a>
    </div>
    <div id="divcolumn">
      <a id="groottetussenkopf">Navigatie</a>
      <a href="index2.php">Home</a> 
      <a href="fietsen.php">Fietsverkoop</a> 
      <a href="fietsenverhuur.php">Fietsverhuur</a>
    </div>
    <div id="divcolumn">
      <a id="groottetussenkopf">Algemeen</a>
      <a href="contact.php">Contact</a>
      <a href="openingstijden.php">Openingstijden</a>
      <a href="overons.php">Over ons</a>
    </div>
    <div id="divcolumn">
      <a id="groottetussenkopf">Info</a>
      <a href="contact.php">Contact info</a>
      <a href="https://www.bovag.nl/BovagWebsite/media/BovagMediaFiles/Downloads/Garantie%20en%20voorwaarden/Algemene-voorwaarden-BOVAG-tweewielerbedrijven-april-2018.pdf">Algemene voorwaarden</a>
      <a>info@fluitendefietser.nl</a>
    </div>
    <div class="paddingr">
      <a href="#" class="fa fa-instagram" target="blank"></a>
      <a href="#" class="fa fa-twitter" target="blank"></a>
      <a href="https://www.facebook.com/fietsmagazine" class="fa fa-facebook" target="blank"></a>
    </div>
  </div>
    <div class="paddingr" id="div4">
      <a>Nederland</a>
      <a>KVK: 88599665 | BTW NL999888492Z09</a>
      <a >© De Fluitende Fietser</a>
      <a></a>
    </div>
</footer>

</body>
</html>