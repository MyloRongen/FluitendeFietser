<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=0.5"/>
    <title>Fluitende Fietser</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/zoek.css">
    <script src="hoofdjava.js"></script>
    <script src="zoeken.js"></script>
    <script src="zoekfunctie.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel = "icon" href ="afb/logo20x20.ico" type = "image/x-icon"> 
</head>
<body id="contact">

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
        <li><a class="active"  href="contact.php">Contact</a></li>
        <li><a href="openingstijden.php">Openingstijden</a></li>
        <li><a href="overons.php">Over ons</a></li>
        <li id="loginnn"><a href="index.php">Login</a></li>
    </ul> 
    </nav>

  <section>

    <form action="verzenden.php" method="POST">
      <div id="form">
        <label id="voor" for="txtvoornaam">Voornaam:</label>
        <input type="text" id="txtvoornaam" name="txtvoornaam" size="50"><br><br>
        <label id="achter" for="txtachternaam">Achternaam:</label>
        <input type="text" id="txtachternaam" name="txtachternaam" size="50"><br><br>
        <label id="emaillbl" for="email">E-mail:</label>
        <input type="email" id="email" name="email" size="50" required><br><br>
        <label id="vraaglbl" for="vraag">Uw vraag:</label>
        <input type="text" id="vraag" name="vraag" size="50"><br><br>
        <input id="submit" name="submit" type="submit">
        <p id="niks"></p>
      </div>
    </form>
    <p></p>

  </section>

  <footer>
  <div class="margint" id="div2">
    <div class="paddingl" id="divcolumn">
      <a id="groottetussenkopf">De Fluitende Fietser</a>
      <img src="afb/logot.png" id="size3">
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


