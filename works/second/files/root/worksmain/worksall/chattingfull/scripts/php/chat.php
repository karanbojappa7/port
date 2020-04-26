<?php

require('../../includes/database/connect.db.php');
require('../../includes/functions/chatfunc.php');

$messages = get_msg();
     foreach($messages as $message){
		 echo '<span class="sending"> <strong>'.$message['sender'].' Sent</strong></span><br />';	
		 echo '<span class="mess"> <strong>', $message['message'].'
		 </strong></span><br /><br />';
		 
	 }

?>



<!--


<html>
	<head>
		<style>

			.sending
			{
				color: white;
				background-color: #245555;
				border-radius: 5px;
				font-family: serif;
				font-size: 20px;
				text-transform:capitalize;
			}
			
	

		
			.mess
			{
				color: black;
				background-color: #ebf4fa;
				border-radius: 5px;
				text-transform:capitalize;
			}		

			
		
		</style>
	
	
	
	</head>
<body></body>

</html>-->
