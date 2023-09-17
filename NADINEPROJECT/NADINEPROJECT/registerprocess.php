<?php 
session_start();
   include('config.php');
   $name = $_POST["name"];
   $email = $_POST["email"];
   $username = $_POST["username"];
   $password = $_POST["password"];
   $re_password = $_POST["re_password"];

 

   $sql = "insert into users(name,email,username,password) values('$name','$email','$username' ,'$password');";
     $myquery = mysqli_query($con, $sql);
     if( $myquery ){
        header("Location: homepage.php");
        $_SESSION['username'] = $username;
    } else{
   echo "Error! please try again later!";
    // Close connection
    mysqli_close($con);
   
   }
                      
        
       
 



    ?>



   
