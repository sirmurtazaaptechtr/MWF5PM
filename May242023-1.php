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
        echo "<p>The smallest integer supported : ". PHP_INT_MIN . "</p>";
        echo "<p>The largest integer supported : ". PHP_INT_MAX . "</p>";
        echo "<p>The Size of integer (byte) : ". PHP_INT_SIZE . "</p>";

        $number = 54;
        echo "<br />For 54 ";
        var_dump(is_int($number));
        $number = 22.7;
        echo "<br />For 22.7 ";
        var_dump(is_int($number));

        echo "<p>The smallest floating point number supported : ". PHP_FLOAT_MIN . "</p>";
        echo "<p>The largest floating point number supported : ". PHP_FLOAT_MAX . "</p>";
        echo "<p>The number of decimal digits that can be rounded into a float and back without precision loss : ". PHP_FLOAT_DIG . "</p>";

        $number = 54;
        echo "<br />For 54 ";
        var_dump(is_float($number));
        $number = 22.7;
        echo "<br />For 22.7 ";
        var_dump(is_float($number));
        
        echo "<br/>" . PHP_FLOAT_MAX*4;
        
        echo "<br />" . log(-1);
        
        echo "<br />" . PHP_VERSION;
        
        $x = 5985;
        echo "<br />For 5985 ";
        var_dump(is_numeric($x));
        
        $x = "5985";
        echo "<br />For \"5985\" ";
        var_dump(is_numeric($x));
        
        $x = "59.85" + 100;
        echo "<br />For \"59.85\" ";
        var_dump(is_numeric($x));
        
        $x = "Hello";
        echo "<br />For \"Hello\" ";
        var_dump(is_numeric($x));

        // Cast float to int
        echo "<br>";
        $x = 23465.768;
        $int_cast = (int)$x;
        echo $int_cast;
        echo "<br>";
        
        // Cast string to int
        $x = "23465.768";
        $int_cast = (int)$x;
        echo $int_cast;
        echo "<br>";
        
        echo(pi()); // returns 3.1415926535898
        echo "<br>";
        echo(min(0, 150, 30, 20, -8, -200));  // returns -200
        echo "<br>";
        echo(max(0, 150, 30, 20, -8, -200));  // returns 150
        echo "<br>";
        echo(abs(-6.7));  // returns 6.7
        echo "<br>";
        echo(sqrt(64));  // returns 8
        echo "<br>";
        echo(round(0.60));  // returns 1
        echo "<br>";
        echo(round(0.49));  // returns 0
        echo "<br>";
        
        echo(ceil(0.60) . "<br>");
        echo(ceil(0.40) . "<br>");
        echo(ceil(5) . "<br>");
        echo(ceil(5.1) . "<br>");
        echo(ceil(-5.1) . "<br>");
        echo(ceil(-5.9) . "<br>");

        echo(floor(0.60) . "<br>");
        echo(floor(0.40) . "<br>");
        echo(floor(5) . "<br>");
        echo(floor(5.1) . "<br>");
        echo(floor(-5.1) . "<br>");
        echo(floor(-5.9) . "<br>");

        echo(rand() . "<br />");
        echo(rand(10,20) . "<br />");

        define('DeveloperName','Syed Hussain');
        define('DeveloperAge',41);

        echo DeveloperName . "<br />";
        echo DeveloperAge . "<br />";

        const DeveloperGender = "Male";

        echo DeveloperGender . "<br />";

        $num = 4;

        if($num > 1)
        {
            define('x',12);
            // const x = 12;
        }
        

    ?>
    
</body>
</html>