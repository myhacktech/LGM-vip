<html>
<head>
<title>Create own table
</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zen+Old+Mincho:wght@900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dosis&family=Zen+Old+Mincho:wght@900&display=swap" rel="stylesheet">
<style>
body{
margin:0px;

}
.color-overlay{
width:100%;
height:100%;
background:black;
opacity:.2; 
position:absolute;
}
.container{

  width:1347px;
  height:600px;

  background:#000 url('table.jpg') no-repeat center center/cover; 
  color:purple;
  display:flex;

    
	
	 position:absolute;
	 top:0px;

}
input[type=text] {
  width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  background-color:cyan;
  color: black;
  border-radius:4px;
  
  position:absolute;


}
.ent{
	font-family: 'Zen Old Mincho', serif;
	
	position:absolute;
}
.en{
	position:absolute;
	left:400px;
	padding:10px;
	background-color:cyan;
	position:absolute;
}

.re{
	background-color:none;
	border:solid;
	border-color:black;
	padding:5px;
	border-radius:5px;
	z-index:3;
	width:430px;
	top:0px;
	font-size:40px;
	color:black;
}
.s1{
	position:fixed;
	top:300px;
	left:-120px;
	height:50px;
	width:170px;;
	padding:5px;
	background-color:orange;
	border-radius:4px;
	 transition:  .55s;
	
}
.s1:hover{
	left:0px;
	
}
a:hover,a:active,a:visited,a:link{
	text-decoration:none;
	color:black;
}
.s2{
	position:fixed;
	top:380px;
	left:-120px;
	height:50px;
	width:170px;;
	padding:5px;
	background-color:orange;
	border-radius:4px;
	 transition:  .55s;
}
.s2:hover{
	left:0px;
	
}
</style>
</head>
<body><br><br><br><br><br><br><br><br><br>
<img src=home.png style="position:absolute;top:30px;left:100px;height:100px;width:100px;z-index:2;"><div style="z-index:2;position:absolute;top:70px;left:1000px;font-size:25px;color:black;background-color:none;border:solid;border-radius:5px;padding:5px;">Welcome Mr./Mrs. Admin</div>
<div class=container><div class="color-overlay"></div> </div>
<div style="position:absolute;top:200px;left:350px;font-color:black;font-size:60px;font-family: 'Dosis', sans-serif;font-family: 'Zen Old Mincho', serif;">Create Your Own Table</div>
<div style="position:absolute;top:330px;left:610px;background-color:none;font-color:black;padding:10px;border:solid;font-size:30px;"><a href=index.php>SIGN OUT</a></div>
<div style="position:absolute;top:450px;height:1000px;width:1000px;background-image:linear-gradient(35deg,pink,orange);left:202px;box-shadow: 5px 5px 30px 7px rgba(0,0,0,0.25), -5px -5px 30px 7px rgba(0,0,0,0.22);
">
<form method=post>

<br><div style="left:100px;top:46px;font-size:25px;" class=ent>Enter the Table Name:-</div><input style="width:490px;left:390px;top:40px;" type=text name =tb placeholder="Enter Value"><br>


<div class=ent style="left:100px;top:106px;font-size:25px;">First Field:-</div><input style="width:280px;left:390px;top:100px;" type=text name=f1 placeholder="Preffered 'name'"><select  style="width:200px;left:680px;top:110px;" class=en name='s1'>
<Option value="varchar(30)">Variable<option value=date>date
<option value="int(11)">integer</select>
<br>
<div class=ent style="left:100px;top:166px;font-size:25px;">Second Field:-</div><input style="width:280px;left:390px;top:160px;" type=text name=f2  placeholder="rollno"><select style="width:200px;left:680px;top:170px;" class=en name='s2'>
<Option value="varchar(30)">Variable<option value=date>date
<option value="int(11)">integer</select>
<br>
<div class=ent style="left:100px;top:226px;font-size:25px;">Third Field:-</div><input style="width:280px;left:390px;top:220px;" type=text name=f3  placeholder="branch"><select style="width:200px;left:680px;top:230px;" name='s3' class=en>
<Option value="varchar(30)">Variable<option value=date>date
<option value="int(11)">integer</select>
<br>
<div class=ent style="left:100px;top:286px;font-size:25px;">Fourth Field:-</div><input style="width:280px;left:390px;top:280px;" type=text name=f4  placeholder="contact"><select style="width:200px;left:680px;top:290px;" name='s4' class=en>
<Option value="varchar(30)">Variable<option value=date>date
<option value="int(11)">integer</select>
<br>
<div class=ent style="left:100px;top:346px;font-size:25px;">Fifth Field:-</div><input style="width:280px;left:390px;top:340px;" type=text name=f5  placeholder="english"><select style="width:200px;left:680px;top:350px;" name='s5' class=en>
<Option value="varchar(30)">Variable<option value=date>date
<option value="int(11)">integer</select>
<br>
<div class=ent style="left:100px;top:406px;font-size:25px;">Sixth Field:-</div><input style="width:280px;left:390px;top:400px;" type=text name=f6  placeholder="hindi"><select style="width:200px;left:680px;top:410px;" name='s6' class=en>
<Option value="varchar(30)">Variable<option value=date>date
<option value="int(11)">integer</select>
<br>
<div class=ent style="left:100px;top:466px;font-size:25px;">Seventh Field:-</div><input style="width:280px;left:390px;top:460px;" type=text name=f7  placeholder="maths"><select style="width:200px;left:680px;top:470px;" name='s7' class=en>
<Option value="varchar(30)">Variable<option value=date>date
<option value="int(11)">integer</select>
<br>
<div class=ent style="left:100px;top:526px;font-size:25px;">Eight Field:-</div><input style="width:280px;left:390px;top:520px;" type=text name=f8  placeholder="science"><select style="width:200px;left:680px;top:530px;" name='s8' class=en>
<Option value="varchar(30)">Variable<option value=date>date
<option value="int(11)">integer</select>
<br>
<div class=ent style="left:100px;top:586px;font-size:25px;">Ninth Field:-</div><input style="width:280px;left:390px;top:580px;" type=text name=f9  placeholder="social"><select style="width:200px;left:680px;top:590px;" name='s9' class=en>
<Option value="varchar(30)">Variable<option value=date>date
<option value="int(11)">integer</select>
<br>
<div class=ent style="left:100px;top:646px;font-size:25px;">Tenth Field:-</div><input style="width:280px;left:390px;top:640px;" type=text name=f10  placeholder="remarks"><select style="width:200px;left:680px;top:650px;" name='s10' class=en>
<Option value="varchar(30)">Variable<option value=date>date
<option value="int(11)">integer</select><br>
<input  style="position:absolute;top:706px;left:390px;width:490px;height:60px;"type=submit name=btn>
</form>
</div>
<div class=s1><b><a href=marks.php>Enter the marks</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src=tick.png height=30px width=30px> </div>
<div class=s2><a href=checkmarks.php>One View Result</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><img src=tick.png height=30px width=30px></div>
<?php
if(isset($_POST['btn']))
{
	$t=$_POST['tb'];
	$f1=$_POST['f1'];
	$f2=$_POST['f2'];
	$f3=$_POST['f3'];
	$f4=$_POST['f4'];
	$f5=$_POST['f5'];
	$f6=$_POST['f6'];
	$f7=$_POST['f7'];
	$f8=$_POST['f8'];
	$f9=$_POST['f9'];
	$f10=$_POST['f10'];
	
	
	
	$s1=$_POST['s1'];
	$s2=$_POST['s2'];
	$s3=$_POST['s3'];
	$s4=$_POST['s4'];
	$s5=$_POST['s5'];
	$s6=$_POST['s6'];
	$s7=$_POST['s7'];
	$s8=$_POST['s8'];
	$s9=$_POST['s9'];
	$s10=$_POST['s10'];
	
	if(empty($f5))
	{
		$f5="err";
	}
		if(empty($f6))
		{
		$f6="erro";
		}
		if(empty($f7))
		{
		$f7="error";
		}
		if(empty($f8))
		{	
		$f8="e";}
		if(empty($f9))
		{
		
		$f9="er";
		}
		if(empty($f10))
		{
		
		$f10="r";
		}
	
	if(empty($s5))
	{
	$s5="varchar(30)";
	}
	if(empty($s6))
	{
	$s6="varchar(30)";
	}
	if(empty($s7))
	{
	$s7="varchar(30)";
	}
	if(empty($s8))
	{
	$s8="varchar(30)";
	}
	if(empty($s9))
	{
	$s9="varchar(30)";
	}
	if(empty($s10))
	{
	$s10="varchar(30)";
	}
	                    $con=new mysqli('localhost','root','','learning');
						$q="create table $t($f1 $s1,$f2 $s2,$f3 $s3,$f4 $s4,$f5 $s5,$f6 $s6,$f7 $s7,$f8 $s8,$f9 $s9,$f10 $s10)";
						if($con->query($q)===true)
						{ echo "<marquee><div class=re>Table Created</div></marquee>";
					
						}
						else
							echo"<marquee><div class=re>Please Re-enter credentials</div></marquee>";
						$con->close();
						
	
	
}
?>
</body>
</html>
