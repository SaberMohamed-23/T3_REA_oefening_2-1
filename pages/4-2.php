




<?php
// Hier wordt de code van het bestand header.php ingeladen.
require "../includes/header.php";
?>

<?php
// Hier wordt het bestand ingeladen waarin de code van de navigatie staat.
require "../includes/nav.php";
?>

<?php
// Hier wordt het bestand ingeladen waarin de code van de functions staat.
require "../includes/functions.php";
?>




<section>
    <article>
     <h2>Uitwerking oefening 4.2</h2>

     <h3>Taak 2 Stoplicht</h3>

     <?php checkTrafficLight($stoplicht, $ambulance_Check);?>
    <hr>
    </article>
    
    <article>
    
    <h3>Taak 3 Weekmenu </h3>
   op maandag eten we <?php showMenu($vandaag_is);?>
   <hr>
    </article> 
   
    <article>
       
        <h3>Taak 4 challenge</h3>
        Geslacht: <?php echo $gender ;?><br>
        Leeftijd: <?php echo $leeftijd ;?><br>
        <?php checkLadiesNight($leeftijd, $gender);?>
    </article>

</section>

<?php
// Footer
require "../includes/footer.php";
?>