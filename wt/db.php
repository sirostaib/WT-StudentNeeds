<?php
    $servername='mysql-67581-0.cloudclusters.net:19366';
    $username='admin';
    $password='a3JILML2';
    $dbname = "web";
    $con=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$con){
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>