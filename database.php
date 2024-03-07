<?php
$link = mysqli_connect('*DBHOSTNAME*', '*DBUSERNAME*', '');
if(!$link)
{
	echo 'Unable to connect to the database server.';
	exit();
}

if (!mysqli_set_charset($link, 'UTF8'))
{
	echo 'Unable to set database connection encoding.';
	exit();
}

if (!mysqli_select_db($link, '*DBTableName'))
{
	echo 'Unable to locate seminar database.';
	exit();
}
?>