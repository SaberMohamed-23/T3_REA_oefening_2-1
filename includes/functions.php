<?php
/*
Author:     Saber Mohamed
Date:       maart 2025

Subject:    T3 REA oef 4.2 en 4.3 functions
*/

// oefening 4 taak 2
function checkTrafficLight($kleur, $ambulance)
{
    if ($kleur == "rood" || $kleur == "oranje") 
    {
        if ($ambulance == "ja") 
        {
            echo "Stop, er komt een ambulance aan";
        }
        else 
        {
            echo "Stop, het stoplicht is " . $kleur;
        }
    }
    else 
    {
        echo "U mag doorrijden, het stoplicht is groen";
    }
}

$ambulance_Check = "nee"; 
$stoplicht = "groen";   

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

$vandaag_is = "maandag";


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

$leeftijd = 10;
$gender = "alien";

?>
