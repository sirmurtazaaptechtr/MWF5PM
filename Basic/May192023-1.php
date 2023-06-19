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
        $full_name = "Uroosa Aamir"; //string
        echo "<p>My full name is <b>$full_name</b></p>";
        echo '<p>My full name is <b>' . $full_name . '</b></p>';
        $num1 = 5; //int
        $num2 = 4.5; //float
        echo "<p>$num1 + $num2 = " . $num1 + $num2 . "</p>";
        echo "<p>$num1 - $num2 = " . $num1 - $num2 . "</p>";
        echo "<p>$num1 x $num2 = " . $num1 * $num2 . "</p>";
        echo "<p>$num1 / $num2 = " . $num1 / $num2 . "</p>";
        
        function MyFunction(){
            global $num;
            $number = 28;
            $num = $number;
            static $inc = 0;
            $inc++;
            echo "<p>The number is $number</p>";
            echo "<p>Visitor Count = $inc</p>";
        }
        MyFunction();        
        echo "<p>The number is $num</p>";
        echo "<p>The number is" .  $GLOBALS["num"] . "</p>";
        MyFunction();
        MyFunction();

        echo "This is echo !<br />";
        $value =  print "This is print!<br />";
        echo "Print returns $value<br />";
        echo "This"," ","is"," ","echo","<br />";
        # print "This"," ","is"," ","echo","<br />";

        $data = "Ahmed Raza";
        echo "The type of $data is " . gettype($data) . "<br />";
        var_dump($data);
        echo  "<br /><br />";

        $data = -15;
        echo "The type of $data is " . gettype($data) . "<br />";
        var_dump($data);
        echo  "<br /><br />";

        $data = 25;
        echo "The type of $data is " . gettype($data) . "<br />";
        var_dump($data);
        echo  "<br /><br />";
        
        $data = 22.7;
        echo "The type of $data is " . gettype($data) . "<br />";
        var_dump($data);
        echo  "<br /><br />";

        echo "<p>min of an int is " . PHP_INT_MIN . " and " . "max of and int is " . PHP_INT_MAX . "</p>";

        echo "<p>min of an float is " . PHP_FLOAT_MIN . " and " . "max of and float is " . PHP_FLOAT_MAX . "</p>"; 

        $data = true;
        echo "The type of $data is " . gettype($data) . "<br />";
        var_dump($data);
        echo  "<br /><br />";

        $data = false;
        echo "The type of $data is " . gettype($data) . "<br />";
        var_dump($data);
        echo  "<br /><br />";

        $data = ["Ahmed Raza","Usama","Umar","Uroosa","Areesha"];
        // echo "The type of $data is " . gettype($data) . "<br />";
        echo $data[3] . "<br/>";
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        var_dump($data);
        echo  "<br /><br />";
        
    ?>
</body>
</html>