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
        <li><a href="ahome.php" class="active"><font color="white">Home</font></a></li>
        <li><a href="pro.php" class="active"><font color="white">Product</font></a></li>
        <li><a href="sell.php" class="active"><font color="white">Sell</font></a></li>
        <li><a href="index.php" class="active"><font color="white">Logout</font></a></li>
</ul>
</div>
</nav>
</div>
</div>
</div>
</div><!--navigation ends here-->
<div class="container">
  <h1 align="center">Product</h1>

<br><br>
<form action="ip.php" method="post" enctype="multipart/form-data">
<table class="table">
    <tr>
        <td>Name</td>
        <td><input type="text" name="name" placeholder="Enter Product Name"  class="form-control" required="required"></td>
    </tr>
    <tr>
        <td>Cat</td>
        <td>
<select name="cat">
    <option>Laptop</option>
    <option>TV</option>
    <option>Mobile</option>
    <option>Camera</option>
    <option>Games</option>
</select>
    </td>
    </tr>
    <tr>
        <td>Brand</td>
        <td>
<select name="brand">
<option>HP</option>
<option>Dell</option>
<option>Samsung</option>
<option>Canon</option>
</select>
        </td>
    </tr>
    <tr>
        <td>Img</td>
        <td><input type="file" name="img"></td>
    </tr>
    <tr>
        <td>Price</td>
        <td><input type="text" name="price" placeholder="Enter Product Price"  class="form-control" required="required"></td>
    </tr>
    <tr>
        <td colspan="2" align="center"><input type="submit" name="sub" value="Save"></td>
    </tr>
</table>
</form>
<?php
if(isset($_POST['sub']))
{
    $name=$_POST['name'];
    $cat=$_POST['cat'];
    $brand=$_POST['brand'];
    $price=$_POST['price'];

    $image=$_FILES['img']['name'];
$image_tmp=$_FILES['img']['img_tmp'];
copy($image_tmp,"c/$image");
 if(mysqli_query($link,"insert into product (name,cat,brand,price,img) value ('$name','$cat','$brand','$price','$image')"))
{
    ?>
    <script>
    alert('Data Save');
    </script>
    <?php
}
else {

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
