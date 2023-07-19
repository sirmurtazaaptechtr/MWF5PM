<?php require('top.inc.php') ?>
<div class="container mt-3">
    <h1>Upload File</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data" class="row g-3">
        <div class="col-auto">
            <label for="fileToUpload" class="form-label mt-1">Select image to upload : </label>
        </div>
        <div class="col-auto">
            <input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
        </div>
        <div class="col-auto">
            <input type="submit" name="submit" value="Upload" class="btn btn-primary">
        </div>
    </form>

</div>
<?php require('footer.inc.php') ?>
