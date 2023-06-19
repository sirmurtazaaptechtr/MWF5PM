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
        $age = 12;
        $fullName = "Ali Raza";

        echo "<p>Dear $fullName, you are $age years old.</p>";
        echo '<p>Dear $fullName, you are $age years old.</p>';
        echo '<p>Dear' . $fullName . ', you are ' . $age .  'years old.</p>';

        $num1 = 15;
        $num2 = 5;

        echo "<p>$num1 + $num2 = " . $num1+$num2 . "</p>";
        echo "<p>$num1 - $num2 = " . $num1-$num2 . "</p>";
        echo "<p>$num1 X $num2 = " . $num1*$num2 . "</p>";
        echo "<p>$num1 / $num2 = " . $num1/$num2 . "</p>";

        function printNumber() {
            global $theNum;            
            static $num = 12;
            $theNum = $num;
            $num++;
            echo "<p>$num</p>";
        }        
        printNumber(); // 13
        echo "<p>$theNum</p>";
        echo "<p>$num</p>";
        printNumber(); // 14
        printNumber(); // 15


        echo $GLOBALS['theNum'];

        function showData1()
        {
            echo "<h4>Data1</h4>";
            return "show data completed.";
        }
        function showData2()
        {
            echo "<h4>Data2</h4>";
            return "Ho gya";
        }

        $flag = showData1();
        echo  '$flag = ' . $flag . "<br />";
        $flag = showData2();
        echo  '$flag = ' . $flag . "<br />";

        $x =  print "this is print <br />";

        echo '$x = ' . $x . '<br />';

    ?>
    
</body>
</html>