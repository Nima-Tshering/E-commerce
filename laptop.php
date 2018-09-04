<!DOCTYPE HTML>
<?php
include('connection.php');
?>
<html>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE-edge" />
    <meta name="viewport" content="width=device-width" />
    <title>Home</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="css/style.css" />
  </head>
<body>
  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
    <div class="container-fluid">
  <div class="container-fluid" style="background-color:black;color:white">
<div class="container">
<p class="pull-right">Email:skkmgenuine@gmail.com</p>

</div>
<div class="container">
<p class="pull-right" style="color:white;"><a href="admin/index.php">Admin Panel</a></p>

</div>
</div>
<div class="container"><font face="centaur"><h1>My Shop</font></h1></div>
<div class="container"><!--navigation-->
          <div class="container" style="background: blue; color: white;">
          <div class="row">
      <div class="col-sm-12 mymanu">
  <nav class="navbar ">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mystyle">
        <span class="icon-bar">--</span>
        <span class="icon-bar">--</span>
        <span class="icon-bar">--</span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="mystyle">
      <ul class="nav navbar-nav">
        <li><a href="index.php" class="active"><font color="white">Home</font></a></li>
        <li><a href="#" class="active"><font color="white">About Us</font></a></li>
        <li><a href="#" class="active"><font color="white">Contact Us</font></a></li>
        <li><a href="#" class="active"><font color="white">Help</font></a></li>
</ul>
</div>
</nav>
</div>
</div>
</div>
</div><!--navigation ends here-->
<div class="container">
  <div class="col-sm-2" style="background-color: black;color:white; ">
<h1 align="center">Brands</h1>
<center><p><a href="dell.php" style="color:white">Dell</a></p><br>
<p><a href="hp.php" style="color:white;">HP</a></p><br>
<p><a href="samsung.php" style="color:white">Samsung</a></p><br>
<p><a href="canon.php" style="color:white">Canon</a></p><br>
</center>
<h1 align="center">Category</h1>
<center>
  <p><a href="laptop.php" style="color:white">Laptop</a></p><br>
  <p><a href="mobile.php" style="color:white">Mobile</a></p><br>
  <p><a href="camera.php" style="color:white">Camera</a></p><br>
  <p><a href="game.php" style="color:white">Games</a></p><br>
  <p><a href="tv.php" style="color:white">T.V</a></p><br>
</center>
  </div>
  <div class="col-sm-10"><br>
<?php
$l="Laptop";
$q="select * from product where cat like '%$l%' ";
$run=mysqli_query($link,$q);
while($row=mysqli_fetch_array($run))
{
$id=$row['id'];
$name=$row['name'];
$img=$row['img'];
?>
<br>
<div class="col-sm-4"><center><?php echo"<img src='admin/c/$img' width='250px' height='200px'>"; ?></center>
  <br>
<h3 align="center"><?php echo $name?></h3>
<center><a href="b.php?id=<?php echo $id; ?>" class="btn btn-primary">Buy Now</a></center>
<br>
</div>
<?php
}?>

  </div>
</div>
<div class="container" style="background-color:silver; color:white;">
<h1 align="center">SkkmGenuine.com</h1>
</div>

    </div>
</body>
</html>
