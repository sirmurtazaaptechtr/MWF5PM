<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $names = array("Uroosa","Areesha","Osama","Ahmed","Faizan");
        $ages = [19,21,23,22,21];

        echo "<pre>";
        print_r($names);
        print_r($ages);
        echo "</pre>";

        // echo "<p>Dear $names[0], you are $ages[0] years old.</p>";
        // echo "<p>Dear $names[1], you are $ages[1] years old.</p>";
        // echo "<p>Dear $names[2], you are $ages[2] years old.</p>";
        // echo "<p>Dear $names[3], you are $ages[3] years old.</p>";
        // echo "<p>Dear $names[4], you are $ages[4] years old.</p>";
        
        // for($i=0;$i<count($names);$i++){
        //     echo "<p>Dear $names[$i], you are $ages[$i] years old.</p>";
        // }

        // echo "<pre>";
        // print_r(array_combine($names,$ages));
        // echo "</pre>";
        

        // foreach(array_combine($names,$ages) as $name=>$age){
        //     echo "<p>Dear $name, you are $age years old.</p>";
        // }
        
        $students = array("Uroosa"=>19,"Areesha"=>21,"Osama"=>23,"Ahmed"=>22,"Faizan"=>21);
        
        echo "<pre>";
        print_r($students);
        echo "</pre>";

        foreach($students as $name=>$age){
            echo "<p>Dear $name, you are $age years old.</p>";            
        }
        ?>
    
</body>
</html>