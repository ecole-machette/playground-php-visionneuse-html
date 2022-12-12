<?php
    include 'exercice3.php';
    
    echo "</br> \r\n";
    $nb_string = mb_substr_count($var, "immeuble-etage.jpeg");
    echo $nb_string;
    echo "</br> \r\n";

    if($nb_string == 3){
        echo("<p class='message'>" . "TECHIO> message --channel Bravo! Tu as trouvé. \r\n" . "</p>");
        echo "</br> \r\n";

    } else {
        echo("<p class='message'>" . "TECHIO> success false  \r\n" . "</p>");
        echo "</br> \r\n";
		echo("<p class='message'>" . "TECHIO> message --channel Perdu! Regarde bien quelle image correspond à un étage. \r\n" . "</p>");

    }
?>