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

	<?php 
  error_reporting(-1);
  $mysqli = new mysqli("localhost", "test", "t3st3r123", "test");
   
  /* check connection */
  if (mysqli_connect_errno()) {
   printf("Connect failed: %s\n", mysqli_connect_error());
   exit();
  }
  mysqli_set_charset($mysqli,"utf8");

  $query = "SELECT * FROM  `Natali_users` ORDER BY  `id`;";
  
    if ($result = $mysqli->query($query)) {
   
     	print "<table border='1' width='770px'><tr><td><b>Eesnimi</b></td><td><b>Perekonnanimi</b></td><td><b>Telefon</b></td><td><b>Email</b></td><td><b>Piirkond</b></td><td><b>Nõustamisvaldkond</b></td><td><b>Nõustamise staaž</b></td><td><b>Lisainfo</b></td></tr>";
   /* fetch associative array */
   while ($row = $result->fetch_assoc()) {

    echo "<tr><td>".$row['firstname']."</td>";
    echo "<td>".$row['lastname']."</td>";
    echo "<td>".$row['phone']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['area']."</td>";
    echo "<td>".$row['field']."</td>";
    echo "<td>".$row['time']."</td>";
    echo "<td>".$row['info']."</td></tr>";
   } 
   /* free result set */
   $result->free();
  }
   
  /* close connection */
  $mysqli->close();
 ?>

</div>
	<!-- footer algab -->
<div class="footer">
	<div class="footer-buttons"></div>
</div>
</div>
</body>
</html>