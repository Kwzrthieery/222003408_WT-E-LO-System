<?php
// Include the database connection file
include '../db_conn.php';

// Function to verify user login
function verifyLogin($conn, $username, $password) {
    // Sanitize input to prevent SQL injection
    $username = $conn->real_escape_string($username);
    $password = $conn->real_escape_string($password);

    // Query to verify login credentials
    $sql = "SELECT * FROM login_citizen WHERE Username='$username' AND Password='$password'";
    $result = $conn->query($sql);

    // Check if a row with the given username and password exists
    if ($result->num_rows > 0) {
        // Login successful
        return true;
    } else {
        // Login failed
        return false;
    }
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from POST request
    $username = $_POST['Username'];
    $password = $_POST['Password'];

    // Verify login credentials
    if (!empty($username) && !empty($password)) {
        if (verifyLogin($conn, $username, $password)) {
            // Show success message and redirect after a delay
            echo "<script>
                    setTimeout(function() {
                        alert('Login successful');
                        window.location.href = '../citizen/index.php';
                    }, 500); // 2000 milliseconds = 0.5 seconds
                  </script>";
        } else {
            // Show error message
            echo "<script>alert('Invalid username or password');</script>";
        }
    } else {
        // Show error message if fields are empty
        echo "<script>alert('Username and password are required');</script>";
    }
} else {
    // Redirect to login page if accessed directly
    header("Location: ../login.html");
    exit();
}
?>
