<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<center>
<h2>Protect Your Message Using Cryptography To Avoid The Data Loss</h2>

<div class="btn-group btn-group-justified">
  <a href="registration1.php" class="btn btn-primary">Encryption</a>
  <a href="decryption1.php" class="btn btn-primary">Decryption</a>
  <a href="registration1.php" class="btn btn-primary">Registration</a>
  <a href="myprofile1.php" class="btn btn-primary">My profile</a>
  <a href="logout1.php" class="btn btn-primary">LogOut</a>

</div>
<h3>Registration</h3>
<style>
  //*{
    background-color: lightblue;
  }
</style>
<br>
<div class="container">
<form class="form-inline" id="form_members" method="POST" action="#" role="form">
  <div class="form-group">
    <label class="control-label col-sm-10" for="text">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" placeholder="Enter Name">
    </div>
  </div><br>
  <div class="form-group">
    <label class="control-label col-sm-10" for=num>MobNum</label>
    <div class="col-sm-10">
      <input type="num" class="form-control" name="mobileno" placeholder="Enter Mobile No">
    </div>
  </div><br>
  <div class="form-group">
    <label class="control-label col-sm-10" for="num">DOB</label>
    <div class="col-sm-10"> 
      <input type="num" class="form-control" name="dob" placeholder="DOB">
    </div>
  </div><br>
  <div class="form-group">
    <label class="control-label col-sm-10" for="email">Email</label>
    <div class="col-sm-10"> 
      <input type="email" class="form-control" name="email" placeholder="Enter Email">
    </div>
  </div><br>
  <div class="form-group">
    <label class="control-label col-sm-10" for="text">Area</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="area" placeholder="Enter Area">
    </div>
  </div><br>
  <div class="form-group">
    <label class="control-label col-sm-10" for="text">State</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="state" placeholder="Enter State">
    </div>
  </div><br>
  <div class="form-group">
    <label class="control-label col-sm-10" for="text">Nationality</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nationality" placeholder="Enter Nationality">
    </div>
  </div>
  <div class="col-sm-12"><br>
      <input type="submit" name="submit" value="submit">
          
          </div>
  </div>
  </form>
  </form>
  </div>

  <?php
$a=$_POST['name'];
$b=$_POST['mobileno'];
$c=$_POST['dob'];
$d=$_POST['email'];
$e=$_POST['area'];
$f=$_POST['state'];
$g=$_POST['nationality'];

$con=mysql_connect("localhost","root","");
mysql_select_db("cryptlogin",$con);
mysql_query("insert into register values('','$a','$b','$c','$d','$e','$f','$g')",$con);
mysql_close($con);
//echo ("Register Successfully");

//header("location: encrypt1.php");
?>
  </center>
  </body>
  </html>
