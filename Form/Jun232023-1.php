<?php
    $name = $email = '';
    $showData = 0;
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        if(isset($_GET["submit"]))
        {
            $name = $_GET["name"];
            $email = $_GET["email"];
            $showData = 1;            
        }
    }else{
        if(isset($_POST["submit"]))
        {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $showData = 2;            
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="name">Name : </label>
        <input type="text" id="name" name="name" value="<?php echo $name; ?>">
        <br><br>
        <label for="email">Email : </label>
        <input type="email" name="email" id="email" value="<?php echo $email; ?>">
        <br><br>
        <input type="submit" value="Send" name="submit">
    </form>

    <?php
        if($showData == 1)
        {
            echo "<h4>method=\"get\"</h4><pre>";
            print_r($_GET);
            echo "</pre>";
        }elseif($showData == 2)
        {
            echo "<h4>method=\"post\"</h4><pre>";
            print_r($_POST);
            echo "</pre>";
        }

    ?>
    
</body>
</html>