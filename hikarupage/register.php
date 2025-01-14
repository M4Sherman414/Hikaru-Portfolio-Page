<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "account";

$con = mysqli_connect($servername,$username,$password,$database);

$name=$_POST["name"];
$surname=$_POST["surname"];
$email=$_POST["mail"];
$password=$_POST["pass"];
$gender=$_POST["gender"];
$birthday=$_POST["days"];
$birthmonth=$_POST["months"];
$birthyear=$_POST["years"];

    $sql_query = "INSERT INTO account (name,surname,email,password,gender,birthday,birthmonth,birthyear) VALUES('$name','$surname','$email','$password','$gender','$birthday','$birthmonth','$birthyear')";

    if(mysqli_query($con,$sql_query)){
        header("Location: account.php");
    }else{  
        echo "failed!";
        header("Location: account.php");
    }




?>