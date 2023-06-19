<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
#PHP Regular Expressions
        $str = "Visit W3Schools";
        $regEx = "/w3schools/i";
        echo "<p>".preg_match($regEx, $str)."</p>"; // Outputs 1
        
        $str = "The rain in SPAIN falls mainly on the plains.";
        $regEx = "/ain/i";
        echo "<p>".preg_match_all($regEx, $str)."</p>"; // Outputs 4
        
        $str = "Visit Microsoft!";
        $regEx = "/microsoft/i";
        echo "<p>".preg_replace($regEx, "W3Schools", $str)."</p>"; // Outputs "Visit W3Schools!"
        
        $str = "We can spell Ali in many ways like Ali, Aly, Eli and Ely";
        $regEx = "/\b[AE]l[iy]\b/i";
        echo "<p>".preg_match_all($regEx, $str)."</p>"; // Outputs 4
        
        $regEx_CNIC = "/\b\d{5}-\d{7}-\d{1}\b/";
        
        $CNIC = "42301-5996204-7";
        echo "<p>".preg_match($regEx_CNIC, $CNIC)."</p>"; // Outputs 1
        
        
        

    ?>
   
    
</body>
</html>