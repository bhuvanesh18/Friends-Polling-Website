<?php	
	function sendOTP($email,$otp) {
		require('phpmailer/class.phpmailer.php');
		require('phpmailer/class.smtp.php');
	
		$message_body = "One Time Password For Your Bhuvi Web Account Login Is:<br/><br/>" . $otp;
		$mail = new PHPMailer();
	   $mail->AddReplyTo('bhuvicsemkce@gmail.com','Bhuvi Bhuvi');
                                $mail->SetFrom('bhuvicsemkce@gmail.com','Bhuvi Bhuvi');
                                $mail->AddAddress($email);
                                $mail->Subject= "OTP to Login";
                                $mail->MsgHTML($message_body);
                                $result=$mail->Send();
                                if(!$result) {
                                    echo "Mailer Error: " . $mail->ErrorInfo;
                                }else {
                                    	return $result;  
                                } 
		
	
		
		
		
	
                             
		
		
		
		
		
		
		
		
		
		
	}
?>