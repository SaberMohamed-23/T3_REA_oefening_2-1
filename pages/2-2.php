<?php
// Hier wordt de code van het bestand header.php ingeladen.
require "../includes/header.php";
?>

<?php
// Hier wordt het bestand ingeladen waarin de code van de navigatie staat.
require "../includes/nav.php";
?>

<section>

    <?php
    echo "<h2>Uitwerking 2.2</h2>";
    ?>

    <img class="brand"
        src="../images/brand-la.jpg" 
        alt="Brand-LA" 
        width="400px"
    >

    <article>
        <?php
        echo "<h2>Meer dan 14.000 hulpverleners bij brand LA, hulp uit Mexico en Canada</h2>";
        echo "<p>Bij de hevige natuurbranden in en bij de Amerikaanse stad Los Angeles zijn volgens gouverneur Newsom meer dan" . "<br>" .
            "14.000 hulpverleners bezig om het vuur onder controle te krijgen. In totaal hebben negen andere Amerikaanse staten hulp" . "<br>" .
            "gestuurd naar Californië, maar er komt ook hulp uit internationale hoek." . "<br>" .
            "Mexico heeft meer dan 70 brandweerlieden en andere hulpverleners naar LA gestuurd. Canada heeft, naast blusvoertuigen," . "<br>" .
            "ook 250 brandweerlieden naar het buurland gestuurd. \"Aan onze Amerikaanse vrienden: Canada is hier om te helpen\"," . "<br>" .
            "schreef de Canadese premier Trudeau deze week op X.</p>";
        ?>
    </article>

</section>

<?php
// footer
require "../includes/footer.php";
?>


