<?php


if (!isset($_SESSION["user"])) {
    echo 'Unauthorised';
    header("Location: index.html");  
    print("invalid user");
    //exit();
  }

?>