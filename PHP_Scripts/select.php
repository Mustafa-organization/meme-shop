<?php

$selected = $_Post['filter']

$dbc=mysqli_connect("localhost",'root','','memeShop');
error_reporting(E_ERROR | E_PARSE);    
    try{
    $dbc=mysqli_connect("localhost",'root','','memeShop');
    }catch(Exception $ex)
    {
        include '../HTML/error.html';
    }
	 $query="Select productID  from Product where Productfilter ='$selected'";
try{
    $ProductsIDS=mysqli_query($dbc, $query);
    }catch(Exception $ex)
    {
        include '../HTML/error.html';
    }
	$ProductsIDS=mysqli_fetch_array($result);
	
	$result = mysqli_query($dbc,$query);
	 
	  if($ProductsIDS==null)
         {                       
            include '../HTML/error.html';
            $GLOBALS['logined']=false;
         }else{           
             
             $GLOBALS['selected'] = $result;
             $GLOBALS['fullname']=$fullname[0];
             $GLOBALS['basketcount']=$basketcount;
             
             $GLOBALS['logined']=true;
             include '../HTML/filteredsearch.html';
         }
	 
	 
	 ?>