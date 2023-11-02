<?php
include 'db.php';

if (isset($_POST["book_now"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $date = $_POST["date"];
    $nop = $_POST["no_of_people"];
    $time = $_POST["time"];

    $start_time = strtotime($time);
    $end_time = strtotime($time) + 3600;
    $start_time_formatted = date("H:i:s", $start_time);
    $end_time_formatted = date("H:i:s", $end_time);

    $selectQuery = "SELECT * FROM `booking` WHERE `date` = '$date' AND ((`time` >= '$start_time_formatted' AND `time` <= '$end_time_formatted') OR (`time` >= '$end_time_formatted' AND `time` <= (DATE_ADD('$end_time_formatted', INTERVAL 1 HOUR))))";
    $data = mysqli_query($conn, $selectQuery);

    if (mysqli_num_rows($data) > 0) {
        echo "<script>alert('Table already booked for this date and time range or within 1 hour of an existing booking!')</script>";
    } else {
        $q = "INSERT INTO `booking` (`name`, `email`, `date`, `time`, `no_of_people`) VALUES ('$name','$email','$date','$time','$nop')";
        $res = mysqli_query($conn, $q);

        if ($res) {
            echo "<script>location.href = 'http://localhost/Appetite/client/payment.php'</script>";
        } else {
            echo "<script>alert('Something went wrong!')</script>";
        }
    }
}
?>
