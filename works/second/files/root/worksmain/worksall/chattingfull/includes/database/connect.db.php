<?php

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';

$db_name = 'globalchat';

if($connection = @mysql_connect($db_host, $db_user, $db_pass)) {
	
	$feedback[] = 'Connected to Database Server... <br />';


if($database = mysql_select_db($db_name, $connection)) {
	
	$feedback[] = 'Database has been selected...<br />';	
}
	else {
$feedback[] = 'Database was not found.<br />';
	}
}else{
		$feedback[] = 'Unable to connect to MYSQL Server.<br />';
	}

?>