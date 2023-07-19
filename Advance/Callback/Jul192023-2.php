<?php
    function squarer ($input){
        return $input * $input;
    }

    $number = 15;

    $square = squarer($number);

    echo "<p>$square</p>";

    echo "<p>" . squarer(12) . "</p>";


    $values = [4,12,15,7,14];

    $result = array_map(function ($data) {
      return squarer($data);          
    },$values);

    echo "<pre>";
    print_r($result);
    echo "</pre>"

?>