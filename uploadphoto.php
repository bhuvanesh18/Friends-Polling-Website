<?php
include_once("connection.php");
error_reporting(0);
session_start();

if(isset($_POST['submitphoto'])){
 $username = $_SESSION['username'];

 if($username!=true){
  echo "<script>window.location.href='https://friendsaward.000webhostapp.com/index.html'</script>";
 }else{

if( $_FILES['file']['name']!="")
{
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpname = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed  = array('jpg','jpeg','JPG','png');

    if(in_array($fileActualExt,$allowed)){
      if($fileError===0){
        if($fileSize < 10000000000){
          $fileNameNew = uniqid('',true).".".$fileActualExt;
          $fileDestination = 'images/'.$fileNameNew;
          move_uploaded_file($fileTmpname,$fileDestination );    
        }else{
          echo "File size is to big!<br><br>";
        }
      }else{
        echo "Error is occur while uploading this file!<br><br>";
      }
    }else{
      echo "This type of Image file is not allowed to upload!<br><br>";
    }
  }
  
  
     if($fileDestination!=""){

    $query="UPDATE accounts SET photo='$fileDestination' WHERE username='$username'";
    $data=mysqli_query($conn,$query);
    if($data){
      echo "<font color='green'>Photo Updated Suceessfully.<br><br>";
      $_SESSION['photo'] =$fileDestination;
      echo "<script>window.location.href='home.php';</script>";
    }else{
      echo "<font color='red'>Record Not Updated!<br><br>";
      echo "<script>window.location.href='settings.php';</script>";
    }
     }else{
        echo 'Please select a photo';
     }
     }
   }
?>

<html>
    <head>
    <title>Bhuvi Web</title>
    <link rel="icon shortcut" type="images/jpg" href="images/bhuvi1.jpg" sizes="16X16">
    </head>
    <body>
        
    </body>
</html>