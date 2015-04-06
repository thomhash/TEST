<?php
ob_start();
// Lavet af Mikkel 
require '../dl/set_vare.php';
$parametre=0;
//require 'ftp.php';
if (isset($_POST["parametre"])){
    $parametre=$_POST["parametre"];
        }
        echo $parametre;
$target_dir ="../billeder/";
//$target_dir = "C:/Users/Mikkel/Documents/NetBeansProjects/TEST/billeder";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "Filen er et billede - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "Filen er ikke et billede.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        
        if($parametre!=0){ }
        else {opret_billede(basename( $_FILES["fileToUpload"]["name"]));}
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

if($parametre!=0){
    header('Location:../vl/vis_parametre.php');
        ob_flush();
}
else{header('Location:../vl/opret_vare.php');
        ob_flush(); }
?>