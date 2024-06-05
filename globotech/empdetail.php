<html>
	<head>
		<title>Employee details</title>
		<script src="https://kit.fontawesome.com/5dd0cc1318.js" crossorigin="anonymous"></script>
		<style>
			*{margin:0;padding:0;}
			body{height:100vh;weight:100vw;place-items:center;place-content:center;background-image:linear-gradient(135deg,white,gray);}
			h1{text-align:center;font-size:30px;font-family:arial;}
			p{background:#bc9af7;padding:15px 25px;}
			.input{background:white;border:1px solid white;color:black;}
			i{margin-right:8px;background:black;color:white;padding:2px;}
			table{margin-right:auto;margin-left:auto;margin-top:15px;background:white;}
			th{background:#E5B400;}
			ul{list-style:none;display:inline-flex;padding:5px 5px;}
			li{margin-right:100px}
			nav{margin-top:10%;}
			.btn a:hover{background:#E5B400;}
			.btn a{padding:4px;text-decoration:none;font-size:20px;background:white;border-radius:3px;padding:4px 10px;color:black;}
		</style>
	</head>
	<body>
		<h1>EMPLOYEE DETAILS</h1>
		<p align="right"><i class="fa fa-search"></i><input type="text" class="input" name="search" id="search" size="50" placeholder="Search Employee"></p>
		<table border='2'>
			<tr>
				<th>E_Id</th>
				<th>E_Name</th>
				<th>E_DOB</th>
				<th>E_Gender</th>
				<th>E_Phone</th>
				<th>E_Email</th>
				<th>E_Address</th>
				<th>E_PAN</th>
				<th>E_AADHAAR</th>
			</tr>
		<?php
			$server="localhost";
			$username="root";
			$password="";
			$database="major";
	
			$con=mysqli_connect($server,$username,$password,$database);
	
			if (!$con)
			{
				die("failed". mysqli_connect_erre());
			}
	
			$sql="SELECT * FROM `employee`";
			$result=mysqli_query($con,$sql);
	
			$num=mysqli_num_rows($result);
			if($num!=0)
			{		
				while($row=mysqli_fetch_assoc($result))
				{
					echo "
					<tr>
						<td>".$row['E_Id']."</td>
						<td>".$row['E_Name']."</td>
						<td>".$row['E_DOB']."</td>
						<td>".$row['E_Gender']."</td>
						<td>".$row['E_Phone']."</td>
						<td>".$row['E_Email']."</td>
						<td>".$row['E_Address']."</td>
						<td>".$row['E_PAN']."</td>
						<td>".$row['E_AADHAAR']."</td>
					</tr>";
				}
			}
		?>
		</table>
		<nav class="btn">
			<ul>
				<li><a href="#" style="margin-left:380px;"><i class="fa fa-pencil-square-o"></i>Edit Details</a></li>
				<li><a href="#"><i class="fa fa-calendar-times-o"></i>Leave Taken</a></li>
				<li><a href="#"><i class="fa fa-inr"></i>Salary</a></li>
			</ul> 
		</nav>
	</body>
</html>