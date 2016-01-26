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
                        <li>Achat - Méthode de paiement</li>
                    </ul>
                </div>

                <div class="col-md-9" id="checkout">

                    <div class="box">
                        <form method="post" action="checkout4.php">
                            <h1>Méthode d'achat</h1>
                            <ul class="nav nav-pills nav-justified">
                                <li><a href="checkout1.php"><i class="fa fa-map-marker"></i><br>Adresse</a>
                                </li>
                                <li><a href="checkout2.php"><i class="fa fa-truck"></i><br>Méthode de livraison</a>
                                </li>
                                <li class="active"><a href="#"><i class="fa fa-money"></i><br>Méthode de paiement</a>
                                </li>
                                <li class="disabled"><a href="checkout4.php"><i class="fa fa-eye"></i><br>Revoir les achats</a>
                                </li>
                            </ul>
                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="box payment-method">
                                            <h4>Paypal</h4>
                                            <p>Le plus rapide et le plus sécurisé.</p>
                                            <div class="box-footer text-center">
                                                <input type="radio" name="payment" value="payment1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="box payment-method">
                                            <h4>Autres services</h4>
                                            <p>VISA et Mastercard seulement.</p>
                                            <div class="box-footer text-center">
                                                <input type="radio" name="payment" value="payment2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="box payment-method">
                                            <h4>Allopass</h4>
                                            <p>Payez grâce au forfait de votre téléphone.</p>
                                            <div class="box-footer text-center">
                                                <input type="radio" name="payment" value="payment3">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.content -->
                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="basket.php" class="btn btn-default"><i class="fa fa-chevron-left"></i>Retour à la méthode de livraison</a>
                                </div>
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary">Continuer vers la finisialisation de vos achats<i class="fa fa-chevron-right"></i>
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
    </div>
    <!-- /#all -->
    <?php include('java.php'); ?>
</body>
</html>