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
	<div class="banner"><img src="./images/banner.jpg"></div>
	<div class="text">
		<div class="text1">
			<div class="intro"><p>Tere tulemast paika, mis aitab Sul kohtuda kogemusnõustajaga, kel on Sinuga sarnane kogemus. Siit leiad ärakuulaja, lohutaja, nõuandja, edasiste suuniste kättenäitaja. Kogemusnõustamine on Eestis küll levinud, kuid siiani on puudunud ühtne keskkond, mis kogemusnõustajaid ühendab. Siit leiad vastused oma küsimustele. Võta endale see aeg, et siinne keskkond läbi uurida - loe nõustajate lugusid ja muid kasulikke artikleid. Võta meiega julgelt ühendust. Sa ei ole üksi. Oleme Su jaoks olemas.</div>
				<input type="button" onclick="location.href='./lisa.php';" value="Lisa kogemusnõustaja" />
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