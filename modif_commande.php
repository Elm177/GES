<?php  
require 'server.php';
require 'securite.php';
$codeModif=$_GET['cmd'];
$sql = "SELECT * from commande,ligne_commande where commande.id_commande=ligne_commande.id_commande and  commande.id_commande= ?";
 
$ps = $chaine->prepare($sql);
$tab=array($codeModif);
$ps->execute($tab);
if ($rs=$ps->fetch()){ 
 ?>

<!doctype html>
<html lang="en" class="h-100" data-bs-theme="auto">
  <head><!--<script src="/docs/5.3/assets/js/color-modes.js"></script>-->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.112.5">
    <title>Gestion Commandes</title>
    <link href="./css/stylee.css" rel="stylesheet">
  <!--  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sticky-footer-navbar/">-->

    



    <link href="./css/docs.css" rel="stylesheet" >

    <!-- Favicons 
<link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="https://getbootstrap.com/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="https://getbootstrap.com/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="https://getbootstrap.com/docs/5.3/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="https://getbootstrap.com/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="https://getbootstrap.com/docs/5.3/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">-->
<!--datatable_jquery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css" />  
<script  src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>
<script type="text/javascript">
$(document).ready( function () {
    $('#datatable').DataTable();
} );
</script>
 
    <!-- Custom styles for this template -->
    <link href="./css/navbar_footer.css" rel="stylesheet">
  </head>
  <body class="d-flex flex-column h-100">


    
  <?php
$commande=true;
include_once("header.php");
include_once("main.php");


 
$sql_clients = "SELECT id_client, nom FROM client";
 $ps_clients = $chaine->prepare($sql_clients);
$ps_clients->execute();

$sql_article = "SELECT id_article, descript FROM article";
$ps_article = $chaine->prepare($sql_article);
$ps_article->execute();
 
?>

 

 
 


<form class="row g-3" action="modif_commande_code.php" method="post" style="    margin-top: 10px;">
<h1 class="mt-5" style="margin-top: -1rem !important;">Modifier une Commande</h1>

 


<div class="col-md-6">
    <label for="inputState" class="form-label">ID_CLIENT</label>
    <select name="id_client" id="id_client" class="form-select">
        <?php foreach ($ps_clients as $clients) : ?>
            <option value="<?php echo $clients['id_client']; ?>" <?php if ($clients['id_client'] == $rs['id_client']) echo 'selected'; ?>>  <?php echo $clients['id_client']." ".$clients['nom']; ?> </option>
              
           
        <?php endforeach; ?>
    </select>
    </div>

    <div class="col-md-6">
    <label for="inputState" class="form-label">ID_ARTICLE</label>
    <select name="id_article" id="id_article" class="form-select">
        <?php foreach ($ps_article as $article) : ?>
            <option value="<?php echo $article['id_article']; ?>" <?php if ($article['id_article'] == $rs['id_article']) echo 'selected'; ?>>  <?php echo $article['id_article']." ".$article['descript']; ?> </option>
              
           
        <?php endforeach; ?>
    </select>
    </div>
 
  


  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">DATE</label>
    <input type="date" class="form-control" name="date" value="<?php echo $rs['datee']; ?>">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">QUANTITE</label>
    <input type="text" class="form-control" name="quantite" value="<?php echo $rs['quantite']; ?>">
  </div>

  <div class="col-md-6">
    <label hidden for="inputEmail4" class="form-label">ccc</label>
    <input hidden type="text" class="form-control" name="cmd" value="<?php echo $rs['id_commande']; ?>">
  </div>
   
   
<?php } ?>
<div class="col-12">
    <button type="submit" class="btn btn-primary">Modifier</button>
    <a  href="client.php" type="submit" class="btn btn-success" >Reteur</a>
  </div>
	 
</form>
</body>
</html>