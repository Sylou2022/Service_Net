

<?php
  // Initialiser la session
  
include "connexion.php";
 session_start(); 
 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables</title>
        <link rel="icon" href="favicon.ico" />
       
      
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="tableau.css">
    </head>
    
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="Accueil.php"><img src="icone/logooo.png" alt="logo" width="118"></a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
           
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4" >
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        
                        <li><a class="dropdown-item" href="#!">Outils d'administration</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="Utilisateur.php">Se connecter</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            
                            <a class="nav-link" href="Accueil.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                               Tableau de bord
                            </a>
                            <div class="sb-sidenav-menu-heading">Accueil</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fa fa-gear"></i></div>
                                Paramètre
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="#">Configuration</a>
                                    <a class="nav-link" href="#">Politique de confidentialité</a>
                                    <a class="nav-link" href="#">Mode d'utilisation</a>
                                    <a class="nav-link" href="#">Conditions</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Tâches
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                        <a  href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        cliquez ici!
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                        <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="Facture.php">Proposition Facture</a>
                                        <a class="nav-link" href="Tiers.php">Nouveau Tiers</a>
                                        <a class="nav-link" href="Commandes.php">Commande</a>
                                                                                
                                                                                  
                                                                                   
                                            
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                      Gestion Erreur
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">Page 401</a>
                                            <a class="nav-link" href="404.html">Page 404</a>
                                            <a class="nav-link" href="500.html">Page 500</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Statistiques</div>
                            <a class="nav-link" href="Graphisme.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                               Graphique
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                               
                                Table
                            </a>
                        </div>
                    </div>
                   
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="Accueil.php">Tableau de bord</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                Le tableau ci-dessous présente les enregistrements du personnel avec les différentes informations.
                               
                                
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Tableau de données
                            </div>
                            <div class="card-body">
                            <table id="example" class="display" style="width:100%;">
                                    <thead>
                                        <tr>
                                        <th>Référence</th>
                                            <th>Nom</th>
                                            <th>Poste</th>
                                            <th>Ville</th>
                                            <th>Age</th>                                                                                       
                                            <th>Date d'embauche</th>
                                            <th>Type Contrat</th> 
                                            <th>Salaire</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                       
                                        <tbody>
                                            <?php
                                
                                include "connexion.php" ;  
                                
                                $records = mysqli_query( $db , "select * from tables_perso" );  
                                
                                while( $data = mysqli_fetch_array( $records ))
                                {
                                ?>
                                            
                                                            <tr>
                                              <td> <?php echo $data [ 'reference' ]; ?> </td>
                                            <td> <?php echo $data [ 'nom_perso' ]; ?> </td>
                                            <td> <?php echo $data [ 'poste_perso' ]; ?> </td>
                                            <td> <?php echo $data [ 'ville_perso' ]; ?> </td>
                                            <td> <?php echo $data [ 'age_perso' ]; ?> </td>
                                            <td> <?php echo $data [ 'date_embauche' ]; ?> </td>
                                            <td> <?php echo $data [ 'type_contrat' ]; ?> </td>
                                            <td> <?php echo $data [ 'salaire_perso' ]; ?> </td>
                                                            </tr>
                                                            <?php
                                              }
                                              ?> 					
                                                        
                                    </tbody>
                                </table>
                                <script>
                                    $(document).ready(function() {
                                       $('#example').DataTable( {
                                           "language": {
                                               "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
                                           }
                                       } );
                                   } );                                  
                                   
                                   </script>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; OBI Open-Business-Informatique 2022</div>
                            <div>
                                <a href="#">Politique de confidentialité</a>
                                &middot;
                                <a href="#">Termes &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
