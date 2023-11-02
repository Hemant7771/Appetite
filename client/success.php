<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/payment.css">
</head>

<body>
    <form method="POST">

        <div class="success_container">
            <label id="success_name">Table booked Successfully !</label>
            <input type="submit" id="btnSubmit" value="Go to home page" name="goHome" />
        </div>
    </form>
</body>

</html>
<?php
    if(isset($_POST["goHome"])){
        echo "<script>
        location.href = 'http://localhost/Appetite/client/index.php';
    </script>";
    }
?>