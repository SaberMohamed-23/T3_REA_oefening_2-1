<?php
/*
Author:     Saber Mohamed
Date:       maart 2025

Subject:    T3 REA oef 4.2 en 4.3 functions
*/

// oefening 4 taak 2
function checkTrafficLight($kleur, $ambulance)
{
        if ($ambulance == "ja") 
        {
        echo "stop er komt een ambulance aan";
        }
        elseif ($kleur == "rood" || $kleur == "oranje") 
        {
            echo "Stop, het stoplicht is " . $kleur;
        }
        else 
        {
            echo "U mag doorrijden, het stoplicht is groen";
        }
    
        
}

   

// taak 3

function showMenu($dag){
    switch ($dag)
    {
        case "maandag":
            echo "macaroni met kaas en kip";
            break;
        case "dinsdag":
            echo "rijst met vlees en brocoli";
            break;
         case "woensdag":
            echo "taart met cola";
            break;
        case "donderdag":
            echo "chicken wafels";
             break;
        case "vrijdag":
             echo "pannenkoeken met siroop";
             break;
        case "zaterdag":
            echo "pizza";
            break;
        case "zondag":
            echo "tomaat salade";
            break;
        default: 
        echo "onbekend";
    }
}


// taak challenge

function checkLadiesNight($age, $sex)
{
    if($sex == "vrouw" && $age >=18 || $age >= 70)
    {
        echo "U heeft gratis entree";
    }
    else
    {
        echo "Uw mag niet naar binnen";
    }
}



// oefening 4.3 taak 3
function calculateInterest($price, $saved)
{
    $counter = 0;
    $maand = 1;
    $rente = 1.06;
    while ($saved < $price)
    {
        $counter++; 
        $saved *= $rente;
        echo "maand nr ". $maand++ .": ".round($saved, 2). "<br>";
    }
    $wat_overblijft = round($saved - $price, 2);

    echo "je kan na ".$counter." maanden de auto kopen.<br><br>";
    echo "als je de auto koopt hou je nog €$wat_overblijft over";

}





//taak 4 creat piramide

function createpiramide($height)
{
    
    //outerloop
    for($i= 0; $i <= $height; $i++)
    {
        // innerloop
        for($j=0; $j <= $i; $j++ )
        {
             echo $j;
        }
        echo "<br>";

    }

    
      //outerloop
      for($i= $height; $i >= 0; $i--)
      {
          // innerloop
          for($j=0; $j <= $i; $j++ )
          {
               echo $j;
          }
          echo "<br>";
  
        }


}

?>
