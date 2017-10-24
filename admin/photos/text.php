<?php
$con = mysqli_connect('localhost', 'root', 'root', 'cms');

$filename = $_FILES['image']['name'];   //حتة اتعامل وية الفايلات

$uploadOk = 1;   // علامة لمعرفة الجيكنك فقط اذا كان واحد يرفع الصورة فقط
//echo $uploadOk;
$imageFileType = pathinfo($filename, PATHINFO_EXTENSION); //to save image لخزن امتداد الصورة
$imageFileType=strtolower($imageFileType);//to compare capital and small letter and correct that

if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}


//to upload the image
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    $target_dir = "photos/upload/"; //file to upload images

    $our_file_name = "img_" . rand();// new name of image

    $the_full_path_to_the_file = $target_dir . $our_file_name . '.' . $imageFileType;
    //uploads/sag_23345345345.png

    move_uploaded_file($_FILES["image"]["tmp_name"], $the_full_path_to_the_file); // tmp_name is constant


    $query = "INSERT INTO images (namecode) VALUES ('$our_file_name" . "." . "$imagefileType')";



    if (mysqli_query($con, $query))
        echo "The file has been uploaded.";
    else
        echo "The Error in the SQL Uploading";

}



