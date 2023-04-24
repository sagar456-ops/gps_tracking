<?php
session_start();
include 'database.php';
if (isset($_POST['change_btn'])) {
      $id = $_POST['change_id'];     
      $query ="UPDATE orders set status = 0 WHERE orders.id = $id";
      $query_run = mysqli_query($con, $query);

      if ($query_run) {
?>
            <script>
                  alert('Account disabled');
                  window.location.href = 'adminpanel.php';
            </script>
      <?php

      } else {
      ?>
            <script>
                  alert('Error');
                  window.location.href = 'adminpanel.php?success';
            </script>
<?php
      }
}
?>