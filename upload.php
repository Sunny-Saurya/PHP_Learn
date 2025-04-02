<?php
if(isset($_POST["submit"])){
    $targetDir = "upload/";
    $maxFileSize = 2 * 1024 * 1024; 
    $fileName = basename($_FILES["file"]["name"]);
    $fileSize = $_FILES["file"]["size"];
    $fileTempName = $_FILES["file"]["tmp_name"];
    $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $allowedTypes = array("jpg", "png", "jpeg", "gif", "pdf", "docx", "txt");

    if(!in_array($fileType, $allowedTypes)){
        echo "File type not allowed. Only JPG, PNG, JPEG, GIF, PDF, DOCX, TXT files are allowed.";
        exit;
    }
    if($fileSize > $maxFileSize){
        echo "File size exceeds the maximum limit of 2MB.";
        exit;
    }
    $newFileName = uniqid("file_",true) . "_" . $fileName;
    $targetFilePath = $targetDir . $newFileName;
    if(move_uploaded_file($fileTempName, $targetFilePath)){
        echo "File uploaded successfully: " . $targetFilePath;
    }else{
        echo "Error uploading file.";
    }
}
else{
    echo "File not uploaded";
    exit;
}