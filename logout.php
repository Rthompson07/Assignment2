<?php
// logout.php

// Include necessary files like db.php and functions.php
require_once 'lib/db_php.php';
require_once 'lib/functions.php';

// Start the session if it hasn't been started already
// session_start();
// echo "Logging out!";

// Check for the logout parameter in the URL
if (isset($_GET['logout']) && $_GET['logout'] === 'success') {
    setFlashMessage("Logout successful");
    $logoutMessage = getFlashMessage();
    logEvent();
} else {
    $logoutMessage = "";
}

// Display the "Log Out Successful!" message from session variable
if (!empty($logoutMessage)) {
    echo '<div class="alert alert-success" role="alert">' . $logoutMessage . '</div>';
    unset($_SESSION['logout_message']); // Clear the message after displaying
}
?>

<!-- Include header content if needed -->
<!-- Include the JavaScript code for the delay and redirect -->
<script>
    setTimeout(function() {
        window.location.href = 'index.php';
    }, 5000); // 5000 milliseconds (5 seconds)
</script>
