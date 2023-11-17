<!DOCTYPE html>
<html>
  <?php
    include("header.inc.php")
    ?>
  <body class="menu_de_navigation">
    <nav class="navbar navbar-expand-lg " >
      <div class="container-fluid">
        <a class="navbar-brand" href="#">PGA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active lien" aria-current="page" aria-expanded="false" href="accueil.php">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active lien" href="listeJeuxMembre.php" aria-disabled="false">Mes Jeux</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active lien" href="#" aria-disabled="false">Historique</a>
            </li>  
          </ul>
            <button class="btn deco" onclick="window.location.href='logout.php'">Déconnexion</button>
          
        </div>
      </div>
    </nav>
  </body>
</html>
