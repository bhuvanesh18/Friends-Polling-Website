<?php
 include_once("connection.php");
 error_reporting(0);
 session_start();

 $username = $_SESSION['username'];

 if($username!=true){
  echo "<script>window.location.href='https://friendsaward.000webhostapp.com/index.html'</script>";
 }
else{
    
  $allowquery = "SELECT * FROM awards WHERE username = '$username'";
  $allowdata = mysqli_query($conn , $allowquery);
  $allowres = mysqli_fetch_assoc($allowdata);

  if($allowres['status']==1){
      echo "<script>window.location.href='https://friendsaward.000webhostapp.com/result.php';</script>";
  }

 $award1 = "Playboy";
 $award2 = "Topper (Padippali)";
 $award3 = "Sponser";
 $award4 = "Poiya solravan";
 $award5 = "Innocent";
 $award6 = "Blacksheep (Spy)";
 $award7 = "Alagan";
 $award8 = "Sportsman";
 $award9 = "Mokka mannan";
 $award10 = "Sleepy (Somberi)";
 $award11 = "Makeup paithiyam";
 $award12 = "Morattu Single";
 $award13 = "Foody";
 $award14 = "Comedian";
 $award15 = "One Side Lover";
 $award16 = "Phone addict";
 $award17 = "Mr.Scenu";

 $options  = array('Arunkumar(karupu)'=>"karunkumar",'Arunkumar(badu)'=>"parunkumar",'Bhuvaneshwaran' =>"17BCS3012",'Gokulnath'=>"gokulnath",'Kathirkaaman'=>"kathirkaaman",'Mayamani vignesh'=>"maya",'Rubankumar'=>"rubankumar",'Sebastinea askash'=>"sebastinaakash",'Sivakumar'=>"sivakumar",'Sivasangar'=>"sivasangar",'Sri gokul'=>"srigokul");

if (isset($_POST['choice1'])) {
	$answer1 = $_POST['choice1'];

	  $q1 = "UPDATE awards SET playboy='$answer1' WHERE username='$username'";
    $d1 = mysqli_query($conn , $q1);
    if ($d1) {
      echo "<script>window.location.href='https://friendsaward.000webhostapp.com/awards.php?q=2';</script>";
    }else{
      echo "Sorry your vote not updated ! , Do it later!";
    }
}

if (isset($_POST['choice2'])) {
	$answer2 = $_POST['choice2'];

	 $q2 = "UPDATE awards SET topper='$answer2' WHERE username='$username'";
    $d2 = mysqli_query($conn , $q2);
    if ($d2) {
      echo "<script>window.location.href='https://friendsaward.000webhostapp.com/awards.php?q=3';</script>";
    }else{
      echo "Sorry your vote not updated ! , Do it later!";
    }
}

if (isset($_POST['choice3'])) {
	$answer3 = $_POST['choice3'];

	$q3 = "UPDATE awards SET sponser='$answer3' WHERE username='$username'";
    $d3 = mysqli_query($conn , $q3);
    if ($d3) {
        echo "<script>window.location.href='https://friendsaward.000webhostapp.com/awards.php?q=4';</script>";
        }else{
      echo "Sorry your vote not updated ! , Do it later!";
    }
}

if (isset($_POST['choice4'])) {
	$answer4 = $_POST['choice4'];

	 $q4 = "UPDATE awards SET poi='$answer4' WHERE username='$username'";
    $d4 = mysqli_query($conn , $q4);
    if ($d4) {
        echo "<script>window.location.href='https://friendsaward.000webhostapp.com/awards.php?q=5';</script>";
        }else{
      echo "Sorry your vote not updated ! , Do it later!";
    } 
}

if (isset($_POST['choice5'])) {
	$answer5 = $_POST['choice5'];

	 $q5 = "UPDATE awards SET innocent='$answer5' WHERE username='$username'";
    $d5 = mysqli_query($conn , $q5);
    if ($d5) {
        echo "<script>window.location.href='https://friendsaward.000webhostapp.com/awards.php?q=6';</script>";
        }else{
      echo "Sorry your vote not updated ! , Do it later!";
    }
}

if (isset($_POST['choice6'])) {
	$answer6 = $_POST['choice6'];

  $q6 = "UPDATE awards SET blacksheep='$answer6' WHERE username='$username'";
    $d6 = mysqli_query($conn , $q6);
    if ($d6) {
        echo "<script>window.location.href='https://friendsaward.000webhostapp.com/awards.php?q=7';</script>";
        }else{
      echo "Sorry your vote not updated ! , Do it later!";
    }
}

if (isset($_POST['choice7'])) {
	$answer7 = $_POST['choice7'];

$q7 = "UPDATE awards SET alagan='$answer7' WHERE username='$username'";
    $d7 = mysqli_query($conn , $q7);
    if ($d7) {
        echo "<script>window.location.href='https://friendsaward.000webhostapp.com/awards.php?q=8';</script>";
        }else{
      echo "Sorry your vote not updated ! , Do it later!";
    }
}

if (isset($_POST['choice8'])) {
	$answer8 = $_POST['choice8'];

$q8 = "UPDATE awards SET sportsman='$answer8' WHERE username='$username'";
    $d8 = mysqli_query($conn , $q8);
    if ($d8) {
        echo "<script>window.location.href='https://friendsaward.000webhostapp.com/awards.php?q=9';</script>";
        }else{
      echo "Sorry your vote not updated ! , Do it later!";
    }
}

if (isset($_POST['choice9'])) {
	$answer9 = $_POST['choice9'];

	$q9 = "UPDATE awards SET mokkai='$answer9' WHERE username='$username'";
    $d9 = mysqli_query($conn , $q9);
    if ($d9) {
        echo "<script>window.location.href='https://friendsaward.000webhostapp.com/awards.php?q=10';</script>";
        }else{
      echo "Sorry your vote not updated ! , Do it later!";
    }
}

if (isset($_POST['choice10'])) {
	$answer10 = $_POST['choice10'];

$q10 = "UPDATE awards SET sleepy='$answer10' WHERE username='$username'";
    $d10 = mysqli_query($conn , $q10);
    if ($d10) {
        echo "<script>window.location.href='https://friendsaward.000webhostapp.com/awards.php?q=11';</script>";
        }else{
      echo "Sorry your vote not updated ! , Do it later!";
    }
}

if (isset($_POST['choice11'])) {
	$answer11 = $_POST['choice11'];

	$q11 = "UPDATE awards SET makeup='$answer11' WHERE username='$username'";
    $d11 = mysqli_query($conn , $q11);
    if ($d11) {
        echo "<script>window.location.href='https://friendsaward.000webhostapp.com/awards.php?q=12';</script>";
        }else{
      echo "Sorry your vote not updated ! , Do it later!";
    }
}

if (isset($_POST['choice12'])) {
	$answer12 = $_POST['choice12'];

$q12 = "UPDATE awards SET single='$answer12' WHERE username='$username'";
    $d12 = mysqli_query($conn , $q12);
    if ($d12) {
        echo "<script>window.location.href='https://friendsaward.000webhostapp.com/awards.php?q=13';</script>";
        }else{
      echo "Sorry your vote not updated ! , Do it later!";
    }
}

if (isset($_POST['choice13'])) {
	$answer13 = $_POST['choice13'];

	$q13 = "UPDATE awards SET foody='$answer13' WHERE username='$username'";
    $d13 = mysqli_query($conn , $q13);
    if ($d13) {
        echo "<script>window.location.href='https://friendsaward.000webhostapp.com/awards.php?q=14';</script>";
        }else{
      echo "Sorry your vote not updated ! , Do it later!";
    }
}

if (isset($_POST['choice14'])) {
	$answer14 = $_POST['choice14'];

	$q14 = "UPDATE awards SET comedian='$answer14' WHERE username='$username'";
    $d14 = mysqli_query($conn , $q14);
    if ($d14) {
        echo "<script>window.location.href='https://friendsaward.000webhostapp.com/awards.php?q=15';</script>";
        }else{
      echo "Sorry your vote not updated ! , Do it later!";
    }
}

if (isset($_POST['choice15'])) {
	$answer15 = $_POST['choice15'];

$q15 = "UPDATE awards SET onesidelove='$answer15' WHERE username='$username'";
    $d15 = mysqli_query($conn , $q15);
    if ($d15) {
        echo "<script>window.location.href='https://friendsaward.000webhostapp.com/awards.php?q=16';</script>";
        }else{
      echo "Sorry your vote not updated ! , Do it later!";
    }
}

if (isset($_POST['choice16'])) {
	$answer16 = $_POST['choice16'];

	$q16 = "UPDATE awards SET phoneaddict='$answer16' WHERE username='$username'";
    $d16 = mysqli_query($conn , $q16);
    if ($d16) {
        echo "<script>window.location.href='https://friendsaward.000webhostapp.com/awards.php?q=17';</script>";
        }else{
      echo "Sorry your vote not updated ! , Do it later!";
    }
}

if (isset($_POST['choice17'])) {
	$answer17 = $_POST['choice17'];

	$q17 = "UPDATE awards SET scenu='$answer17' WHERE username='$username'";
    $d17 = mysqli_query($conn , $q17);
    if ($d17) {
        $q0 = "UPDATE awards SET status=1 WHERE username='$username'";
         $d0 = mysqli_query($conn , $q0);
         if($d0)
            echo "<script>window.location.href='https://friendsaward.000webhostapp.com/result.php';</script>";
        }else{
      echo "Sorry your vote not updated ! , Do it later!";
    }
}


 function get_quiz_html1(){

 	global $award1;
 	global $options;
 	$html1='';
    $html1.="<h1>Award - <span color='#FBFF00'>".$award1."</span></h1>";


 	$html1.="<br/>";

 	foreach ($options as $k => $v) {
 		$html1.='<h3><input type="radio" name="choice1" value="'.$v.'" onchange="this.form.submit();"  >'.$k.'</h3 ><br/>';
 	}

 	return $html1;
 }

 function get_quiz_html2(){

 	global $award2;
 	global $options;
 	$html2='';
     $html2.="<h1>Award - <span color='#FBFF00'>".$award2."</span></h1>";

 	$html2.="<br/>";

 	foreach ($options as $k => $v) {
 		$html2.='<h3><input type="radio" name="choice2" value="'.$v.'" onchange="this.form.submit();"  >'.$k.'</h3 ><br/>';
 	}

 	return $html2;
 }

  function get_quiz_html3(){

 	global $award3;
 	global $options;
 	$html3='';
     $html3.="<h1>Award - ".$award3."</h1>";

 	$html3.="<br/>";

 	foreach ($options as $k => $v) {
 		$html3.='<h3><input type="radio" name="choice3" value="'.$v.'" onchange="this.form.submit();"  >'.$k.'</h3 ><br/>';
 	}

 	return $html3;
 }
  function get_quiz_html4(){

 	global $award4;
 	global $options;
 	$html4='';
     $html4.="<h1>Award - ".$award4."</h1>";

 	$html4.="<br/>";

 	foreach ($options as $k => $v) {
 		$html4.='<h3><input type="radio" name="choice4" value="'.$v.'" onchange="this.form.submit();"  >'.$k.'</h3 ><br/>';
 	}

 	return $html4;
 }
  function get_quiz_html5(){

 	global $award5;
 	global $options;
 	$html5='';
     $html5.="<h1>Award - ".$award5."</h1>";

 	$html5.="<br/>";

 	foreach ($options as $k => $v) {
 		$html5.='<h3><input type="radio" name="choice5" value="'.$v.'" onchange="this.form.submit();"  >'.$k.'</h3 ><br/>';
 	}

 	return $html5;
 }
  function get_quiz_html6(){

 	global $award6;
 	global $options;
 	$html6='';
     $html6.="<h1>Award - ".$award6."</h1>";

 	$html6.="<br/>";

 	foreach ($options as $k => $v) {
 		$html6.='<h3><input type="radio" name="choice6" value="'.$v.'" onchange="this.form.submit();"  >'.$k.'</h3 ><br/>';
 	}

 	return $html6;
 }
  function get_quiz_html7(){

 	global $award7;
 	global $options;
 	$html7='';
     $html7.="<h1>Award - ".$award7."</h1>";

 	$html7.="<br/>";

 	foreach ($options as $k => $v) {
 		$html7.='<h3><input type="radio" name="choice7" value="'.$v.'" onchange="this.form.submit();"  >'.$k.'</h3 ><br/>';
 	}

 	return $html7;
 }
  function get_quiz_html8(){

 	global $award8;
 	global $options;
 	$html8='';
     $html8.="<h1>Award - ".$award8."</h1>";

 	$html8.="<br/>";

 	foreach ($options as $k => $v) {
 		$html8.='<h3><input type="radio" name="choice8" value="'.$v.'" onchange="this.form.submit();"  >'.$k.'</h3 ><br/>';
 	}

 	return $html8;
 }
  function get_quiz_html9(){

 	global $award9;
 	global $options;
 	$html9='';
     $html9.="<h1>Award - ".$award9."</h1>";

 	$html9.="<br/>";

 	foreach ($options as $k => $v) {
 		$html9.='<h3><input type="radio" name="choice9" value="'.$v.'" onchange="this.form.submit();"  >'.$k.'</h3 ><br/>';
 	}

 	return $html9;
 }
  function get_quiz_html10(){

 	global $award10;
 	global $options;
 	$html10='';
     $html10.="<h1>Award - ".$award10."</h1>";

 	$html10.="<br/>";

 	foreach ($options as $k => $v) {
 		$html10.='<h3><input type="radio" name="choice10" value="'.$v.'" onchange="this.form.submit();"  >'.$k.'</h3 ><br/>';
 	}

 	return $html10;
 }
  function get_quiz_html11(){

 	global $award11;
 	global $options;
 	$html11='';
     $html11.="<h1>Award - ".$award11."</h1>";

 	$html11.="<br/>";

 	foreach ($options as $k => $v) {
 		$html11.='<h3><input type="radio" name="choice11" value="'.$v.'" onchange="this.form.submit();"  >'.$k.'</h3 ><br/>';
 	}

 	return $html11;
 }
  function get_quiz_html12(){

 	global $award12;
 	global $options;
 	$html12='';
     $html12.="<h1>Award - ".$award12."</h1>";

 	$html12.="<br/>";

 	foreach ($options as $k => $v) {
 		$html12.='<h3><input type="radio" name="choice12" value="'.$v.'" onchange="this.form.submit();"  >'.$k.'</h3 ><br/>';
 	}

 	return $html12;
 }
  function get_quiz_html13(){

 	global $award13;
 	global $options;
 	$html13='';
     $html13.="<h1>Award - ".$award13."</h1>";

 	$html13.="<br/>";

 	foreach ($options as $k => $v) {
 		$html13.='<h3><input type="radio" name="choice13" value="'.$v.'" onchange="this.form.submit();"  >'.$k.'</h3 ><br/>';
 	}

 	return $html13;
 }
  function get_quiz_html14(){

 	global $award14;
 	global $options;
 	$html14='';
     $html14.="<h1>Award - ".$award14."</h1>";

 	$html14.="<br/>";

 	foreach ($options as $k => $v) {
 		$html14.='<h3><input type="radio" name="choice14" value="'.$v.'" onchange="this.form.submit();"  >'.$k.'</h3 ><br/>';
 	}

 	return $html14;
 }
  function get_quiz_html15(){

 	global $award15;
 	global $options;
 	$html15='';
     $html15.="<h1>Award - ".$award15."</h1>";

 	$html15.="<br/>";

 	foreach ($options as $k => $v) {
 		$html15.='<h3><input type="radio" name="choice15" value="'.$v.'" onchange="this.form.submit();"  >'.$k.'</h3 ><br/>';
 	}

 	return $html15;
 }
  function get_quiz_html16(){

 	global $award16;
 	global $options;
 	$html16='';
     $html16.="<h1>Award - ".$award16."</h1>";

 	$html16.="<br/>";

 	foreach ($options as $k => $v) {
 		$html16.='<h3><input type="radio" name="choice16" value="'.$v.'" onchange="this.form.submit();"  >'.$k.'</h3 ><br/>';
 	}

 	return $html16;
 }
  function get_quiz_html17(){

 	global $award17;
 	global $options;
 	$html17='';
     $html17.="<h1>Award - <span color='#FBFF00'>".$award17."</span></h1>";

 	$html17.="<br/>";

 	foreach ($options as $k => $v) {
 		$html17.='<h3><input type="radio" name="choice17" value="'.$v.'" onchange="this.form.submit();"  >'.$k.'</h3 ><br/>';
 	}

 	return $html17;
 }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Bhuvi Web</title>
    <link rel="icon shortcut" type="images/jpg" href="images/bhuvi1.jpg" sizes="16X16">
<style type="text/css">
	body{
		margin:0;
		padding: 0;
		background-color: #fff;
	}
	.block{
		width:70%;
		height:40rem;
		background: #007bff;
	}
	.question{
	    margin-top:-40rem;
	}
</style>
</head>
<body>
	<div class="block"></div>
	<div class="question">
	<?php
    	echo "<a href='home.php'><h5>Click To Go Back</h5></a>";
      if($_GET['q']==2){
      	?>
      	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   	    <?php
   	 	    echo get_quiz_html2();
   	    ?>
   		</form>
      <?php 
  	  }else if($_GET['q']==3){
      	?>
      	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   	    <?php
   	 	    echo get_quiz_html3();
   	    ?>
   		</form>
      <?php 
  	  }else if($_GET['q']==4){
      	?>
      	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   	    <?php
   	 	    echo get_quiz_html4();
   	    ?>
   		</form>
      <?php 
  	  }else if($_GET['q']==5){
      	?>
      	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   	    <?php
   	 	    echo get_quiz_html5();
   	    ?>
   		</form>
      <?php 
  	  }else if($_GET['q']==6){
      	?>
      	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   	    <?php
   	 	    echo get_quiz_html6();
   	    ?>
   		</form>
      <?php 
  	  }else if($_GET['q']==7){
      	?>
      	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   	    <?php
   	 	    echo get_quiz_html7();
   	    ?>
   		</form>
      <?php 
  	  }else if($_GET['q']==8){
      	?>
      	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   	    <?php
   	 	    echo get_quiz_html8();
   	    ?>
   		</form>
      <?php 
  	  }else if($_GET['q']==9){
      	?>
      	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   	    <?php
   	 	    echo get_quiz_html9();
   	    ?>
   		</form>
      <?php 
  	  }else if($_GET['q']==10){
      	?>
      	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   	    <?php
   	 	    echo get_quiz_html10();
   	    ?>
   		</form>
      <?php 
  	  }else if($_GET['q']==11){
      	?>
      	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   	    <?php
   	 	    echo get_quiz_html11();
   	    ?>
   		</form>
      <?php 
  	  }else if($_GET['q']==12){
      	?>
      	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   	    <?php
   	 	    echo get_quiz_html12();
   	    ?>
   		</form>
      <?php 
  	  }else if($_GET['q']==13){
      	?>
      	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   	    <?php
   	 	    echo get_quiz_html13();
   	    ?>
   		</form>
      <?php 
  	  }else if($_GET['q']==14){
      	?>
      	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   	    <?php
   	 	    echo get_quiz_html14();
   	    ?>
   		</form>
      <?php 
  	  }else if($_GET['q']==15){
      	?>
      	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   	    <?php
   	 	    echo get_quiz_html15();
   	    ?>
   		</form>
      <?php 
  	  }else if($_GET['q']==16){
      	?>
      	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   	    <?php
   	 	    echo get_quiz_html16();
   	    ?>
   		</form>
      <?php 
  	  }else if($_GET['q']==17){
      	?>
      	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   	    <?php
   	 	    echo get_quiz_html17();
   	    ?>
   		</form>
      <?php 
  	  }else{
  	  	?>
   <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   	 <?php
   	 	echo get_quiz_html1();
   	 ?>
   </form>
   <?php
	}
   ?>
   </div>
</body>
</html>

<?php
  }
?>