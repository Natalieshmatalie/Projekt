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
				<li class="nav-item"><a href="./index.php">Avaleht</a></li>
				<li class="nav-item"><a href="./nimekiri.php">Nõustajad</a></li>
				<li class="nav-item"><a href="./kasulik.php">Kasulik</a></li>
				<li class="nav-item"><a href="./kontakt.php">Kontakt</a></li>
				<li class="nav-item"><a href="./login.php">Sisene</a></li>
			</ul>
		</div>
		<div class="search">
			<form id= "srch" action="action_page.php">
				<input type="search" name="search" placeholder="Otsi kogemusnõustajat">
				<input type="submit" value="Otsi"></input>
			</form>
		</div>
	</div>
</div>
	<!-- content algab -->
<div class="content">
	<hr>
	<div class="administraatori-paneel">
	
		</div>
	</div>
		
</div>
	<!-- footer algab -->
<div class="footer">
	<div class="footer-buttons"></div>
</div>
</div>
</body>
</html>