<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php'; // Load the Twilio PHP library

use Twilio\Rest\Client;


include('database.php');
if (isset($_POST['otp_btn'])) {
      // Your Account Sid and Auth Token from twilio.com/console
      $account_sid = 'AC3c1d10e42f262bb4b2c83f2655e9a32b';
      $auth_token = 'f82d2ed4940d8830ade2409d7b43b34b';
      $twilio_number = '+17623095328';

      $client = new Client($account_sid, $auth_token);


      // Assuming you have established a database connection
      $con = mysqli_connect('localhost', 'sagar', 'Iamsagar456@');
      mysqli_select_db($con, 'sagar');

      $user_phone_number = $_POST['phone']; // Replace with the user's phone number

      // Generate a random 6-digit OTP
      $otp = rand(100000, 999999);



      // Update the OTP in your database against the user's phone number
      $query = mysqli_query($con, "UPDATE usertable SET Otp = '$otp' WHERE number = '$user_phone_number'");

      if (!$query) {
            // If there was an error in the SQL query, print out the error message
            echo "Error: " . mysqli_error($con);
      } else {
            // If the query was successful, check the number of affected rows
            if (mysqli_affected_rows($con) > 0) {



                  // OTP successfully updated in database
?>
                  <script>
                        alert("Check your phone for OTP");
                        window.location.href = 'main.php';
                  </script>;"


<?php
            } else {
                  // No rows were affected, meaning the phone number was not found in the database
                  echo "Fail: Phone number not found";
            }
      }
      // Send the OTP to the user's phone number
      $client->messages->create(
            $user_phone_number,
            array(
                  'from' => $twilio_number,
                  'body' => 'Your OTP is for the account ' . $otp
            )
      );

      // Generate a random 6-digit OTP

      mysqli_close($con);
}
