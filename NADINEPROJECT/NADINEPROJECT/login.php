<?php
session_start();
include('config.php');

$email = $_POST["email"];
$password = $_POST["password"];

    $result = mysqli_query( $con,"SELECT * FROM users WHERE email ='$email' AND password = '$password '");
    
    if($result){

        if ($row = mysqli_num_rows($result) > 0) {
            header("Location: homepage.php");
        } else{
        header("Location: Login.html");

       }   
}