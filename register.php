<html>
<head>
<meta charset="utf-8">
<title>Success!</title>
<script>
function GotoHome(){
	window.location = 'update.php?';
}
</script>
<link rel="stylesheet" href="assets/css/main.css" />
</head>

<body>
<br />
<h1> Registration Successful</h1>
<p>
<input class="btn" type="button" name="back" id="back" value="Go Back" 
	onclick=" return GotoHome();"/></p>
	
	<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			
</body>
</html>

<?php
include 'database.php';
$gresult = '';
if(isset($_POST["action"]) and $_POST["action"]=="edit"){
	$id = (isset($_POST["ci"])? $_POST["ci"] : '');
	$sql = "select id, name,
			age, contact, email,
			gender, address, occupation
			eventknowledge from tbregister
			where id = $id";

	$result = mysqli_query($link, $sql);

	if(!$result)
	{
		echo mysqli_error($link);
		exit();
	}
	
	$gresult = mysqli_fetch_array($result);
	
	include 'update.php';
	exit();
}


if(isset($_POST['action_type']))
{
	if ($_POST['action_type'] == 'add' or $_POST['action_type'] == 'edit')
	{
		$id = mysqli_real_escape_string($link, strip_tags($_POST['id']));
		$name = mysqli_real_escape_string($link, strip_tags($_POST['name']));
		$age = mysqli_real_escape_string($link, strip_tags($_POST['age']));
		$contact = mysqli_real_escape_string($link, strip_tags($_POST['contact']));
		$email = mysqli_real_escape_string($link, strip_tags($_POST['email']));
		$gender = mysqli_real_escape_string($link, strip_tags($_POST['gender']));
		$address = mysqli_real_escape_string($link, strip_tags($_POST['address']));
		$occupation = mysqli_real_escape_string($link, strip_tags($_POST['occupation']));
		$eventknowledge = mysqli_real_escape_string($link, strip_tags($_POST['eventknowledge']));
		
	
	
				
		if ($_POST['action_type'] == 'add')
		{
			$sql = "insert into tbregister set 
					name = '$name',
					age = '$age',
					contact = '$contact',
					email = '$email',
					gender = '$gender',
					address = '$address',
					occupation = '$occupation',
					eventknowledge = '$eventknowledge'";
				
		}else{
			$sql = "update tbregister set 
					name = '$name',
					age = '$age',
					contact = '$contact',
					email = '$email',
					gender = '$gender',
					address = '$address',
					occupation = '$occupation',
					eventknowledge = '$eventknowledge'
					where id = $id";
		}
		
		
		if (!mysqli_query($link, $sql))
		{
			echo 'Error Saving Data. ' . mysqli_error($link);
			exit();	
		}
	}
	exit();
}



$sql = "select * from tbregister";

$result = mysqli_query($link, $sql);

if(!$result)
{
	echo mysqli_error($link);
	exit();
}

while($rows = mysqli_fetch_array($result))
{
	$reg_list[] = array('id' => $rows['id'], 
							'name' => $rows['name'],
							'age' => $rows['age'],
							'contact' => $rows['contact'],
							'email' => $rows['email'],
							'gender' => $rows['gender'],
							'address' => $rows['address'],
							'occupation' => $rows['occupation'],
						    'eventknowledge' => $rows['eventknowledge']);
							
}
exit();


?>