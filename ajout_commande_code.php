<?php 
require 'server.php';
require 'securite.php';
try {
	$a=$_POST['id_client'];
    $b=$_POST['datee'];
    $c=$_POST['id_article'];
    $n=$_POST['quantite'];
    $sqlcmd = "SELECT MAX(id_commande) FROM commande";
$result = $chaine->query($sqlcmd);
$max = $result->fetchColumn();

// Ajouter 1 pour obtenir la prochaine valeur disponible
$max += 1;
    
 

   
 
    
  
//echo "le nom du fichier temporaire : ".$tempName;
$sql="INSERT INTO commande(id_client,datee) VALUES (?,?)";
$prep=$chaine->prepare($sql);
$tab=array($a,$b);
 
$prep->execute($tab);
 
$sql1="INSERT INTO ligne_commande(id_article,id_commande,quantite) VALUES (?,?,?)";
$prep1=$chaine->prepare($sql1);
$tab1=array($c,$max,$n);

$prep1->execute($tab1);
//echo "Inserstion OK";
header('location:commande.php');

//header('location:client.php');


} catch (Exception $e) {
	echo $e->getMessage();
}

?>
 