<?php
    echo "Today is " . date("Y/m/d") . "<br>";
    echo "Today is " . date("Y.m.d") . "<br>";
    echo "Today is " . date("Y-m-d") . "<br>";
    echo "Today is " . date("Y-M-d") . "<br>";
    echo "Today is " . date("l");
    echo "<p>Today is " . date("d - m - Y - l h:i:s a Hi")." hrs</p>";

    function pr ($assocArr)
    {
        echo "<pre>";
        print_r($assocArr);
        echo "</pre>";
    }
    // pr(timezone_abbreviations_list());
    pr(timezone_identifiers_list());

    date_default_timezone_set("Asia/Karachi");
    echo "<p>" . date("d - m - Y - l h:i:s a Hi")." hrs</p>";

    // mktime(hour, minute, second, month, day, year)

    $AhmedDOB = mktime(13,30,45,04,22,2001);
    $UroosaDOB = mktime(4,30,35,03,12,2004);
    $AreeshaDOB = mktime(5,20,35,07,28,2001);
    $UmerDOB = mktime(4,25,50,01,13,2004);

    echo "<p>AhmedDOB : " . date("d - M - Y - l h:i:sa",$AhmedDOB) . "</p>";
    echo "<p>UroosaDOB : " . date("d - M - Y - l h:i:sa",$UroosaDOB) . "</p>";
    echo "<p>AreeshaDOB : " . date("d - M - Y - l h:i:sa",$AreeshaDOB) . "</p>";
    echo "<p>UmerDOB : " . date("d - M - Y - l h:i:sa",$UmerDOB) . "</p>";

    //strtotime("dateString"); text/string to time
    
    $textDate = "Wed Jul 05 2023 12:45:15pm";
    $theDate = strtotime($textDate);
    echo "<p>" . date("d - m - Y - l h:i:sa",$theDate) . "</p>";

    $textDate = "tomorrow 1:30:12pm";
    $theDate = strtotime($textDate);
    echo "<p>" . date("d - m - Y - l h:i:sa",$theDate) . "</p>";

    $textDate = "next sunday 1:30:12pm";
    $theDate = strtotime($textDate);
    echo "<p>" . date("d - m - Y - l h:i:sa",$theDate) . "</p>";

    $textDate = "+3 Months";
    $theDate = strtotime($textDate);
    echo "<p>" . date("d - M - Y - l h:i:sa",$theDate) . "</p>";

    $yourDOB = mktime(5,20,35,07,28,2001);

    for($year=date("Y",$yourDOB); $year <= date("Y");$year++)
    {
        $theDOB = mktime(5,20,35,07,28,$year);        
        echo date("d - M - Y - l h:i:sa",$theDOB)."<br>";        
    }