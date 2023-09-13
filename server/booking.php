<?php

include 'db.php';

if(isset($_POST["book_now"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $date = $_POST["date_time"];
    $nop = $_POST["no_of_people"];
    $spe_req = $_POST["special_req"];

    $q = "INSERT INTO `booking`(`name`, `email`, `date`, `no_of_people`, `special__req`) VALUES ('$name','$email','$date','$nop','$spe_req')";

    $res = mysqli_query($conn, $q);

    if($res){
        echo "<script>alert('Table booked successfully !')</script>";
    }
}

?>