<?php

include 'db.php';


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $pass = $_POST["password"];
    


    $sql = "INSERT INTO `users` (userName, email, password) VALUES ('$username', '$email', '$pass')";

    $select="SELECT * from `users` ";

    $allemails= mysqli_query($conn, $select);
    
    $row=mysqli_num_rows($allemails);




    if ($row>0) {
        while ($row = mysqli_fetch_assoc($allemails)) {
            if ($row["email"]==$email){

                echo "user already exist";

            }
            else{
                $res=mysqli_query($conn, $sql);
                if ($res ) {
                    echo "User added successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            }
        }
    }
    else{
        $res=mysqli_query($conn, $sql);
        if ($res ) {
            echo "User added successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    

   
    
}

mysqli_close($conn);
?>


