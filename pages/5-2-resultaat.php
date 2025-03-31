<?php
$username="Sabrr._23";
$password="0000";

if($_SERVER["REQUEST_METHOD"] =="POST")
{
 if($_POST["username"] == $username && $_POST["password"] == $password )
 {
    echo "Welcome op mijn website!!🤣";
    echo "<img src='../images/chest.jpg' alt='image chest' width='400px' height='400px'>";
 }   
 else
 {
    echo "<h1>INCORRECT USERNAME OR PASSWORD!! <br> try again🥹</h1>";
 }
}


?>