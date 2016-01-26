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
                        <li>Page non trouvée</li>
                    </ul>
                    <div class="row" id="error-page">
                        <div class="col-sm-6 col-sm-offset-3">
                            <div class="box">
                                <p class="text-center">
                                    <img src="img/logo.png" alt="Obaju template">
                                </p>
                                <h3>Nous sommes désolés, cette page n'est pas disponible</h3>
                                <h4 class="text-muted">Erreur 404, page non trouvée</h4>
                                <p class="text-center">Pour continuer, utilisez l'outil <strong>rechercher</strong> ou <strong>le menu</strong> au-dessus</p>
                                <p class="buttons"><a href="index.php" class="btn btn-primary"><i class="fa fa-home"></i> Aller à l'accueil</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-9 -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->
        <!-- *** FOOTER *** -->
        <?php include('footer.php'); ?>
        <!-- *** COPYRIGHT *** -->
        <?php include('copyright.php'); ?>
    <!-- *** SCRIPTS TO INCLUDE *** -->
        <?php include('java.php'); ?>
</body>
</html>