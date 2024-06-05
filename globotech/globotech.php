<html>
	<head>
		<title>Globotech Infrastructure Pvt. Ltd.</title>
		<script src="https://kit.fontawesome.com/5dd0cc1318.js" crossorigin="anonymous"></script>
		<style>
			*{margin:0;}
			.log a{text-decoration:none;font-size:20px;background:white;border-radius:3px;padding:4px 10px;color:black;}
			i{margin-right:8px}
			.log a:hover{background:#E5B400;}
			.menu a{padding:4px;}
			.menu ul{list-style:none;display:inline-flex;padding:5px 5px;background:black;}
			.menu li{margin-right:10px}
			.menu-c{background:black;padding:10px 15px;padding-left:8px;}
			#s1{height:85%;width:100%;position:absolute;top:15%;}
			.socialmedia{position:relative;padding:4px;}
			.socialmedia{position:relative;padding:4px;}
			.socialmedia a{background:white;font-size:30px;}
			.socialmedia a:hover{background:white;}
		</style>
	</head>
	<body>
		<div class="slideshow">
			<img src="ss1.jpg" alt="ss1.jpg" id="s1">
			<img src="logo.png" height="160px" width="110px" align="right" style="padding:0 40px;position:relative">
			<div class="log">
				<p style="background:#646361;padding:10px 15px;"><a href="logina.php"><i class="fa fa-sign-in"></i>Login</a></p>
				<div class="menu">
					<nav class="menu-c">
					<ul>
						<li><a href="#" style="background:#E5B400;"><i class="fa fa-home"></i>Home</a></li>
						<li><a href="#"><i class="fa fa-info-circle"></i>About us</a></li>
						<li><a href="#"><i class="fa fa-user"></i>Director Details</a></li>
						<li><a href="#"><i class="fa fa-medkit"></i>Services</a></li>
						<li><a href="#"><i class="fa fa-lightbulb-o"></i>Project</a></li>
						<li><a href="#"><i class="fa fa-phone"></i>Contact us</a></li>
					</ul>
					</nav>
				</div>
				<div class="socialmedia">	
					<a href="#"><i class="fa fa-facebook-square" style="color:blue;"></i></a>
					<a href="#"><i class="fa fa-twitter-square"style="color:lightblue;"></i></a>
					<a href="#"><i class="fa fa-instagram" style="color:purple;"></i></a>
					<a href="#"><i class="fa fa-pinterest" style="color:red;"></i></a>
					<a href="#"><i class="fa fa-youtube-play" style="color:red;"></i></a>
				</div>
			</div>
			<div style="padding:250px 0px 0px 0px;">
				<img src="chat.png" height="300px" width="300px" align="right" style="position:relative;">
			<div>
			<div name="chat" style="padding:220px 0px 0px 933px;position:absolute;">
				<a href="#" onMouseOver="this.style.background='#E5B400'" onMouseOut="this.style.background='white'" style="position:relative;text-decoration:none;font-size:30px;background:white;padding:18px 10px;color:black;"><i class="fa fa-commenting"></i>CHAT NOW</a></li>
			</div>
		</div>
	</body>
	<script>
			var images=["ss1.jpg",
						"ss2.jpg",
						"ss3.jpg",
						"ss4.jpg",
						"ss5.jpg",
						"ss6.jpg",
						"ss7.jpg"
						];
			var i=0;
			function slide()
			{
				document.getElementById("s1").src = images[i];
				if(i<(images.length-1))
					i++;
				else
					i=0;
			}
			setInterval(slide,1000)
	</script>
</html>