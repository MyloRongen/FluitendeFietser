function zoekfunctie() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("zoeken");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}

//Hij collecteerd eerst alle data.

//Dan maakt die een for loop om er telkens door heen te gaan of er veranderingen zijn.

//Vervolgens pakt die de data van de woorden die in de table staan. Als die overeen komt met een van de letters ook wel touppercase dan krijg je te zien welke het meest overeen komt ook wel indexof(filter).
// Die moet dan hoger zijn dan -1 om een de dichtbij zijnde woorden te displayen.

//Anders displayed die geen voorbeelden.
