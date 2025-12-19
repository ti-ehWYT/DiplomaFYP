<?php
session_start();
// Manage inputs
if(isset($_POST['submit'])){
    require_once('dbConn.php');


    $fileName =$_FILES["picture"]["name"];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));

    $allowedfileExtensions = array('jpg', 'jpeg', 'png', 'gif');
    if(in_array($fileExtension, $allowedfileExtensions)){
      $id = $_SESSION['id'];
      $fileNameToStore = $id . '.' . $fileExtension;
  
      $uploaddir = '../../images';
      $uploadfile = $uploaddir . $fileNameToStore;
  
      // validate image size. Size is calculated in Bytes [max 1mb]
      if($_FILES['picture']['size'] < 1000000) {

        //get previous existing file for deletion
        if(isset( $_SESSION['picture']))
            $previousFile = $_SESSION['picture'];
        //delete exisiting file
        unlink('../../images' .  $previousFile);

        if (move_uploaded_file($_FILES['picture']['tmp_name'], $uploadfile)) {
          $sql = "UPDATE foodbank SET picture='$fileNameToStore' WHERE id = $id";
          
          if(mysqli_query($conn, $sql)){
              $_SESSION['picture'] = $fileNameToStore;
              header("location: add_fb.php?info=success");
            }else {
              header("location: add_fb.php?info=errordatabase");
            }
  
        } else{
          header("location: add_fb.php?info=movingFileDenied");
        }
      }else{
        header("location: add_fb.php?info=fileSizeTooBig");
      }
    
    }else{
      header("location: add_fb.php?info=extensionNotAllowed");
    }
   
}

?>