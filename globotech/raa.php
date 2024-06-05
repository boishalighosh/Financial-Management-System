<html>
	<head>
			<title>Running Account Bill</title>
			<style>
				*{margin:0;padding:0;}
				body{height:100vh;weight:100vw;background-image:linear-gradient(135deg,white,lightgray);}
				p{color:white;font-size:20px;margin:0 320px;background:#111;height:40px;opacity:0.8;padding-left:5px}
				.show{background:#111;height:400px;width:745px;position:fixed;opacity:0.2;margin:0 300px;}
				p:hover{color:#E5B400;}
				a{text-decoration:none;}
			</style>
	</head>
	<body>
		<nav style="font-size:30px;font-family:arial;text-align:center;margin-bottom:25px;">RUNNING ACCOUNT BILL</nav>
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
				die("failed". mysqli_connect_erre());
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