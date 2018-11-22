<?php
$fullname=$_Post['name'];
$registeruname=$_Post['nuname'];
$registerpsw=$_Post['npsw'];
$registerpswa=$_Post['pswa'];
$news=$_Post['news'];
$addressname=$_Post['addressname'];
$addressnumber=$_Post['addressnumber'];



$dbc=mysqli_connect("localhost",'root','','memeShop');
$query="INSERT INTO customers (CustomerName,Customerusername ,News, Addressname,Addressnumber ,pwd)
VALUES ('$fullname', '$registerusername', ,'$news' ,'$addressname','$addressnumber', '$registerpsw')";
$sql = mysqli_query($dbc,$query);

 mysqli_close($dbc);
 include '../HTML/index.html';
 ?>