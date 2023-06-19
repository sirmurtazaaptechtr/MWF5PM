<?php
    declare(strict_types=1);    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function greet () //signature of the function
        {
            //body or defination of the function
            echo "<h1>Welcome to the Class</h1>";
        }
        function greet2 ($name) //$name is parameter of the function
        {
            echo "<h2>Dear $name, how do you do?</h2>";
        }
        function greet3($name,$msg)
        {
            echo "<h4>Dear $name, you have following message : </h4>";
            echo "<p>$msg</p>";
            return "<p>Message delivered to $name</p>";
        }
        function squarer (float $number) {
            $sq = $number * $number ;
            echo "<p>The square of $number is $sq </p>";
            return $sq;
        }
        /*
        A parameter is a named variable passed into a function. Parameter variables are used to import arguments into functions. Note the difference between parameters and arguments: Function parameters are the names listed in the function's definition.
        */
        greet(); //call of the function
        greet2("Ahmed Raza");//"Ahmed Raza" is argument of the function
        greet2("Ahmed Raza");
        greet2("Umar Raza");
        greet2("Areesha Saud");        
        $res = greet3("Osama Zubair","Kya ker rehe ho");        
        echo $res;        
        echo greet3("Hussain","Sir aaj jaldi chutti ker dain.");

        squarer(5);
        $pi = 3.14;
        $r = 0.25;
        
        echo 2*$pi*squarer($r);
    ?>    
</body>
</html>