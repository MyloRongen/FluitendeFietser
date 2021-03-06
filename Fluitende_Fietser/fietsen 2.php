<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=0.5"/>
    <title>Fluitende Fietser</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/fietsen.css">
    <link rel="stylesheet" href="css/zoek.css">
    <script src="hoofdjava.js"></script>
    <script src="afbeeldingen.js"></script>
    <script src="zoeken.js"></script>
    <script src="zoekfunctie.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel = "icon" href ="afb/logo20x20.ico" type = "image/x-icon"> 
</head>
<body id="fietsen">

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
      <li><a class="active" href="fietsen.php">Fietsverkoop</a></li>
      <li><a href="fietsenverhuur.php">Fietsverhuur</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="openingstijden.php">Openingstijden</a></li>
      <li><a href="overons.php">Over ons</a></li>
      <li id="loginnn"><a href="index.php">Login</a></li>
    </ul> 
    </nav>

    <section>

        <div id="fietsenafb2">
            <figure>
            <figcaption id="figlaag">Gazelle CityGo C7</figcaption>
            <a><img id="a11" src="afb/fietsen/4.jpg" onclick="afb1();"></a>
            </figure>
    
          <div id="gegevensfiets">
          <h2 id="h2fiets">Gegevens fiets:</h2>

          <form action="fietskopen.php" method="post" autocomplete="off">
          <table id="tablesize2">
            <tr>
              <td>id</td>
              <td>4</td>
            </tr>
            <tr>
              <td>naam</td>
              <td>Gazelle CityGo C7</td>
            </tr>
            <tr>
              <td>elektrisch</td>
              <td>niet elektrisch</td>
            </tr>
            <tr>
              <td>prive zakelijk beide</td>
              <td>geschikt voor zakelijk en prive</td>
            </tr>
            <tr>
              <td>dames, heren, kind</td>
              <td>heren</td>
            </tr>
            <tr>
              <td>stad transport oma vouw hybride</td>
              <td>stads</td>
            </tr>
            <tr>
              <td>merk</td>
              <td>Gazelle</td>
            </tr>
            <tr>
              <td>nieuw 2e hands</td>
              <td>nieuw</td>
            </tr>
            <tr>
              <td>kleur(en)</td>
              <td>meerdere</td>
            </tr>
            <tr>
              <td>prijs</td>
              <td>679,00</td>
            </tr>
            <tr>
              <td>opmerkingen</td>
              <td>wielmaat 28 inches</td>
            </tr>
          </table>     
          <input type="submit" id="buttonkopen" value="Kopen">

          <input type="hidden" name="naam" id="naam" value="Gazelle CityGo C7">
          <input type="hidden" name="prijs" id="prijs" value="679,00">
          </form>
        </div>
        </div>

        

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
      <a >?? De Fluitende Fietser</a>
      <a></a>
    </div>
</footer>

</body>
</html>