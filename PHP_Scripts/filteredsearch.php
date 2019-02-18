<?php 
    $dbc=mysqli_connect("localhost",'root','','memeShop');
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../CSS scripts/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Memes-shop</title>		
		</head>
<body>

<?php if($GLOBALS['logined']==false){?>
			<div class="fejlec">	
				<ul id="login-ul">		
				   <li id="logo-li"><img id ="logo"  src="../HTML/logo.png"alt="logo"></li>
				   <li id = "search">		  
				   	<input id="kereses" type="text" name="valuetosearch" placeholder="kereses">		 
				   </li>		  
				   <li class="login-li"><button class="loginbutton" onclick="document.getElementById('id01').style.display='block'" >Bejelentkezes</button></li>
				   <li class="login-li"><button class="loginbutton" onclick="document.getElementById('id02').style.display='block'">Regisztracio</button> </li>
				   <li  class="login-li"><button class="loginbutton">Kosar tartalma</button></li>		
				  </ul>
			  </div>
					
				<div id="id01" class="modal">			
					  <form class="modal-content animate" action="../PHP Scripts/login.php" method="post">
					    <div class="imgcontainer">
					      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Bezaras">&times;</span>
					      <img src="../HTML/login.png" alt="Avatar" class="avatar">
					    </div>			
					    <div class="container">
					      <label for="uname"><b>Felhasznalonev</b></label>
					      <input type="text" placeholder="Felhasznalonev" name="uname" id="uname" required>			
					      <label for="psw"><b>Jelszo</b></label>
					      <input type="password" placeholder="Jelszo" name="psw" id="psw" required>			        
					      <button class="loginbutton"type="submit">Bejelentkezes</button>				 
					      <label><input type="checkbox" checked="checked" name="remember">Emlekezz ram</label>
					    </div>			
					    <div class="container" style="background-color:#f1f1f1">
					      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Megsem</button>
					      <span class="psw">Jelszo <a href="repassword.html">visszaallitas</a></span>
					    </div>
					  </form>
				</div>		
				<div id="id02" class="modal">		  
				  <form class="modal-content animate" action="../PHP Scripts/register.php" method="post">
				    <div class="imgcontainer">
				      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Bezaras">&times;</span>
				      <img src="../HTML/login.png" alt="Avatar" class="avatar">
					</div>
					<div class="container">
						<label for="name"><b>Teljes nev</b></label>
						<input type="text" placeholder="teljes nev" name="name" required>
					    <label for="uname"><b>Felhasznalonev</b></label>
						<input type="text" placeholder="Felhasznalonev" name="nuname" required>
						<label for="psw"><b>Jelszo</b></label>
					    <input type="password" placeholder="Jelszo" name="npsw" required>
						<label for="psw"><b>Jelszo megint</b></label>
					    <input type="password" placeholder="Jelszo" name="pswa" required>
						<label><input type="checkbox" checked="checked" name="news"><b>Hirlevel</b></label>
						<br>
						<label for="addressname"><b>Szallitasi cim</b></label>
						<input type="text" placeholder="Szallitasi cim (város,utca)" name="addressname" style="width:50%;" required>
						<input type="number" placeholder="Hazszam" name="addressnumber" min="0" style="width:10%; height:9.5%"required>
					</div>
					 <button class="loginbutton"type="submit">Regisztracio</button>
					</form>
				 </div>
			 <?php }else {?>
				<div class="fejlec">		
					<ul id="login-ul">		
				   <li id="logo-li"><img id ="logo" src="../HTML/logo.png"alt="logo"></li>
				   <li id = "search">		  
				  	<input id="kereses" type="text" name="valuetosearch" placeholder="kereses">		 
				   </li>		  
				   <li class="login-li"><button class="loginbutton"  ><?php echo $GLOBALS['fullname'];?></button></li>		   
				   <li  class="login-li"><button class="loginbutton">Kosar tartalma(<?php echo $GLOBALS['basketcount'];?>)</button></li>
				   <form  action="../HTML/index.html">
					   <li class="login-li"><button onclick="index.html" class="loginbutton">Kijelentkezes</button></li>
				   </form>
				  </ul>  
			  </div>
			 <?php }?>
			 <div class="content">
			 
			 <ul class="hmenu">		
			  <li class="hmenuv"><a class="hmenut" href="../HTML/index.html">Kezdolap</a></li>
			  <li class="hmenuv"><a class="hmenut" href="#about">A het ajanlatai</a></li>
			  <li class="hmenuv"><a class="hmenut" href="#news">Szallitas</a></li>
			  <li class="hmenuv"><a class="hmenut" href="#contact">Tortenetunk</a></li>
			  <li class="hmenuv"><a class="hmenut" href="#about">Boltjaink</a></li>
			  <li class="hmenuv"><a class="hmenut" href="#about">Blog</a></li>			
			</ul>
			
			<ul class="vmenu">
				<form action="../PHP_Scripts/filteredsearch.php" method="post">
				<li class="vmenuv"><button class="vmenut" value="PuskasTbtn" name="filter" href="#">Puskas polok</button></li>
				</form>
				<form action="../PHP_Scripts/filteredsearch.php" method="post">
				<li class="vmenuv"><button class="vmenut" value="DankTbtn" name="filter" href="#">Dank-polok</button></li>
				</form>
				<form action="../PHP_Scripts/filteredsearch.php" method="post">
				<li class="vmenuv"><button class="vmenut" value="NormieJbtn"name="filter" href="#">Normie-farmer</button></li>
				</form>
				<form action="../PHP_Scripts/filteredsearch.php" method="post">
				<li class="vmenuv"><button class="vmenut"  value="NormieTbtn"name="filter"  href="#">Normie-polok</button></li>
				</form>
			</ul>		
			
			<?php
			$value=$_POST['filter'];
			
					$query= "Select * FROM product WHERE Productfilter='$value' ";
					$result = mysqli_query($dbc,$query);
					
					
				
					
					while($row = mysqli_fetch_array($result))
					{
						
					?>
					
						
					<form action="selected.php" method="post">
					<button width="25px" name="item" value="<?php echo $row["productID"] ?>"><img src="<?php echo $row["location"]; ?>" alt="<?php echo $row["productName"]; ?>"></button>
					<form>
					
					<?php
					
					}
					?>
	
						
					
		