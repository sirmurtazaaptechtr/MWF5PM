<?php
    require('top.inc.php');
    include('functions.inc.php');
?>
<main class="container mt-3">
    <?php    
    
    pr($_FILES);
    
    //Info
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $uploadOk = true;
    
    //validations
    //1. Check if image file is a actual image or fake image
    $imageSize = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($imageSize !== false) {
      echo '<div class="alert alert-success" role="alert">File is an image - ' . $imageSize["mime"] . '.</div>';
      $uploadOk = true;
    } else {
      echo '<div class="alert alert-danger" role="alert">File is not an image.</div>';
      $uploadOk = false;
    }
    // 2. Check if file already exists
    if (file_exists($target_file)) {
        echo '<div class="alert alert-danger" role="alert">File already exists!</div>';
        $uploadOk = false;
    }
    // 3. Check file size 2097152 bytes i.e. 2 MB
    if ($_FILES["fileToUpload"]["size"] > 2097152) {
        echo '<div class="alert alert-danger" role="alert">Your file is larger than 2 MB.</div>';
        $uploadOk = false;
    }
    // 4. Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "bmp") {
        echo '<div class="alert alert-danger" role="alert">Only JPG, JPEG, PNG, GIF & BMP files are allowed.</div>';
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