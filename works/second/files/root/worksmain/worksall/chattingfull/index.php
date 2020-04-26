<?php

require('includes/core.inc.php');

?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        
        
        		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">	
   
         <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
	
        
        <title>Global chat application</title>
        
        
		<link rel="stylesheet" href="css/bootstrap.min.css">
				<link rel="stylesheet" href="css/main.css"/>
	</head>
	
	<body>	
		<div class="container">	
	<div id="input">
		<div id="feedback"></div>
<form action="#" method="post" id="form_input">

	<label class=" name col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-3 col-sm-4 col-sm-offset-3 col-xs-1"><input type="text" name="sender" id="sender" placeholder="Enter Your Name" /></label><br />
	<label > <br /> <textarea class="words col-lg-4 col-lg-offset-3 col-md-5 col-md-offset-3 col-sm-7 col-sm-offset-2 col-xs-10 col-xs-offset-0" id="message" maxlength="100" placeholder="Write Something" ></textarea> </label><br /><br />
<!--    <div><input class="submit col-lg-1 col-lg-offset-6 " type="submit" name="send" id="send" /><i class="fa fa-paper-plane-o" aria-hidden="true"></i> </div>-->
    
    <button class="submit col-lg-0 col-lg-offset-7 col-md-0 col-md-offset-7 col-sm-0 col-sm-offset-8 col-xs-0 col-xs-offset-8" type="submit" name="send" id="send"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
    
</form>
		</div>				
<div class="col-lg-4 col-lg-offset-3 col-md-5 col-md-offset-3 col-sm-7 col-sm-offset-2 col-xs-11 col-xs-offset-0"  id="messages"></div>	
            
            
            
		</div>
		
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script type="text/javascript" src="scripts/js/bootstrap.min.js"></script>
<script type="text/javascript" src="scripts/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="scripts/js/auto_chat.js"></script>
<script type="text/javascript" src="scripts/js/send.js"></script>
				
	</body>
</html>




