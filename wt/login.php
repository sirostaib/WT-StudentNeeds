<?php
session_start();
//require_once "db.php";

  
if(!empty($_POST['inputEmail']) && !empty($_POST['inputPassword'])) {  
    $email=$_POST['inputEmail'];  
    $pass=$_POST['inputPassword'];  
  
    $servername='mysql-67581-0.cloudclusters.net:19366';
    $username='admin';
    $password='a3JILML2';
    $dbname = "web";
    $con=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$con){
          die('Could not Connect MySql Server:' .mysql_error());
        }
  
    $query=mysqli_query($con, "SELECT * FROM account WHERE email='".$email."' AND password='".$pass."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbusername=$row['email'];  
    $dbpassword=$row['password'];  
    }  
  
    if($email == $dbusername && $pass == $dbpassword)  
    {  
    session_start();  
    //$_SESSION['sess_user']=$user; 
    $_SESSION["user"] = $email;

echo "Session variables are set."; 
  
    /* Redirect browser */  
    header("Location: todolist.html");  
    }  
    } else {  
    echo "Invalid username or password!";  
    }  
  
} else {  
    echo "All fields are required!";  
}  




?>

