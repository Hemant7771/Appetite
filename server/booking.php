<?php

include 'db.php';

// session_start();
// if($_SESSION['username']){
    
// }else{
//     header("Location:http://localhost/Appetite/client/login.php");
// }

if(isset($_POST["book_now"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $date = $_POST["date_time"];
    $nop = $_POST["no_of_people"];
    $spe_req = $_POST["special_req"];

    $q = "INSERT INTO `booking`(`name`, `email`, `date`, `no_of_people`, `special_req`) VALUES ('$name','$email','$date','$nop','$spe_req')";

    $res = mysqli_query($conn, $q);

    if($res){
        echo "<script>alert('Table booked successfully !')</script>";
    }else{
        echo "<script>alert('Something went wrong !')</script>";

    }
}

?>