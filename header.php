<header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Deconnecter</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link <?php echo !empty($acceuil)?"active":""?>"  href="acceuil.php">Acceuil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo !empty($article)?"active":""?>" href="article.php">Article</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($client)?"active":""?>" href="client.php">Client</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo !empty($commande)?"active":""?>" href="commande.php">Commande</a>
          </li>
        </ul>
        
        </form>
      </div>
    </div>
  </nav>

</header>
<div class="img nav"><img src="images/order.png" style="width=200px;margin-top: 89px;margin-left: 800px;height: 144px;"></div>
 
 
    


