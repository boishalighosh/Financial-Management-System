<?php
	session_start();
	if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
	{
		header("location:logine.php");
		exit;
	}
?>
<html>
	<head>
		<title>Home</title>
		<script src="https://kit.fontawesome.com/5dd0cc1318.js" crossorigin="anonymous"></script>
		<style>
			body{margin:0;padding:0;background:url(homebg.jpg) no-repeat center center fixed;background-size:cover;}
			.navbar{color:white;margin:5px;}
			.navop{background:black;margin:0;padding:0;}
			.navop ul{display:inline-flex;list-style:none;padding-left:8px;}
			.navop a{padding:4px;text-decoration:none;background:white;font-size:20px;color:black;border-radius:3px;}
			.navop li{margin-right:10px;}
			i{margin-right:8px}
			.navop a:hover{background:#E5B400;}
			.sidenav{height:100%;width:0;position:fixed;z-index:1;top:0;left:0;background-color:#111;opacity:0.8;overflow-x:hidden;padding-top:60px;transition:0.5s;}
			.sidenav a{text-decoration:none;list-style:none;position:relative;border-left:3px solid transparent;padding:10px 10px 10px 20px;font-size:18px;color:white;display:block;transition:0.3s;}
			.sidenav a:hover{color:cyan;border-left-color:cyan;}
			.end a:hover{color:lightgray;border-left-color:transparent;}
			.box{position:relative;}
			.admin{background:#111;height:400px;width:560px;margin-left:29%;margin-top:1%;opacity:0.8;position:fixed;}
		</style>
	</head>
	<body>
		
		<nav class="navbar">
			<a href="#" onclick="openSlideMenu()">
				<svg width="30" height="30">
					<path d="M0,5 30,5" stroke="white" stroke-width="5"/>
					<path d="M0,14 30,14" stroke="white" stroke-width="5"/>
					<path d="M0,23 30,23" stroke="white" stroke-width="5"/>
				</svg>
			</a>
		</nav>
		<nav class="navop">
			<ul>
				<li><a href="#" style="background:#E5B400;"><i class="fa fa-home"></i>Home</a></li>
				<li><a href="#"><i class="fa fa-envelope"></i>Mail Box</a></li>
				<li><a href="#"><i class="fa fa-instagram"></i>Social Media</a></li>
			</ul>           
		</nav>
		<div id="sidemenu" class="sidenav">
			<div class="end">
				<a href="#" class="btn-close" style="position:absolute;top:0;right:22px;font-size:36px;margin-left:50px;" onclick="closeSlideMenu()">&times;</a>
			</div>
			<a href="#"><i class="fa fa-calendar"></i>Planning</a>
			<a href="#"><i class="fa fa-bar-chart"></i>Progress</a>
			<a href="rae.php"><i class="fa fa-calculator"></i>Running Account Bill</a>
			<a href="#"><i class="fa fa-usd"></i>Price Exclasation</a>
			<div style="position:absolute;top:85%">
				<a href="logoute.php"><i class="fa fa-sign-out"></i>Logout</a>
			</div>
		</div>
		<script>
			function openSlideMenu()
			{
				document.getElementById('sidemenu').style.width='250px';
				document.getElementById('main').style.marginleft='250px';
			}
			function closeSlideMenu()
			{
				document.getElementById('sidemenu').style.width='0';
				document.getElementById('main').style.marginleft='0';
			}
		</script>
		<div id="main" class="admin">
			
		</div>
		<div class="box">
			<p>
			<?php
			$id=$_GET ['id'];
			echo "<p style='color:white;margin-left:30%;'><i class='fa fa-id-card-o'></i>$id<i class='fa fa-plus' style='margin-left:45%;background:white;color:black;padding:33px;'></i></p>";
			$server="localhost";
			$username="root";
			$password="";
			$database="major";
	
			$con=mysqli_connect($server,$username,$password,$database);
	
			if (!$con)
			{
				die("failed". mysqli_connect_erre());
			}
	
			$sql="SELECT * FROM `employee` where E_Id=$id";
			$result=mysqli_query($con,$sql);
			foreach($result as $row)
			{
				echo"<p style='color:white;margin-left:30%;'>Name : $row[E_Name]</p>";
				echo"<p style='color:white;margin-left:30%;'>DOB : $row[E_DOB]</p>";
				echo"<p style='color:white;margin-left:30%;'>Gender : $row[E_Gender]</p>";
				echo"<p style='color:white;margin-left:30%;'>Phone : $row[E_Phone]</p>";
				echo"<p style='color:white;margin-left:30%;'>Email : $row[E_Email]</p>";
				echo"<p style='color:white;margin-left:30%;'>Address : $row[E_Address]</p>";
				echo"<p style='color:white;margin-left:30%;'>PAN : $row[E_PAN]</p>";
				echo"<p style='color:white;margin-left:30%;'>AADHAAR : $row[E_AADHAAR]</p>";
			}
			?>
			</p>
		</div>
	</body>
</html>