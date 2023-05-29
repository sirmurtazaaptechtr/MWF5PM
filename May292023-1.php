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
        echo "php is working...";

        $a = true;$b = true;
        echo "<p> when true && true : ";
        var_dump($a and $b);
        echo "</p>";
        $a = true;$b = false;
        echo "<p> when true && false : ";
        var_dump($a and $b);
        echo "</p>";
        $a = false;$b = true;
        echo "<p> when false && true : ";
        var_dump($a and $b);
        echo "</p>";
        $a = false;$b = false;
        echo "<p> when false && false : ";
        var_dump($a and $b);
        echo "</p>";

        $a = true;$b = true;
        echo "<p> when true || true : ";
        var_dump($a or $b);
        echo "</p>";
        $a = true;$b = false;
        echo "<p> when true || false : ";
        var_dump($a or $b);
        echo "</p>";
        $a = false;$b = true;
        echo "<p> when false || true : ";
        var_dump($a or $b);
        echo "</p>";
        $a = false;$b = false;
        echo "<p> when false || false : ";
        var_dump($a or $b);
        echo "</p>";
        echo "</p>";

        $a = true;$b = true;
        echo "<p> when true XOR true : ";
        var_dump($a xor $b);
        echo "</p>";
        $a = true;$b = false;
        echo "<p> when true XOR false : ";
        var_dump($a xor $b);
        echo "</p>";
        $a = false;$b = true;
        echo "<p> when false XOR true : ";
        var_dump($a xor $b);
        echo "</p>";
        $a = false;$b = false;
        echo "<p> when false XOR false : ";
        var_dump($a xor $b);
        echo "</p>";

        $z = true;
        echo "<p> when not true : ";
        var_dump(!$z);
        echo "</p>";

        $z = false;
        echo "<p> when not false : ";
        var_dump(!$z);
        echo "</p>";

        $firstName = "Ahmed";
        $lastName = "Raza";

        $fullName = $firstName . ' ' . $lastName;
        echo "<p>Full Name : $fullName</p>";
        echo "<p>First Name : $firstName</p>";
        echo "<p>Last Name : $lastName</p>";

        $firstName .= ' ';
        $firstName .= $lastName;

        echo "<p>First Name : $firstName</p>";
        echo "<p>Last Name : $lastName</p>";

        $boys = ["Ahmed","Osama","Umar"];
        $girls = ["","","","Areesha","Uroosa"];

        $students = $boys + $girls;

        echo "<pre>";
        print_r($students);
        echo "</pre>";

        $boys = ["Std01"=>"Ahmed","Std02"=>"Osama","Std03"=>"Umar"];
        $girls = ["Std04"=>"Areesha","Std05"=>"Uroosa"];
        
        $students = $boys + $girls;
        
        echo "<pre>";
        print_r($students);
        echo "</pre>";
        
        $cboys = ["Std01"=>"Ahmed","Std03"=>"Umar","Std02"=>"Osama"];
        echo "<p>When " . '$boys == $cboys then ';
        var_dump($boys == $cboys);
        echo "</p>";

        echo "<p>When " . '$boys <> $cboys then ';
        var_dump($boys <> $cboys);
        echo "</p>";

        echo "<p>When " . '$boys === $cboys then ';
        var_dump($boys === $cboys);
        echo "</p>";

        echo "<p>When " . '$boys !== $cboys then ';
        var_dump($boys !== $cboys);
        echo "</p>";

        $age = 21;
        $haveDL = true;

        $msg = $age>=18 && $haveDL?"You can Drive":"You can't Drive";
        echo "<p>$msg</p>";

        $dbDob = null;        
        $dob = $dbDob??"1900-01-01";
        $current_date = date_create(date("Y-m-d"));       
        echo "<p>".date_diff($current_date,date_create($dob))->format("%Y years, %m months and %d days")."</p>";
        
        $dbDob = "1999-12-13";        
        $dob = $dbDob??"1900-01-01";
        $current_date = date_create(date("Y-m-d"));       
        echo "<p>".date_diff($current_date,date_create($dob))->format("%Y years, %m months and %d days")."</p>";
        
        $dbDob = "1983-07-03";        
        $dob = $dbDob??"1900-01-01";
        $current_date = date_create(date("Y-m-d"));       
        echo "<p>".date_diff($current_date,date_create($dob))->format("%Y years, %m months and %d days")."</p>";


        
    ?>
    
</body>
</html>