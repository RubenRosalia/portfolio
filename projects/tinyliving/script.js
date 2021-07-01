window.onload = function WelkomsTekst() 
{
    var Vandaag = new Date()
    var Tijd = Vandaag.getHours()

    if (Tijd < 12) {
        document.getElementById("WelkomTekst").innerHTML = ('Goedenmorgen Meneer/Mevrouw!')
    } else if (Tijd < 18) {
        document.getElementById("WelkomTekst").innerHTML = ('Goedenmiddag Meneer/Mevrouw!')
    } else {
        document.getElementById("WelkomTekst").innerHTML = ('Goedenavond Meneer/Mevrouw!')
    }
}

jQuery(document).ready(function($) {

    //open popup
    $("a").click(function(e) {

        let idClicked = e.target.id;
        id = idClicked.slice(-1);

        if (id == 1) {
            url = "vervolg.html"
        }
        if (id == 2) {
            url = "vervolg2.html"
        }
        if (id == 3) {
            url = "vervolg3.html"
        }
        if (id == 4) {
            url = "vervolg4.html"
        }

        console.log(id)
        console.log(idClicked)
        console.log(url)

        $('.cd-popup').addClass('is-visible');
        $("#TinyHouseImage_Click_0").attr("src", "./afbeeldingen/" + idClicked + ".jpg");
        $("#TinyHouseImage_Click_1").attr("src", "./afbeeldingen/" + idClicked + "_1.jpg");
        $("#TinyHouseImage_Click_2").attr("src", "./afbeeldingen/" + idClicked + "_2.jpg");
        $("#url").attr("href", url);

    });

    //close popup
    $('.cd-popup').on('click', function(event) {
        if ($(event.target).is('.cd-popup-close') || $(event.target).is('.cd-popup')) {
            event.preventDefault();
            $(this).removeClass('is-visible');
        }
    });
    //close popup when clicking the esc keyboard button
    $(document).keyup(function(event) {
        if (event.which == '27') {
            $('.cd-popup').removeClass('is-visible');
        }
    });
});