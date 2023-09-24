 <?php 
require 'server.php';
require 'securite.php';
 
$code_delte=$_GET['cmd'];
   $sql="DELETE FROM commande WHERE id_commande=?";
   $sql="DELETE FROM ligne_commande WHERE id_commande=?";
   $tab=array($code_delte);
   $st=$chaine->prepare($sql);

   
   
    $st->execute($tab);
    header('location:commande.php');
 
 


?>
   <script language="javascript">
    alert("La commande est supprimer");
    top.location.href = "commande.php"; //the page to redirect
</script> 
