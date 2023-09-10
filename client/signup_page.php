<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        usrname : <input type="text" name="username"> <br>
        email : <input type="email" name="email"> <br>
        passowrd : <input type="text" name="password"> <br>
        <input type="submit" name="submit" value="sign up">
    </form>
</body>
</html>

<?php

if(isset($_POST["submit"])){
    include "../server/signup.php";
}

?>