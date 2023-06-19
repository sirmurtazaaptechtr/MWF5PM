<?php
    $cars = array("Volvo", "BMW", "Toyota", "Honda", "Suzuki", "MG", "GMC");
    $students = array("Areesha"=>21,"Umer"=>19,"Usama"=>23,"Ahmed"=>22);
    
    function pr ($arr=[1,2,3])
    {
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
    }
    function myFun ()
    {
        global $str,$num;
        $str = "Syed Murtaza Hussain";
        $num = 40;

    }
    myFun();
    echo "<p>$str</p><p>$num</p>";
?>