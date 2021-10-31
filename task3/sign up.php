<html>
<head>
<title>Admin 
</title>
<script src="inde.js"></script>
<style>
.login{
	position:absolute;
	top:5px;
	left:180px;
	background-color:none;
	padding:5px;
	height:50px;
	width:1000px;
	color:black;
	border:solid;
	padding-left:100px;
	font-size:20px;
	
}

.color-overlay{
width:100%;
height:100%;
background:none;
opacity:.2; 
position:absolute;
}
.container{

  width:1347px;
  height:600px;

  background:#000 url('signup.jpg') no-repeat center center/cover; 
  color:purple;
  display:flex;

    
	
	 position:absolute;
	 top:0px;

}
body{
	margin:0;
}
</style>
  <link rel="stylesheet" href="signup.css">
  </head>
<body bgcolor=black><div class=container onload="meFunction()"><div class="color-overlay"></div> </div>
<img src=sign.png style="position:absolute;top:100px;left:50px;height:400px;left:400px;">
<form method="post">
<div style="position:absolute;top:100px;left:800px;>
  <div class="left">
    <h1>Sign up</h1>

    <input type="text" name="username" placeholder="Username" />
    <input type="text" name="email" placeholder="E-mail" />
    <input type="password" name="password" placeholder="Password" />
    <input type="password" name="password2" placeholder="Retype password" />
    
    <input onclick="myFunction()" type="submit" name="btn" value="Sign me up" />
  </div>
  

</div>
</form>
<script>
function myFunction() {
  confirm("are you sure!!!");
}
function meFunction() {
  alert("Page is loaded");
}
</script>
<?php
if(isset($_POST['btn']))
{
$n=$_POST['username'];


$c=$_POST['password'];
$cr=$_POST['password2'];

if($c==$cr)
{
$con=new mysqli('localhost','root','','learning');
$q="insert into admin values('$n','$c')";
if($con->query($q))
{
	echo "<font class=login>MR. '.$n.' you have been registered for our website <a href='admin.php'>click here to go to your dashboard</a> ";
}
else
{
	echo "not created";
}
$con->close();
}else 
	echo "<font class=login >sorry the password combination does not match </font>";
}

?>