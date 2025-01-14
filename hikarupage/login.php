<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "account";

$con = mysqli_connect($servername,$username,$password,$database);

$email=$_POST["mail"];
$pass=$_POST["pass"];

if($email!=""&&$pass!=""){

$sql_query = "SELECT id,email,password,surname,name FROM account";

$result=mysqli_query($con,$sql_query);

$count = 0;

if(mysqli_num_rows($result)>0){

    while($row = mysqli_fetch_assoc($result)){

        if(strcasecmp($row['email'],$email)===0&&strcasecmp($row['password'],$pass)===0){
            $_SESSION['id'] = $row['id'];
            $_SESSION['name']=$row['name'];
            $_SESSION['surname']=$row['surname'];
            break;
        }
        
    }

}

if(!isset($_SESSION['id'])){
    header("Location: account.php");
    $_SESSION['error'] = 1;
}else if(isset($_SESSION['id'])&&isset($_SESSION['name'])&&isset($_SESSION['surname'])){
    
    header("Location: loggedin.php");
}
}else{
    $_SESSION['error'] = 1;
    header("Location: account.php");
}



?>


