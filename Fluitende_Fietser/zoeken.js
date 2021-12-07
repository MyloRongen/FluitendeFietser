var zoeken = 0;
function changedata()
{
    if (zoeken == 0)
    {
        document.getElementById("zoeken").style.visibility = "visible";
        document.getElementById("zoeklijst").style.display = "block";
        document.getElementById("zoeklijst").style.paddingLeft = "55%";
        zoeken = 1;
    }
    else {
        document.getElementById("zoeken").style.visibility = "hidden";
        document.getElementById("zoeklijst").style.display = "none";
        zoeken = 0;
    }
}


// Als er op geklikt wordt dan komt de lu te voorschijnt.

// Als er nog een keer op geklikt wordt gaat de zoekbalk weg.