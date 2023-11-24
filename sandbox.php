<?php
include 'include/header.php';

$price = 150.00;
$hstRate = 0.13; // HST rate (13% in Ontario, for example)
$totalAmount = $price + ($price * $hstRate);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sneakerhead ICE 5</title>
</head>
<body>
<h1>Way Of Wade South Beach 10's</h1>
<img src="imagesowSouthBeach10.jpg" alt="shoe">
<p>&nbsp;&nbsp;&nbsp;$<?php echo number_format($price, 2); ?> CAN (including HST)</p>

<!-- PayPal payment button form -->
<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
    <!-- Identify your business so that you can collect the payments -->
    <!-- TODO: Replace this email with your sandbox email -->
    <input type="hidden" name="business" value="sb-qhwza28197595@business.example.com">

    <!-- Specify a Buy Now button -->
    <input type="hidden" name="cmd" value="_xclick">

    <!-- Specify details about the item that buyers will purchase -->
    <!-- TODO: Replace these value -->
    <input type="hidden" name="item_name" value="Product XYZ">
    <input type="hidden" name="amount" value="<?php echo $totalAmount; ?>">
    <input type="hidden" name="currency_code" value="CAD">

    <!-- Return and notification URLs -->
    <input type="hidden" name="return" value="https://b398-142-113-132-202.ngrok-free.app/week10/success.php">
    <input type="hidden" name="cancel_return" value="https://b398-142-113-132-202.ngrok-free.app/week10/cancel.php">
    <input type="hidden" name="notify_url" value="https://b398-142-113-132-202.ngrok-free.app/week10/ipn_listener.php">

    <!-- Display the payment button -->
    <input type="image" name="submit" border="0"
           src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
           alt="PayPal - The safer, easier way to pay online">
    <img alt="" border="0" width="1" height="1"
         src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">
</form>
</body>
</html>

<?php
include 'include/footer.php';
?>
