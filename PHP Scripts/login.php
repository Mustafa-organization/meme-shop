<?php
    $name=$_POST['uname'];
    $pwd=$_POST['psw'];
    ///$remember=$_POST['remember'];
    //GLOBAL $basketcount;
    $basketcount=0;
    $fullname="";
    //connect to sql server
    $dbc=mysqli_connect("localhost",'root','','memeShop');
    
    //check identity
    //ID lek�rdez�s
    $query="Select id from customers where Customerusername='$name' AND pwd='$pwd'";
    $result=mysqli_query($dbc, $query)
        or die ();
    $nameID=mysqli_fetch_array($result);
    //ID lek�rdez�s v�ge
    
    //FullName lek�rdez�s
    $query ="Select CustomerName from customers where Customerusername='$name' AND pwd='$pwd'";
    $result=mysqli_query($dbc, $query);
    $fullname=mysqli_fetch_array($result);
    //FullName lek�rdez�s v�ge
    //$query="Select id from customers where Customerusername='$name' AND pwd='$pwd'";
    //Kos�r m�ret�nek megn�z�se
    $query="select productID from basket where nameID='$nameID[0]'";
    $result =mysqli_query($dbc,$query);
        //or die("Error querying database");
    while(($row =mysqli_fetch_array($result))!=null)
    {
        $basketcount++;
    }
    //kos�r tartalm�nak lek�rdez�s�nek v�ge
    //close connection
     mysqli_close($dbc);
     if($nameID==null)
         {                       
            include '../HTML/error.html';
            $GLOBALS['logined']=false;
         }else{           
             //$idk=$fullname[0];
             $GLOBALS['fullname']=$fullname[0];
             $GLOBALS['basketcount']=$basketcount;
             $GLOBALS['logined']=true;
             include '../HTML/loginedindex.html';
         }
?>