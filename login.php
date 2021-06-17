<?php
include 'data/config.php';
?>

<!DOCTYPE html>
<html class='back'>
<head>
    <title>LuckBlox</title>
    <link rel="icon" href="textures/ico.png">
    <style>
        <?php
        include 'css/style.css';
        ?>
    </style>
</head>

<body>
<nav class='topbar' id='topbar'>
 <div>
    <body>
        <div>
            <ul class='bar'>
                <li style='margin-right: 50px;'><h1 class='text'>LuckBlox BETA</h1></li>
            </ul>
        </div>
    </body>
 </div>
</nav>

<nav style='margin-top:-95px; margin-left:1250px;' class='topbar1' id='topbar1'> 
 <div>
    <body>
         <div>
            <ul class='bar1'>
                <li style='margin-top: 5px; margin-left: 500px; color: rgb(223, 39, 39);'><a href='signup.php'><h2>Register</h2></a></li>
            </ul>
        </div>
    </body>
 </div>
</nav>

<div id='loginform'>
    <form class='loginform' style='margin-top: 150px; margin-left: 200px;' action='data/LogData.php' method='post'>
    <h1 class='text' style='margin-left: 160px;'>Login</h1>
    <?php 
      if (isset($_GET['error'])){ ?>
        <p class="error" style='text-align: center;'><?php echo $_GET['error']; ?></p>
    <?php } ?>
    <h3 class='text' style='margin-top: 60px; margin-left: 80px;'>Username:</h3>
    <input name='username' type='text' style='width: 300px; height: 20px; margin-left: 50px; border-radius: 8px; border: 2px solid #5c5c5c;'>
    <h3 class='text' style='margin-top: 30px; margin-left: 80px;'>Password:</h3>
    <input name='password' type='text' style='width: 300px; height: 20px; margin-left: 50px; border-radius: 8px; border: 2px solid #5c5c5c;'>
    <input type='submit' value='Login' style='width: 200px; height: 40px; margin-left: 100px; margin-top: 50px; border-radius: 15px; border: 2px solid #5c5c5c;'>
    <a href='' ><h5 style='margin-left: 135px; margin-top: 30px;'>Terms Of Services</h5></a>
    </form>
</div>

<div id='info'>
    <form class='infobox' style='margin-top: -500px; margin-left: 1400px;'>
    <h1  class='text' style='margin-top: 30px; margin-left: 190px;'>Trailer</h1>
      <div>
        <video style='margin-top: 10px; margin-left: 60px; border-radius: 25px;' width="400" height="340" controls>
            <source src="" type="video/mp4">
        </video>
       </div>
        <div>
            <span class='text' style='margin-left:15px;'> If u dont have the newest LuckBlox client, dowload it </span><a class='text' href=''> right here!</a>
        </div>
    </form>
</div>

<div id='discord'>
    <form style='margin-left: 900px; margin-top: -400px;'>
        <img style='border-radius: 97px; width: 200px;' src='textures/logo.png'>
        <h2  style='margin-left: -160px;' class='text'>Join the discord community by clicking</h2><a class='text' href=''><h2 style='margin-top: -51px; margin-left: 307px;'>here!</h2></a>
    </form>
</div>

<nav class='footer' id='footer'>
 <div>
    <body>
        <div>
            <h4 style='margin-left: 600px;' class='text'>LuckBlox is not related to: ROBLOX, Lego, or any other online video game. All rights reserved to owners 2021.</h4>
        </div>
    </body>
 </div>
</nav>

</html>