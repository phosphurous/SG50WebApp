<?php
include 'database.php';

//Start of edit contact read
if(isset($_POST["action"]) and $_POST["action"]=="edit"){
	$id = (isset($_POST["ci"])? $_POST["ci"] : '');
	$sql = "select id, name,
			age, contact, email,
			gender, address, occupation,
			eventknowledge from tbregister
			where id = $id";

	$result = mysqli_query($link, $sql);

	if(!$result)
	{
		echo mysqli_error($link);
		exit();
	}
	
	$gresult = mysqli_fetch_array($result);
	
	include 'adminupdatereg.php';
	exit();
}

//Insert or Update contact information
if(isset($_POST['action_type']))
{
	if ($_POST['action_type'] == 'add' or $_POST['action_type'] == 'edit')
	{
		//Sanitize the data and assign to variables
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
					address = '$address',
					occupation = '$occupation',
					eventknowledge = '$eventknowledge'";
		}else{
			$sql = "update tbregister set 
					name = '$name',
					age = '$age',
					contact = '$contact',
					email = '$email',
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
	header('Location: adminviewreg.php');
	exit();
}

//Read registrants information from database : Stage 1
$sql = "select * from tbregister";

$result = mysqli_query($link, $sql);

if(!$result)
{
	echo mysqli_error($link);
	exit();
}
//Loop through each row on array and store the data to $reg_list[] : Stage 2
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
include 'adminviewreg.php';
exit();

?>
