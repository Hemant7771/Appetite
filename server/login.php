<?php


include 'db.php';


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $pass = $_POST["password"];

    $select="SELECT * from `users` ";

    $allemails= mysqli_query($conn, $select);
    
    $no_of_row=mysqli_num_rows($allemails);

    if ($no_of_row>0) {
        while ($row = mysqli_fetch_assoc($allemails)) {
            if ($row["email"]==$email && $row["password"]==$pass){

                session_start();
                $_SESSION["username"]=$row["userName"];
                $_SESSION["userid"]=$row["userId"];
                header("Location:http://localhost/restaurant/client/index.php");

            }
            else{
                    echo "Invalid credentials";
            }
        }
    }

    

   
    
}

mysqli_close($conn);
?>


