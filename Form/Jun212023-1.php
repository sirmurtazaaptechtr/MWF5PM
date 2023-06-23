<?php
    $name = $email = $website = $comment = $gender = '';
    $nameError = $emailError = $websiteError = $commentError = $genderError = '';

    function clean_data($input) {        
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }

    if(isset($_POST['submit']))
    {
        if(empty($_POST['name'])){
            $nameError = 'Name is required';
        }else{
            $name = clean_data($_POST['name']);
        }
        if(empty($_POST['email'])){
            $emailError = 'Email is required';
        }else {
            $email = clean_data($_POST['email']);
        }
        $website = clean_data($_POST['website']);
        $comment = clean_data($_POST['comment']);
        if(empty($_POST['gender'])){
            $genderError = 'Gender is required';
        }else{
            $gender = clean_data($_POST['gender']);            
        }

        echo $name.", ".$email.", ".$website.", ".$comment.", ".$gender.". ";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website - Feedback Form</title>
</head>
<body>
    <h1>Feedback Form</h1>
    <p>* required field</p>
    <form action="<?php echo clean_data($_SERVER['PHP_SELF']); ?>" method="post">
        <div>
            <label for="name">Name: </label>
            <input type="text" name="name" id="name">
            <span> * <?php echo $nameError?></span>
        </div><br>
        <div>
            <label for="email">E-mail: </label>
            <input type="text" name="email" id="email">
            <span> * <?php echo $emailError?></span>
        </div><br>
        <div>
            <label for="website">Website: </label>
            <input type="text" name="website" id="website">
        </div><br>
        <div>
            <label for="comment">Comment: </label>
            <textarea name="comment" id="comment" rows="5" cols="40"></textarea>
        </div><br>
        <div>
            <label>Gender:</label>        
            <input type="radio" name="gender" id="genderMale" value="male">
            <label for="gender-male"> Male</label>
            <input type="radio" name="gender" id="genderFemale" value="female">
            <label for="genderFemale"> Female</label>
            <input type="radio" name="gender" id="genderOther" value="other">
            <label for="genderOther"> Other</label>
            <span> * <?php echo $genderError?></span>
        </div><br>
        <input type="submit" name="submit" value="Save">


    </form>
    
</body>
</html>