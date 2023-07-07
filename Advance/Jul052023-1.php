<?php
function pr ($assocArr)
{
    echo "<pre>";
    print_r($assocArr);
    echo "</pre>";
}
// pr(timezone_abbreviations_list());
// pr(timezone_identifiers_list());

date_default_timezone_set("Asia/Karachi");
echo "<p>" . date("d - m - Y - l h:i:s a Hi")." hrs</p>";

// mktime(hour, minute, second, month, day, year)

$AhmedDOB = mktime(13,30,45,04,22,2001);
$UroosaDOB = mktime(4,30,35,03,12,2004);

echo "<p>" . date("d - m - Y - l h:i:sa",$AhmedDOB) . "</p>";
echo "<p>" . date("d - m - Y - l h:i:sa",$UroosaDOB) . "</p>";

$date = "Wed Jul 05 2023 12:45:15pm";
$date = strtotime($date);
echo "<p>" . date("d - m - Y - l h:i:sa",$date) . "</p>";

$date = "tomorrow 1:30:12pm";
$date = strtotime($date);
echo "<p>" . date("d - m - Y - l h:i:sa",$date) . "</p>";

$date = "next sunday 1:30:12pm";
$date = strtotime($date);
echo "<p>" . date("d - m - Y - l h:i:sa",$date) . "</p>";

$date = "+3 Months";
$date = strtotime($date);
echo "<p>" . date("d - M - Y - l h:i:sa",$date) . "</p>";