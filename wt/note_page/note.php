<?php
//print("wooow it is working!");

session_start();


$servername='mysql-67581-0.cloudclusters.net:19366';
$username='admin';
$password='a3JILML2';
$dbname = "web";
$con=mysqli_connect($servername,$username,$password,"$dbname");
  if(!$con){
      die('Could not Connect MySql Server:' .mysql_error());
    }


if(!$con)
{
    echo "there was an error in the connection";
}


$query = "SELECT * FROM notes where email = '" . $_SESSION["user"] . "';";
$result = mysqli_query($con, $query);

$xx = 0;
if($result){

    while($row = mysqli_fetch_array ($result)){

        $xx += 1;
        $data[] =$row;
        
    }
    if($xx != 0)
    echo json_encode($data);
    else print( "There seems to be an error!" );

}

else{
    print( "There seems to be an error!" );
}



?>