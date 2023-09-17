<?php 
session_start();
   include('../config.php');

  if (isset($_SESSION[$row['id']])){
   $name = $_POST["name"];
   $email = $_POST["email"];
   $username = $_POST["username"];
   $password = $_POST["password"];
   $id = $_SESSION[$row['id']];
  $sql = "update users  set name = $name,email =$email ,username =$username ,password = $password where id = $id;";
     $myquery = mysqli_query($con, $sql);
     if( $myquery ){
        header("Location: adminpage.html");

    } else{
   echo "Error! please try again later!";
    // Close connection
    mysqli_close($con);
   
   }}

 

   
                      
        
       
 



    ?>