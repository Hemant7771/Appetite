<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/payment.css">
</head>

<body>
    <form method="POST" class="payment_container">
        <div class="payment_box">
            <h1>Payment </h1>
            <label for="txtAmount">Amount:</label>
            <input type="text" id="txtAmount" value="Rs. 999" readonly />
            <br />
            <label for="txtCardNumber">Card Number:</label>
            <input type="text" name="txtCardNumber" id="txtCardNumber" required />
            <br />
            <label for="txtExpiryDate">Expiry Date:</label>
            <input type="text" name="txtExpiryDate" id="txtExpiryDate" required />
            <br />
            <label for="txtCVV">CVV:</label>
            <input type="text" name="txtCVV" id="txtCVV" required />
            <br />
            <input type="submit" name="pay" id="btnSubmit" value="Pay">
        </div>
    </form>
</body>

</html>
<?php
if (isset($_POST["pay"])) {
    $cardNumber = $_POST['txtCardNumber'];
    $expiryDate = $_POST['txtExpiryDate'];
    $cvv = $_POST['txtCVV'];


    if (strlen($cardNumber) !== 12 || !is_numeric($cardNumber)) {
        echo "<script>
        alert('Card number must be 12 digits!');
    </script>";

    } elseif (!preg_match('/^(0[1-9]|1[0-2])\/\d{2}$/', $expiryDate)) {
        echo "<script>
    alert('Expiry date must be in MM/YY format!');
</script>";

    } elseif (strlen($cvv) !== 3 || !is_numeric($cvv)) {
        echo "<script>
    alert('CVV must be 3 digits!');
</script>";

    } else {

        echo "<script>
        location.href = 'http://localhost/Appetite/client/success.php';
        </script>";
    }
}
?>
