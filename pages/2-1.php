




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
        <?php
        // PHP uitleg weergeven binnen een p-element
        echo "<h2>Wat is PHP?</h2>";
        echo "<p>PHP is een server-side programmeertaal die draait op een webserver. Het wordt vaak gebruikt voor het maken van dynamische websites en webapplicaties. 
        PHP kan communiceren met een database om gegevens op te halen en te verwerken. De client (de gebruiker) ziet alleen de uiteindelijke HTML-uitvoer in de browser, 
        terwijl de PHP-code op de server wordt uitgevoerd.</p>";
        ?>
        <hr>
    </article>

    <article>
        <?php
        // Git & GitHub uitleg
        echo "<h2>Git & GitHub</h2>";
        echo "<p>Git is een versiebeheersysteem waarmee je wijzigingen in code kunt bijhouden. Je kunt wijzigingen opslaan met een commit en deze naar een online 
        repository sturen met een push. 
        Met GitHub kun je deze repositories online opslaan en delen. Je kunt een project kopiëren met een clone-commando om lokaal aan de slag te gaan.</p>";
        ?>
    </article>
</section>

<?php
// Footer
require "../includes/footer.php";
?>
