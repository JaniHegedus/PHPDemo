<?php
    if(isset($_GET['age'])):
        $characterName= "";
        $characterAge = 0;
        $characterName= $_GET["name"];
        $characterAge = $_GET["age"];
        echo "There was a gay person named $characterName! <br>";
        echo "$characterName was $characterAge years old! <br>";
    endif;
?>
