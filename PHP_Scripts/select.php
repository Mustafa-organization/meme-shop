<?php

    $selected = $_POST['filter'];
    //echo "innen hianyzik valami: ".$selected;   
    //$dbc=mysqli_connect("localhost",'root','','memeShop');
    //error_reporting(E_ERROR | E_PARSE);     //kivettem mert így legalább írja a hibákat
    try{
    $dbc=mysqli_connect("localhost",'root','','memeShop');
    }catch(Exception $ex)
    {
        include '../HTML/error.html';
    }
	 $query="Select productID  from Product where Productfilter ='$selected'";
    try{
       // $ProductsIDS=mysqli_query($dbc, $query);
        $result=mysqli_query($dbc, $query); //szerintem inkább ez kéne
    }catch(Exception $ex)
    {
        include '../HTML/error.html';
    }
	$ProductsIDS=mysqli_fetch_array($result);
	
	$result = mysqli_query($dbc,$query);
	 
	  if($ProductsIDS==null)
         {                       
            include '../HTML/error.html';
         }else{             
             $GLOBALS['selected'] = $result;
             include '../HTML/filteredsearch.html';
         }         
?>