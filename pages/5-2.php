<?php
// Hier wordt de code van het bestand header.php ingeladen.
require "../includes/header.php";
?>

<?php
// Hier wordt het bestand ingeladen waarin de code van de navigatie staat.
require "../includes/nav.php";
?>

<section>
<h2>Uitwerking oefening 5.2</h2>


    <article>
    <h3>Taak 1</h3>
    <h3>Inloggen</h3>
    <p>Welkom op mijn website.<br>
    Na correct in te loggen krijgt uw toegang to onze schatkist. Deze is dan voor u om te gebruiken!
    </p>

    <form action="5-2-resultaat.php" method="POST">
    <label for="username">Username: </label>
    <input type="text" name="username"><br><br>

    <label for="password">Password: </label>
    <input type="password" name="password"><br><br>

    <input type="submit" value="verzenden">

    </form>

    <hr>
    </article>

</section>

<?php
// footer
require "../includes/footer.php";
?>


