<?php 
require 'server.php';
require 'securite.php';
try {
	$c=$_POST['nom'];
    $n=$_POST['prenom'];
    $e=$_POST['ville'];
    $s=$_POST['tele'];
    
  
//echo "le nom du fichier temporaire : ".$tempName;
$sql="INSERT INTO client(nom,prenom,ville,tele) VALUES (?,?,?,?)";
$prep=$chaine->prepare($sql);
$tab=array($c,$n,$e,$s);
$prep->execute($tab);
//echo "Inserstion OK";
//header('location:afficher.php');

//header('location:client.php');


} catch (Exception $e) {
	echo $e->getMessage();
}

?>

<script language="javascript">
    alert("Ajouter avec succes");
    top.location.href = "client.php"; //the page to redirect
</script>