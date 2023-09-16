<?php

include 'db.php';

if (isset($_POST["book_now"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $date = $_POST["date"];
    $nop = $_POST["no_of_people"];
    $time = $_POST["time"];

    $start_time = strtotime($time) - 3600;
    $start_time = date("H:i:s", $start_time);

    $end_time = strtotime($time) + 3600;
    $end_time = date("H:i:s", $end_time);

    $selectQuery = "SELECT * FROM `booking` WHERE `date` = '$date' AND `time` BETWEEN '$start_time' AND '$end_time'";
    $data = mysqli_query($conn, $selectQuery);

    if (mysqli_num_rows($data) > 0) {
        echo "<script>alert('Table already booked for this date and time range!')</script>";
    } else {
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
