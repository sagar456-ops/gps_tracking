<?php
session_start();

ini_set('display_errors', '1');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

include('database.php');
if (isset($_POST['mail_btn'])) {

      $mail = new PHPMailer;
      //Enable SMTP debugging.
      $mail->SMTPDebug = 1;
      //Set PHPMailer to use SMTP.
      $mail->isSMTP();
      //Set SMTP host name                      
      $mail->Host = "smtp.gmail.com";
      //Set this to true if SMTP host requires authentication to send email
      $mail->SMTPAuth = true;
      //Provide username and password
      $mail->Username = "sagarrimal87@gmail.com";//Enter email
      $mail->Password = 'spatjfdenixphamp';//enter password
      //If SMTP requires TLS encryption then set it
      $mail->SMTPSecure = "tls";
      //Set TCP port to connect to
      $mail->Port = 587;
      $mail->From = "sagarrimal87@gmail.com";//Enter Email
      $mail->FromName = "GPS system";//Enter Name
      $mail->AddAddress($_POST['email']);
      $mail->isHTML(true);
      $mail->Subject = "Confirmation of account";
      $mail->Body = "<i>Your Account Has been confirmed...... visit http://localhost:8080/GPS_myrepo/gps_tracking/index1.php for login</i>";
      //$mail->AltBody = "This is the plain text version of the email content";

      if (!$mail->send()) {
           // echo"error";

?>
            <script>
               alert("Failed");
                window.location.href = 'managerpanel.php';
            </script>

      <?php
      } else {
          //  echo"Sucess";
      ?>
            <script>
                alert("Mail has been sent sucessfully");
                window.location.href = 'managerpanel.php';
            </script>

<?php
      }
}
?>