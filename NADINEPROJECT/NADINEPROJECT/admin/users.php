<?php
require_once '../config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>users</title>
    <link rel="stylesheet" href="adminpage.css">
</head>
<body>
    <center>
        <div class="exp">ALL USERS  ARE HERE</div>
        <table border="1" style="border-collapse:collapse; width: 100%;" >
            <tr>
                <th>No</th><th>NAMES</th><th>Email</th><th>Username</th><th>password</th> <th>Actions</th>
            </tr>
            <?php
       
            $result = mysqli_query( $con,"SELECT * FROM users");
           
            while( $row = mysqli_fetch_assoc($result)){      			
    
             echo  " <tr> <td>".$row['id']."</td> <td>".$row['name']."</td> <td>".$row['email']."</td> <td>".$row['username']."</td> <td>".$row['password']."</td> <td> <a href='editusers.php?id= ".$row['id']."' >Edit</a> | <button type='submit'>Delete</button></td></tr>";
    
    
            }
            
             mysqli_close($con) ;
              
           
     
           ?>
        
        </table>
    </center>
</body>
</html>