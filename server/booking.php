<?php

include 'db.php';

if(isset($_POST["book_now"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $date = $_POST["date"];
    $nop = $_POST["no_of_people"];
    $time = $_POST["time"];

    $q = "INSERT INTO `booking` (`name`, `email`, `date`, `time`, `no_of_people`) VALUES ('$name','$email','$date','$time','$nop')";

    $res = mysqli_query($conn, $q);

    if($res){
        echo "<script>alert('Table booked successfully !')</script>";
    }else{
        echo "<script>alert('Something went wrong !')</script>";

    }
}

?>