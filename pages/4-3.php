




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
     <h2>Uitwerking oefening 4.3</h2>

     <h3>Taak 2 Unix-Time</h3>
        <p><?php echo "we zijn nu " .time(). " seconden verder since JAN 01 1970!"; ?><p/>

   

    <hr>
    </article>
    
    <article>
    
    <h3>Taak 3 rente berekenen </h3>
    <p>Ik ga met een while-loop uitrekenen hoeveel rente ik moet betalen</p>
    <?php 
    $prijs = 4000;
    $gespaard = 3000;
    $rente = 1.06;
    echo "Auto kost: €".$prijs."<br>";
    echo "Je hebt gespaard: €".$gespaard."<br>";
    echo "Rente is: $gespaard * $rente.<br><br>";
    echo calculateInterest($prijs, $gespaard); 
    ?>
   <hr>
    </article> 
   
    <article>
       
        <h3>Taak 4 Piramide</h3>
        <?php 
        $hoogte = 6;
        echo createpiramide($hoogte); 
        ?>
    </article>

</section>

<?php
// Footer
require "../includes/footer.php";
?>