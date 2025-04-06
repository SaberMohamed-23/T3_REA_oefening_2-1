<?php
// Start de sessie om score op te slaan
session_start();

// Laad de header van de website in
require "../includes/header.php";
?>

<?php
// Laad de navigatiebalk van de website in
require "../includes/nav.php";
?>

<section>
    <h2>Uitwerking oefening 6.2</h2>

    <article>
        <h3>Taak 1</h3>

        <p>Maak een keuze</p>

        <!-- Formulier waarin de gebruiker een keuze maakt: steen, papier of schaar -->
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
        // Resultaatmogelijkheden opslaan in variabelen
        $jij_wint = "Jij Wint";
        $compwins = "computer wins";
        $gelijkspel = "Gelijkspel";

        // Check of gebruiker een keuze heeft gemaakt
        if (isset($_GET['keuze'])) {

            // Toon de keuze van de gebruiker met een afbeelding
            echo "Jij koos: <img class='R_P_S' src='../images/{$_GET['keuze']}.jpg'>";

            // Genereer een willekeurige keuze voor de computer (rock, paper of scissors)
            $opties = array("rock", "paper", "scissors");
            $computerkeuzegetal = rand(0, 2);
            $computerkeuze = $opties[$computerkeuzegetal];

            // Toon de keuze van de computer
            echo "&nbsp;&nbsp;De computer koos: <img class='R_P_S' src='../images/{$computerkeuze}.jpg'>";

            // Bepaal wie er wint op basis van de gemaakte keuzes
            if ($_GET["keuze"] === "paper") {
                switch ($computerkeuze) {
                    case "paper":
                        $result = $gelijkspel;
                        echo "<p class='resultaat'>$gelijkspel</p>";
                        break;
                    case "rock":
                        $result = $jij_wint;
                        echo "<p class='resultaat'>$jij_wint</p>";
                        break;
                    case "scissors":
                        $result = $compwins;
                        echo "<p class='resultaat'>$compwins</p>";
                        break;
                }
            } elseif ($_GET["keuze"] === "rock") {
                switch ($computerkeuze) {
                    case "paper":
                        $result = $compwins;
                        echo "<p class='resultaat'>$compwins</p>";
                        break;
                    case "rock":
                        $result = $gelijkspel;
                        echo "<p class='resultaat'>$gelijkspel</p>";
                        break;
                    case "scissors":
                        $result = $jij_wint;
                        echo "<p class='resultaat'>$jij_wint</p>";
                        break;
                }
            } elseif ($_GET["keuze"] === "scissors") {
                switch ($computerkeuze) {
                    case "paper":
                        $result = $jij_wint;
                        echo "<p class='resultaat'>$jij_wint</p>";
                        break;
                    case "rock":
                        $result = $compwins;
                        echo "<p class='resultaat'>$compwins</p>";
                        break;
                    case "scissors":
                        $result = $gelijkspel;
                        echo "<p class='resultaat'>$gelijkspel</p>";
                        break;
                }
            }

            // Als de score nog niet bestaat in de sessie, stel deze in op 0
            if (!isset($_SESSION['user1'])) {
                $_SESSION['user1'] = 0; // gebruiker
                $_SESSION['user2'] = 0; // computer
            }

            // Score bijhouden
            if ($result == $jij_wint) {
                $_SESSION['user1'] += 1;
            } elseif ($result == $compwins) {
                $_SESSION['user2'] += 1;
            }

            // Toon huidige score
            echo "First to 5 wins!";
            echo "<p class='scorebord'><span class='score'>score</span><br>
                USER: " . $_SESSION['user1'] . " <br>
                COMPUTER: " . $_SESSION['user2'] . "</p>";

            // Check of iemand 5 punten heeft gehaald
            if ($_SESSION['user1'] >= 5 || $_SESSION['user2'] >= 5) {
                // Bepaal de winnaar en toon dit op het scherm
                $winnaar = $_SESSION['user2'] >= 5
                    ? "<p class='winnaar'>WINNAAR IS: <span class='COMPUTER'>COMPUTER</span>"
                    : "<p class='winnaar'>WINNAAR IS: <span class='USER'>USER</span></p>";

                echo $winnaar ;
                echo "<br>Maak een nieuwe keuze om spel opnieuw te spelen";

                // Sessie resetten zodat scores opnieuw kunnen worden opgebouwd
                session_destroy();
            }
        }
        ?>
    </article>
</section>

<?php
// Laad de footer van de website in
require "../includes/footer.php";
?>
