<?php
include "database.php";

$strSQL = "SELECT * FROM tbregister ORDER BY name ASC";
$objQuery = mysqli_query($link, $strSQL);
while($objResuut = mysqli_fetch_array($objQuery)){
	
		$reg_list[] = array('id' => $objResuut['id'],
							'name' => $objResuut['name'], 
							'age' => $objResuut['age'],
							'contact' => $objResuut['contact'],
							'email' => $objResuut['email'],
							'gender' => $objResuut['gender'],
							'address' => $objResuut['address'],
							'occupation' => $objResuut['occupation'],
							'eventknowledge' => $objResuut['eventknowledge']);

	
	
	
}
?>