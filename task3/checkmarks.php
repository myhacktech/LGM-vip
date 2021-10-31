<html>
<head>
<title>Result</title></head>
<body>
<center>
<div style="position:fixed;top:0px;height:100px;width:1345px;background-color:orange;font-size:25px;z-index:2;"><form method=post>
<br><b>
Student name:<input type=text name=nm>&nbsp;        Roll Number:<input type=text name=rn>     <input type=submit name=btn value="View Result"></b>
</form>
</div>
<img src=s2.png style="position:absolute;top:300px;height:500px;left:400px;width:550px;opacity:0.5;">

<?php
if(isset($_POST['btn']))
{
	$nm=$_POST['nm'];
	$rn=$_POST['rn'];
		              $con=new mysqli('localhost','root','','learning');
						$q="select * from marks where rollno='$rn' AND name='$nm'";
						$record=$con->query($q);
						while($row=$record->fetch_assoc())
						{echo" <div style='position:absolute;top:100px;left:250px;font-size:55px;'>Central Board Of Secondary education</div>";
												echo" <div style='position:absolute;top:160px;left:300px;font-size:25px;'>This is to certify that ".$nm." successully passed the examination.</div>";

							
						echo "<div style='position:absolute;padding:5px;border:solid;width:200px;top:300px;left:190px;'>Students Name:</div><div style='position:absolute;left:0px;padding:5px;border:solid;width:200px;top:300px;left:400px;'>".$row['name']."</div>";
						
											echo "<div style='position:absolute;padding:5px;border:solid;width:200px;top:330px;left:190px;'>Roll Number:</div><div style='position:absolute;left:0px;padding:5px;border:solid;width:200px;top:330px;left:400px;'>".$row['rollno']."</div>";

						
												echo "<div style='position:absolute;padding:5px;border:solid;width:200px;top:360px;left:190px;'>Branch:</div><div style='position:absolute;left:0px;padding:5px;border:solid;width:200px;top:360px;left:400px;'>".$row['branch']."</div>";

							

						echo "<div style='position:absolute;padding:5px;border:solid;width:200px;top:390px;left:190px;'>Contact Number:</div><div style='position:absolute;left:0px;padding:5px;border:solid;width:200px;top:390px;left:400px;'>".$row['contact']."</div>";

						echo "<div style='position:absolute;padding:5px;border:solid;width:200px;top:420px;left:190px;'>English:</div><div style='position:absolute;left:0px;padding:5px;border:solid;width:200px;top:420px;left:400px;'>".$row['english']."</div>";

						echo "<div style='position:absolute;padding:5px;border:solid;width:200px;top:450px;left:190px;'>Hindi:</div><div style='position:absolute;left:0px;padding:5px;border:solid;width:200px;top:450px;left:400px;'>".$row['hindi']."</div>";

						echo "<div style='position:absolute;padding:5px;border:solid;width:200px;top:480px;left:190px;'>Maths:</div><div style='position:absolute;left:0px;padding:5px;border:solid;width:200px;top:480px;left:400px;'>".$row['maths']."</div>";

						echo "<div style='position:absolute;padding:5px;border:solid;width:200px;top:510px;left:190px;'>Science:</div><div style='position:absolute;left:0px;padding:5px;border:solid;width:200px;top:510px;left:400px;'>".$row['science']."</div>";

						echo "<div style='position:absolute;padding:5px;border:solid;width:200px;top:540px;left:190px;'>Social:</div><div style='position:absolute;left:0px;padding:5px;border:solid;width:200px;top:540px;left:400px;'>".$row['social']."</div>";

													echo "<div style='position:absolute;padding:5px;border:solid;width:200px;top:570px;left:190px;'>Remarks:</div><div style='position:absolute;left:0px;padding:5px;border:solid;width:200px;top:570px;left:400px;'>".$row['remarks']."</div>";


echo "<button style='position:absolute;top:300px;left:1000px;padding:10px;border:solid;' onclick='window.print()'>Print this page</button>";

						}
				
						$con->close();
}
						?>
						</body>
						</html>
						
	
