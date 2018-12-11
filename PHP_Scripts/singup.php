<?php 
$mail=$_POST['smail'];
$fullname=$_POST['name'];

 try{
    $dbc=mysqli_connect("localhost",'root','','memeShop');
    }catch(Exception $ex)
    {
        include '../HTML/error.html';
    }
	
	

?>