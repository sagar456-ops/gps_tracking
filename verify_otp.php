<?php
session_start();
include('database.php');

$otp = $_POST['otp'];
$number = $_SESSION['number'];
if (isset($_POST['otp_btn_verify'])) {



      $con = mysqli_connect('localhost', 'sagar', 'Iamsagar456@');
      mysqli_select_db($con, 'sagar');

      $query = mysqli_query($con, "SELECT Otp from usertable where number=$number");

      while ($row = mysqli_fetch_array($query)) {
            $l = $row['Otp'];
      }
      if (!$query) {
            // If there was an error in the SQL query, print out the error message
            echo "Error: " . mysqli_error($con);
      } else {
            // If the query was successful, check the number of affected rows
            if (strcmp($otp, $l) == 0) {
                  //   echo "sucess";
                  $query_update = mysqli_query($con, "UPDATE usertable set otp_status=1 where number=$number");
?>

                  <script>
                        window.location.href = 'main.php';
                        alert("OTP verified");
                  </script>;"
            <?php
            } else {
                  //    echo "error";
            ?>
                  <script>
                        alert("Try again");
                        window.location.href = 'main.php';
                  </script>;"
<?php
            }
      }
}
?>