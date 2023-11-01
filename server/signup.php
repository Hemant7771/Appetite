<?php

include 'db.php';


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    if (isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["password"])) {


        $username = $_POST["username"];
        $email = $_POST["email"];
        $pass = $_POST["password"];

        $sql = "INSERT INTO `users` (userName, email, password) VALUES ('$username', '$email', '$pass')";

        $select = "SELECT * from `users` ";

        $allemails = mysqli_query($conn, $select);

        $row = mysqli_num_rows($allemails);

        if ($row > 0) {
            while ($row = mysqli_fetch_assoc($allemails)) {
                if ($row["email"] == $email) {

                    echo "<script>alert('user already exist')</script>";

                } else {
                    $res = mysqli_query($conn, $sql);
                    if ($res) {
                        echo "<script>alert('User added successfully')</script>";

                    } else {
                        echo `<script>alert('Error: ' . $sql . '<br>' . mysqli_error($conn))</script>`;
                    }
                }
            }
        } else {
            $res = mysqli_query($conn, $sql);
            if ($res) {
                echo "<script>alert('User added successfully')</script>";

            } else {
                echo `<script>alert('Error: ' . $sql . '<br>' . mysqli_error($conn))</script>`;
            }
        } 
    } 
}

mysqli_close($conn);
?>