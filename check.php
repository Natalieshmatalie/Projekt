<?php 
$host="localhost";
$username="test";
$password="t3st3r123";
$db_name="test";
$tablename="Natali_users";


// ühendab andmebaasiga
mysql_connect("$host", "$username", "$password") or die("cannot connect");
mysql_select_db("$db_name") or die("cannot select DB");
// username ja password on minu loodud muutujad, mille väärtused sisestatakse login lehel
$username = $_POST['username'];
$password = $_POST['password'];



// teevad sisestatud useri ja passwordi andmebaasi jaoks loetavaks
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
// siin loon muutuja, et hiljem küsida kõik tulemused andmebaasi tabelist, kus kasutajanimi= eelnevalt sisestatud kasutajanimega ja parool= eelnevalt sisestatud parool.
$sql = "SELECT * FROM $tablename WHERE username='$username' and password='$password'";
// tulemus läheb andmebaasilt küsima antud lauset.
$result = mysql_query($sql);

// kui ta leiab vastava rea, siis ta loendab kui 1
$count = mysql_num_rows($result);

// Kui ta leiab vastava rea, siis ta logib sisse
if($count == 1){
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    // suunab vastavalt locationi poolt määratud lehele
	header("location:secure.php");
} else {
	// kui ei leia vastavat rida, siis ütleb "kasutajanimi või parool on vale"
	echo "Vale kasutajanimi või parool";
}
?>