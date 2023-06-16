<?php
    include("Jun162023-1.inc.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sort & Superglobals</title>
</head>
<body>
    <?php
#PHP Sorting Arrays
        
        // pr($cars);
        // sort($cars);
        // pr($cars);
        // rsort($cars);
        // pr($cars);
        
        // pr($students);
        // asort($students);
        // pr($students);
        // arsort($students);
        // pr($students);
        // ksort($students);
        // pr($students);
        // krsort($students);
        // pr($students);
#PHP Global Variables - Superglobals

        pr($GLOBALS);

        echo $GLOBALS['num'];
        
        pr($GLOBALS['students']);

        echo $_SERVER['PHP_SELF'];        

    ?>
    
    <form method="post" action="Jun162023-1R.php">
        <br><br>
        <input type="text" id="name" name="name" placeholder="Enter Full Name"><br><br>
        <input type="submit" value="Send">
    </form>

    
</body>
</html>