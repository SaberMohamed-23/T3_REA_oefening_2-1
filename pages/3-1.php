<?php
$feest = "carnival";
$drie = 3;
$feestdagen = "Zondag Maandag en Dinsdag";
$vastijd = 40;
$land = "nederland";
$provincie = "Noord-Brabant";
$feest_eten = "Worstenbrood koffie Schrobbeler";

$story = ucfirst($feest) . " is van oorsprong een gekerstend heidens volksfeest. Het duurt officieel $drie dagen, $feestdagen direct 
voorafgaand aan de vastentijd van $vastijd dagen. 
Carnaval is bij uitstek het feest van zotheid, spot en 
uitbundigheid. Inmiddels is het in verschillende plaatsen door heel " . ucfirst($land) . " een 
gebruik om carnaval op carnavalsvrijdag te openen. Op Aswoensdag wordt carnaval afgesloten, 
maar de tradities verschillen per regio. In het overgrote deel van $provincie wordt er afgesloten 
met $feest_eten, soms met een Brabantse koffietafel.";

$bon1 = 17.99;
$bon2 = 23.55;
$bon3 = 33.25;
$euro = "€";

$totaalZonderFooi = $bon1 + $bon2 + $bon3;
$tegoedbonMin = $totaalZonderFooi - 50;

$fooi = $tegoedbonMin * 0.1;
$fooi = round($fooi, 2);

$totaalBedrag = $totaalZonderFooi + $fooi;
$verdelen = $tegoedbonMin / 3;
$verdelen = round($verdelen, 2);
?>

<?php
// Hier wordt de code van het bestand header.php ingeladen.
require "../includes/header.php";
?>

<?php
// Hier wordt het bestand ingeladen waarin de code van de navigatie staat.
require "../includes/nav.php";
?>

<section>
    <article>
        <h2>Opdracht 3.1</h2>
        <h3 class="h2">Taak 1</h3>
        <p class="story"><?php echo $story; ?></p>
        <hr>
    </article>

    <article>
        <h2 class="h2">Rekenen taak 2</h2>
        <p class="story">
            <?php echo "bon 1: " . $bon1 . $euro . "<br>" . "bon 2: " . $bon2 . $euro . "<br>" . "bon 3: " . $bon3 . $euro; ?><br>
            plus 10% fooi: <?php echo $fooi . $euro; ?><br>
            Totaal bedrag min 50 euro tegoedbon: <?php echo $tegoedbonMin . $euro; ?><br>
        </p>
        <hr>
    </article>

    <article>
        <h3>Challenge</h3>
        <p>Kosten per persoon: <?php echo $verdelen . $euro; ?></p>
    </article>
</section>

<?php
// Footer
require "../includes/footer.php";
?>