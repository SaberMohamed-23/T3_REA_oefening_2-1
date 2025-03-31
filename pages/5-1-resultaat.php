<?php
// Hier wordt de code van het bestand header.php ingeladen.
require "../includes/header.php";
?>

<?php
// Hier wordt het bestand ingeladen waarin de code van de navigatie staat.
require "../includes/nav.php";
?>

<section>
<h2>Uitwerking oefening 5.1</h2>


    <article>
    <h3>Taak 2</h3>
    <h3>Uitschrijfformulier KW1C</h3>
    <hr>
    <?php
    
    $voornaam_achternaam = $_GET["voornaam_achternaam"];
    $studentnummer = $_GET["studentnummer"];
    $datum_uitschrijving= $_GET["date_uitschrijving"];
    $redenvoor_uitschrijving = $_GET["redenvoor_uitschrijving"];
    $leerjaar= $_GET["leerjaar"];
    $kiesmbo = $_GET["kiesmbo"];
    $delete_user_data=$_GET["delete_user_data"];
    $uitleg_uitschrijving = $_GET["uitleg_uitschrijving"];
    
    ?>
    <p>Voor en achternaam: <?php echo $voornaam_achternaam; ?><br><br>
        Studentnummer: <?php echo $studentnummer; ?><br><br>
        
        Datum van Uitschrijving: <?php echo $datum_uitschrijving;  ?><br><br>
        Reden voor uitschrijving: <?php echo $redenvoor_uitschrijving;  ?><br><br>
        leer Jaar: <?php echo $leerjaar; ?><br><br>
        Aanmelden voor kiesmbo: <?php echo $kiesmbo;?><br><br>
        Verwijderen gegevens: <?php echo $delete_user_data; ?><br><br>
        Reden voor uitschrijving:<br>
        <?php echo $uitleg_uitschrijving?>
    </p>

    <hr>
    </article>

</section>

<?php
// footer
require "../includes/footer.php";
?>


