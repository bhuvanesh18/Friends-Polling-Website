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
  .form-row{
      padding-top:5px;
      padding-bottom:5px;
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
  	<h3 class="input" style="padding-bottom:20px;">Award Results</h3>
  </div>
   <div class="form-row">
    <div class="col-md-6 mb-12 input">
      <input type="text" name="name" class="form-control" id="validationCustom01" value="Mr.Playboy" readonly >
    </div>
      <?php
        
        $q0 = "SELECT COUNT(username) , playboy FROM awards GROUP BY playboy HAVING playboy!='' ORDER BY COUNT(username) DESC";
        $d0 = mysqli_query($conn , $q0);
        $r0 = mysqli_fetch_assoc($d0);

        $un = $r0['playboy'];
        $q = "SELECT * FROM accounts WHERE username = '$un'";
        $d = mysqli_query($conn , $q);
        $r = mysqli_fetch_assoc($d);
      ?>
     <div class="col-md-6 mb-12 input">
         <input  type="text" name="name" class="form-control" id="validationCustom01" value="<?php echo $r['name']; ?>" readonly >
         <input type="text" name="" class="form-control" value=" <?php echo 'Votes : '.$r0['COUNT(username)']; ?>" readonly>
      </div>
    </div>
   <div class="form-row">
    <div class="col-md-6 mb-12 input">
      <input type="text" name="name" class="form-control" id="validationCustom01" value="Mr.Topper" readonly >
    </div>
      <?php

        $q0 = "SELECT COUNT(username) , topper FROM awards GROUP BY topper HAVING topper!='' ORDER BY COUNT(username) DESC";
        $d0 = mysqli_query($conn , $q0);
        $r0 = mysqli_fetch_assoc($d0);

        $un = $r0['topper'];
        $q = "SELECT * FROM accounts WHERE username = '$un'";
        $d = mysqli_query($conn , $q);
        $r = mysqli_fetch_assoc($d);
      ?>
      <div class="col-md-6 mb-12 input">
      <input type="text" name="name" class="form-control" id="validationCustom01" value="<?php echo $r['name']; ?>" readonly >
     <input type="text" name="" class="form-control" value=" <?php echo 'Votes : '.$r0['COUNT(username)']; ?>" readonly>
      </div>
  </div>
   <div class="form-row">
    <div class="col-md-6 mb-12 input">
      <input type="text" name="name" class="form-control" id="validationCustom01" value="Mr.Sponser" readonly >
    </div>
      <?php
      
        $q0 = "SELECT COUNT(username) , sponser FROM awards GROUP BY sponser HAVING sponser!='' ORDER BY COUNT(username) DESC";
        $d0 = mysqli_query($conn , $q0);
        $r0 = mysqli_fetch_assoc($d0);

        $un = $r0['sponser'];
        $q = "SELECT * FROM accounts WHERE username = '$un'";
        $d = mysqli_query($conn , $q);
        $r = mysqli_fetch_assoc($d);
      ?>
      <div class="col-md-6 mb-12 input">
      <input type="text" name="name" class="form-control" id="validationCustom01" value="<?php echo $r['name']; ?>" readonly >
     <input type="text" name="" class="form-control" value=" <?php echo 'Votes : '.$r0['COUNT(username)']; ?>" readonly>
      </div>
  </div>
   <div class="form-row">
    <div class="col-md-6 mb-12 input">
      <input type="text" name="name" class="form-control" id="validationCustom01" value="Mr.Lier" readonly >
    </div>
      <?php
      
        $q0 = "SELECT COUNT(username) , poi FROM awards GROUP BY poi HAVING poi!='' ORDER BY COUNT(username) DESC";
        $d0 = mysqli_query($conn , $q0);
        $r0 = mysqli_fetch_assoc($d0);

        $un = $r0['poi'];
        $q = "SELECT * FROM accounts WHERE username = '$un'";
        $d = mysqli_query($conn , $q);
        $r = mysqli_fetch_assoc($d);
      ?>
      <div class="col-md-6 mb-12 input">
      <input type="text" name="name" class="form-control" id="validationCustom01" value="<?php echo $r['name']; ?>" readonly >
     <input type="text" name="" class="form-control" value=" <?php echo 'Votes : '.$r0['COUNT(username)']; ?>" readonly>
      </div>
  </div>
   <div class="form-row">
    <div class="col-md-6 mb-12 input">
      <input type="text" name="name" class="form-control" id="validationCustom01" value="Mr.Innocent" readonly >
    </div>
      <?php

        $q0 = "SELECT COUNT(username) , innocent FROM awards GROUP BY innocent HAVING innocent!='' ORDER BY COUNT(username) DESC";
        $d0 = mysqli_query($conn , $q0);
        $r0 = mysqli_fetch_assoc($d0);

        $un = $r0['innocent'];
        $q = "SELECT * FROM accounts WHERE username = '$un'";
        $d = mysqli_query($conn , $q);
        $r = mysqli_fetch_assoc($d);
      ?>
      <div class="col-md-6 mb-12 input">
      <input type="text" name="name" class="form-control" id="validationCustom01" value="<?php echo $r['name']; ?>" readonly >
      <input type="text" name="" class="form-control" value=" <?php echo 'Votes : '.$r0['COUNT(username)']; ?>" readonly>
      </div>
  </div>
   <div class="form-row">
    <div class="col-md-6 mb-12 input">
      <input type="text" name="name" class="form-control" id="validationCustom01" value="Mr.Blacksheep" readonly >
    </div>
      <?php

        $q0 = "SELECT COUNT(username) , blacksheep FROM awards GROUP BY blacksheep HAVING blacksheep!='' ORDER BY COUNT(username) DESC";
        $d0 = mysqli_query($conn , $q0);
        $r0 = mysqli_fetch_assoc($d0);

        $un = $r0['blacksheep'];
        $q = "SELECT * FROM accounts WHERE username = '$un'";
        $d = mysqli_query($conn , $q);
        $r = mysqli_fetch_assoc($d);
      ?>
      <div class="col-md-6 mb-12 input">
      <input type="text" name="name" class="form-control" id="validationCustom01" value="<?php echo $r['name']; ?>" readonly >
      <input type="text" name="" class="form-control" value=" <?php echo 'Votes : '.$r0['COUNT(username)']; ?>" readonly>
      </div>
  </div>
   <div class="form-row">
    <div class="col-md-6 mb-12 input">
      <input type="text" name="name" class="form-control" id="validationCustom01" value="Mr.Alagan" readonly >
    </div>
      <?php

        $q0 = "SELECT COUNT(username) , alagan FROM awards GROUP BY alagan HAVING alagan!='' ORDER BY COUNT(username) DESC";
        $d0 = mysqli_query($conn , $q0);
        $r0 = mysqli_fetch_assoc($d0);

        $un = $r0['alagan'];
        $q = "SELECT * FROM accounts WHERE username = '$un'";
        $d = mysqli_query($conn , $q);
        $r = mysqli_fetch_assoc($d);
      ?>
      <div class="col-md-6 mb-12 input">
      <input type="text" name="name" class="form-control" id="validationCustom01" value="<?php echo $r['name']; ?>" readonly >
      <input type="text" name="" class="form-control" value=" <?php echo 'Votes : '.$r0['COUNT(username)']; ?>" readonly>
      </div>
  </div>
   <div class="form-row">
    <div class="col-md-6 mb-12 input">
      <input type="text" name="name" class="form-control" id="validationCustom01" value="Mr.Sportsman" readonly >
    </div>
      <?php

        $q0 = "SELECT COUNT(username) , sportsman FROM awards GROUP BY sportsman HAVING sportsman!='' ORDER BY COUNT(username) DESC";
        $d0 = mysqli_query($conn , $q0);
        $r0 = mysqli_fetch_assoc($d0);

        $un = $r0['sportsman'];
        $q = "SELECT * FROM accounts WHERE username = '$un'";
        $d = mysqli_query($conn , $q);
        $r = mysqli_fetch_assoc($d);
      ?>
      <div class="col-md-6 mb-12 input">
      <input type="text" name="name" class="form-control" id="validationCustom01" value="<?php echo $r['name']; ?>" readonly >
      <input type="text" name="" class="form-control" value=" <?php echo 'Votes : '.$r0['COUNT(username)']; ?>" readonly>
      </div>
  </div>
   <div class="form-row">
    <div class="col-md-6 mb-12 input">
      <input type="text" name="name" class="form-control" id="validationCustom01" value="Mr.Mokkai" readonly >
    </div>
      <?php

        $q0 = "SELECT COUNT(username) , mokkai FROM awards GROUP BY mokkai HAVING mokkai!='' ORDER BY COUNT(username) DESC";
        $d0 = mysqli_query($conn , $q0);
        $r0 = mysqli_fetch_assoc($d0);

        $un = $r0['mokkai'];
        $q = "SELECT * FROM accounts WHERE username = '$un'";
        $d = mysqli_query($conn , $q);
        $r = mysqli_fetch_assoc($d);
      ?>
      <div class="col-md-6 mb-12 input">
      <input type="text" name="name" class="form-control" id="validationCustom01" value="<?php echo $r['name']; ?>" readonly >
      <input type="text" name="" class="form-control" value=" <?php echo 'Votes : '.$r0['COUNT(username)']; ?>" readonly>
      </div>
  </div>
   <div class="form-row">
    <div class="col-md-6 mb-12 input">
      <input type="text" name="name" class="form-control" id="validationCustom01" value="Mr.Sleepy" readonly >
    </div>
      <?php

        $q0 = "SELECT COUNT(username) , sleepy FROM awards GROUP BY sleepy HAVING sleepy!='' ORDER BY COUNT(username) DESC";
        $d0 = mysqli_query($conn , $q0);
        $r0 = mysqli_fetch_assoc($d0);

        $un = $r0['sleepy'];
        $q = "SELECT * FROM accounts WHERE username = '$un'";
        $d = mysqli_query($conn , $q);
        $r = mysqli_fetch_assoc($d);
      ?>
      <div class="col-md-6 mb-12 input">
      <input type="text" name="name" class="form-control" id="validationCustom01" value="<?php echo $r['name']; ?>" readonly >
      <input type="text" name="" class="form-control" value=" <?php echo 'Votes : '.$r0['COUNT(username)']; ?>" readonly>
      </div>
  </div>
   <div class="form-row">
    <div class="col-md-6 mb-12 input">
      <input type="text" name="name" class="form-control" id="validationCustom01" value="Mr.Makeup" readonly >
    </div>
      <?php

        $q0 = "SELECT COUNT(username) , makeup FROM awards GROUP BY makeup HAVING makeup!='' ORDER BY COUNT(username) DESC";
        $d0 = mysqli_query($conn , $q0);
        $r0 = mysqli_fetch_assoc($d0);

        $un = $r0['makeup'];
        $q = "SELECT * FROM accounts WHERE username = '$un'";
        $d = mysqli_query($conn , $q);
        $r = mysqli_fetch_assoc($d);
      ?>
      <div class="col-md-6 mb-12 input">
      <input type="text" name="name" class="form-control" id="validationCustom01" value="<?php echo $r['name']; ?>" readonly >
      <input type="text" name="" class="form-control" value=" <?php echo 'Votes : '.$r0['COUNT(username)']; ?>" readonly>
      </div>
  </div>
   <div class="form-row">
    <div class="col-md-6 mb-12 input">
      <input type="text" name="name" class="form-control" id="validationCustom01" value="Mr.Single" readonly >
    </div>
      <?php

        $q0 = "SELECT COUNT(username) , single FROM awards GROUP BY single HAVING single!='' ORDER BY COUNT(username) DESC";
        $d0 = mysqli_query($conn , $q0);
        $r0 = mysqli_fetch_assoc($d0);

        $un = $r0['single'];
        $q = "SELECT * FROM accounts WHERE username = '$un'";
        $d = mysqli_query($conn , $q);
        $r = mysqli_fetch_assoc($d);
      ?>
      <div class="col-md-6 mb-12 input">
      <input type="text" name="name" class="form-control" id="validationCustom01" value="<?php echo $r['name']; ?>" readonly >
      <input type="text" name="" class="form-control" value=" <?php echo 'Votes : '.$r0['COUNT(username)']; ?>" readonly>
      </div>
  </div>
   <div class="form-row">
    <div class="col-md-6 mb-12 input">
      <input type="text" name="name" class="form-control" id="validationCustom01" value="Mr.Foody" readonly >
    </div>
      <?php

        $q0 = "SELECT COUNT(username) , foody FROM awards GROUP BY foody HAVING foody!='' ORDER BY COUNT(username) DESC";
        $d0 = mysqli_query($conn , $q0);
        $r0 = mysqli_fetch_assoc($d0);

        $un = $r0['foody'];
        $q = "SELECT * FROM accounts WHERE username = '$un'";
        $d = mysqli_query($conn , $q);
        $r = mysqli_fetch_assoc($d);
      ?>
      <div class="col-md-6 mb-12 input">
      <input type="text" name="name" class="form-control" id="validationCustom01" value="<?php echo $r['name']; ?>" readonly >
      <input type="text" name="" class="form-control" value=" <?php echo 'Votes : '.$r0['COUNT(username)']; ?>" readonly>
      </div>
  </div>
   <div class="form-row">
    <div class="col-md-6 mb-12 input">
      <input type="text" name="name" class="form-control" id="validationCustom01" value="Mr.Comedian" readonly >
    </div>
      <?php

        $q0 = "SELECT COUNT(username) , comedian FROM awards GROUP BY comedian HAVING comedian!='' ORDER BY COUNT(username) DESC";
        $d0 = mysqli_query($conn , $q0);
        $r0 = mysqli_fetch_assoc($d0);

        $un = $r0['comedian'];
        $q = "SELECT * FROM accounts WHERE username = '$un'";
        $d = mysqli_query($conn , $q);
        $r = mysqli_fetch_assoc($d);
      ?>
      <div class="col-md-6 mb-12 input">
      <input type="text" name="name" class="form-control" id="validationCustom01" value="<?php echo $r['name']; ?>" readonly >
      <input type="text" name="" class="form-control" value=" <?php echo 'Votes : '.$r0['COUNT(username)']; ?>" readonly>
      </div>
  </div>
   <div class="form-row">
    <div class="col-md-6 mb-12 input">
      <input type="text" name="name" class="form-control" id="validationCustom01" value="Mr.Onesidelover" readonly >
    </div>
      <?php

        $q0 = "SELECT COUNT(username) , onesidelove FROM awards GROUP BY onesidelove HAVING onesidelove!='' ORDER BY COUNT(username) DESC";
        $d0 = mysqli_query($conn , $q0);
        $r0 = mysqli_fetch_assoc($d0);

        $un = $r0['onesidelove'];
        $q = "SELECT * FROM accounts WHERE username = '$un'";
        $d = mysqli_query($conn , $q);
        $r = mysqli_fetch_assoc($d);
      ?>
      <div class="col-md-6 mb-12 input">
      <input type="text" name="name" class="form-control" id="validationCustom01" value="<?php echo $r['name']; ?>" readonly >
      <input type="text" name="" class="form-control" value=" <?php echo 'Votes : '.$r0['COUNT(username)']; ?>" readonly>
      </div>
  </div>
   <div class="form-row">
    <div class="col-md-6 mb-12 input">
      <input type="text" name="name" class="form-control" id="validationCustom01" value="Mr.Phone addict" readonly >
    </div>
      <?php

        $q0 = "SELECT COUNT(username) , phoneaddict FROM awards GROUP BY phoneaddict HAVING phoneaddict!='' ORDER BY COUNT(username) DESC";
        $d0 = mysqli_query($conn , $q0);
        $r0 = mysqli_fetch_assoc($d0);

        $un = $r0['phoneaddict'];
        $q = "SELECT * FROM accounts WHERE username = '$un'";
        $d = mysqli_query($conn , $q);
        $r = mysqli_fetch_assoc($d);
      ?>
      <div class="col-md-6 mb-12 input">
      <input type="text" name="name" class="form-control" id="validationCustom01" value="<?php echo $r['name']; ?>" readonly >
      <input type="text" name="" class="form-control" value=" <?php echo 'Votes : '.$r0['COUNT(username)']; ?>" readonly>
      </div>
  </div>
   <div class="form-row">
    <div class="col-md-6 mb-12 input">
      <input type="text" name="name" class="form-control" id="validationCustom01" value="Mr.Scenu" readonly >
    </div>
      <?php

        $q0 = "SELECT COUNT(username) , scenu FROM awards GROUP BY scenu HAVING scenu!='' ORDER BY COUNT(username) DESC";
        $d0 = mysqli_query($conn , $q0);
        $r0 = mysqli_fetch_assoc($d0);

        $un = $r0['scenu'];
        $q = "SELECT * FROM accounts WHERE username = '$un'";
        $d = mysqli_query($conn , $q);
        $r = mysqli_fetch_assoc($d);
      ?>
      <div class="col-md-6 mb-12 input">
      <input type="text" name="name" class="form-control" id="validationCustom01" value="<?php echo $r['name']; ?>" readonly >
      <input type="text" name="" class="form-control" value=" <?php echo 'Votes : '.$r0['COUNT(username)']; ?>" readonly>
      </div>
  </div>
</form>
<?php
  }
?>