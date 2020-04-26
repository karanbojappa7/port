<?php

require('../../includes/database/connect.db.php');
require('../../includes/functions/chatfunc.php');


if(isset($_GET['sender'])&&!empty($_GET['sender'])){
	$sender = $_GET['sender'];
	
	if(isset($_GET['message'])&&!empty($_GET['message'])){
		$message = $_GET['message'];
		
		if (send_msg($sender, $message)) {
			echo 'Message sent';
			
		} else {
			echo 'Message was\'t sent';
		}
		
	} else {
		echo 'NO Message was entered';
	}
	
} else{
	echo 'No Name was entered..';
}


?>