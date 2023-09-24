<?php  
require 'server.php';
require 'securite.php';
$codeModif=$_GET['cd'];
$sql = "SELECT * from article where id_article= ?";
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
$article=true;
include_once("header.php");
include_once("main.php");

?>
<!-- <form action="update.php" method="post" enctype="multipart/form-data">
	<table class="table table-stripped">
<tr>
	<td>Code:</td>
	<td><input readonly type="text" name="code" value="" ></td>
</tr> -->


<form class="row g-3" action="modif_article_code.php" method="post" style="    margin-top: 10px;">
<h1 class="mt-5" style="margin-top: -1rem !important;">Modifier un article</h1>
<div class="col-md-6">
    <label for="inputEmail4" class="form-label">ID</label>
    <input type="text" class="form-control" name="code" value="<?php echo $rs['id_article']; ?>">
  </div> 
<div class="col-md-6">
    <label for="inputEmail4" class="form-label">Description</label>
    <input type="text" class="form-control" name="descript" value="<?php echo $rs['descript']; ?>">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Prix</label>
    <input type="text" class="form-control" name="prix_unitaire" value="<?php echo $rs['prix_unitaire']; ?>">
  </div>
 

<?php } ?>
<div class="col-12">
    <button type="submit" class="btn btn-primary">Modifier</button>
    <a  href="article.php" type="submit" class="btn btn-success" >Reteur</a>
  </div>
	 
</form>
</body>
</html>