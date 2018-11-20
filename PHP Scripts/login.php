<?php
$name=$_POST['uname'];
$pwd=$_POST['psw'];
///$remember=$_POST['remember'];
$basketcount=0;
//connect to sql server
$dbc=mysqli_connect("localhost",'root','','memeShop');

//check identity
$query="Select * from felhasznalok where name='$name' AND pwd='$pwd'";
mysqli_query($dbc, $query)
or die ("nem megfelelõ jelszó vagy felhasználó név");
//check "kosar"
$query="select name from kosar";
$result =mysqli_query($dbc,$query)
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