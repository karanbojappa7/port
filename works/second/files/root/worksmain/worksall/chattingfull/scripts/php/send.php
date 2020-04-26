<?php

require('../../includes/database/connect.db.php');
require('../../includes/functions/chatfunc.php');


if(isset($_GET['sender'])&&!empty($_GET['sender'])){
	$sender = $_GET['sender'];
	
	if(isset($_GET['message'])&&!empty($_GET['message'])){
		$message = $_GET['message'];
		
		if (send_msg($sender, $message)) {
			echo '<div class="emoji"> ✔✔ </div>';
			
		} else {
			echo '<div class="emoji"> ❌🖂❌ </div>';
		}
		
	} else {
		echo '<div class="emoji"> Your Message🖂🖂Please </div>';
	}
	
} else{
	echo '<div class="emoji"> 😍Name Please😍 </div>';
}


?>