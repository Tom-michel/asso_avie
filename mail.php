<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Envoyer un message - Asoociation Autre Vie</title>

    <link rel="stylesheet" href="css/bootstrap.min1.css">

    <script type="application/javascript" src="js/jquery-3.6.0.min.js"></script>
    <script type="application/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
    <?php 
        if (isset($_POST['message'])) {
            # code...
            $entete = 'From: ' . $_POST['email'] . "\r\n";
            $message = '<div class="container">
            <div class="row">
                <div class="col-xs-12"><h1>Message envoyé depuis le site internet ASSOCIATION AUTRE VIE - AVIE</h1></div>
            </div>
        </div><p><b>Civilité : </b>' . $_POST['civilite'] . '<br>
            <b>Nom : </b>' . $_POST['nom'] . ' ' . $_POST['prenom'] . '<br>
            <b>Tel : </b>' . $_POST['tel'] . '<br>
            <b>Email : </b>' . $_POST['email'] . '<br><br>
            ' . $_POST['message'] . '</p>';

            $message = '<div 
            style=" 
                margin-top: 10px; padding-top: 20px; padding-bottom: 5px;
                background-color: rgb(218, 232, 253); border-radius: 20px; 
                border-bottom: #0676d1 solid 3px;
                font-family: Arial, Helvetica, sans-serif; color: #333; line-height: 1.1;">
            <div>
                <div style="text-align: center; min-height: 1px; font-family: Arial, Helvetica, sans-serif; color: #333;">
                <center>
                <h2 style="color: #0676d1; font-size: 30px; font-weight: 500; 
                    width: 95%; background-color: #fff; border-radius: 10px; padding: 10px 0;">
                    Association AUTRE VIE - AVIE
                </h2>
            </center>
                </div>
                <div style="text-align: center;">
                    <h4 style="font-weight: normal; font-size: 18px; padding: 40px 2px;"><u>Message envoyé depuis la page <b>Contact</b> du site internet</u></h4>
                </div>
                
                <div style="margin-left: 3.33333333%; float: left; border-left: 5px solid #0676d1;">
                    <blockquote
                        style="padding: 0 0 0 15px; margin: 0 0 20px; font-size: 17.5px;">
                        <p style="margin: 10px 0; width: 99%;">
                            <b>Message:</b><br>
                            ' . $_POST['message'] . '
                        </p>
                        <footer style="display: block; font-size: 80%; line-height: 1.42857143; color: #777;">
                            <p>   
                                <b>' . $_POST['civilite'] . '</b>&emsp;' . $_POST['nom'] . ' ' . $_POST['prenom'] . ' <br>
                                <b>Tel : &emsp;&emsp;' . $_POST['tel'] . ' <br>
                                <b>Email: &emsp;</b>' . $_POST['email'] . '
                            </p>
                        </footer>
                    </blockquote>
                </div>
                <div style="text-align: center;">
                    <p>
                        <img src="images/logo.png" style="width: 200px; margin-top: 15px;">
                    </p>
                </div>
                <div style="margin-top: 40px; text-align: center;">
                    <p>
                        <a href="tel:+33660374275"><img src="images/img/tel.png"></a> &emsp;
                        <a href="mailto:associationautrevie@gmail.com"><img src="images/img/mail.png"></a> &emsp;
                        <a href="m.html"><img src="images/img/map.png"></a>
                    </p>
                </div>
            </div>
        </div>';
            echo $message;
            // $retour = mail('associationautrevie@gmail.com', 'Envoi depuis la page Contact', $message, $entete);
            // if ($retour) {
            //     echo '<p>Votre message a bien été envoyé.</p>';
            // }else{
            //     echo '<p>ERREUR !, message non envoyé</p>';
            // }
        }
    ?>
</body>
</html>