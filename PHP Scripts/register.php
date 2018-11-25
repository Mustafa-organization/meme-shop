<?php
$fullname=$_POST['name'];
$registeruname=$_POST['nuname'];
$registerpsw=$_POST['npsw'];
$registerpswa=$_POST['pswa'];
$news=$_POST['news'];
$addressname=$_POST['addressname'];
$addressnumber=$_POST['addressnumber'];
 //// EMAIL ADDRESS!!!!


$dbc=mysqli_connect("localhost",'root','','memeShop');
$query="INSERT INTO customers (CustomerName,Customerusername ,News, Addressname,Addressnumber ,pwd)
VALUES ('$fullname', '$registeruname' ,'$news' ,'$addressname','$addressnumber', '$registerpsw')";
$sql = mysqli_query($dbc,$query);

 mysqli_close($dbc);
 include '../HTML/index.html';
 ?>