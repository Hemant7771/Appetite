<?php

include 'db.php';

if (isset($_POST["book_now"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $date = $_POST["date"];
    $nop = $_POST["no_of_people"];
    $time = $_POST["time"];

    // Check if a booking already exists for the same date and time
    $selectQuery = "SELECT * FROM `booking` WHERE `date` = '$date' AND `time` = '$time'";
    $data = mysqli_query($conn, $selectQuery);

    if (mysqli_num_rows($data) > 0) {
        echo "<script>alert('Table already booked for this date and time!')</script>";
    } else {
        // If no existing booking found, insert the new booking
        $q = "INSERT INTO `booking` (`name`, `email`, `date`, `time`, `no_of_people`) VALUES ('$name','$email','$date','$time','$nop')";
        $res = mysqli_query($conn, $q);

        if ($res) {
            echo "<script>alert('Table booked successfully!')</script>";
        } else {
            echo "<script>alert('Something went wrong!')</script>";
        }
    }
}

?>