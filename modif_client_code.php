<?php 
require 'server.php';
require 'securite.php';

$c=$_POST['code'];
$n=$_POST['nom'];
$e=$_POST['prenom'];
$s=$_POST['ville'];
$t=$_POST['tele'];

    $sql="UPDATE client SET nom=? ,prenom=? ,ville=?,tele=?  WHERE id_client=?";
    $prep=$chaine->prepare($sql);
     
    
     
     
    $tab=array($n,$e,$s,$t,$c);
     
    $prep->execute($tab);
  
   if ($prep) {
    echo "Requête exécutée avec succès.";
} else {
    echo "Erreur lors de l'exécution de la requête.";
}





?>
 <script language="javascript">
    alert("Le client est modifier");
    top.location.href = "client.php"; //the page to redirect
</script> 

