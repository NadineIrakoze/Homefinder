
 <?php
require_once '../config.php';
?>
   
   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="landing.css">
    <!-- <link rel="stylesheet" href="homepage.css"> -->
    <title>Edit users</title>
</head>
<body>
    <div class="firstpart">

  
    <center>


        <div class="register">

        <?php 
                              $id=$_GET['id'];
                              $query=mysqli_query($con,"Select name,email,username,password from  users where id='$id'");
                              while($row=mysqli_fetch_array($query))
                              {
                              ?>
        <form action="edituserprocess.php" method="post" id="form"><h3>Edit users</h3><br>
    
         Name:<br> <input type="text" name="name" id="" value="<?php echo $row['name']?>" required><br>
         Email:<br> <input type="text" name="email" id="" value="<?php echo $row['email']?>"  required><br>
         Username:<br> <input type="text" name="username" id="" value="<?php echo $row['username']?>"  required><br>
         Password:<br> <input type="text" name="password" id="" value="<?php echo $row['password']?>"  required><br><br>
        <input type="submit"  value="Submit">
         </form>
        <?php } ?>
        </div>

     </center>
    </div>
 </body>
</html>