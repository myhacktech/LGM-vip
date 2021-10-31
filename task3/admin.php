<HTML><HEAD>
<title>Login
</title>
<style>
.es{
	position:absolute;
	top:10px;
	left:500px;
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

  background:#000 url('lock.jpg') no-repeat center center/cover; 
  color:purple;
  display:flex;

    
	
	 position:absolute;
	 top:0px;
z-index:-1;
}
body{
	margin:0;
}
</style>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Display&family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet"></HEAD>
<BODY>

<div class=container><div class="color-overlay"></div> </div>

<form method=post>
<center>
<h1><img src="log.png" height=200 width=300 style="position:absolute;top:60px;left:530px;"></h1><br>
<fieldset style="position:absolute;top:250px;left:400px;height:300px;width:500px;background-color:white;border-radius:5px;border:solid;">
<img src=download.png style="position:absolute;top:100px;left:46px;height:120px;width:120px;"><br><br><br>
<font style="font-family: 'Open Sans Condensed', sans-serif;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NAME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=text name=nm style="height:30px;width:150px;" ><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PASSWORD<input type=password name=ps style="height:30px;width:150px;" ><br>
</font>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=submit name=btn style="height:30px;width:148px;background-color:orange;padding:5px;">
</form>
</fieldset>
<?php
if(isset($_POST['btn']))
{
	
	$n=$_POST['nm'];
	$ps=$_POST['ps'];
	
	$conn=mysqli_connect('localhost','root','','learning');
	$query="select * from admin where password='$ps' AND name='$n'";
	$res=mysqli_query($conn,$query);
	$count=mysqli_num_rows($res);
	if($count==1)
	{
		header('Location:table.php');
	$_SESSION['success']="Redirected to Dashboard";
	}
	else
	{
		$_SESSION['error']="wrong email or password";
	header('Location:index.php');
	}
					
					 	
						
							
	
	
	$con->close();

}


?>

</body></html>