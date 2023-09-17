<?php
session_start();
 $username= $_SESSION['username'] ;

?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homepage.css">
    <title>Document</title>
</head>
<body>
    <div class="firstpart">
   <div class="top">
      <div class="logo"><a href="homepage.php" style="text-decoration: none; font-weight: 300; font-size: larger;"> HomeFinder.com</a></div>  <div class="logo"> |<a href="landingpage.html">  LogOut</a> </div>
   </div>
   <div class="welcome">WELCOME <?php echo $username ?></div>
   <center>
    
    <div class="all">  <div class="one">
           <p>"Thanks for choosing us to help you taking the first step towards finding your perfect home.<br>
               Get ready for an    Amazing search experience!."</p><br>

              Start Your Search here by Clicking below:<br><br>
    <a href="homeforsale.html"><input type="button" value="Home For Sale"></a><br><br>
   <a href="homeforrent.html"><input type="button" value="Home For Rent"></a> <br><br>
    <input type="button" value="Home For Sold"><br>
       </div>

       <div class="two">
           <p>"Discover Your dream home with personalized assistance from a dedicated agent.<br>
               Let us  guide you through a seamless online home search journey, tailored to your preferences and needs. your 
               perfect home is just a click away with us.! "</p><br>
              <!-- <img src="image1.jpg" alt="" height="50rem" width="50rem"><br><span>name: Nadine<br>email:kkkkkkkk<br>contact:nnnnn<br>address:jjjjj<br>title:</span> <br> -->
       </div>
           </div> 
       </div></div> 
   </center>
    </div>
   
</body>
</html>