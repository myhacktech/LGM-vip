<html>
<head>
<title>Enter marks
</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zen+Old+Mincho:wght@900&display=swap" rel="stylesheet">
<style>

input[type=text] {
  width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  background-color:cyan;
  color: black;
  border-radius:4px;
  left:450px;
  position:relative;


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
</head>
<body >
<form method=post>
<div class=container><div class="color-overlay"></div> </div>

<div style="position:absolute;top:450px;height:1000px;width:1000px;background-image:linear-gradient(35deg,pink,orange);left:202px;box-shadow: 5px 5px 30px 7px rgba(0,0,0,0.25), -5px -5px 30px 7px rgba(0,0,0,0.22);
">
<form method=post>

<br><div style="left:100px;top:52px;font-size:25px;position:absolute;" class=ent>Enter the Table Name:-</div><input style="width:490px;left:390px;top:34px;" type=text name =tb placeholder="By default 'marksheet'"><br>


<div class=ent style="left:100px;top:112px;font-size:25px;position:absolute;">Name:-</div><input style="position:absolute;left:390px;top:106px;width:490px;" type=text name=f1 placeholder="Enter Value">
<div class=ent style="left:100px;top:172px;font-size:25px;position:absolute;">Rollno:-</div><input style="position:absolute;width:490px;left:390px;top:166px;width:490px;" type=text name=f2  placeholder="Enter Value">
<div class=ent style="left:100px;top:232px;font-size:25px;position:absolute;">Branch:-</div><input style="position:absolute;width:490px;left:390px;top:226px;width:490px;" type=text name=f3  placeholder="Enter Value">

<div class=ent style="left:100px;top:292px;font-size:25px;position:absolute;">Contact:-</div><input style="position:absolute;width:490px;left:390px;top:286px;" type=text name=f4  placeholder="Enter Value">

<div class=ent style="left:100px;top:352px;font-size:25px;position:absolute;">English:-</div><input style="position:absolute;width:490px;left:390px;top:346px;" type=text name=f5  placeholder="Enter Value">

<div class=ent style="left:100px;top:412px;font-size:25px;position:absolute;">Hindi:-</div><input style="position:absolute;width:490px;left:390px;top:406px;" type=text name=f6  placeholder="Enter Value">

<div class=ent style="left:100px;top:472px;font-size:25px;position:absolute;">Maths:-</div><input style="position:absolute;width:490px;left:390px;top:466px;" type=text name=f7  placeholder="Enter Value">

<div class=ent style="left:100px;top:532px;font-size:25px;position:absolute;">Science:-</div><input style="position:absolute;width:490px;left:390px;top:526px;" type=text name=f8  placeholder="Enter Value">

<div class=ent style="left:100px;top:592px;font-size:25px;position:absolute;">Social:-</div><input style="position:absolute;width:490px;left:390px;top:580px;" type=text name=f9  placeholder="Enter Value">

<div class=ent style="left:100px;top:652px;font-size:25px;position:absolute;">Remarks:-</div><input style="position:absolute;width:490px;left:390px;top:646px;" type=text name=f10  placeholder="Enter Value">
</div>
<input  style="position:absolute;top:1206px;left:590px;width:490px;height:60px;position:absolute;" type=submit name=btn>
<img src="admin.png" height=300 width=300 style="position:absolute;top:120px;left:530px;">
</form>

<?php
if(isset($_POST['btn']))
{
	$tb=$_POST['tb'];
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
	
	

	
	
	              $con=new mysqli('localhost','root','','learning');
						$q="insert into $tb values('$f1','$f2','$f3','$f4','$f5','$f6','$f7','$f8','$f9','$f10')";
						if($con->query($q))
						{ echo "<div style='font-size:50px;position:absolute;top:0px;left:550px;background-color:brown;color:white;padding:10px;bordeer:solid;'>entry done</div>";
					
						}
						else
							echo"<div style='font-size:50px;position:absolute;top:0px;left:500px;background-color:brown;color:white;padding:10px;bordeer:solid;'>Please try again</div>";
						$con->close();
						
	
	
}
?>
</body>
</html>
