
<?php
if (isset($_GET['codeError'])){
    $codeError = $_GET['codeError'];
}
?>
<!DOCTYPE html>
<html>

<?php 
    require "header.php";
?>

<body>
    <div class="page login-page">
        <div class="container">
            <div class="row">
                <div class="form-outer text-center d-flex align-items-center">
                    <div class="form-inner">
                        <div class="logo text-uppercase"><img src="img/logo.png">
                        </div>
                        <form action="inc.session.php" method="post" class="text-left form-validate">
                            <div class="form-group-material">
                                <input id="login-email" type="text" name="email" required
                                    data-msg="Please enter your username" class="input-material">
                                <label for="login-email" class="label-material">Email</label>
                            </div>
                            <div class="form-group-material">
                                <input id="login-password" type="password" name="mdp" required
                                    data-msg="Please enter your password" class="input-material">
                                <label for="login-password" class="label-material">Password</label>
                            </div>
                            <?php

                            //MESSAGES D'ERREUR
                            if (isset($codeError)){
                                switch ($codeError){
                                    case 1 :
                                        //Compte inexistant
                                        echo "<div>Erreur : Ce compte n'existe pas.</div>";
                                        break;
                                    case 2 :
                                        //Mot de passe incorrect
                                        echo "<div>Erreur : mot de passe incorrect.</div>";
                                        break;
                                    case 3 :
                                        //Trop de tentatives de connexion
                                        echo "<div>Nombre de tentatives de connexion au compte trop élevé.<br/>Veuillez demander à l'administrateur de réinitialiser le compteur.</div>";
                                        break;
                                    case 4 :
                                        //Je sais  pas
                                        echo "<div>Erreur : Veuillez réessayer.</div>";
                                }    
                            }
                            if (isset($_REQUEST['reset_mail'])){
                                echo "<div style='width: 250px;display: block;margin: auto;color:#219d2e'>Un mail avec un lien pour modifier votre mot-de-passe a été envoyé</div>";
                                

                            }
                            ?>
                            
                            <div class="form-group text-center"><input type="submit" id="login" href="inc.session.php"
                                    class="btn btn-primary" value="Connexion">
                                <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                            </div>
                            <p><a href="enter_email.php">Mot de passe oublié ?</a></p>
                        </form><a href="register.php" class="signup">S'inscrire</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- JavaScript files-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/popper.js/umd/popper.min.js"> </script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
        <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
        <script src="vendor/chart.js/Chart.min.js"></script>
        <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
        <script src="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
        <!-- Main File-->
        <script src="js/front.js"></script>
</body>

</html>