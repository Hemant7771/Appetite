<?php
// session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>contact page</h1>
    <form method="post">
        usrname : <input type="text" name="username"> <br>
        email : <input type="email" name="email"> <br>
        msg : <textarea name="msg" id="" cols="30" rows="10"></textarea> <br>
        <input type="submit" name="submit" value="contact us">
    </form>

    <?php
include "../server/contact.php";
?>
</body>
</html>