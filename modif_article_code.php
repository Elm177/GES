<?php 
require 'server.php';
require 'securite.php';

$c=$_POST['code'];
$n=$_POST['descript'];
$e=$_POST['prix_unitaire'];
 

    $sql="UPDATE article SET descript=? ,prix_unitaire=? WHERE id_article=?";
    $prep=$chaine->prepare($sql);
     
    
     
     
    $tab=array($n,$e,$c);
     
    $prep->execute($tab);
  
   if ($prep) {
    echo "Requête exécutée avec succès.";
} else {
    echo "Erreur lors de l'exécution de la requête.";
}





?>
 <script language="javascript">
    alert("L'article est modifier");
    top.location.href = "article.php"; //the page to redirect
</script> 

