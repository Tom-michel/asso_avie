<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/logo.png">
    <title>Contact - Autre Vie - Association humanitaire</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/all.min.css">

    <link rel="stylesheet" href="css/bootstrap.min1.css">
    <link rel="stylesheet" href="css/style.css">

    <script type="application/javascript" src="js/jquery-3.6.0.min.js"></script>
    <script type="application/javascript" src="js/bootstrap.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css"> -->

    <!-- Latest compiled and minified JavaScript -->
    <!-- <script type="application/javascript" src="js/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script> -->

</head>
<body data-spy="scroll" data-target="#mainmenu">

<!-- barre de navigation - début -->

    <nav id="mainmenu" class="navbar navbar-default navbar-fixed-top mainmenu scroll" style="margin-bottom: 200px;">
        
        <nav id="nav_contact" class="navbar navbar-default">
            
            <div class="container">
                <div class="row contacts">
                    <div class=" col-lg-2 col-md-1 col-sm-2 col-xs-3">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#">
                                
                                <img class="logo visible-md visible-lg" src="images/logo_avie.png" alt="">
                                <img class="logo visible-sm" src="images/nom1.png" alt="">
                                <img class="logo visible-xs" src="images/àvie.png" alt="">
                              
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-9 col-sm-10 visible-xs visible-sm">
                         <div class="row">
                            <div class="col-xs-2 col-sm-2 text-right">
                                <a href="tel:+33660374275"><i class="fas fa-mobile-alt"></i></a>
                            </div>
                            <div class="col-xs-2 col-sm-2 text-center">
                                <!-- <i class="fas fa-envelope-square"></i> -->
                                <!-- <i class="fas fa-envelope-open-text"></i> -->
                                <a href="mailto:associationautrevie@gmail.com"><i class="fas fa-envelope"></i></a>
                            </div>
                            <div class="col-xs-2 col-sm-2 text-left">
                                <a href="#"><i class="fas fa-map-marker-alt"></i></a>
                            </div>
                            <div class="col-xs-6 col-sm-6 text-right">
                                <p><a class="btn btn-sm btn-primary " href="#faire_un_don" role="button">FAIRE UN DON</a></p>
                                
                            </div>
                        </div>
                    </div>

                    <div id="nav_contact_contact" class="contacts col-lg-10 col-md-11 col-sm-10 hidden-xs">
                        <div class="row visible-md visible-lg">
                            <div class="col-lg-3 text-left hidden-md">
                                <p><i class="fas fa-mobile-alt"></i> +33660374275 </p>
                            </div>
                            <div class="col-md-3 text-center visible-md">
                                <p><i class="fas fa-mobile-alt"></i> +33660374275 </p>
                            </div>
                            <div class="col-lg-4 col-md-4 text-center">
                                <p><i class="fas fa-envelope"></i> associationautrevie@gmail.com</p>
                            </div>
                            <div class="col-md-5 text-right visible-md">
                                <p><i class="fas fa-map-marker-alt"></i> 12 Allée des Coteaux 78110 Le Vésinet</p>
                            </div>
                            <div class="col-lg-5 text-right hidden-md">
                                <p><i class="fas fa-map-marker-alt"></i> 12 Allée des Coteaux 78110 Le Vésinet</p>
                            </div>
                        </div>
                    </div>
                            
                </div>
            </div>

        </nav><!--nav_contact-->

        <div class="container">

            <div class="navbar-header">
                <button id="btn_menu" class="navbar-toggle btn_menu" data-toggle="collapse" data-target="#monmenu">
                    <span class="glyphicon glyphicon-menu-hamburger"></span>
                    <span class="glyphicon glyphicon-remove"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="monmenu">
                                
                <ul class="nav navbar-nav">
                    <li class="accueil"><a href="index.html"><button>Accueil</button></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">A propos de nous <samp class="caret"></samp></a>
                        <ul class="dropdown-menu">
                            <li><a href="index.html#nous">Qui sommes nous</a></li>
                            <li><a href="index.html#notre_mission">Notre mission</a></li>
                        </ul>
                    </li>
                    <li><a href="rejoindre.html">Rejoignez-nous</a></li>
                    <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Les membres <samp class="caret"></samp></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Ajouter</a></li>
                            <li><a href="#">Modifier</a></li>
                            <li><a href="#">Supprimer</a></li>
                        </ul>
                    </li> -->
                    <li><a href="#" style="color: #000;">Contact</a></li>
                    <li class="bienvenue visible-md visible-lg"><a href="#"><button class="btn btn-info btn-lg">Faire un don</button></a></li>
                    <!-- <li id="moncompte"><a href="#"><span class="glyphicon glyphicon-user"></span></a></li> -->
                </ul>

            </div>
            
        </div>
    </nav>

<!-- barre de navigation - fin -->


<!-- formulaire - début -->

    <section class="titre_page" id="contactez_nous">
        <section id="c_conatact">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 col-xs-12 text-center">
                        <h1>Nous Contacter</h1>
                    </div>
                    <div class="col-xs-12">
                        <p>Ecrivez-nous !</p>
                    </div>
                </div>
            </div>
        </section>
        
        <div id="formulaire" class="container">
            <div class="row">
                <section>
                    <form action="mail.php" method=POST>
                        <div class="col-xs-12">
                            <select name="civilite" id="civilite" required>
                                <option>Civilité*</option>
                                <option>Madame</option>
                                <option>Monsieur</option>
                            </select>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <input type="text" name="nom" id="nom" placeholder="Nom*" required>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <input type="text" name="prenom" id="prenom" placeholder="Prénom*" required>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <input type="tel" name="tel" id="tel" placeholder="N° de téléphone*" required>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <input type="email" name="email" id="email" placeholder="Email*" required>
                        </div>
                        <div class="col-xs-12">
                            <textarea name="message" id="message" rows="7" placeholder="Votre message*" required></textarea>
                        </div>
                        <div class="col-xs-12">
                            <input class="btn btn-primary btn-lg btn_submit" type="submit" value="&emsp; Envoyer &emsp;" style="margin-top: 10px;">
                            
                        </div>
                    </form>  
                    
                    

                </section>
            </div>
        </div>
    </section>

<!-- formulaire - fin  -->


<!-- contact -début -->

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h1>Paris - FRANCE</h1>
            </div>

            <!-- md and lg -->
            <div class="col-md-5 text-center visible-md visible-lg">
                <p><strong>Siège : </strong>12 Allée des Coteaux 78110 Le Vésinet</p>
            </div>
            <div class="col-md-3 visible-md visible-lg">
                <p><strong>Tel. : </strong>+33660374275</p>
            </div>
            <div class="col-md-4 visible-md visible-lg">
                <p><strong>Email : </strong>associationautrevie@gmail.com</p>
            </div>

            <!-- sm and xs -->
            <div class="col-xs-12 col-sm-9 col-sm-offset-3 text-left visible-xs visible-sm">
                <p><strong>&emsp;Siège :&emsp; </strong> 12 Allée des Coteaux 78110 Le Vésinet</p>
            </div>
            <div class="col-xs-12 col-sm-9 col-sm-offset-3 text-left visible-xs visible-sm">
                <p><strong>&emsp;Tel :&emsp;&emsp; </strong>+33660374275</p>
            </div>
            <div class="col-xs-12 col-sm-9 col-sm-offset-3 text-left visible-xs visible-sm">
                <p><strong>&emsp;Email :&emsp; </strong>associationautrevie@gmail.com</p>
            </div>

            <div class="col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2 text-center visible-xs" style="margin-bottom: 10px;">
                <h5>
                    Appelez-nous
                    <a href="tel:+33660374275"> Ici <span class="glyphicon glyphicon-phone-alt"></span></a>
                </h5>
                <!-- <div class="titre_text contact">
                    <p>NOUS ECRIRE</p>
                </div> -->
            </div>
            <div class="col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2 text-center hidden-xs" style="margin-bottom: 10px;">
                <h5>
                    Appelez-nous
                    <a href="contact.html"> Ici <span class="glyphicon glyphicon-phone-alt"></span></a>
                </h5>
                <!-- <div class="titre_text contact">
                    <p>NOUS ECRIRE</p>
                </div> -->
            </div>

            <div class="col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2 text-center">
                <h4> <u>Design</u> : logo | Tom</h4>
            </div>
        </div>
    </div>
</section>

<!-- contact _ fin -->



    <script>

        document.querySelector('.glyphicon-remove').style.display="none"
        const menuBtn = document.querySelector('.btn_menu')

        // click sur le boutton menu

        menuBtn.onclick = function(){
            if (document.querySelector('.glyphicon-remove').style.display == "none") {
                document.querySelector('.glyphicon-menu-hamburger').style.display="none"
                document.querySelector('.glyphicon-remove').style.display=""
            }
            else{
                document.querySelector('.glyphicon-remove').style.display="none"
                document.querySelector('.glyphicon-menu-hamburger').style.display=""
            }  
        }
    </script>


</body>
</html>