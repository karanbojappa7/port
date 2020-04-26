<?php
$db = mysqli_connect("localhost","root","","mydb");

if(isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $mess = $_POST['mess'];
    
    $query = "INSERT INTO form(name,mail,mess)VALUES ('$name','$mail','$mess')";
    mysqli_query($db,$query);
}


?>