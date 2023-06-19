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
        $num = 122;
        if($num%2 == 0)
        {
            echo "<p>$num is Even</p>";
        }
        else
        {
            echo "<p>$num is Odd</p>";
        }

        /*
        A+(80),A(70),B(60),C(50) and D(40) 
         */

        $obtMarks = 750;
        $maxMarks = 1100;        
        $percentage = round($obtMarks/$maxMarks * 100,2);
        if($percentage >= 80.0)
        {
            echo "<p>Dear you've obtained $obtMarks out of $maxMarks and you percentage is $percentage% and your grade is A+</p>";
        }elseif($percentage >= 70.0)
        {
            echo "<p>Dear you've obtained $obtMarks out of $maxMarks and you percentage is $percentage% and your grade is A</p>";
        }elseif($percentage >= 60.0)
        {
            echo "<p>Dear you've obtained $obtMarks out of $maxMarks and you percentage is $percentage% and your grade is B</p>";
        }elseif($percentage >= 50.0)
        {
            echo "<p>Dear you've obtained $obtMarks out of $maxMarks and you percentage is $percentage% and your grade is C</p>";
        }elseif($percentage >= 40.0)
        {
            echo "<p>Dear you've obtained $obtMarks out of $maxMarks and you percentage is $percentage% and your grade is D</p>";
        }else
        {
            echo "<p>Dear you've obtained $obtMarks out of $maxMarks and you percentage is $percentage% and your grade is F</p>";
        }

        $alphabet = 'A';
        $op = strtolower($alphabet);
        switch($alphabet){
            case 'a':
            case 'A':
            case 'e':
            case 'E':
            case 'i':
            case 'I':
            case 'o':
            case 'O':
            case 'u':
            case 'U':
                echo "<p>$alphabet is Vowel</p>";       
            break;
            default:
                echo "<p>$alphabet is Consonant</p>";
            break;
        }
        if($alphabet == 'a' || $alphabet == 'A' || $alphabet == 'e' || $alphabet == 'E' || $alphabet == 'i' || $alphabet == 'I' || $alphabet == 'o' || $alphabet == 'O' || $alphabet == 'u' || $alphabet == 'U' ){
            echo "<p>$alphabet is Vowel</p>";
        }else
        {
            echo "<p>$alphabet is Consonant</p>";
        }
        switch($op){
            case 'a':            
            case 'e':            
            case 'i':            
            case 'o':            
            case 'u':           
                echo "<p>$alphabet is Vowel</p>";       
            break;
            default:
                echo "<p>$alphabet is Consonant</p>";
            break;
        }

        // $rNum = 1;
        // while($rNum != 0)
        // {
        //     echo "<p>$rNum</p>";
        //     $rNum = rand(0,10);
        // }

        // do
        // {
        //     echo "<p>$rNum</p>";
        //     $rNum = rand(0,10);
        // }
        // while($rNum != 0);

        for($cnt = 0;$cnt < 10;$cnt++)
        {
            echo "<p>$cnt</p>";
        }

        $names = array("Ahmed","Osama","Umer","Areesha","Faizan","Hussain");

        // echo "<p>Hi $names[0], How do you do?</p>";
        // echo "<p>Hi $names[1], How do you do?</p>";
        // echo "<p>Hi $names[2], How do you do?</p>";
        // echo "<p>Hi $names[3], How do you do?</p>";
        // echo "<p>Hi $names[4], How do you do?</p>";

        // for($cnt = 0;$cnt < 5;$cnt++)
        for($cnt = 0;$cnt < count($names);$cnt++)
        {
            echo "<p>Hi $names[$cnt], How do you do?</p>";
        }
        
        foreach($names as $name)
        {
            echo "<p>Hi $name, How do you do?</p>";
        }


    ?>    

</body>
</html>