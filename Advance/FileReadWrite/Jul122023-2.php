<?php
// $theContent = file_get_contents("webdictionary.txt");
// $theContent = readfile("webdictionary.txt");

$theFile = fopen("webdictionary.txt","r") or die("Unable to open file!");
// $theContent = fread($theFile,filesize('webdictionary.txt'));    
// echo $theContent;

// $theLine = fgets($theFile);    
// echo "<p>$theLine</p>";
// $theLine = fgets($theFile);    
// echo "<p>$theLine</p>";

while(!feof($theFile)) {
    echo "<p>" . fgets($theFile) . "</p>";
}
fclose($theFile);

$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");

$Message1 = " This is my Message 1."; 
$Message2 = " This is my Message 2.";

fwrite($myfile,$Message1);
fwrite($myfile,$Message2);


fclose($myfile);

$myfile = fopen("newfile.txt", "a+") or die("Unable to open file!");
echo fread($myfile,filesize('newfile.txt'));
fclose($myfile);
// Read the JSON file
#$json = file_get_contents('my_data.json');

// Decode the JSON file
#$json_data = json_decode($json,true);

// Display data
#print_r($json_data);


?>
