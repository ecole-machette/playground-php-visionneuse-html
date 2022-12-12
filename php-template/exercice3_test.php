<?php
    $string = include 'exercice3.php';
    $nb_string = mb_substr_count($string, "immeuble-etage.jpeg");

    if($nb_string == 3){
        echo("TECHIO> message --channel Bravo! Tu as trouvé. \r\n");
    } else {
        echo("TECHIO> success false  \r\n");
		echo("TECHIO> message --channel Perdu! Regarde bien quelle image correspond à un étage. \r\n");
    }
?>