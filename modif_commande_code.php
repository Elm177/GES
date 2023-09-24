<?php 
require 'server.php';
require 'securite.php';
$a=$_POST['cmd'];

$c=$_POST['date'];

$e=$_POST['quantite'];

$l=$_POST['id_client'];

$r=$_POST['id_article'];

   //modifier la date et le client
    $sql="UPDATE commande SET datee=?,id_client=? WHERE id_commande=?";
    $prep=$chaine->prepare($sql);
    $tab=array($c,$l,$a);
    $prep->execute($tab);

    //modifier la date et le client
    $sql="UPDATE ligne_commande SET quantite=?,id_article=?WHERE id_commande=?";
    $prep=$chaine->prepare($sql); 
    $tab=array($e,$r,$a);
    $prep->execute($tab);
?>


 <script language="javascript">
    alert("Le client est modifier");
    top.location.href = "commande.php";  
</script> 
