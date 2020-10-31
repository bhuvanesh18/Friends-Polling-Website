<?php
 include "mail_function.php"; 
 date_default_timezone_set("Asia/Kolkata");
 session_start();

$error_message = "";
$conn = mysqli_connect("localhost","id9747889_bhuvi","Murugesh","id9747889_friendsaward");
if(isset($_POST["submit_email"])) {
    
    $email = $_POST['email'];
    $_SESSION['email'] = $email;
	$q = "INSERT INTO accounts VALUES ('$email' ,'','','','',0,0,'0000-00-00 00:00:00')";
	$d = mysqli_query($conn , $q);
	
	if($d){
		// generate OTP
		$otp = rand(100000,999999);
	
		// Send OTP
	   
		$mail_status = sendOTP($email,$otp);
	   
		if($mail_status == 1) {
			$date = date("Y-m-d H:i:s");
		    $query = "UPDATE accounts SET otp='$otp' , is_expired=0 , create_at='$date' WHERE username='$email'";
		    $result = mysqli_query($conn , $query);
		    
			$current_id = mysqli_insert_id($conn);
			
		}
	} else {
		$error_message = "Email not exists!";
	}
}

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
		margin-top: -32rem;
	}
	.input{
		display: block;
		margin: auto;
		width: 100%;
	}
	.block{
	  width:60%;
		height:40rem;
		background: #007bff;
	}
</style>
  <div class="block"></div>
  <form class="needs-validation login" action="" method="POST" novalidate >
  <div class="form-row">
  	<h3 class="input" style="padding-bottom:20px;">OTP VERIFICATION</h3>
  </div>
  <div class="form-row">
    <div class="col-md-9 mb-3 input">
      <label for="validationCustom01">OTP</label>
      <input type="text" name="otp" class="form-control" id="validationCustom01" placeholder="Enter the OTP" required>
      <div class="invalid-feedback">
        Please enter the otp.
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit" name="submit_otp">Verify</button>
</form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
</body>
</html>

<?php
if(isset($_POST['submit_otp'])) {
	$uotp = $_POST['otp'];
	$email = $_SESSION['email'];
	$query1 = "SELECT * FROM accounts WHERE username='$email' AND otp='$uotp' AND is_expired=0 AND NOW() <= DATE_ADD(create_at, INTERVAL 24 HOUR)";
	$result1 = mysqli_query($conn,$query1);
	$count  = mysqli_num_rows($result1);
	if($count==1) {
		$query2 = "UPDATE accounts SET is_expired = 1 WHERE username='$email'";
		$result2 = mysqli_query($conn,$query2);
		if($result2){
			echo "<h2>OTP Verifed Successfully . Now You May Set Your Password</h2>";
			echo "<script>window.location.href='setpassword.php';</script>";
		}else{
			echo "Something went wrong , Try again later";
		}
	} else {
		$error_message = "Invalid OTP!";
	}	
}

?>