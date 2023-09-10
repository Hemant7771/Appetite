<?php

session_destroy();
$_SESSION["username"] =null;
$_SESSION["userid"]=null;
header("Location:http://localhost/Appetite/client/index.php");

?>