<?php
 include_once("connection.php");
 error_reporting(0);
 session_start();

 $username = $_SESSION['username'];
 $opass = $_SESSION['opass'];

 if($username!=true){
 	echo "<script>window.location.href='https://friendsaward.000webhostapp.com/index.html'</script>";
 }
else{
   if(isset($_POST['submit'])){
   	$name = $_POST['name'];
   	$pass = $_POST['pass'];
   	$pass1 = $_POST['pass1'];
   	$pass2 = $_POST['pass2'];
   	$bio = $_POST['bio'];

   	  if($opass==$pass){
   	  	if($pass1==$pass2){
   	  		if($name!="" && $pass1!="" && $bio!=""){
   	  			$q = "UPDATE accounts SET name='$name',password='$pass1',bio='$bio' WHERE username = '$username'";
 				$d = mysqli_query($conn , $q);
 				if ($d) {
 				    $_SESSION['name'] = $name;
 				    $_SESSION['opass'] = $pass1;
 				    $_SESSION['bio'] = $bio;
 					echo "<script>window.location.href='home.php?Successfully updated';</script>";
 				}else{
 					echo "<script>window.location.href='settings.php?Not updated';</script>";
 				}
   	  		}else{
   	  			echo "<script>window.location.href='settings.php?All fields are required';</script>";
   	  		} 
   	  	}else{
   	  		echo "<script>alert('New password and Confirmation passwords r not same!');</script>";
   	  		echo "<script>window.location.href='settings.php?';</script>";
   	  	}
   	  }else{
   	  		echo "<script>alert('Current Passwords is not match!');</script>";
   	  		echo "<script>window.location.href='settings.php?';</script>";
   	  }
 }
}
?>