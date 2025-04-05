<?php
// Hier wordt de code van het bestand header.php ingeladen.
require "../includes/header.php";
?>

<?php
// Hier wordt het bestand ingeladen waarin de code van de navigatie staat.
require "../includes/nav.php";
?>

<section>
    <h2>Uitwerking oefening 6.2</h2>

    <article>
        <h3>Taak 1</h3>

        <form id="gameFrm" method="GET" action="6-2.php">
            <div class="float">
                <input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="rock">
                <img class="R_P_S" src="../images/rock.jpg">
            </div>

            <div class="float">
                <input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="paper">
                <img class="R_P_S" src="../images/paper.jpg">
            </div>

            <div class="float">
                <input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="scissors">
                <img class="R_P_S" src="../images/scissors.jpg">
            </div>
        </form>

        <?php
        // Variabelen resultaat
        $jij_wint = "Jij Wint";
        $compwins = "computer wins";
        $gelijkspel = "Gelijkspel";

        if (isset($_GET['keuze'])) {
            echo "Jij koos: <img class='R_P_S' src='../images/{$_GET['keuze']}.jpg'>";

            // Keuze computer? Random getal tussen 0 en 2
            $opties = array("rock", "paper", "scissors");
            $computerkeuzegetal = rand(0, 2);
            $computerkeuze = $opties[$computerkeuzegetal];

            echo "&nbsp;&nbsp;De computer koos: <img class='R_P_S' src='../images/{$computerkeuze}.jpg'>";

            if ($_GET["keuze"] === "paper") {
                switch ($computerkeuze) {
                    case ($opties[1]):
                        $result = $gelijkspel;
                        echo "<p class='resultaat'>$gelijkspel</p>";
                        break;
                    case ($opties[0]):
                        $result = $jij_wint;
                        echo "<p class='resultaat'>$jij_wint</p>";
                        break;
                    case ($opties[2]):
                        $result = $compwins;
                        echo "<p class='resultaat'>$compwins</p>";
                        break;
                    default:
                        echo "kies iets";
                }
            } elseif ($_GET["keuze"] === "rock") {
                switch ($computerkeuze) {
                    case ($opties[1]):
                        $result = $compwins;
                        echo "<p class='resultaat'>$compwins</p>";
                        break;
                    case ($opties[0]):
                        $result = $gelijkspel;
                        echo "<p class='resultaat'>$gelijkspel</p>";
                        break;
                    case ($opties[2]):
                        $result = $jij_wint;
                        echo "<p class='resultaat'>$jij_wint</p>";
                        break;
                    default:
                        echo "kies iets";
                }
            } elseif ($_GET["keuze"] === "scissors") {
                switch ($computerkeuze) {
                    case ($opties[1]):
                        $result = $jij_wint;
                        echo "<p class='resultaat'>$jij_wint</p>";
                        break;
                    case ($opties[0]):
                        $result = $compwins;
                        echo "<p class='resultaat'>$compwins</p>";
                        break;
                    case ($opties[2]):
                       $result = $gelijkspel;
                        echo "<p class='resultaat'>$gelijkspel</p>";
                        break;
                    default:
                        echo "kies iets";
                }
            }


                   
        session_start();

        $_SESSION["user1"] = 0;
        $_SESSION["user2"] = 0;
        $score_jij= $_SESSION["user1"];
        $score_comp =$_SESSION["user2"];
       
        if($result == $jij_wint)
        {
            $score_jij = $_SESSION["user1"];
            
            for($i = 0; $i <=1; $i++)
            {
                $score_jij += $i;
            }
        }
        elseif($result ==  $compwins)
        {
            $score_comp = $_SESSION["user2"];
            
            for($i = 0; $i <=2; $i++)
            {       
                $score_comp +=$i;
            }
        }
        
    

        echo $score_jij."<br>";
        echo $score_comp;
        session_destroy();

    }

    

    
       




        ?>
    </article>
</section>

<?php
// footer
require "../includes/footer.php";
?>