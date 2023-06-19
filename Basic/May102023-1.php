<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Welcome to my Page" ?></title>
</head>
<body>
    <?php
        echo "<h1>This is my new Page</h1>";
        echo "<h2>Hello World!</h2>";
        ECHO "Hello World!<br>";        
        EcHo "Hello World!<br>";

        $color = "red";

        echo "My favourite color is $color <br>";
        echo "My car is " . $color . "<br>";
        /*
        echo "My house is " . $COLOR . "<br>";
        echo "My boat is " . $coLOR . "<br>";
        */
        // This is a single-line comment
        # This is also a single-line comment

        // You can also use comments to leave out parts of a code line
        $result = 5 /* + 15 */ + 5;
        echo $result;

        $txt = "Hello world!";
        $x = 5;
        $y = 10.5;
        
    ?>
    
</body>
</html>