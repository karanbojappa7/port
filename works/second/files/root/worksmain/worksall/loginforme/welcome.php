<?php
session_start();

if(!$_SESSION['email'])
{

    header("Location: index.php");
}

?>

<html>
<head>

    <title>
        Welcome
    </title>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="bootstrap-3.2.0-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="welcome.css">  

    
    
</head>

<body>
    
    
    <div class="topview  "></div>  

<h1 class="wel  visible-lg col-lg-4 col-lg-offset-3 col-md-4 col-md-offset-2 col-sm-3 col-sm-offset-0 col-xs-2 col-xs-offset-0 ">WELCOME</h1><br>
<h1 class="welxs  visible-xs col-xs-1 col-xs-offset-1 ">WELCOME</h1><br>
<h1 class="welmd visible-md col-md-4 col-md-offset-2 ">WELCOME</h1><br>
<h1 class="welsm  visible-sm col-sm-4 col-sm-offset-2 ">WELCOME</h1><br>
    

    <div class="emailxs visible-xs  col-xs-3 col-xs-offset-1">    
<?php
echo $_SESSION['email'];
?>    
    </div>
    
       <div class="email visible-lg col-lg-4 col-lg-offset-3">     
<?php
echo $_SESSION['email'];
?>
    </div>  
    
       <div class="emailsm visible-sm c col-sm-4 col-sm-offset-2">     
<?php
echo $_SESSION['email'];
?>
    </div>  
    
       <div class="emailmd visible-md col-md-4 col-md-offset-3">     
<?php
echo $_SESSION['email'];
?>
    </div>  

  
    

    
 <a href="logout.php"><img class="logout  col-lg-offset-9 col-xs-offset-4 col-sm-offset-5" src="pictures/logout-1-512.png"></a> 
    
    
    <script src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
</body>
</html>

