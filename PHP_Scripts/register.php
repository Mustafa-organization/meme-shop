<?php
$fullname=$_POST['name'];
$registeruname=$_POST['nuname'];
$registerpsw=$_POST['npsw'];
$registerpswa=$_POST['pswa'];
$news=$_POST['news'];
$addressname=$_POST['addressname'];
$addressnumber=$_POST['addressnumber'];
$mail=$_POST['mail'];


$dbc=mysqli_connect("localhost",'root','','memeshop');
/*if(!$dbc)
{
	die();
}else
{
	echo "sikeres";
}*/
$query="INSERT INTO customers (CustomerName,Customerusername ,News, Addressname,Addressnumber ,pwd,mail)".
"VALUES ('$fullname', '$registeruname' ,'$news' ,'$addressname','$addressnumber', '$registerpsw', '$mail')";
$sql = mysqli_query($dbc,$query);



 mysqli_close($dbc);
 include '../HTML/index.html';
 ?>