
<?php 

if(isset($_POST['submit'])){

    $username = $_POST["username"];
    $email = $_POST['password'];
    $phone = $_POST['phone'];
    $password = md5($_POST['password']);

    $sql = "insert tno new_table($username,$email,$password)
            values('$usernsmr','$email','$password',)";

    $result = mysql_query($conn,$sql);

      

}


?>