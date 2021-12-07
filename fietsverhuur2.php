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
    <link rel="stylesheet" href="css/fietsverhuur2.css">
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
      <li><a href="fietsen.php">Fietsverkoop</a></li>
      <li><a class="active" href="fietsenverhuur.php">Fietsverhuur</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="openingstijden.php">Openingstijden</a></li>
      <li><a href="overons.php">Over ons</a></li>
      <li id="loginnn"><a href="index.php">Login</a></li>
    </ul> 
    </nav>

    <section>

        	

        <div id="fietsenafb2">
    
          <div id="gegevensfiets">
          <h2 class="fiets">Product huren</h2>
                <form action="posten.php" method="post" autocomplete="off">
                <Table class="fietstable" width="90%">
                <tr>
                    <td>
                    <label for="naam">
                    Naam:
                    </label>
                    </td>
                    <td>
                    <input type="text" name="naam" placeholder="Naam" id="naam" size="81" required> <br>
                    </td>
                    </tr>
                    <tr>
                    <td>
                    <label for="email">
                    E-mail:
                    </label>
                    </td>
                    <td>
                    <input type="text" name="email" placeholder="Email" id="email" size="81" required> <br>
                    </td>
                    </tr>
                    <tr>
                    <td>
                    <label for="adres">
                    Adres:
                    </label>
                    </td>
                    <td>
                    <input type="text" name="adres" placeholder="Adres" id="adres" size="81" required> <br>
                    </td>
                    </tr>
                    <tr>
                    <td>
                    <label for="stad">
                    Stad:
                    </label>
                    </td>
                    <td>
                    <input type="text" name="stad" placeholder="Stad" id="stad" size="81" required> <br>
                    </td>
                    </tr>
                    <tr>
                    <td>
                    <label for="postcode">
                    Postcode:
                    </label>
                    </td>
                    <td>
                    <input type="text" name="postcode" placeholder="Postcode" size="81" id="postcode" required> <br>
                    </td>
                    </tr>
                    <tr>
                    <td>
                    <p><P>
                    </td>
                    <td>
                    <input type="submit" value="Huren"  style="width: 96.3%">
                    </td>
                    </tr>
                    </Table>
                </form>
            </div>

            <div>

            <?php       
          $sql = "SELECT Fiets, Prijs, huren from tabelfiets WHERE ";
          $idfound = false;
          foreach( $_POST as $id ) {
            $sql .= " id=$id OR";  
            $idfound = true;                  
          }
          if($idfound)
          {
            // echo $sql."<br>";
            $sql = substr($sql, 0, -2);

            //Hij maakt een loop door alle ids heen. Als er 1 id wordt gevonden ga je verder naar de de volgende pagina.
            // Vervolgens haalt die de laatste 2 letters weg OR.

            include 'connectie.php';
            
            // echo $sql;
            $resultaat = $con-> query($sql);
            ?>
            <table width="40%" id="backcolor">
            <?php
            if ($resultaat-> num_rows > 0) {
              while ($row = $resultaat-> fetch_assoc()) {
                ?>
                  <tr>
                    <td> <?php echo $row["Fiets"];?> </td>
                    <td> <?php echo $row["Prijs"];?> </td>
                    <td>
                    
                    <?php echo $row["huren"];?>
                    </td>
                  </tr>
                <?php
              }
            }
            ?>
            </table>
            <?php
          }
          else {
            echo "<script>
            alert('Geen checkboxes aangevinkt');
		        window.location.href='fietsenverhuur.php';
	          </script>";
          }
         
          ?>
              <a><img id="a11" src="afb/fietsen/3.jpg"></a>
            </div>
            
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
      <a >© De Fluitende Fietser</a>
      <a></a>
    </div>
</footer>

</body>
</html>