<script>
function GotoHome(){
	window.location = 'update.php?';
}
</script>
<?php
include "ddltest.php";
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
</head>
<body>
<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="index.html">SG's 50th Birthday</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="index.html">Home</a></li>
											<li><a href="update.php">Registration</a></li>
											<li><a href="gallery.php">Gallery</a></li>
											<li><a href="admin/adminlogin.php">Administator page</a></li>
											<li><a href="#">Dynamic data page</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>
					
	<article id="main">

	<div id="update">

       
       	<h2 class="User_reg">Register for SG50 Street Party</h2> 
        
    	<form id="frmParty" method="POST" action="register.php">
         		
	<input type="hidden" name="id" value="<?php echo (isset($gresult) ? $gresult["id"] :  ''); ?>" />
	<table id="reg" width="100%">
	<tr>
	<td>
	<label for="name">Name: </label><span class="val_name"></span>
	</td>
	<td>
	<input type="text" name="name" 
	value="<?php echo (isset($gresult) ? $gresult["name"] :  ''); ?>" 
	id="name" class="txt-fld" required />
	</td>
	</tr>
	
	<tr>
	<td>
	<label for="age">Age: </label><span class="val_age"></span>
	</td>
	<td>
	<input type="text" name="age"
	value="<?php echo (isset($gresult) ? $gresult["age"] :  ''); ?>" 
	id="age" class="txt-fld" required />
	</td>
	</tr>
	
	<tr>
	<td>
<label for="contact">Contact: </label><span class="val_contact"></span>
	</td>
	<td>
	<input type="text" name="contact"
	value="<?php echo (isset($gresult) ? $gresult["contact"] :  ''); ?>" 
	id="contact" class="txt-fld" required/>
	</td>
	</tr>
	
	<tr>
	<td>
	<label for="email">Email: </label><span class="val_email"></span>
	</td>
	<td>
	<input type="text" name="email" 
	value="<?php echo (isset($gresult) ? $gresult["email"] :  ''); ?>" 
	id="email" class="txt-fld" required/>
	</td>
	</tr>
	
	<tr>
	<td>
<label for="gender">Gender: </label><span class="val_gender"></span>
	</td>
	<td>
	<input type="text" name="gender"
	value="<?php echo (isset($gresult) ? $gresult["gender"] :  ''); ?>" 
	id="gender" class="txt-fld" required />
	</td>
	</tr>
	
	<tr>
	<td>
<label for="address">Address: </label><span class="val_address"></span>
	</td>
	<td>
        <input pattern='^[S/s]\d{5}[0-9]$' title="Eg S530123" type="text" name="address"
               value="<?php echo (isset($gresult) ? $gresult["address"] : '' ); ?>" 
	id="address" class="txt-fld" required />
	</td>
	</tr>
	
	<tr>
	<td>
<label for="occupation">Industry/Occupational Group: </label><span class="val_occupation"></span>
	</td>
	<td>	
	<!-- for drop down !-->
	<select name="occupation" required />
	<option value=""><-- Please Select Occupation --></option>
	<?php
		$strSQL = "SELECT * FROM tboccunevent ORDER BY id ASC";
		$objQuery = mysqli_query($link, $strSQL);
		while($objResuut = mysqli_fetch_array($objQuery))
		{
		?>
		<option value="<?php echo $objResuut["occu"];?>"><?php echo $objResuut["occu"];?></option>
		<?php
		}
		?>
       
	</select>
	</td>
	</tr> 
	
	<tr>
	<td>
<label for="eventknowledge">How do you know about this event?: </label><span class="val_eventknowledge"></span>
	</td>
	<td>
	<!-- for drop down !-->
	<select name="eventknowledge" required />
	<option value=""><-- Please Select --></option>
	<?php
		$strSQL = "SELECT * FROM tboccunevent ORDER BY id ASC";
		$objQuery = mysqli_query($link, $strSQL);
		while($objResuut = mysqli_fetch_array($objQuery))
		{
		?>
		<option value="<?php echo $objResuut["event"];?>"><?php echo $objResuut["event"];?></option>
		<?php
		}
		?>
       
	</select>
	</td>
	</tr>   
    
    						
	</table>
	
    <input type="hidden" name="action_type" value="<?php echo (isset($gresult) ? 'edit' :  'add');?>"/>
	<div style="text-align: center; padding-top: 30px;">
	<input class="btn" type="submit" name="register" id="register" value="Register" />
	<input class="btn" type="button" name="cancel" id="cancel" value="Clear"
	onclick=" return GotoHome();"/>
	</div>
	<br />
	</form>
       
    </div> 
	</article>
	
			<footer id="footer">
						<ul class="icons">
							<li><a href="https://twitter.com/nyptweets" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="https://www.facebook.com/nanyangpoly/" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="https://www.instagram.com/nanyangpoly" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="http://www.nyp.edu.sg/" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
						</ul>
						<ul class="copyright">
							<li>&copy; KangMin</li><li>Design: <a href="">KangMin</a></li>
						</ul>
					</footer>
	</div>
			<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
</body>
</html>
