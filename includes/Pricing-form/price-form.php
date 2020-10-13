<?php
session_start();

          if($_SERVER['REQUEST_METHOD'] != 'POST') {
            header('Location: /koszt-strony-internetowej');
	          exit();
          } else {
              $captcha = $_POST['g-recaptcha-response'];
              $privatekey = "6LcVG7YZAAAAAD6DK6irW1JEaruAeZXwpQREDmZG";
              $url = 'https://www.google.com/recaptcha/api/siteverify';
              $data = array(
                  'secret' => $privatekey,
                  'response' => $captcha,
                  'remoteip' => $_SERVER['REMOTE_ADDR']
              );

              $curlConfig = array(
                  CURLOPT_URL => $url,
                  CURLOPT_POST => true,
                  CURLOPT_RETURNTRANSFER => true,
                  CURLOPT_POSTFIELDS => $data
              );

              $ch = curl_init();
              curl_setopt_array($ch, $curlConfig);
              $response = curl_exec($ch);
              curl_close($ch);

              $jsonResponse = json_decode($response);

            if($jsonResponse->success === false) {
              $_SESSION['msg_error'] = "Błąd recapcha";
              header("Location: /koszt-strony-internetowej");
              exit();
            } else {
              if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['subject']) ||empty($_POST['message'])) {
                $_SESSION['msg_error'] = "Pola formularza nie mogą być puste!";
                header('Location: /koszt-strony-internetowej');
    	          exit();
              } else {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];
            $date = date("d-m-Y");

  					include_once '../PHPMailer/src/Exception.php';
  					include_once '../PHPMailer/src/PHPMailer.php';
  					include_once '../PHPMailer/src/SMTP.php';

                 $customerMessage = file_get_contents('../Mailing/zapytanie-klienta.php');

  							 $customerMessage = str_replace('%name%', $name, $customerMessage);
  							 $customerMessage = str_replace('%email%', $email, $customerMessage);
  							 $customerMessage = str_replace('%phone%', $phone, $customerMessage);
  							 $customerMessage = str_replace('%subject%', $subject, $customerMessage);
  							 $customerMessage = str_replace('%message%', $message, $customerMessage);


  							 $mail = new \PHPMailer\PHPMailer\PHPMailer(true);

  				try {
  				   //Server settings
  				    $mail->isSMTP();                                            // Send using SMTP
  				    $mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through
  				    $mail->SMTPAuth   = true;
  						//$mail->SMTPSecure = 'tls';                         // Enable SMTP authentication
  				    $mail->Username   = 'office.rbcode@gmail.com';               // SMTP username
  				    $mail->Password   = 'Robson1988@#';
  						$mail->CharSet 		= "UTF-8";                     // SMTP password
  				    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
  				    $mail->Port       = 587;                                    // TCP port to connect to

  				    //Recipients
  				    $mail->setFrom('office.rbcode@gmail.com', 'Profesjonalne strony internetowe | Rbcode.pl');
  				    $mail->addAddress('robert.bajoo@gmail.com');   			    // Add a recipient
  				    $mail->addReplyTo($email, $name);

  				    // Content
  				    $mail->isHTML(true);                                       // Set email format to HTML
  				    $mail->Subject = 'Rbcode.pl - '.$subject;
  						$mail->MsgHTML($customerMessage);
  				    $mail->Send();

              //Drugi szablon email dla klienta
              //$mail->ClearAllRecipients();
              //$mail->MsgHTML($adminMessage);
              // Add the admin address
              //$mail->AddAddress('office.rbcode@gmail.com');
              //$mail->Send();


  							$_SESSION['msg_success'] = 'Twoja wiadomość została wysłana. Wkrótce skontaktujemy się z Tobą.';
  							header('Location: /');
  							exit();
  				} catch (Exception $e) {
  							$_SESSION['msg_error'] = "Błąd".$e;
  							header('Location: /koszt-strony-internetowej');
  							exit();
				}
      }
    }
  }
?>
