<?php
$inputuser=$_POST['user']
$inputpass = $_POST['pass']

$user = "root";
$password = ""
$database = "logowanie";

$connect = mysql_connect("localhost",$user,$password);
@mssql_select_db($database) or ("Database no found");

$query = "Select * From `uzytkownik` WHERE `user` = '$inputuser'";
$querypass = "Select * From `uzytkownik` WHERE `password` = '$inputpass'";

$result = mysql_query($query);
$resultpass = mysql_query($querypass);

$row = mysql_fetch_array($result);
$rowpass = mysql_fetch_array($resultpass);

$serveruser = $row["user"];
$serverpass = $row["password"];
if ($serveruser&&$serverpass){
	if(!result){
		die("username or password is invalid");
	}
	
	echo "<br><center>Database output</b></center><br><br>";
	mysql_close();
if($inputpass == $serverpass){
	
	header('Location: Home.php');
	
}else{
	echo "sorry, bad login";
}
}

?>