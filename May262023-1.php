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
        $num1 = 12;
        $num2 = 2;
        # PHP Arithmetic Operators
        echo "<p>$num1 + $num2 = " . $num1+$num2 . "</p>";
        echo "<p>$num1 - $num2 = " . $num1-$num2 . "</p>";
        echo "<p>$num1 X $num2 = " . $num1*$num2 . "</p>";
        echo "<p>$num1 / $num2 = " . $num1/$num2 . "</p>";
        echo "<p>$num1 % $num2 = " . $num1%$num2 . "</p>";
        echo "<p>$num1 ^ $num2 = " . $num1**$num2 . "</p>";
        # PHP Assignment Operators
        $x = 10;
        $y = 5;
        echo '<p>$x' . " = $x and " . '$y' . " = $y</p>";
        $x = $y;
        echo '<p>After $x = $y; => $x' . " = $x and " . '$y' . " = $y</p>";
        $x += $y; # $x = $x + $y;
        echo '<p>After $x += $y; => $x' . " = $x and " . '$y' . " = $y</p>";
        $x -= $y; # $x = $x - $y;
        echo '<p>After $x -= $y; => $x' . " = $x and " . '$y' . " = $y</p>";
        $x *= $y; # $x = $x * $y;
        echo '<p>After $x *= $y; => $x' . " = $x and " . '$y' . " = $y</p>";
        $x /= $y; # $x = $x / $y;
        echo '<p>After $x /= $y; => $x' . " = $x and " . '$y' . " = $y</p>";
        $x %= $y; # $x = $x % $y;
        echo '<p>After $x %= $y; => $x' . " = $x and " . '$y' . " = $y</p>";
        # PHP Comparison/Relational Operators
        $a = 15;$b = 5;
        echo '<p>$a' . " = $a and " . '$b' . " = $b</p>";        
        echo '<p>';
        var_dump($a == $b);
        echo 'when $a == $b </p>';
        $a = 5;$b = 5;
        echo '<p>$a' . " = $a and " . '$b' . " = $b</p>";        
        echo '<p>';
        var_dump($a == $b);
        echo 'when $a == $b </p>';
        $a = '5';$b = 5;
        echo '<p>$a' . " = '$a' and " . '$b' . " = $b</p>";        
        echo '<p>';
        var_dump($a == $b);
        echo 'when $a == $b </p>';
        $a = 15;$b = 5;
        echo '<p>$a' . " = $a and " . '$b' . " = $b</p>";        
        echo '<p>';
        var_dump($a === $b);
        echo 'when $a === $b </p>';
        $a = 5;$b = 5;
        echo '<p>$a' . " = $a and " . '$b' . " = $b</p>";        
        echo '<p>';
        var_dump($a === $b);
        echo 'when $a === $b </p>';
        $a = '5';$b = 5;
        echo '<p>$a' . " = '$a' and " . '$b' . " = $b</p>";        
        echo '<p>';
        var_dump($a === $b);
        echo 'when $a === $b </p>';
        $a = '5';$b = 5;
        echo '<p>$a' . " = '$a' and " . '$b' . " = $b</p>";        
        echo '<p>';
        var_dump($a != $b);
        echo 'when $a != $b </p>';
        $a = '5';$b = 5;
        echo '<p>$a' . " = '$a' and " . '$b' . " = $b</p>";        
        echo '<p>';
        var_dump($a <> $b);
        echo 'when $a <> $b </p>';
        $a = '5';$b = 5;
        echo '<p>$a' . " = '$a' and " . '$b' . " = $b</p>";        
        echo '<p>';
        var_dump($a !== $b);
        echo 'when $a !== $b </p>';
        $a = 15;$b = 5;
        echo '<p>$a' . " = $a and " . '$b' . " = $b</p>";        
        echo '<p>';
        var_dump($a < $b);
        echo 'when $a < $b </p>';
        $a = 15;$b = 5;
        echo '<p>$a' . " = $a and " . '$b' . " = $b</p>";        
        echo '<p>';
        var_dump($a > $b);
        echo 'when $a > $b </p>';
        $a = 5;$b = 5;
        echo '<p>$a' . " = $a and " . '$b' . " = $b</p>";        
        echo '<p>';
        var_dump($a <= $b);
        echo 'when $a <= $b </p>';
        echo '<p>$a' . " = $a and " . '$b' . " = $b</p>";        
        echo '<p>';
        var_dump($a >= $b);
        echo 'when $a >= $b </p>';
        $a = 15;$b = 5;
        echo '<p>$a' . " = $a and " . '$b' . " = $b</p>";        
        echo '<p>';
        var_dump($a <=> $b);
        echo 'when $a <=> $b </p>';
        $a = 5;$b = 15;
        echo '<p>$a' . " = $a and " . '$b' . " = $b</p>";        
        echo '<p>';
        var_dump($a <=> $b);
        echo 'when $a <=> $b </p>';
        $a = 5;$b = 5;
        echo '<p>$a' . " = $a and " . '$b' . " = $b</p>";        
        echo '<p>';
        var_dump($a <=> $b);
        echo 'when $a <=> $b </p>';
        # PHP Increment / Decrement Operators

        $z = 5;        
        // $result = 5 + ++$z; #pre-inc
        $result = 5 + $z++; #post-inc
        echo "<br />" . $result, ', ' ,$z;
        
        $z = 5;        
        // $result = 5 + --$z; #pre-inc
        $result = 5 + $z--; #post-inc
        echo "<br />" . $result, ', ' ,$z;
        


    ?>
</body>
</html>