<?php

$uploadOk= 1;
$fileName= basename($_FILES['fileToUpload']['name']);
$FileType = strtolower(pathinfo($fileName,PATHINFO_EXTENSION));

//verifica se ouve upload de imagem
if(isset($_POST['submit'])){
  $check = getimagesize($_FILES['fileToUpload']['tmp_name']);
  if($check !== false){
    //se sim, verifica se o tipo é válido
    if($FileType != "jpg" && $FileType != "png" && $FileType != "mp4"&& $FileType != "mov"){
      echo"Sorry, this format is not allowerd";
      $uploadOk=0;
    }
    else{
    $uploadOk = 1;
    }
  }
  else{
    echo"You need to upload a file";
    $uploadOk = 0;
  }
}

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $fileName)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
