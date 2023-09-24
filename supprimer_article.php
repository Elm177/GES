 <?php 
require 'server.php';
require 'securite.php';
 
$code_delte=$_GET['cd'];
   $sql="DELETE FROM article WHERE id_article=?";
   $tab=array($code_delte);
   $st=$chaine->prepare($sql);

   
   
    $st->execute($tab);
    header('location:article.php');
 
 


?>
   <script language="javascript">
    alert("L'article est supprimer");
    top.location.href = "article.php"; //the page to redirect
</script> 
