<?php
 include_once("connection.php");
 error_reporting(0);
 session_start();

 $username = $_SESSION['username'];

 if($username!=true){
 	echo "<script>window.location.href='https://friendsaward.000webhostapp.com/index.html'</script>";
 }
else{
    $query = "SELECT * FROM awards WHERE username='$username'";
    $data = mysqli_query($conn , $query);
    if($data){
       $results = mysqli_fetch_assoc($data);
       if($results['status']==0){
       	 echo "<script>window.location.href='awards.php';</script>";
       }else{
       	$success=1;
       }
    }else{
    	echo "You r not allowed to see the results";
    }
}

if($success==1){

?>
<!DOCTYPE html>
<html>
<head>
	<title>Bhuvi Web</title>
    <link rel="icon shortcut" type="images/jpg" href="images/bhuvi1.jpg" sizes="16X16">
	<meta name="viewport" content="width=device-width , initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<style type="text/css">
	body{
		background:#fff;
	}
	.login{
		display: block;
		overflow: hidden;
		background: #fff;
		text-align:center;
		padding: 50px;
		max-width:600px;
		height: auto;
		margin: auto;
		border-radius: 50px;
		border:3px solid #2aef;
		margin-top: -68rem;
	}
	.input{
		display: block;
		margin: auto;
		width: 100%;
	}
	.block{
	    width:60%;
		height:75rem;
		background: #007bff;
	}
	.back{
	    float:left;
	    display:block;
	}
</style>
  <div class="block"></div>
  <form class="needs-validation login" action="update.php" method="POST" novalidate >
      <div class="form-row">
          <a href='home.php' class="back"><h5>Click To Go Back</h5></a>
      </div>
  <div class="form-row">
  	<h3 class="input" style="padding-bottom:20px;">Your Votes</h3>
  </div>
  <div class="form-row">
    <div class="col-md-9 mb-3 input">
      <input type="text" name="name" class="form-control" id="validationCustom01" value="Mr.Playboy" readonly >
      <?php
        $un = $results['playboy'];
        $q = "SELECT * FROM accounts WHERE username = '$un'";
        $d = mysqli_query($conn , $q);
        $r = mysqli_fetch_assoc($d);
      ?>
      <input type="text" name="name" class="form-control" id="validationCustom01" value="<?php echo $r['name']; ?>" readonly >
    </div>
  </div>
   <div class="form-row">
    <div class="col-md-9 mb-3 input">
      <input type="text" name="name" class="form-control" id="validationCustom01" value="Mr.Topper" readonly >
      <?php
        $un = $results['topper'];
        $q = "SELECT * FROM accounts WHERE username = '$un'";
        $d = mysqli_query($conn , $q);
        $r = mysqli_fetch_assoc($d);
      ?>
      <input type="text" name="name" class="form-control" id="validationCustom01" value="<?php echo $r['name']; ?>" readonly >
    </div>
  </div>
   <div class="form-row">
    <div class="col-md-9 mb-3 input">
      <input type="text" name="name" class="form-control" id="validationCustom01" value="Mr.Sponser" readonly >
      <?php
        $un = $results['sponser'];
        $q = "SELECT * FROM accounts WHERE username = '$un'";
        $d = mysqli_query($conn , $q);
        $r = mysqli_fetch_assoc($d);
      ?>
      <input type="text" name="name" class="form-control" id="validationCustom01" value="<?php echo $r['name']; ?>" readonly >
    </div>
  </div>
   <div class="form-row">
    <div class="col-md-9 mb-3 input">
      <input type="text" name="name" class="form-control" id="validationCustom01" value="Mr.Lier" readonly >
      <?php
        $un = $results['poi'];
        $q = "SELECT * FROM accounts WHERE username = '$un'";
        $d = mysqli_query($conn , $q);
        $r = mysqli_fetch_assoc($d);
      ?>
      <input type="text" name="name" class="form-control" id="validationCustom01" value="<?php echo $r['name']; ?>" readonly >
    </div>
  </div>
   <div class="form-row">
    <div class="col-md-9 mb-3 input">
      <input type="text" name="name" class="form-control" id="validationCustom01" value="Mr.Innocent" readonly >
      <?php
        $un = $results['innocent'];
        $q = "SELECT * FROM accounts WHERE username = '$un'";
        $d = mysqli_query($conn , $q);
        $r = mysqli_fetch_assoc($d);
      ?>
      <input type="text" name="name" class="form-control" id="validationCustom01" value="<?php echo $r['name']; ?>" readonly >
    </div>
  </div>
   <div class="form-row">
    <div class="col-md-9 mb-3 input">
      <input type="text" name="name" class="form-control" id="validationCustom01" value="Mr.Blacksheep" readonly >
      <?php
        $un = $results['blacksheep'];
        $q = "SELECT * FROM accounts WHERE username = '$un'";
        $d = mysqli_query($conn , $q);
        $r = mysqli_fetch_assoc($d);
      ?>
      <input type="text" name="name" class="form-control" id="validationCustom01" value="<?php echo $r['name']; ?>" readonly >
    </div>
  </div>
   <div class="form-row">
    <div class="col-md-9 mb-3 input">
      <input type="text" name="name" class="form-control" id="validationCustom01" value="Mr.Alagan" readonly >
      <?php
        $un = $results['alagan'];
        $q = "SELECT * FROM accounts WHERE username = '$un'";
        $d = mysqli_query($conn , $q);
        $r = mysqli_fetch_assoc($d);
      ?>
      <input type="text" name="name" class="form-control" id="validationCustom01" value="<?php echo $r['name']; ?>" readonly >
    </div>
  </div>
   <div class="form-row">
    <div class="col-md-9 mb-3 input">
      <input type="text" name="name" class="form-control" id="validationCustom01" value="Mr.Sportsman" readonly >
      <?php
        $un = $results['sportsman'];
        $q = "SELECT * FROM accounts WHERE username = '$un'";
        $d = mysqli_query($conn , $q);
        $r = mysqli_fetch_assoc($d);
      ?>
      <input type="text" name="name" class="form-control" id="validationCustom01" value="<?php echo $r['name']; ?>" readonly >
    </div>
  </div>
   <div class="form-row">
    <div class="col-md-9 mb-3 input">
      <input type="text" name="name" class="form-control" id="validationCustom01" value="Mr.Mokkai" readonly >
      <?php
        $un = $results['mokkai'];
        $q = "SELECT * FROM accounts WHERE username = '$un'";
        $d = mysqli_query($conn , $q);
        $r = mysqli_fetch_assoc($d);
      ?>
      <input type="text" name="name" class="form-control" id="validationCustom01" value="<?php echo $r['name']; ?>" readonly >
    </div>
  </div>
   <div class="form-row">
    <div class="col-md-9 mb-3 input">
      <input type="text" name="name" class="form-control" id="validationCustom01" value="Mr.Sleepy" readonly >
      <?php
        $un = $results['sleepy'];
        $q = "SELECT * FROM accounts WHERE username = '$un'";
        $d = mysqli_query($conn , $q);
        $r = mysqli_fetch_assoc($d);
      ?>
      <input type="text" name="name" class="form-control" id="validationCustom01" value="<?php echo $r['name']; ?>" readonly >
    </div>
  </div>
   <div class="form-row">
    <div class="col-md-9 mb-3 input">
      <input type="text" name="name" class="form-control" id="validationCustom01" value="Mr.Makeup" readonly >
      <?php
        $un = $results['makeup'];
        $q = "SELECT * FROM accounts WHERE username = '$un'";
        $d = mysqli_query($conn , $q);
        $r = mysqli_fetch_assoc($d);
      ?>
      <input type="text" name="name" class="form-control" id="validationCustom01" value="<?php echo $r['name']; ?>" readonly >
    </div>
  </div>
   <div class="form-row">
    <div class="col-md-9 mb-3 input">
      <input type="text" name="name" class="form-control" id="validationCustom01" value="Mr.Single" readonly >
      <?php
        $un = $results['single'];
        $q = "SELECT * FROM accounts WHERE username = '$un'";
        $d = mysqli_query($conn , $q);
        $r = mysqli_fetch_assoc($d);
      ?>
      <input type="text" name="name" class="form-control" id="validationCustom01" value="<?php echo $r['name']; ?>" readonly >
    </div>
  </div>
   <div class="form-row">
    <div class="col-md-9 mb-3 input">
      <input type="text" name="name" class="form-control" id="validationCustom01" value="Mr.Foody" readonly >
      <?php
        $un = $results['foody'];
        $q = "SELECT * FROM accounts WHERE username = '$un'";
        $d = mysqli_query($conn , $q);
        $r = mysqli_fetch_assoc($d);
      ?>
      <input type="text" name="name" class="form-control" id="validationCustom01" value="<?php echo $r['name']; ?>" readonly >
    </div>
  </div>
   <div class="form-row">
    <div class="col-md-9 mb-3 input">
      <input type="text" name="name" class="form-control" id="validationCustom01" value="Mr.Comedian" readonly >
      <?php
        $un = $results['comedian'];
        $q = "SELECT * FROM accounts WHERE username = '$un'";
        $d = mysqli_query($conn , $q);
        $r = mysqli_fetch_assoc($d);
      ?>
      <input type="text" name="name" class="form-control" id="validationCustom01" value="<?php echo $r['name']; ?>" readonly >
    </div>
  </div>
   <div class="form-row">
    <div class="col-md-9 mb-3 input">
      <input type="text" name="name" class="form-control" id="validationCustom01" value="Mr.Onesidelover" readonly >
      <?php
        $un = $results['onesidelove'];
        $q = "SELECT * FROM accounts WHERE username = '$un'";
        $d = mysqli_query($conn , $q);
        $r = mysqli_fetch_assoc($d);
      ?>
      <input type="text" name="name" class="form-control" id="validationCustom01" value="<?php echo $r['name']; ?>" readonly >
    </div>
  </div>
   <div class="form-row">
    <div class="col-md-9 mb-3 input">
      <input type="text" name="name" class="form-control" id="validationCustom01" value="Mr.Phone addict" readonly >
      <?php
        $un = $results['phoneaddict'];
        $q = "SELECT * FROM accounts WHERE username = '$un'";
        $d = mysqli_query($conn , $q);
        $r = mysqli_fetch_assoc($d);
      ?>
      <input type="text" name="name" class="form-control" id="validationCustom01" value="<?php echo $r['name']; ?>" readonly >
    </div>
  </div>
   <div class="form-row">
    <div class="col-md-9 mb-3 input">
      <input type="text" name="name" class="form-control" id="validationCustom01" value="Mr.Scenu" readonly >
      <?php
        $un = $results['scenu'];
        $q = "SELECT * FROM accounts WHERE username = '$un'";
        $d = mysqli_query($conn , $q);
        $r = mysqli_fetch_assoc($d);
      ?>
      <input type="text" name="name" class="form-control" id="validationCustom01" value="<?php echo $r['name']; ?>" readonly >
    </div>
  </div>
</form>

<?php
  }
?>