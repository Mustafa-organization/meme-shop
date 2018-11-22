<?php
$fullname=$_Post['name'];
$registeruname=$_Post['nuname'];
$registerpsw=$_Post['npsw'];
$registerpswa=$_Post['pswa'];
$news=$_Post['news'];
$addressname=$_Post['addressname'];
$addressnumber=$_Post['addressnumber'];



$dbc=mysqli_connect("localhost",'root','','memeShop');
$sql = mysql_query("INSERT INTO Customers (CustomerName,Customerusername ,News, Addressname,Addressnumber ,Password)
VALUES ('$fullname', '$registerusername', ,'$news' ,'$addressname','$addressnumber', '$registerpsw')");

 mysqli_close($dbc);
 ?>