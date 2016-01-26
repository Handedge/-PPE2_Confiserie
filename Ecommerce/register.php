<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- *** CSS *** -->
    <?php include('css.php'); ?>
</head>
<body>
    <!-- *** TOPBAR *** -->
    <?php include('topbar.php'); ?>
    <!-- *** TOP BAR END *** -->
    <!-- *** NAVBAR *** -->
    <?php include('navbar.php'); ?>
    <!-- *** NAVBAR END *** -->
    <div id="all">
        <div id="content">
            <div class="container">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Accueil</a>
                        </li>
                        <li>Nouveau compte / Se connecter</li>
                    </ul>

                </div>

                <div class="col-md-6">
                    <div class="box">
                        <h1>Nouveau compte</h1>

                        <p class="lead">Vous n'êtes toujours pas un client ?</p>
                        <p>Avec une inscription, vous pourrez découvrir beaucoup de nouveaux produits ! L'inscription ne dépasse pas la minute !</p>
                        <p class="text-muted">Si vous avez des questions, n'hésitez pas à <a href="contact.php">nous contacter</a>, notre service travaille pour vous 24/7.</p>
                        <hr>
                        <form action="customer-orders.php" method="post">
                            <div class="form-group">
                                <label for="familyname">Nom</label>
                                <input type="text" class="form-control" id="familyname">
                            </div>
                            <div class="form-group">
                                <label for="firstname">Prénom</label>
                                <input type="text" class="form-control" id="firstname">
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="text" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="password">Mot de passe</label>
                                <input type="password" class="form-control" id="password">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-user-md"></i> S'inscrire</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box">
                        <h1>Se connecter</h1>

                        <p class="lead">Déjà client ?</p>
                        <p class="text-muted">Connectez vous pour pouvoir accéder à votre liste de voeux ou votre liste d'achat.</p>

                        <hr>

                        <form action="customer-orders.php" method="post">
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="text" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="password">Mot de passe</label>
                                <input type="password" class="form-control" id="password">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> Se connecter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->
<!-- *** FOOTER *** -->
        <?php include('footer.php'); ?>
        <!-- *** FOOTER END *** -->
        <!-- *** COPYRIGHT *** -->
        <?php include('copyright.php'); ?>
        <!-- *** COPYRIGHT END *** -->
    <!-- /#all -->
    <!-- *** SCRIPTS TO INCLUDE *** --> 
    <?php include('java.php'); ?>
</body>
</html>