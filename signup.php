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
  	<h3 class="input" style="padding-bottom:20px;">SIGN UP TO <span style="color: #007bff;">BHUVI WEB</span></h3>
  </div>
  <div class="form-row">
    <div class="col-md-9 mb-3 input">
      <label for="validationCustom01">Email</label>
      <input type="email" name="email" class="form-control" id="validationCustom01" placeholder="Enter your email" required>
      <div class="invalid-feedback">
        This is not a valid email.
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit" name="submit_email">Submit</button>
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
include_once("connection.php");
if(isset($_POST['submit_email'])){

  $email = $_POST['email'];
  $q = "INSERT INTO accounts VALUES ('$email','','','','')";
  $d = mysqli_query($conn , $q);
  if($d){
    echo "Email successfully created";
  }else{
    echo "sorry , some problem occurs , try again later".$email;
  }

}


?>