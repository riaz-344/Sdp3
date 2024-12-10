<?php
// Assuming uploaded images are stored in a directory named "uploads"
$directory = "uploads/";
$images = glob($directory . "*.{jpg,jpeg,png,gif}", GLOB_BRACE); // Fetch all image files
?>

<div class="text-center py-3">
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="uploadPicture" class="btn btn-lg btn-default text-light bg-gradient-maroon col-lg-4 col-md-6 col-sm-12 col-xs-12 rounded-pill">
            Upload Picture
        </label>
        <input type="file" name="picture" id="uploadPicture" accept="image/*" class="d-none" onchange="this.form.submit()">
    </form>
</div>

<div class="text-center py-3">
    <h2>Uploaded Pictures</h2>
    <div class="d-flex justify-content-center flex-wrap" id="adminPictures">
        <?php foreach ($images as $image): ?>
            <div class="p-2">
                <img src="<?php echo $image; ?>" alt="Uploaded Picture" class="rounded shadow-sm" style="max-width: 200px; margin: 10px;">
            </div>
        <?php endforeach; ?>
    </div>
</div>
