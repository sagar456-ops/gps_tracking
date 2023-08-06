<?php
// Database connection parameters
// Enable error reporting for all errors and warnings
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = 'localhost';
$username = 'sagar';
$password = 'Iamsagar456@';
$database = 'sagar'; // Replace this with your actual database name

// Create a connection to the database
$con = mysqli_connect($host, $username, $password, $database);

// Check if the connection was successful
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


// Check if the form is submitted
if (isset($_POST['feed_btn'])) {
    // Get the form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $feedback = $_POST["feedback"];

    // Sanitize and validate the data (you may add more validation based on your requirements)
    $name = mysqli_real_escape_string($con, $name);
    $email = mysqli_real_escape_string($con, $email);
    $feedback = mysqli_real_escape_string($con, $feedback);

    // Build the SQL query to insert data into the "feedback" table
    $sql = "INSERT INTO feedback (name, email, feedback) VALUES ('$name', '$email', '$feedback')";

    // Execute the query and check if it was successful
    if (mysqli_query($con, $sql)) {
        ?>

            <script>
               alert("Feedback sent!!");
                window.location.href = 'contact.php';
            </script>
<?php
    } 
    else {
?>
            <script>
               alert("Failed Try again!!");
                window.location.href = 'contact.php';
            </script>
<?php
}
}

// Close the database connection
mysqli_close($con);
?>