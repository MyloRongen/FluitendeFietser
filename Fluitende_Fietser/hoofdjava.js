// displayed de timer voor het hoofdmenu.
// Hij pakt de datat van de tijden vervolgens displayed.
function startTime() {
    opengesloten();
    let vandaag = new Date();
    let h = vandaag.getHours();
    let m = vandaag.getMinutes();
    let s = vandaag.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =
    h + ":" + m + ":" + s;
    const t = setTimeout(startTime, 500);
  }
  function checkTime(i) {
    if (i < 10) {i = "0" + i};  
    return i;
  }

function opengesloten() { 

  // Hij kijkt of het dag of nacht is, hij kijkt welke dag het is, hij kijkt welk uur het is en hij kijkt naar de minuten.
  // Vervolgens kijkt die naar dee tijden op de dagen en displayed die of de winkel open of gesloten is.

  const dagofnacht = new Date();
  const dag = dagofnacht.getDay();
  const uren = dagofnacht.getHours();
  const minuut = dagofnacht.getMinutes();

  switch(dag) 
  {
    case 1:
        if (uren > 12 || uren == 12 && minuut > 29) {
          if (uren < 19) {
            document.getElementById("myDIV").innerHTML = 'Open';
          }
          else {
            document.getElementById("myDIV").innerHTML = 'Gesloten';
          }
        }
        else {
          document.getElementById("myDIV").innerHTML = 'Gesloten';
        }
      break;
      case 2:
      case 3:
      case 4:
        if (uren > 8 || uren == 8 && minuut > 29) {
          if (uren < 19) {
            document.getElementById("myDIV").innerHTML = 'Open';
          }
          else {
            document.getElementById("myDIV").innerHTML = 'Gesloten';
          }
        }
        else {
          document.getElementById("myDIV").innerHTML = 'Gesloten';
        }
      break;
      case 5:
        if (uren > 8 || uren == 8 && minuut > 29) {
          if (uren < 20 || uren == 19 && minuut < 31) {
            document.getElementById("myDIV").innerHTML = 'Open';
          }
          else {
            document.getElementById("myDIV").innerHTML = 'Gesloten';
          }
        }
        else {
          document.getElementById("myDIV").innerHTML = 'Gesloten';
        }
      break;
      case 6:
        if (uren > 8) {
          if (uren < 18) {
            document.getElementById("myDIV").innerHTML = 'Open';
          }
          else {
            document.getElementById("myDIV").innerHTML = 'Gesloten';
          }
        }
        else {
          document.getElementById("myDIV").innerHTML = 'Gesloten';
        }
      break;
      default:
        document.getElementById("myDIV").innerHTML = 'Gesloten';
        break;
  }
}