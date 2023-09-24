 <?php 
require 'server.php';
require 'securite.php';
 
$code_delte=$_GET['cd'];
   $sql="DELETE FROM client WHERE id_client=?";
   $tab=array($code_delte);
   $st=$chaine->prepare($sql);

   
   
    $st->execute($tab);
    header('location:client.php');
 
 


?>
   <script language="javascript">
    alert("Le client est supprimer");
    top.location.href = "client.php"; //the page to redirect
</script> 
