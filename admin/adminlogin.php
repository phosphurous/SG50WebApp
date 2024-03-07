<?php
include('adminloginvalidation.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: adminhome.php");
}
?>

<!DOCTYPE html>
<html> 
<head> 
<title>Sign-In</title> 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="../assets/css/main.css" />
</head>

<body> 
<div id="page-wrapper">

<header id="header">
<h1><a href="index.html">SG's 50th Birthday</a></h1>
<nav id="nav">
	<ul>
		<li class="special">
		<a href="#menu" class="menuToggle"><span>Menu</span></a>
		<div id="menu">
			<ul>
				<li><a href="../index.html">Home</a></li>
				<li><a href="../update.php">Registration</a></li>
				<li><a href="../gallery.php">Gallery</a></li>
				<li><a href="adminlogin.php">Administator page</a></li>
				<li><a href="#">Dynamic data page</a></li>
			</ul>
		</div>
		</li>
	</ul>
</nav>
</header>

 		 <div id="Sign-In"> 
  			<fieldset style="width:30%"><legend>LOGIN</legend> 
  				<form id ="loginform" method="POST" action=""> 
 				 Username <br><input type="text" name="username" id="user" size="40"><br> 
  				Password <br><input type="password" id="pass" name="password" size="40"><br> 
  				<input id="button" type="submit" name="submit" value="Login"> 
                <div><?php echo $error; ?></div>
  				</form> 
  			</fieldset>
   		</div> 
        <footer class="mainfooter">
	<p>Copyright @ 2015 <a href="#">KangMin</a></p>
    </footer>
	</div>
				<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.scrollex.min.js"></script>
			<script src="../assets/js/jquery.scrolly.min.js"></script>
			<script src="../assets/js/skel.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="../assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="../assets/js/main.js"></script>
	</body> 
</html> 





