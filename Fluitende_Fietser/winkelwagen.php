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

    <div id="fietsenhuren">
        <h2>Fiet(sen) in de lijst voor kopen →</h2>

        <div id="fietstb">
        <table style="width:90%;">
             <tr>
              <th>Naam</th>
               <th>Prijs</th>
               <th>Verwijderen</th>
             </tr>
    <?php

include 'connectie.php';

$sql = "SELECT ID, naam, prijs from fietskopen";  
$resultaat = $con-> query($sql);

if ($resultaat-> num_rows > 0) {
  while ($row = $resultaat-> fetch_assoc()) {
    echo "<tr><td>" . $row["naam"] . "</td><td>" . $row["prijs"] . "</td><td>" . "<a  href='bestellingweg.php?del=$row[ID]' id='zwart'>Verwijder</a>" . "</td></tr>";
  }
}
else {
  echo "<script type='text/javascript'>alert('0 Fietsen in de winkelwagen!');</script>";
}

echo "</table>";

$con->close();
?>

</div>

</div>

<form action="index2.php" method="post" autocomplete="off">
<input type="submit" value="Bestelling afronden" style="margin-left: 46%"> 
</form>


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