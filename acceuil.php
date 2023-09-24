
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
$acceuil=true;
include_once("header.php");
include_once("main.php");

?>
    <h1 class="mt-5" style="margin-top: -1rem !important;">Acceuil</h1>


    <!--button ajouter
    <a href="ajout_client.php" class="btn btn-primary" style="float:right;margin-bottom:10px;">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16"> <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/><path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/></svg>
    </a>-->
   
   
        <?php  
        
        $acceuil=true;
          $sql="select * from commande,ligne_commande,article,client
          where article.id_article=ligne_commande.id_article
          and ligne_commande.id_commande=commande.id_commande
          and client.id_client=commande.id_client";
          $ps=$chaine->prepare($sql);
          $ps->execute();
          ?>

<a href="commande.php" class="btn btn-primary" style="float:right;margin-bottom:10px;">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16"> <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/><path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/></svg>
    </a>

    <table id="datatable" class="display" style="margin-top: 10px;">
    <thead>
        <tr>
            <th>ID_COMMANDE</th>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>VILLE</th>
            <th>DATE_COMMANDE</th>
            <th>QUANTITE</th>
            <th>ARTICLE</th>
            <th>PRIX</th>
            
           
            
        </tr>
    </thead>
    <tbody>
    <?php while ($rs=$ps->fetch()) { ?>
        <tr>
          
               <td><?php echo $rs["id_commande"];?></td>
               <td><?php echo $rs["nom"];?></td>
               <td><?php echo $rs["prenom"];?></td>
               <td><?php echo $rs["ville"];?></td>
               <td><?php echo $rs["datee"];?></td>
               <td><?php echo $rs["quantite"];?></td>
               <td><?php echo $rs["descript"];?></td>
               <td><?php echo $rs["prix_unitaire"];?></td>
            
            
        </tr>
        <?php }  ?>
        
    </tbody>
</table>
  </div>
</main>

<?php
include_once("footer.php");
?>
<!--<script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>-->
<!---     09/08/2023  -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Récupérez la liste des éléments de navigation
        const navItems = document.querySelectorAll('nav ul li');

        // Obtenez le chemin de la page actuelle
        const currentPath = window.location.pathname;

        // Parcourez chaque élément de navigation et comparez le chemin avec l'URL actuelle
        navItems.forEach(item => {
            const link = item.querySelector('a');
            if (link.getAttribute('href') === currentPath) {
                item.classList.add('active');
            }
        });
    });
</script>

 <!--- 09/08/2023   -->
    </body>
</html>
