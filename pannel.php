<?php
    session_start();
    if(isset($_SESSION['x'])==false)
    {
      echo "<script>window.location='front.php'</script>";
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<body style="background-image:url('cafe3.jpg'); background-repeat:no-repeat;background-size:100%;">

<nav class="navbar navbar-inverse" style="margin-top:20px;opacity:0.8;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="font-size:30px;">Sandwich Juction</a>
    </div>
    <ul class="nav navbar-nav">
      <li  style="margin-left:100px;"><a href="pannel.php">Home</a></li>
      <li><a href="order.php">Orders</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="plogout.php"><span class="glyphicon glyphicon-log-out"></span></a></li>
    </ul>
  </div>
</nav>

<div>

  <h4 style="margin-top:150px;margin-left:100px;color:yellowgreen;">Fuel your hunger with your incredible<b> SANDWICHES.</b></h4>
  <h3 style="margin-left:100px;color:orange">NUTRITION LOADED <br><br>
   ALWAYS HUNGRY FOR A <b>SANDWICH.</b></h3>
   <a href="about.php"><button type="button" class="btn btn-success" style="width:200px;margin-left:100px;">About Us</button></a>


</div>

<div style="margin-top:100px;background-color:lightgray;height:800px;width:100%;">
  <h1 style="text-align:center;padding-top:20px;">MENU BY CATEGORY</h1>
  <div style="border-style:solid;border-size:3px;border-radius:6px;height:330px;width:21%;background-color:white;float:left;margin-left:70px;">
  <div style="height:150px;padding:3px;">
    <img src="kaffee.jfif" style="background-repeat:no-repeat;z-index:4;position:absolute;height:150px;width:20%;">
  </div>
  <div style="padding:10px;">
  <h2 style="text-align:center;">Kaffee Meal</h2>
  <a href="display.php?id=kaffe"><button type="button" class="btn btn-success" style="width:150px;margin-left:40px;">Kaffee Meal</button></a>

  </div>
  </div>
  <div style="border-style:solid;border-size:3px;border-radius:6px;height:330px;width:21%;background-color:white;float:left;margin-left:20px;">
  <div style="height:150px;padding:3px;">
    <img src="pizza.jfif" style="background-repeat:no-repeat;z-index:4;position:absolute;height:150px;width:20%;">
  </div>
  <div style="padding:10px;">
  <h2 style="text-align:center;">Pizza</h2>
  <a href="display.php?id=pizza"><button type="button" class="btn btn-success" style="width:150px;margin-left:40px;">Pizza</button></a>

  </div>
  </div>

  <div style="border-style:solid;border-size:3px;border-radius:6px;height:330px;width:21%;background-color:white;float:left;margin-left:20px;">
  <div style="height:150px;padding:3px;">
    <img src="coolers1.jfif" style="background-repeat:no-repeat;z-index:4;position:absolute;height:150px;width:20%;">
  </div>
  <div style="padding:10px;">
  <h2 style="text-align:center;">Coolers</h2>
  <a href="display.php?id=coolers"><button type="button" class="btn btn-success" style="width:150px;margin-left:40px;">Coolers</button></a>

  </div>
  </div>

  <div style="border-style:solid;border-size:3px;border-radius:6px;height:330px;width:21%;background-color:white;float:left;margin-left:20px;">
  <div style="height:150px;padding:3px;">
    <img src="chocolate.jfif" style="background-repeat:no-repeat;z-index:4;position:absolute;height:150px;width:20%;">
  </div>
  <div style="padding:10px;">
  <h3 style="text-align:center;">Chocolate Shakes</h3>
  <a href="display.php?id=Chocolate Shakes"><button type="button" class="btn btn-success" style="width:150px;margin-left:40px;">Chocolate Shakes</button></a>

  </div>
  </div>

  <div style="border-style:solid;border-size:3px;border-radius:6px;height:330px;width:21%;background-color:white;float:left;margin-left:70px;margin-top:30px;">
  <div style="height:150px;padding:3px;">
    <img src="juice1.jfif" style="background-repeat:no-repeat;z-index:4;position:absolute;height:150px;width:20%;">
  </div>
  <div style="padding:10px;">
  <h2 style="text-align:center;">Juice</h2>
  <a href="display.php?id=juice"><button type="button" class="btn btn-success" style="width:150px;margin-left:40px;">Juice</button></a>

  </div>
  </div>

  <div style="border-style:solid;border-size:3px;border-radius:6px;height:330px;width:21%;background-color:white;float:left;margin-left:20px;margin-top:30px;">
  <div style="height:150px;padding:3px;">
    <img src="pasta.jfif" style="background-repeat:no-repeat;z-index:4;position:absolute;height:150px;width:20%;">
  </div>
  <div style="padding:10px;">
  <h2 style="text-align:center;">Pasta & Nachos</h2>
  <a href="display.php?id=Pasta Nachos"><button type="button" class="btn btn-success" style="width:150px;margin-left:40px;">Pasta Nachos</button></a>

  </div>
  </div>

  <div style="border-style:solid;border-size:3px;border-radius:6px;height:330px;width:21%;background-color:white;float:left;margin-left:20px;margin-top:30px;">
  <div style="height:150px;padding:3px;">
    <img src="sandwich.jfif" style="background-repeat:no-repeat;z-index:4;position:absolute;height:150px;width:20%;">
  </div>
  <div style="padding:10px;">
  <h3 style="text-align:center;">Chocolate Sandwich</h3>
  <a href="display.php?id=Chocolate Sandwich"><button type="button" class="btn btn-success" style="width:150px;margin-left:40px;">Chocolate Sandwich</button></a>

  </div>
  </div>

  <div style="border-style:solid;border-size:3px;border-radius:6px;height:330px;width:21%;background-color:white;float:left;margin-left:20px;margin-top:30px;">
  <div style="height:150px;padding:3px;">
    <img src="sandwich1.jfif" style="background-repeat:no-repeat;z-index:4;position:absolute;height:150px;width:20%;">
  </div>
  <div style="padding:10px;">
  <h3 style="text-align:center;">Sandwich</h3>
  <a href="display.php?id=Sandwich"><button type="button" class="btn btn-success" style="width:150px;margin-left:40px;">Sandwich</button></a>

  </div>
  </div>
</div>
<div style="height:5px;background-color:black;"></div>

<div style="height:290px;width:100%;background-color:white;">
<div style="height:280px;width:30%;float:left;margin-top:20px;margin-left:100px;">
<h3>QUICK LINKS</h3>
<ul style="color:black;">
  <li style="margin-top:30px;"><a href="pannel.php" style="margin-top:30px;color:black;">Home</a></li>
  <li style="margin-top:30px;"><a style="margin-top:30px;color:black;" href="order.php">orders</a></li>
  <li style="margin-top:30px;"><a style="margin-top:30px;color:black;" href="about.php">About</a></li>
  <li style="margin-top:30px;"><a style="margin-top:30px;color:black;" href="contact.php">Contact</a></li>

</div>

<div style="height:280px;width:30%;float:left;margin-top:20px;">
<h3>CONTACT INFO</h3>
<ul style="color:black;">
  <li style="margin-top:30px;"><a href="#" style="margin-top:30px;color:black;">+91-87707-70689</a></li>
  <li style="margin-top:30px;"><a style="margin-top:30px;color:black;" href="#">+91-95754-61532</a></li>
  <li style="margin-top:30px;"><a style="margin-top:30px;color:black;" href="#">nemchandsahu910@gmail.com</a></li>
  <li style="margin-top:30px;"><a style="margin-top:30px;color:black;" href="#">chhattisgarh,india-490020</a></li>

</div>

<div style="height:280px;width:30%;float:left;margin-top:20px;">
<h3>FOLLOW US</h3>
<ul style="color:black;list-style-type:square;">
  <li style="margin-top:30px;"><a href="#" style="margin-top:30px;color:black;">facebook</a></li>
  <li style="margin-top:30px;"><a style="margin-top:30px;color:black;" href="#">twitter</a></li>
  <li style="margin-top:30px;"><a style="margin-top:30px;color:black;" href="#">instagram</a></li>
  <li style="margin-top:30px;"><a style="margin-top:30px;color:black;" href="#">linkedin</a></li>

</div></div>
<hr>
<p style="text-align:center;">*copyright@2023 by<a href="#"> Mr. Nemchand Sahu</a>| all rights reserved!</p>

</body>
</html>