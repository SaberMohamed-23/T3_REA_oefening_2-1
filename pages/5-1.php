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
    <h3>Taak 1</h3>
    <h3>Uitschrijfformulier KW1C</h3>
    <hr>

    <form action="5-1-resultaat.php" method="GET">
    <p>Voor en Achternaam :</p> <input type="text" name="voornaam_achternaam" required>

    <p>Student Nummer :</p> <input type="number" name="studentnummer" required><br><br>

    <label for="date_uitschrijving">datum van uitschrijving :</label> <input type="date" name="date_uitschrijving" required><br><br>

    <label for="redenvoor_uitschrijving">Reden voor uitschrijving:</label> 
    <select name=redenvoor_uitschrijving required>
    <option value="ik ga verhuizen">ik ga verhuizen</option>
    <option value="ik wil werken">ik wil werken</option>
    <option value="idk..">idk..</option>
    <option value="ik ben burned out">ik ben burned out</option>
    </select><br><br>

    <label>Leer Jaar:</label> 
    <br> <input type="radio" id="leerjaar1" name="leerjaar" value="1ste leer jaar" required>
    <label for="leerjaar1">1ste jaar</label><br>

    <input type="radio" id="leerjaar2" name="leerjaar" value="2de leer jaar">
    <label for="leerjaar2">2de jaar</label><br>

    <input type="radio" id="leerjaar3" name="leerjaar" value="3de leer jaar">
    <label for="leerjaar3">3de jaar</label><br><br>
    
   
    <p><strong><em>KIES ÉÉN ANTWOORD!</em></strong></p>
    <label for="kiesmbo">Ik wil me aanmelden bij kiesmbo</label>
    <input type="checkbox" id="kiesmbo" name="kiesmbo" value="Ja" >
    <label for="kiesmbo">Ja</label>

    <input type="checkbox" id="kiesmbo" name="kiesmbo" value="Nee">
    <label for="kiesmbo">Nee</label><br>

    <br>

    <label for="delete_user_data">Verwijder all mijn gegevens uit het systeem</label>
    <input type="checkbox"  name="delete_user_data" value="Ja">
    <label for="delete_user_data">Ja</label>
    <input type="checkbox" name="delete_user_data" value="Nee">
    <label for="delete_user_data">Nee</label><br><br>



    <label for="uitleg_uitschrijving">Geef hieronder de reden van je uitschrijving op: </label><br>
    <textarea name="uitleg_uitschrijving" id="uitleg_uitschrijving" rows="4" cols="50"></textarea><br><br>

    <input type="submit" name="submitbutton" value="Verzenden">

    </form>



    <hr>
    </article>

</section>

<?php
// footer
require "../includes/footer.php";
?>


