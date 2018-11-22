<?php
$name=$_POST['uname'];
$pwd=$_POST['psw'];
///$remember=$_POST['remember'];
$basketcount=0;
//connect to sql server
$dbc=mysqli_connect("localhost",'root','','memeShop');

//check identity
$query="Select id from customers where Customerusername='$name' AND pwd='$pwd'";
$nameID=mysqli_query($dbc, $query)
or die ("nem megfelelõ jelszó vagy felhasználó név");
// nem stringet ad vissza a mysqli_query();
//check "kosar"
$query2="select productID from basket where nameID='$nameID'";
$result =mysqli_query($dbc,$query2)
or die("Error querying database");
while(($row =mysqli_fetch_array($result))!=null)
{
    $basketcount++;
}

//close connection
 mysqli_close($dbc);
 
 $GLOBALS[]=$name;
 $GLOBALS[]=$basketcount;
 include '../HTML/loginedindex.html';
?>