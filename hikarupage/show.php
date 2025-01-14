<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "account";

$con = mysqli_connect($servername,$username,$password,$database);

$sql_query = "SELECT id,name FROM proto";

$result=mysqli_query($con,$sql_query);

if(mysqli_num_rows($result)>0){

    while($row = mysqli_fetch_assoc($result)){

        echo "ID : ".$row['id'].", Name : ".$row['name']."<br>";
        
    }

}




?>