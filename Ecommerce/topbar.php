<div id="top">
    <div class="container">
        <div class="col-md-6 offer" data-animate="fadeInDown">
            <a href="#" class="btn btn-success btn-sm" data-animate-hover="shake">L'offre du jour</a>  <a href="#">Si le prix est inférieur à 10€, bénéficiez de 35% de réduction !</a>
        </div>
        <div class="col-md-6" data-animate="fadeInDown">
            <ul class="menu">
                <li><a href="#" data-toggle="modal" data-target="#login-modal">Se connecter</a>
                </li>
                <li><a href="register.php">S'incrire</a>
                </li>
                <li><a href="contact.php">Contact</a>
                </li>
                <li><a href="#">Article récemment vu</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
        <div class="modal-dialog modal-sm">
    
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="Login">Connexion customisée</h4>
                </div>
                <div class="modal-body">
                    <form action="customer-orders.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" id="email-modal" placeholder="email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password-modal" placeholder="password">
                        </div>
    
                        <p class="text-center">
                            <button class="btn btn-primary"><i class="fa fa-sign-in"></i>Se connecter</button>
                        </p>
    
                    </form>
    
                    <p class="text-center text-muted">Pas encore inscris ?</p>
                    <p class="text-center text-muted"><a href="register.php"><strong>Inscrivez vous maintenant</strong></a>! C'est simple et c'est fait en une minute, et ça vous donne accès à des offres spéciales et bien plus encore !</p>
    
                </div>
            </div>
        </div>
    </div>
</div>