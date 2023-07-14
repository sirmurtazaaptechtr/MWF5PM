<main class="container mt-3">
    <?php
    require('top.inc.php');
    include('functions.inc.php');
    pr($_FILES);
    
    //Info
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $uploadOk = true;
    
    //validations
    // Check if file already exists
    if (file_exists($target_file)) {
        echo '<div class="alert alert-danger" role="alert">File already exists!</div>';
        $uploadOk = false;
    }
    
    //upload
    if($uploadOk){
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo '<div class="alert alert-success" role="alert">The file &lt;'. htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). '&gt; has been uploaded.</div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">Sorry, there was an error uploading your file.</div>';          
        }
    }else{
        echo '<div class="alert alert-danger" role="alert">Sorry, your file was not uploaded.</div>';
    }
    require('footer.inc.php');
    ?>
</main>