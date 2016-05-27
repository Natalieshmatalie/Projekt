<?php 
if (!empty($_POST['Submit'])) {
// hakkab kontrollima sisestatud väljasid
	if(empty($_POST['firstname'])){
			echo '<script>';
			echo 'alert("Eesnimi on kohustuslik väli");';
			echo '</script>';
		} else if(empty($_POST['lastname'])){
			echo '<script>';
			echo 'alert("Perekonnanimi on kohustuslik väli");';
			echo '</script>';
		} else if(empty($_POST['phone'])){
			echo '<script>';
			echo 'alert("Telefon on kohustuslik väli");';
			echo '</script>';
		} else if(empty($_POST['email'])){
			echo '<script>';
			echo 'alert("Email on kohustuslik väli");';
			echo '</script>';
		} else if(empty($_POST['area'])){
				echo '<script>';
			echo 'alert("Piirkond on kohustuslik väli");';
			echo '</script>';
		} else if(empty($_POST['field'])){
			echo '<script>';
			echo 'alert("Nõustamisvaldkond on kohustuslik väli");';
			echo '</script>';
		} else if(empty($_POST['time'])){
				echo '<script>';
			echo 'alert("Nõustamise staaž on kohustuslik väli");';
			echo '</script>';
		} else if(empty($_POST['username'])){
			echo '<script>';
			echo 'alert("Kasutajanimi on kohustuslik väli");';
			echo '</script>';
		} else if(empty($_POST['password'])){
				echo '<script>';
			echo 'alert("Parool on kohustuslik väli");';
			echo '</script>';
		} else {
			// andmebaasi informatsioon
$host="localhost"; 
	$username="root";
	$password="root";
	$db="Projekt";
	
	$mydb = mysql_connect($host,$username,$password);
	mysql_select_db($db);
	mysql_set_charset('utf8');
// info, mis sisestatakse andmebaasi
	$firstname =$_POST['firstname'];
	$lastname =$_POST['lastname'];
	$phone =$_POST['phone'];
	$email =$_POST['email'];
	$area =$_POST['area'];
	$field =$_POST['field'];
	$time =$_POST['time'];
	$info =$_POST['info'];
	$username =$_POST['username'];
	$password =$_POST['password'];

	$query = mysql_query("INSERT INTO `Users`(`id`, `firstname`, `lastname`, `phone`, `email`, `area`, `field`, `time`, `info`, `username`, `password`)  VALUES ('', '$firstname', '$lastname', '$phone', '$email', '$area', '$field', '$time', '$info', '$username', '$password')" ) or die(mysql_error());
	
	exit; 
	}
}
