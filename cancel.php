<?php
/* include 'include/header.php'; */

?>

<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <title>Cancel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <meta charset="UTF-8">
</head>
<body>
<h1>Payment Cancelled</h1>
<p>You have chosen to cancel your transaction</p>

<form action="<?php /* echo NGROK_URL; */ ?>/Assignment3/sandbox.php" method="get">
    <button type="submit" class="btn btn-primary">Return to Home Page</button>


    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</form>
</body>
</html>

<?php
/* include 'include/footer.php'; */
?>
