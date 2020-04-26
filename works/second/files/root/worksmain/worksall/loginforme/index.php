<!DOCTYPEhtml>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
	<link rel="stylesheet" href="loginform.css">
    <title>Registration</title>
</head>
    
    
    
    
<style>
    .login-panel {
        margin-top: 150px;
    }
</style>
<body>
	
	

	
<?php
session_start();

?>

	<header class="clearfix">
		<div id="box-wrapper"></div>
<div class="container">
    <div class="row">
        <div class="">
            
                <div class="panel-heading">
             
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="index.php">
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control email col-lg-4 col-lg-offset-2 col-md-4 col-md-offset-2 col-sm-2 col-sm-offset-0" placeholder="E-mail" name="email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control pass col-lg-4 col-lg-offset-5 col-md-4 col-md-offset-5 col-sm-2 col-sm-offset-4" placeholder="Password" name="pass" type="password" value="">
                            </div>
                            
                            
 

                                <input class="btn btn-lg btn-success log col-lg-0 col-lg-offset-8 col-md-1 col-md-offset-8  col-sm-2 col-sm-offset-8" type="submit" value="login" name="login">

                        </fieldset>
					</form>
                </div>
           
        </div>
    </div>
</div>


<?php

include("database/db_conection.php");

if(isset($_POST['login']))
{
    $user_email=$_POST['email'];
    $user_pass=$_POST['pass'];

    $check_user="select * from users WHERE user_email='$user_email'AND user_pass='$user_pass'";

    $run=mysqli_query($dbcon,$check_user);

    if(mysqli_num_rows($run))
    {
        echo "<script>window.open('welcome.php','_self')</script>";

        $_SESSION['email']=$user_email;

    }
    else
    {
        echo "<script>alert('Email or password is incorrect!')</script>";
    }
}
?>


	
	

<div class="container regi">
    <div class="row">
                <div class="panel-heading">
                    <h3 class="panel-title text1 col-lg-6 col-lg-offset-4 col-md-7 col-md-offset-3 col-sm-9 col-sm-offset-3">Do not have a account? Then Register</h3>
                </div>
			
          
                    <form role="form" method="post" action="index.php">
                   
                            <div class="form-group">
                                <input class="form-control use col-lg-2 col-lg-offset-5 col-md-2 col-md-offset-4  col-sm-2 col-sm-offset-4 " placeholder="Username" name="name" type="text" autofocus>
                            </div>

                            <div class="form-group">
                                <input class="form-control email1 col-lg-2 col-lg-offset-5 col-md-2 col-md-offset-4  col-sm-2 col-sm-offset-4 " placeholder="E-mail" name="email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control pass1 col-lg-2 col-lg-offset-5 col-md-2 col-md-offset-4  col-sm-2 col-sm-offset-4 " placeholder="Password" name="pass" type="password" value="">
                            </div>


                            <input class="btn btn-lg btn-success  registerb  col-lg-2 col-lg-offset-6 col-md-2 col-md-offset-5  col-sm-2 col-sm-offset-5 " type="submit" value="register" name="register" >

                       
                    </form>
         
        

</div>
    
        </div>
    </header>

	
    <div class="box2 col-md-4 col-md-offset-5  visible-lg"></div>
    <div class="box2smxs col-md-4 col-md-offset-5 visible-md visible-xs visible-sm"></div>
    
    
    
	
	
</body>

</html>

<?php

include("database/db_conection.php");
if(isset($_POST['register']))
{
    $user_name=$_POST['name'];
    $user_pass=$_POST['pass'];
    $user_email=$_POST['email'];


    if($user_name=='')
    {
        
        echo"<script>alert('Please enter the name')</script>";
exit();
    }

    if($user_pass=='')
    {
        echo"<script>alert('Please enter the password')</script>";
exit();
    }

    if($user_email=='')
    {
        echo"<script>alert('Please enter the email')</script>";
    exit();
    }

    $check_email_query="select * from users WHERE user_email='$user_email'";
    $run_query=mysqli_query($dbcon,$check_email_query);

    if(@mysqli_num_rows($run_query)>0)
    {
echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";
exit();
    }

    $insert_user="insert into users (user_name,user_pass,user_email) VALUE ('$user_name','$user_pass','$user_email')";
    if(mysqli_query($dbcon,$insert_user))
    {
        echo"<script>alert('Your registration is successfuly done! please Sign Up ')</script>";
    }

}

?>



