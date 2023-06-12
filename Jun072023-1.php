<?php
    declare(strict_types=1);
//PHP Default Argument Value
    function showMsg(string $country = "Pakistan")
    {
        echo "<p>Your live in $country</p>";
    }
//PHP Return Type Declarations
    function addfloatNumbers(float $num1, float $num2) : float
    {
        return $num1 + $num2;
    }
    function addintNumbers(float $num1, float $num2) : int 
    {
        return (int)($num1 + $num2);
    }
//Passing Arguments by Reference
    function add_five(&$value) 
    {
        $value += 5;
        echo "<p>$value</p>";
    }
//PHP Indexed Arrays
    $names = array("Ahmed","Omer","Uroosa","Areesha");
    $ages = [22,19,19,21];
//Get The Length of an Array - The count() Function
      
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Functions Part 2</title>
</head>
<body>
    <?php
    //PHP Default Argument Value
        showMsg("Pakistan"); 
        showMsg(); 
        showMsg("UK"); 
    //PHP Return Type Declarations    
        $a = 10.6;
        $b = 20.1;
        echo "<p>The sum of $a and $b is " . addfloatNumbers($a,$b) . "</p>";
        var_dump(addfloatNumbers($a,$b));        
        echo "<p>The sum of $a and $b is " . addintNumbers($a,$b) . "</p>";
        var_dump(addintNumbers($a,$b));
//Passing Arguments by Reference
        $num = 4;
        echo "<p>Number before function add_five = $num</p>";
        add_five($num);
        echo "<p>Number after function add_five = $num</p>";
//PHP Indexed Arrays
        echo "<pre>";
            print_r($names);
        echo "</pre>";
        echo "<pre>";
            print_r($ages);
        echo "</pre>";
//Get The Length of an Array - The count() Function
        echo count($names);

//Printing values of an array through loops
        for($i=0;$i<count($names);$i++)
        {
            echo "<p>$names[$i]</p>";
        }
        for($i=0;$i<count($ages);$i++)
        {
            echo "<p>$ages[$i]</p>";
        }
        foreach($names as $name)
        {
            echo "<p>$name</p>";
        }
        foreach($ages as $age)
        {
            echo "<p>$age</p>";
        }
    ?>
</body>
</html>0