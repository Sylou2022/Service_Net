
<?php
  // Initialiser la session
  
include "Connexion.php";
 session_start(); 
 ?>
 
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">       
        
        <title>Service_net</title>        
       
       <link rel="stylesheet" href="Loadstyle.css"> 
       <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://code.jquery.com/jquery-3.3.1.slim.min.js">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="footer.css">
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />      
       <script src="Loadstyle.js"></script>
       <link rel="icon" href="favicon.ico" />
       <link rel="stylesheet" href="slide.css">    
    
    </head>
         <body> 
           <div class="tete">              
             
         <div class="preloader">
            <h1>SERVICE NET</h1>
            <span class="loader"></span>
             </div>   

              <nav class="navbar navbar-expand-lg navbar-white bg-white; " style="position:initial;">
                <div style="margin-left: 3em; padding-bottom: 5ex; position:fixed;"></div>
                <img src="image/Logo/SERVICE NET (9).png" alt="" class="logo" width="85"  >
                
           
                          </nav>    
            
                       
    <nav class="navbar navbar-inverse" >
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Service Net</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Accueil</a></li>
      <li><a href="Service.php">Services</a></li>
      <li><a href="Presentation.php">Présentation</a></li>
      <li><a href="Metiers.php">Métiers</a></li>
    </ul>
    <form class="navbar-form navbar-left" action="Details.php" method="get">
      <div class="form-group">
        <input type="search" name="terme" class="form-control" placeholder="Saisir" required>
      </div>
      <button type="submit" name="s" class="btn btn-default" value="Rechercher">Rechercher</button>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="users.php"><span class="glyphicon glyphicon-user"></span> S'inscrire</a></li>
      <li><a href="Compte.php"><span class="glyphicon glyphicon-log-in"></span> Compte</a></li>
    </ul>

  </div>
</nav>
</div>           
            
                
                
                <body onload="checkCookie()"></body>
                <body OnLoad="Preload();Affiche();"> 
                

                <div class="slideshow-container">
      <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="image/maconn.jpg" style="width: 100%;" />
        <div class="text">Service Maçonnerie</div>
      </div>
      <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="image/plommb.jpg" style="width: 100%;" />
        <div class="text">Service Plomberie</div>
      </div>
      <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="image/menuisr.jpg" style="width: 100%;" />
        <div class="text">Service Menuiserie</div>
      </div>
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br />
    <div style="text-align: center;">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>
    <script>
      var slideIndex = 0;
      showSlides();

      function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
          slideIndex = 1;
        }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 3000); // Change image every 2 seconds
      }
    </script>                             
                                
            <!-- Header-->
                         <header>    
                         <div style="text-align: center;">
                             
                       <img src="image/06 38 44 54 42.png" alt="" class="logo" width="330" height="270"></div>
                            <br><br>
                         </header>
                          <section class="py-5 border-bottom" id="Fonctionnement">
                             <div class="container px-5 my-5" style="color: black;">
                             <div class="row gx-5">
                             <div class="col-lg-4 mb-5 mb-lg-0" >
                             <div class="feature  bg-gradient text-black rounded-3 mb-3"><i class="bi bi-gear-fill"></i></div>
                                         <h2 class="h4 fw-bolder">Fonctionnement</h2>
                                         <p>Service net fonctionne à travers une forte relation entre Clients & Professionnels. 
                                           Ces derniers exercent leur professionnalisme dans les différents besoins des
                                          clients. Après choix du service, le professionnel s'affaire à la résolution de celui-ci.</p>
                                         <a class="text-decoration-none" href="Documentation.html" style="color: #d89735;">
                                         Voir Plus
                                         <i class="bi bi-arrow-right"></i>
                                         </a>
                                     </div>
                                     <div class="col-lg-4 mb-5 mb-lg-0">
                                         <div class="feature  bg-gradient text-black rounded-3 mb-3"><i class="bi bi-bar-chart-line-fill"></i></div>
                                         <h2 class="h4 fw-bolder">Croissance</h2>
                                         <p>L'accroissement de l'entreprise est lié à l'adhésion des clients soit dans l'abonnement ou le partage
                                              entre client. Le professionnalisme, but ultime de la société, participe à son amélioration 
                                              ce qui permet un choix favoritiste parmi d'autres..</p>
                                         <a class="text-decoration-none" href="Croissance.php" style="color: #d89735;">
                                             Voir Plus
                                             <i class="bi bi-arrow-right"></i>
                                         </a>
                                     </div>
                                     <div class="col-lg-4">
                                         <div class="feature  bg-gradient text-black rounded-3 mb-3"><i class="bi bi-info-square-fill"></i></div>
                                         <h2 class="h4 fw-bolder">Information</h2>
                                         <p>Il est nécessaire de choisir un professionnel situant dans votre ville pour bénéficier du tarif régional.
                                              Autres, Vous pouvez choisir parmi nos services, celui ou ceux qui vous conviennent
                                              relatifs à vos besoins, aisni le payement s'effectuera après réalisation.</p> 
                                         <a class="text-decoration-none" href="Presentation.php" style="color: #d89735;">
                                            Voir Plus 
                                             <i class="bi bi-arrow-right"></i>
                                         </a>
                                     </div>
                                  </div>
                                   </div>
                                  </section>                 
                 <br><br><br>                          
            </body>                  
             <!-- Footer-->            

             <footer id="dk-footer" class="dk-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <div class="dk-footer-box-info">
                        <a href="index.html" class="footer-logo">
                            <img src="image/Logo/SERVICE NET (9).png" width="100px" alt="footer_logo" class="img-fluid">
                        </a>
                        <p class="footer-info-text">
                           Service net vous présente ses services avec des professionnels expérimentés dans les différents domaines.
                        </p>
                        <div class="footer-social-link">
                            <h3>Nous suivre</h3>
                            <ul>
                                <li>
                                    <a href="https://fr-fr.facebook.com/">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/?lang=fr">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.google.com/">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                    </li>
                                <li>
                                    <a href="https://www.linkedin.com/">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/?hl=fr">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Social link -->
                    </div>
                    <!-- End Footer info -->
                    <div class="footer-awarad">
                        <img src="images/icon/best.png" alt="">
                        
                    </div>
                </div>
                <!-- End Col -->
                <div class="col-md-12 col-lg-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-us">
                                <div class="contact-icon">
                                    <i class="fa fa-map-o" aria-hidden="true"></i>
                                    </div>
                                <!-- End contact Icon -->
                                <div class="contact-info">
                                    <h3>Rabat Maroc</h3>
                                    <p>66, Avenue Oqba</p>
                                </div>
                                <!-- End Contact Info -->
                            </div>
                            <!-- End Contact Us -->
                        </div>
                        <!-- End Col -->
                        <div class="col-md-6">
                            <div class="contact-us contact-us-last">
                                <div class="contact-icon">
                                    <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                                </div>
                                <!-- End contact Icon -->
                                <div class="contact-info">
                                    <h3>06 38 445 442</h3>
                                    <p>Contactez-Nous</p>
                                </div>
                                <!-- End Contact Info -->
                            </div>
                            <!-- End Contact Us -->
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Contact Row -->
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="footer-widget footer-left-widget">
                                <div class="section-heading">
                                    <h3>Liens utiles</h3>
                                    <span class="animate-border border-black"></span>
                                </div>
                                <ul>
                                    <li>
                                        <a href="Metiers.php"> Nos Metiers</a>
                                    </li>
                                    <li>
                                        <a href="Service.php">Nos Services</a>
                                    </li>
                                    <li>
                                        <a href="Presentation.php">Qui sommes-nous?</a>
                                    </li>
                                    <li>
                                        <a href="users.php">Inscription</a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="Contacter.php">Nous Contacter</a>
                                    </li>
                                    <li>
                                        <a href="Documentation.html">Documentation</a>
                                    </li>
                                    <li>
                                        <a href="imageservice.html">Images projets</a>
                                    </li>
                                    <li>
                                        <a href="Contacter.php">Commentaires</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Footer Widget -->
                        </div>
                        <!-- End col -->
                        <div class="col-md-12 col-lg-6">
                            <div class="footer-widget">
                                <div class="section-heading">
                                    <h3>Inscription</h3>
                                    <span class="animate-border border-black"></span>
                                </div>
                                <p><!-- Don’t miss to subscribe to our new feeds, kindly fill the form below. -->
                               Inscription nécessaire pour vos téléchargements, le site gère toute confidentialité.</p>
                                <form action="#" method="POST">
                                    <div class="form-row">
                                        <div class="col dk-footer-form">
                                            <input type="email" name="email" class="form-control" placeholder="Adresse Email">
                                            <button type="submit" name="OK" value="OK"><span><i class="fa fa-send"></i></span>
                                            
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                 
<?php
$db=mysqli_connect("localhost","root","","service_net");

if(isset($_POST['OK'])){
  
   $email=$_POST['email'];   
   $sql="INSERT INTO email_visiteur (email) VALUES ('$email')";
   $resultat=$db->query($sql);
   if($resultat){
       echo "<h4 >Email envoyé avec succès</h4>";

   }else{
       echo "Erreur s'est produite!";
   }
}
?>
                                <!-- End form -->
                            </div>
                            <!-- End footer widget -->
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Widget Row -->
        </div>
        <!-- End Contact Container -->
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <span>Copyright © 2022, réalisé par Service Net </span>
                    </div>
                    <!-- End Col -->
                    <div class="col-md-6">
                        <div class="copyright-menu">
                            <ul>
                                <li>
                                    <a href="#">Accueil</a>
                                </li>
                                <li>
                                    <a href="Service.php">Services</a>
                                </li>
                                <li>
                                <a href="Admin.php"><span ><img src="image/cad1.png" alt="icone" width="20" ></span></a>   
                                </li>
                                <li>
                                <a href="PolitiqueConf.html">Politique de Confidentialité</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Copyright Container -->
        </div>
        <!-- End Copyright -->
        <!-- Back to top -->
        <div id="back-to-top" class="back-to-top">
            <button class="btn btn-dark" title="Back to Top" style="display: block;">
            <i class="fa fa-angle-up"></i>
            </button>
        </div>
        <!-- End Back to top -->
</footer>       
    </body>
</html>
