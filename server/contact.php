<?php

include 'db.php';
session_start();

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$u = $_SESSION["userid"];
if (is_null($u)) {
    header("Location:http://localhost/restaurant/client/login_page.php");
}
else{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $msg = $_POST["msg"];
        $userId = $_SESSION["userid"];
    
        $sql = "INSERT INTO `contact` (userId,userName, email, msg) VALUES ('$userId','$username', '$email', '$msg')";
        $res=mysqli_query($conn,$sql);
    
        if ($res) {

            echo "message send successfully";

        } else {
    
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);

        }
    }
}



mysqli_close($conn);
