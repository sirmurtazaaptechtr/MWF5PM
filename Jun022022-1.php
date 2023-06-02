<?php
// Task 1
    $num = 12;
    
    echo "<h4>Displaying table of $num</h4>";
    for($count = 1;$count <= 10;$count++)
    {
        echo "<p>$num X $count = ". $count*$num ."</p>";
    }
// Task 2 and 3    
    $isDivisable = false;
    $dvr = [];
    
    for($count = 2; $count < $num;$count++)
    {
        if($num%$count == 0)
        {
            $isDivisable = true;
            array_push($dvr,$count);
        }
    }
    if($isDivisable){
        echo "<h4>$num is not Prime because it is divisable by (";
        foreach($dvr as $d){
            echo "$d ";
        }
        echo ")</h4>";
    }else{
        echo "<h4>$num is Prime</h4>";        
    }
// Task 4
    $st = 1;
    $ed = 21;    

    for($num = $st;$num <= $ed;$num++)
    {
        $isDivisable = false;
        $dvr = [];
        for($count = 2; $count < $num;$count++)
        {
            if($num%$count == 0)
            {
                $isDivisable = true;
                array_push($dvr,$count);
            }
        }
        if($isDivisable){
            echo "<h4>$num is not Prime because it is divisable by (";
            foreach($dvr as $d){
                echo "$d ";
            }
            echo ")</h4>";
        }else{
            echo "<h4>$num is Prime</h4>";        
        }        
    }
?>