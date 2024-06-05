<?php
$insert=false;
if(isset($_POST['name']))
{
	$server="localhost";
	$username="root";
	$password="";
	
	$con=mysqli_connect($server,$username,$password);
	
	if (!$con)
	{
		die("failed". mysqli_connect_error());
	}
	
	$name=$_POST['name'];
	$dob=$_POST['dob'];
	$gender=$_POST['gender'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$pan=$_POST['pan'];
	$aadhaar=$_POST['aadhaar'];
	$sql="INSERT INTO `major`.`employee` (`E_Name`, `E_DOB`, `E_Gender`, `E_Phone`, `E_Email`, `E_Address`, `E_PAN`, `E_AADHAAR`) VALUES ('$name', '$dob', '$gender', '$phone', '$email', '$address', '$pan', '$aadhaar');";
	
	if($con->query($sql)==true)
	{
		$insert=true;
	}
	else
	{
		echo"ERROR <br> $con->error";
	}
	
	$con->close();
}
?>
<html>
	<head>
		<title>Registration Page</title>
		<style>
			*{margin:0;padding:0;}
			body{height:100vh;weight:100vw;place-items:center;place-content:center;background-image:linear-gradient(135deg,#fdbb2d,#22c1c3);}
			.box{background:#111;height:600px;width:1000px;position:fixed;margin-left:13%;margin-top:2%;}
			label{color:white;}
			p{color:white;}
			form{font-size:20px;position:absolute;margin:0;padding:0;}
			.reg{margin-left:15%;margin-top:10%;position:fixed;}
			.input-text{color:white;background:transparent;border:1px solid white;margin:6px 0;border-radius:20px;height:32px;padding:0 10px;box-sizing:border-box;outline:none;}
			textarea{color:white;background:transparent;border:1px solid white;border-radius:8px;box-sizing:border-box;outline:none;}
			.btn{background:#E5B400;color:black;margin:10px 450px;padding:5px 5px;font-size:14px;}
			.msg{margin:450px 405px;font-size:20px;}
		</style>
	</head>
	<body>
		<div class="box">
			<img src="reg.jpg" height="600px" width="1000px" style="opacity:0.1;position:absolute;">
			<img src="work.png" height="70px" width="70px" style="padding-left:47%;">	
			<p style="color:white;padding-left:31%;font-size:30px;font-family:arial;">EMPLOYEE REGITRATION</p>
		</div>
		<div class="reg">
		<form action="reg.php" method="post">
			<table>
			<tr>
				<td>
					<label>Name :</label>
					<input style="margin-right:400px" type="text" class="input-text" name="name" id="name" size="50" placeholder="Enter the Name">
				</td>
				<td>
					<label>PAN No.:</label>
					<input type="text" class="input-text" name="pan" id="pan" placeholder="Enter the PAN No." size="20">
				</td>
			</tr>
			</table>
			<table>
			<tr>
				<td>
					<label>DOB :</label>
					<input style="margin-right:550px" type="text" class="input-text" name="dob" id="dob" size="26" placeholder="Enter Your DOB(YYYY-MM-DD)">
				</td>
				<td>
					<label>AADHAAR No. :</label>
					<input type="text" class="input-text" name="aadhaar" id="aadhaar" size="20" placeholder="Enter the AADHAAR No.">
				</td>
			<tr>
			</table>
			<div class="form-group">
				<p><label style="margin:10px 0">Gender :</label>
				<input style="margin-left:50px;" type="radio" class="input-text" value="male" name="gender" id="gender">Male
				<input style="margin-left:100px;" type="radio" class="input-text" value="female" name="gender" id="gender">Female</p>
			</div>
			<label>Phone No. :</label><br>
			<input type="text" class="input-text" name="phone" id="phone" size="30" placeholder="Enter the Phone No.">
			<br>
			<label>Email :</label><br>
			<input type="email" class="input-text" name="email" id="email" size="30" placeholder="Enter the email">
			<br>
			<label>Address :</label>
			<textarea rows="3" cols="130" name="address" id="address" placeholder="Enter the Address"></textarea>
			<p><button class="btn">Submit</button></p>
		</form>
		<?php
			if($insert==true)
			{
				echo"<p class='msg'>Successfully inserted</p>";
			}
		?>
		</div>
	</body>
</html>