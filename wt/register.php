
<?php 



 

      



  
if( ( !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['fullname']) && !empty($_POST['username']) ) ) {  
    $email=$_POST['email'];  
    $passwordd=$_POST['password'];  
    $fullname=$_POST['fullname'];  
    $usernamee=$_POST['username']; 
  
    $servername='mysql-67581-0.cloudclusters.net:19366';
    $username='admin';
    $password='a3JILML2';
    $dbname = "web";
    $con=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$con){
          die('Could not Connect MySql Server:' .mysql_error());
        }
  

        $sql = "INSERT INTO account (fullname, password, email, username)
VALUES ('$fullname', '$passwordd', '$email', '$usernamee')";

if ($con->query($sql) === TRUE) {
  echo "New account record created successfully";
  header("Location: login.html");  
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
  header("Location: register.html");  
}

$con->close();

}


?>