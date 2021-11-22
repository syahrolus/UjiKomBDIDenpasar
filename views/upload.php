<?php

if (isset($_POST['submit'])) {
    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    if (file_exists($target_file)) {
        echo "Sorry, file already exists<br>";
        $uploadOk = 0;
    } else {
        echo "file blm ada<br>";
    }
    $tmp = $_FILES["file"]["tmp_name"];
    $size = $_FILES["file"]["size"];
    $type = $_FILES["file"]["type"];
    $type2 = pathinfo($target_file, PATHINFO_EXTENSION);
    $check = getimagesize($tmp);
    echo $target_file . "<br>";
    echo $tmp . "<br>";
    echo $size . "<br>";
    echo $type . "<br>";
    if ($type2 === 'png') {
        echo "file png<br>";
    } else {
        echo "file tdk png<br>";
    }
    echo $type2 . "<br>";
    print_r($check);
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        echo "The file " . htmlspecialchars(basename($_FILES["file"]["name"])) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

// Check if image file is a actual image or fake image
// if (isset($_POST["submit"])) {
//     $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//     if ($check !== false) {
//         echo "File is an image - " . $check["mime"] . ".";
//         $uploadOk = 1;
//     } else {
//         echo "File is not an image.";
//         $uploadOk = 0;
//     }
// }

// Check if file already exists
// if (file_exists($target_file)) {
//     echo "Sorry, file already exists.";
//     $uploadOk = 0;
// }

// Check file size
// if ($_FILES["fileToUpload"]["size"] > 500000) {
//     echo "Sorry, your file is too large.";
//     $uploadOk = 0;
// }

// Allow certain file formats
// if (
//     $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
//     && $imageFileType != "gif"
// ) {
//     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//     $uploadOk = 0;
// }

// Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//     echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
// } else {
//     if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//         echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
//     } else {
//         echo "Sorry, there was an error uploading your file.";
//     }
// }
?>

<?php
include('../layouts/head.php');
?>

<?php
include('../layouts/navbar.php');
?>

<div class="container">
    <h1>Upload</h1>
</div>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h4>Upload file</h4>
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="formFile" class="form-label">Default file input example</label>
                    <input class="form-control" name="file" type="file" id="formFile">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php
include('../layouts/foot.php');
?>