<?php
 include_once("connection.php");
 error_reporting(0);
 session_start();

 $username = $_SESSION['username'];

 if($username!=true){
 	echo "<script>window.location.href='https://friendsaward.000webhostapp.com/index.html'</script>";
 }
else{
 $q = "SELECT * FROM accounts WHERE username = '$username'";
 $d = mysqli_query($conn , $q);
 $r = mysqli_fetch_assoc($d);
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
	.photoupload{
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
		margin-top: 5rem;
	}
	.photoupload{
	    
	}
</style>
  <div class="block"></div>
  <form class="needs-validation login" action="update.php" method="POST" novalidate >
  <div class="form-row">
  	<h3 class="input" style="padding-bottom:20px;">Edit Ur Profile</h3>
  </div>
  <div class="form-row">
    <div class="col-md-9 mb-3 input">
      <label for="validationCustom01">Name</label>
      <input type="text" name="name" class="form-control" id="validationCustom01" value="<?php echo $r['name']; ?>" placeholder="Your Name" required>
      <div class="invalid-feedback">
        Name should not be empty.
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-9 mb-3 input">
      <label for="validationCustom02">Current Password</label>
      <input type="password" name="pass" class="form-control" id="validationCustom02" value="<?php echo $r['password']; ?>" placeholder="Current password" required>
      <div class="invalid-feedback">
        Please enter the current password.
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-9 mb-3 input">
      <label for="validationCustom03">Password</label>
      <input type="password" name="pass1" class="form-control" id="validationCustom03" placeholder="New password" required>
      <div class="invalid-feedback">
        Password should not be empty.
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-9 mb-3 input">
      <label for="validationCustom04">Password</label>
      <input type="password" name="pass2" class="form-control" id="validationCustom04" placeholder="Re-enter New password" required>
      <div class="invalid-feedback">
        Password should not be empty.
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-9 mb-3 input">
      <label for="validationCustom05">Bio</label>
      <textarea rows="4" cols="50" name="bio" class="form-control" id="validationCustom05" placeholder="Your Bio" required>
         <?php echo $r['bio']; ?>
      </textarea>
      <div class="invalid-feedback">
        Bio should not be empty.
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit" name="submit">Update</button>
</form>

<form class="photoupload" action="uploadphoto.php" method="POST" enctype="multipart/form-data">
<div class="form-row">
<div class="col-md-9 mb-3 input">
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="customFile" name="file">
    <label class="custom-file-label" for="customFile">Photo</label>
  </div>
  </div>
  </div>
    <button class="btn btn-primary" type="submit" name="submitphoto">Upload Photo</button>
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
$_SESSION['opass']=$r['password'];
}//else
?>