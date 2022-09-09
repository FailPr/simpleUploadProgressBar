<?php
$target_dir = "uploads/"; //this is will be the name of the folder who image will be upload.
// create the fullpath with image name for example if image have name image1.jpg
// it will be upload/image1.jpg.
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

//move_upload_file this is a php function and this is return true if file upload or false if file will not upload.
//tmp_name is the name of file in the temp folder at our server.
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo json_encode("File uploaded"); // if file moved to the uploads folder we catch this message in our javascript code line(45) in index.html.
} else {
    echo json_encode("File not uploaded"); // if file moved to the uploads folder we catch this message in our javascript code line(45) in index.html.
};
