<?php

$PuskasT =$_POST['PuskasTbtn'];
$DankT =$_POST['DankTbtn'];
$NormieJ =$_POST['NormieJbtn'];
$NormieT =$_POST['NormieTbtn'];

$dbc=mysqli_connect("localhost",'root','','memeShop');
error_reporting(E_ERROR | E_PARSE);    
    try{
    $dbc=mysqli_connect("localhost",'root','','memeShop');
    }catch(Exception $ex)
    {
        include '../HTML/error.html';
    }
	 $query="Select productID  from Product where Productfilter ='$PuskasT' OR Productfilter ='$DankT' OR Productfilter ='$NormieJ' OR Productfilter ='$NormieT'";
try{
    $ProductsIDS=mysqli_query($dbc, $query);
    }catch(Exception $ex)
    {
        include '../HTML/error.html';
    }
	$ProductsIDS=mysqli_fetch_array($result);
	
	 // Küldje vissza azokat az Id-ket ami a szűrt keresés eredménye!
	 
	  if($ProductsIDS==null)
         {                       
            include '../HTML/error.html';
            $GLOBALS['logined']=false;
         }else{           
             
             
             $GLOBALS['fullname']=$fullname[0];
             $GLOBALS['basketcount']=$basketcount;
             
             $GLOBALS['logined']=true;
             include '../HTML/filteredsearch.html';
         }
	 
	 
	 ?>