<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=0.5"/>
    <title>Fluitende Fietser</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/overons.css">
    <link rel="stylesheet" href="css/zoek.css">
    <script src="hoofdjava.js"></script>
    <script src="zoeken.js"></script>
    <script src="zoekfunctie.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel = "icon" href ="afb/logo20x20.ico" type = "image/x-icon"> 
</head>
<body id="overonsbody">

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
        <li><a class="active"  href="overons.php">Over ons</a></li>
        <li id="loginnn"><a href="index.php">Login</a></li>
    </ul> 
    </nav>

    <section>

              <div id="uitleg">
                <h2>Over ons</h2>
                <h2>De Fluitende Fietser</h2>

                <p>De Fluitende Fietser is sinds 1960 gevestigd in Nuenen en kent een lange historie met ooit drie vestigingen In de Nuenen, Geldrop en Mierlo. </p>
                <p>Inmiddels worden alle activiteiten van de De Fluitende Fietser voortgezet in de vestiging in Nuenen.</p>
                <p>De kracht van de De Fluitende Fietser? Volop aandacht voor elke klant. </p>
                <p>Een hoog niveau van service en garantie en natuurlijk het bekende, brede assortiment van de meest uiteenlopende fietsproducten en -accessoires.</p>

                <h2>Ons assortiment</h2>

                <p>Bij ons bent u aan het juiste adres voor snelle, efficiënte en directe service, uitstekende reparaties en een grote collectie fietsen, regenkleding, accessoires en onderdelen. </p>
                <p>Het brede assortiment biedt uitsluitend topmerken met een hoge kwaliteit. Ook op het gebied van bedrijfsfietsplannen heeft de De Fluitende Fietser de juiste oplossing, o.a. </p>
                <p>In de vorm van kant en klare lease pakketten. Wij vertegenwoordigen bekende en hoogwaardige merken zoals: </p>
                <p>Gazelle, Cortina, Pegasus, Sensa  Sensa, Popal (kinderfietsen), Dahon (vouwfietsen), Pointer, en Flyke (kinderfietsen).</p>
                <p>Ook op het gebied van elektrische fietsen hebben we uitsluitend topmerken zoals: Flyer, Gazelle, Pegasus en Cortina. </p>
                <p>Door de grote vraag naar 2e hands fietsen zijn wij in staat ongekend hoge inruilprijzen voor uw inruilfiets te bieden. </p>
                <p>Maar ook door inruilacties het gehele jaar door hebben wij altijd een grote collectie 2e hands fietsen in alle prijscategorieeen.</p>

                <p>Onze voordelen</p>

                <h2>Professionele service</h2>

                <p>+ Korte lijnen</p>

                <p>+ Volop aandacht</p>

                <p>+ Scherpe prijzen</p>

                <p>+ Snelle levering</p>

                <p>+ Alleen topkwaliteit</p>
                <p>Tekst afkomstig van https://www.rijwielcentrale.nl/klantenservice/over-ons.</p>
                <img src="afb/historie1.jpg" alt="geschiedenis foto"> <br>
                &nbsp;
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
      <a >© De Fluitende Fietser</a>
      <a></a>
    </div>
</footer>

</body>
</html>