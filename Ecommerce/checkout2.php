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
                        <li>Achat - Méthode de livraison</li>
                    </ul>
                </div>

                <div class="col-md-9" id="checkout">

                    <div class="box">
                        <form method="post" action="checkout3.php">
                            <h1>Méthode de livraison</h1>
                            <ul class="nav nav-pills nav-justified">
                                <li><a href="checkout1.php"><i class="fa fa-map-marker"></i><br>Adresse</a>
                                </li>
                                <li class="active"><a href="#"><i class="fa fa-truck"></i><br>Méthode de livraison</a>
                                </li>
                                <li class="disabled"><a href="#"><i class="fa fa-money"></i><br>Méthode de paiement</a>
                                </li>
                                <li class="disabled"><a href="#"><i class="fa fa-eye"></i><br>Revoir les achats</a>
                                </li>
                            </ul>
                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="box shipping-method">

                                            <h4>Livraison rapide</h4>

                                            <p>Reçevez votre livraison rapidement</p>

                                            <div class="box-footer text-center">

                                                <input type="radio" name="delivery" value="delivery1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="box shipping-method">

                                            <h4>Livraison par date</h4>

                                            <p>Recevez votre livraison selon la date que vous voulez</p>

                                            <div class="box-footer text-center">

                                                <input type="radio" name="delivery" value="delivery2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.content -->
                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="basket.php" class="btn btn-default"><i class="fa fa-chevron-left"></i>Retour aux adresses</a>
                                </div>
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary">Continuer au méthode de paiement<i class="fa fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col-md-9 -->
                <div class="col-md-3">
                    <?php include('sommaireachat.php'); ?>
                </div>
                <!-- /.col-md-3 -->
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