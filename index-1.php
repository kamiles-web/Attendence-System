<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="fonts/glyphicons-halfings-regular.eot">
</head>
<style>
 form{
    border: 1px solid black;
     width: 300px;
    border: 25px solid blue;
    padding: 25px;
    margin: 25px;
}
</style>
<style>
  *{
    background-color: lightblue;
  }
</style>



<body>
<center>
  <h2>Encrypt To Decrypt</h2>
  <form class="form-horizontal" method="POST" action="#">
  <div class="form-group">
    <label class="control-label col-sm-2" for="text">User Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="text" name="username" placeholder="User Name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="pwd" name="password" placeholder="Enter password">
    </div>
  </div><br>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Login</button>
    </div>
  </div>
</form>

<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("login",$con);

session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$username=addslashes($_POST['username']);
$password=addslashes($_POST['password']);
$sql="SELECT * FROM register WHERE username='$username' and password='$password'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
//$active=$row['active'];
$count=mysql_num_rows($result);
 
 
if($count==1)
{
//session_register("username");
//$_SESSION['login_user']=$username;
echo "Welcome TO The Website";
 
header("location: encryption1.php");
}
else
{
echo "Your Login Name or Password is invalid";
}
}
?>
</center>

</body>
</html>

