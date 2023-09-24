<?php 
require 'server.php';
require 'securite.php';
try {
	
    $n=$_POST['descript'];
    $e=$_POST['prix_unitaire'];
   
    
  
//echo "le nom du fichier temporaire : ".$tempName;
$lastIdQuery="select max(id_article) mc_ar from article";
$resulte = $chaine->prepare($lastIdQuery);
$resulte->execute();
$lastIdRow = $resulte->fetch(PDO::FETCH_ASSOC);
$lastId = $lastIdRow['mc_ar'];

// Calculer le nouvel ID en l'incrémentant
$nouvelId = $lastId + 1;
var_dump($resulte);




$sql="INSERT INTO article(id_article,descript,prix_unitaire) VALUES (?,?,?)";
$prep=$chaine->prepare($sql);
$tab=array($nouvelId,$n,$e);
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
    top.location.href = "article.php"; //the page to redirect
</script>