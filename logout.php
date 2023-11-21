<?php
require_once 'lib/db_php.php';
include 'include/header.php';
?>

<?php
/**
 * File: logout.php
 *
 * Purpose:
 * - This file is responsible for handling user logout.
 * - Upon visiting this file, the user's session should be destroyed and they should be redirected to the homepage.
 *
 * To-Do:
 * 1. Ensure that the session is started.
 * 2. Destroy the user's session.
 * 3. Redirect the user to the homepage or the login page.
 *
 * Remember to:
 * - Handle session securely to prevent any potential session hijacking.
 */
?>

<?php
logOffUser();
exit();
?>

<?php
include 'include/footer.php';
?>