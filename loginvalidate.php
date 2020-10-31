<?php
  include_once("connection.php");
  error_reporting(0);
  if(isset($_POST['submit'])){
  	$username=$_POST['username'];
  	$password=$_POST['password'];
  	if($username!="" && $password!=""){
  $q = "SELECT * FROM accounts WHERE username='$username' AND password='$password'";
  $d = mysqli_query($conn , $q);
  $r = mysqli_num_rows($d);
  $result = mysqli_fetch_assoc($d);
  if($r==1){
  	session_start();
  	$_SESSION['username']=$result['username'];
  	$_SESSION['name']=$result['name'];
  	$_SESSION['photo']=$result['photo'];
    $_SESSION['bio']=$result['bio'];
    echo "<script>window.location='https://friendsaward.000webhostapp.com/home.php';</script>";
  }else{
    echo "<script>window.location='https://friendsaward.000webhostapp.com/index.html';</script>";
  }
  }else{
      header("Location:index.html");
  }
  }
?>