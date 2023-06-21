<?php
    $email = $txt = '';
    if(isset($_POST["submit"]))
    {
        $email = $_POST["useremail"];
        $txt = $_POST["userdescription"];

        echo "<p>Email : $email</p>";
        echo "<p>Description : $txt</p>";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>PHP From</title>
</head>

<body>
    <h1>php Form</h1>
    <div class="container-sm">
        <form action="Jun192023-1.php" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="useremail" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Example textarea</label>
                <textarea class="form-control" id="description" name="userdescription" rows="3"></textarea>
            </div>
            <div class="col-auto">
                <button type="submit" name="submit" class="btn btn-primary mb-3">Send</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>