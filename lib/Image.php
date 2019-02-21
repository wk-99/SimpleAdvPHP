<?php


Class Image {

  function __construct() {
    $this->uploadImage();
  }

  function uploadImage() {

    if (isset($_FILES)){

      if (count($_FILES['upload']['name']) > 0) {

          $imageFileType = strtolower(pathinfo($_FILES['upload']['name'][0],PATHINFO_EXTENSION));

          $uploadOk = 1;

          $newfilename = '';

          $filePath = '';

          for ($i=0; $i<count($_FILES['upload']['name']); $i++) {

              $tmpFilePath = $_FILES['upload']['tmp_name'][$i];

              $filePath = "uploads/".basename($_FILES['upload']['name'][$i]);

              $imageFileType = strtolower(pathinfo($filePath,PATHINFO_EXTENSION));

              if ($tmpFilePath != ""){

                  if ($_FILES["upload"]["size"][$i] > 20000){
                      echo "<div class='alert error'>the file is too big</div>";
                      $uploadOk = 0;
                  }

                  if (file_exists($filePath)){
                      $newfilename= rand().str_replace(" ", "", basename($_FILES['upload']['name'][$i]));
                  }

                  if ($uploadOk == 0) {

                      echo "ERROR";

                  }else{

                      !move_uploaded_file($tmpFilePath, $newfilename ? "uploads/".$newfilename : $filePath);
                  }

                  }

              }

          }
      }

  }

}






?>