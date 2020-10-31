<?php
  $servername="";
  $username="";
  $password="";
  $dbname="";

  $conn = mysqli_connect( $servername , $username , $password , $dbname);
  if($conn==true)
  {
  	
  }
  else
  {
  	 die("connection problem because ".mysqli_connect_error());
  }
?>