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
                        <li>A propos de nous</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <!-- *** PAGES MENU *** -->
                    <div class="panel panel-default sidebar-menu">
                        <div class="panel-heading">
                            <h3 class="panel-title">Paramètres</h3>
                        </div>

                        <div class="panel-body">

                            <ul class="nav nav-pills nav-stacked">
                                <li>
                                    <a href="customer-orders.php"><i class="fa fa-list"></i> Mes achats</a>
                                </li>
                                <li>
                                    <a href="customer-wishlist.php"><i class="fa fa-heart"></i> Ma liste de voeux</a>
                                </li>
                                <li class="active">
                                    <a href="customer-account.php"><i class="fa fa-user"></i> Mon compte</a>
                                </li>
                                <li>
                                    <a href="index.php"><i class="fa fa-sign-out"></i> Se déconnecter</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- *** PAGES MENU END *** -->
                </div>
                <div class="col-md-9">
                    <div class="box" id="contact">
                        <h1>Contact</h1>

                        <p class="lead">Vous avez besoin de quelque chose ? Vous avez eu un problème avec un de nos produis ?</p>
                        <p>Prenez contact avec nous, nos services travaillent pour vous 24/7.

                        <hr>

                        <div class="row">
                            <div class="col-sm-4">
                                <h3><i class="fa fa-map-marker"></i> Adresse</h3>
                                <p><strong>Lycée Jean Lurçat</strong>
                                    <br>New Heaven
                                    <br>45Y 73J, av Albert Camus
                                    <br>Perpignan
                                    <br>66070
                                    <br>Pyrénées Orientales
                                    <strong>France</strong>
                                </p>
                            </div>
                            <!-- /.col-sm-4 -->
                            <div class="col-sm-4">
                                <h3><i class="fa fa-phone"></i> Contact téléphonique</h3>
                                <p class="text-muted">Ce numéro permet de nous contacter si vous trouvez un problème avec nos services.</p>
                                <p><strong>+33 00 00 00 00 (numéro fictif)</strong>
                                </p>
                            </div>
                            <!-- /.col-sm-4 -->
                            <div class="col-sm-4">
                                <h3><i class="fa fa-envelope"></i> Contact par internet</h3>
                                <p class="text-muted">Soyez libre de nous contacter par e-mail si vous trouvez un problème avec nos services.</p>
                                <ul>
                                    <li><strong><a href="mailto:">btssio1perpignan@ppe.com (adresse fictive)</a></strong>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.col-sm-4 -->
                        </div>
                        <!-- /.row -->
                        <hr>
                            <!-- /.row -->
                        </form>
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
        <!-- *** FOOTER END *** -->
        <!-- *** COPYRIGHT *** -->
        <?php include('copyright.php'); ?>
        <!-- *** COPYRIGHT END *** -->
    <!-- /#all -->
    <!-- *** SCRIPTS TO INCLUDE *** --> 
    <?php include('java.php'); ?>
</body>
</html>