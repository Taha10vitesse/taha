<!DOCTYPE html>
<html>
<head>
        <title>TNH Auto</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="icon" type="image/png" href="../public/Assets/images/logoTNH.png"/>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<nav class="nav">
    <div class="container">
            <div class="logo">
                <a href="../index.php"><img src="../public/Assets/images/logoTNH.png" alt="..." width="60" height="60"></a>
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <li><a href="../index.php">Recherche</a></li>
                    <li><a href="../nous.php">Qui sommes-nous</a></li>
                    <li><a href="register.php">Mon Compte</a></li>
                    <li><a href="../contact.php">Contact</a></li>
                    <li><a href="#1"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg></i></a></li>
                    
                </ul>
            </div>
            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>
    </nav>
    <?php
require('config.php');
session_start();

if (isset($_POST['username'])){
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($conn, $username);
    $_SESSION['username'] = $username;
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn, $password);
    $query = "SELECT * FROM `users` WHERE username='$username' and password='".hash('sha256', $password)."'";
    $result = mysqli_query($conn,$query) or die(mysql_error());
    
    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        // vérifier si l'utilisateur est un administrateur ou un utilisateur
        if ($user['type'] == 'admin') {
            header('location: admin/home.php');          
        }else{
            header('location: index.php');
        }
    }else{
        $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
    }
}
?>

<form class="box" action="" method="post" name="login">
<h1 class="box-logo box-title"><a href="index.php">TNH Auto</a></h1>
<h1 class="box-title">Connexion</h1>
<input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur">
<input type="password" class="box-input" name="password" placeholder="Mot de passe">
<input type="submit" value="Connexion " name="submit" class="box-button">
<p class="box-register">Vous êtes nouveau ici? <a href="register.php">S'inscrire</a></p>
<?php if (! empty($message)) { ?>
    <p class="errorMessage"><?php echo $message; ?></p>
<?php } ?>
</form>

<div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                        <li><a href="#1">Recherche</a></li>
                        <li><a href="nous.php">Qui sommes-nous</a></li>
                        <li><a href="compte.php">Mon Compte</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Contact</h3>
                            <ul class="socials">
                                <li><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram fa-2x"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube fa-2x"></i></a></li>
                            </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>TNH Auto</h3>
                        <p> Notre entreprise est spécialisée dans la vente de pièces automobiles neuves et d’origine en provenance d'équipementiers ou de grossistes automobiles. Créé en 2020 par trois jeunes entrepreneurs, cette entreprise arrive à concurrencer les autres entreprises présentes avant sur le marché.</p>
                    </div>
                    
                </div>
                <p class="copyright">TNH Auto © 2020</p>
            </div>
        </footer>
    </div>
</body>
</html>