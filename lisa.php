<?php session_start();?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta class="viewport" content="width=device-width">
  <title>Eesti kogemusnõustajad</title>
<link rel="stylesheet" href="style.css">
<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="container"> 
	<!-- header algab -->
<div class="header">
	<div class="menu">
		<div class="buttons">
			<ul>
				<li class="nav-item">Avaleht</li>
				<li class="nav-item">Nõustajad</li>
				<li class="nav-item">Kasulik</li>
				<li class="nav-item">Kontakt</li>
			</ul>
		</div>
		<div class="search"></div>
	</div>
</div>
	<!-- content algab -->
<div class="content">
	<div class="addform">
		<form name="uue-kasutaja-lisamine" method="post" action="insert.php">
				Eesnimi: <input type="text" name="firstname" id="firstname" value=""/>
				Perekonnanimi: <input type="text" name="lastname" id="lastname" value=""/>
				Telefon: <input type="tel" name="phone" id="phone" value=""/>
				E-mail: <input type="text" name="email" id="email" value=""/>
				Piirkond: <input type="text" name="area" id="area" value=""/>
				Nõustamisvaldkond: <input type="text" name="field" id="field" value=""/>
				Nõustamise staaž: <input type="text" name="time" id="time" value=""/>
				Lisainfo: <input type="text" name="info" id="info" value="" rows="4" cols="50"/>
				Kasutajanimi: <input type="text" name="username" id="username" value=""/>
				Parool: <input type="password" name="password" id="password" value=""/>
				<input type="submit" name="Submit" value="Lisa kogemusnõustaja">
			</form>
	</div>
		
</div>
	<!-- footer algab -->
<div class="footer">
	<div class="footer-buttons"></div>
</div>
</div>
</body>
</html>