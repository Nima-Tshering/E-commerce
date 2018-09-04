<!DOCTYPE HTML>
<?php
include("connection.php");
?>
<HTML>
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
    <p class="pull-left" style="color:white;"><a href="../index.php">Back to Home</a></p>
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
  <h1>Admin Login</h1>
  <form action="#" method="post"><br><br>
  <table class="table"><tr>
<td>Enter user name</td>
<td><input type="text" name="un" placeholder="Enter username" class="form-control" required></td>
</tr>
<tr>
<td>Enter password</td>
<td><input type="password" name="ps" placeholder="Enter password" class="form-control" required></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="submit" value="Login" class="btn btn-primary"></td>
</tr>
  </table>
</form>
<br><br>
<?php
if(isset($_POST['submit']))
{
  $un=$_POST['un'];
  $ps=$_POST['ps'];
   $q="SELECT * FROM `admin`";
   $run=mysqli_query($link,$q);
   $row=mysqli_fetch_array($run);
   $u=$row['un'];
   $p=$row['ps'];
  if($un==$u && $ps==$p)
  {
    header("location:ahome.php");
  }
}
?>
</div>
<div class="container" style="background-color:silver; color:white;">
<h1 align="center">SkkmGenuine.com</h1>
</div>

    </div>
</body>
</html>
