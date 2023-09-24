<?php 
require 'server.php';
$log=$_POST['user'];

$pwd=$_POST['pass'];
//echo "le username est $log ,le password est $pwd";
$req="SELECT * FROM login WHERE util=? and pass=?";
$tab=array($log,$pwd);
$prepare=$chaine->prepare($req);
$prepare->execute($tab);
// va charche sur les information
if ($rs=$prepare->fetch()) {
	// declaration des methose session pour securise entre
	session_start();
	$_SESSION['role']=$rs;
	//echo "Infos correct";

	header('location:acceuil.php');
	
}
else 
	header('location:index.php');
	//echo "invalid username or password";

?>