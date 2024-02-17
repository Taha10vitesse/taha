
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    </body>
</html>