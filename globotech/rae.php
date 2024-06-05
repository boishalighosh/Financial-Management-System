<html>
	<head>
			<title>Running Account Bill</title>
			<script src="https://kit.fontawesome.com/5dd0cc1318.js" crossorigin="anonymous"></script>
			<style>
				*{margin:0;padding:0;}
				body{height:100vh;weight:100vw;background-image:linear-gradient(135deg,white,lightgray);}
				.content{margin:50px 300px;}
				.input{height:32px;padding:0 10px;box-sizing:border-box;margin:6px 0;}
				button{background:white;border-radius:5px;}
				button:hover{background:#E5B400;}
			</style>
	</head>
	<body>
		<nav style="font-size:30px;font-family:arial;text-align:center;">RUNNING ACCOUNT BILL</nav>
		<div class="content">
			<label>CREATE A NEW FILE:</label>
			<a href="ratable.php" style="background:lightgray;margin:5px;padding:8px;color:black;">Create</a>
		</div>
	</body>
</html>
<html>
	<head>
		<style>
			p{color:white;font-size:20px;margin:0 320px;background:#111;height:40px;opacity:0.8;padding-left:5px}
			.show{background:#111;height:400px;width:745px;position:fixed;opacity:0.2;margin:0 300px;}
			p:hover{color:#E5B400;}
			a{text-decoration:none;}
		</style>
	</head>
	<body>
		<div class="show">
		</div>
		<?php
			$server="localhost";
			$username="root";
			$password="";
			$database="running_ac";
	
			$con=mysqli_connect($server,$username,$password,$database);
	
			if (!$con)
			{
				die("failed". mysqli_connect_error());
			}
	
			$sql1="show tables from $database";
			$result=mysqli_query($con,$sql1);
			
			while ($row = mysqli_fetch_row($result)) 
			{
				echo "<a href='rashow.php?tablename=$row[0]'><p>{$row[0]}</p></a>";
				echo "<br>";
			}
			
		?>
	</body>
</html>