<!DOCTYPE html>
<html lang="en">
    <head>
        <title>TNH Auto</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="public/CSS/styles.css">
        <link rel="icon" type="image/png" href="public/Assets/images/logoTNH.png"/>
        <link rel="stylesheet" href="public/CSS/accueil.css">
        <link rel="stylesheet" href="public/CSS/main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    </head>
    <body>

    <nav class="nav sticky-top">
        <div class="container">
            <div class="logo">
                <a href="index.php"><img src ="public/Assets/images/logoTNH.png" alt="..." width="60" height="60"></a>
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <li><a href="#1">Recherche</a></li>
                    <li><a href="nous.php">Qui sommes-nous</a></li>
                    <li><a href="registration/register.php">Mon Compte</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="panier.php"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
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

    <section class="home">

    </section>
<div id="1"></div>
    <div class="tabParts">

        <div class="row">

            <div id="listnavcat" class="col-lg-4 col-md-6 col-sm-12 ">
                <div class="listnavsubcat">
                    <div>
                        <h2>
                            <a href="Pièces.php">Pièces moteur</a>
                        </h2>
                        <span title="Pièces moteur" class="test"></span>
                        <hr>
                        <div class="thumbnail">
                            <img src="public/Assets/images/moteurindex2.png" alt="...">
                        </div>
                    </div>
                </div>
            </div>

            <div id="listnavcat" class="col-lg-4 col-md-6 col-sm-12 ">
                <div class="listnavsubcat">
                    <div>
                        <h2>
                            <a href="Freinage.php">Freinage</a>
                        </h2>
                        <span title="Freinage" class="test"></span>
                        <hr>
                        <div class="thumbnail">
                            <img src="public/Assets/images/freindex2.png" alt="...">
                        </div>
                    </div>
                </div>
            </div>

            <div id="listnavcat" class="col-lg-4 col-md-6 col-sm-12">
                <div class="listnavsubcat">
                    <div>
                        <h2>
                            <a href="Carosserie.php">Carrosserie / Vitres / Peinture</a>
                        </h2>
                        <span title="Carrosserie / Vitres / Peinture" class="test"></span>
                        <hr>
                        <div class="thumbnail">
                            <img src="public/Assets/images/carro2.png" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <a href="contact.php"><img src="public/Assets/images/258s.jpg" class="d-block w-100" alt="..."></a>
            </div>
            <div class="carousel-item">
            <img src="public/Assets/images/logoTNH.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    

<div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="index.php">Recherche</a></li>
                            <li><a href="nous.php">Qui sommes-nous</a></li>
                            <li><a href="registration/register.php">Mon compte</a></li>
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
<!-- Jquery needed -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="/public/JavaScript/JavaScript.js"></script>

<!-- Function used to shrink nav bar removing paddings and adding black background -->
    <script>
        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.nav').addClass('affix');
                console.log("OK");
            } else {
                $('.nav').removeClass('affix');
            }
        });
    </script>
    </body>
</html>