<?php
    // $fullName = "Uroosa Aamir";
    // $fullName = "Areesha Saud";
    // $fullName = "Syed Murtaza Hussain";
    $fullName = ["Uroosa Aamir","Areesha Saud","Syed Murtaza Hussain"];
    $len = strlen($fullName[2]);
    $words = str_word_count($fullName[2]);

    echo "<p>$fullName[2] has $len characters and $words words in it.<p>";

    $rev = strrev("Welcome to my Home.");

    echo "<p>$rev</p>" ;

    $pos = strpos($fullName[2],"Murtaza");

    echo "<p>Murtaza is at $pos in $fullName[2]</p>";

    $rep = str_replace("Murtaza Hussain","Ali Raza",$fullName[2]);

    echo "<p>$rep</p>";

    $ucName = strtoupper($fullName[2]);
    $lcName = strtolower($fullName[2]);

    echo "<p>$ucName or $lcName</p>";

?>