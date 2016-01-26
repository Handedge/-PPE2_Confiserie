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
                        <li>Achat - Revoir les achats</li>
                    </ul>
                </div>

                <div class="col-md-9" id="checkout">

                    <div class="box">
                        <form method="post" action="checkout4.php">
                            <h1>Revoir les achats</h1>
                            <ul class="nav nav-pills nav-justified">
                                <li><a href="checkout1.php"><i class="fa fa-map-marker"></i><br>Adresse</a>
                                </li>
                                <li><a href="checkout2.php"><i class="fa fa-truck"></i><br>Méthode de livraison</a>
                                </li>
                                <li><a href="checkout3.php"><i class="fa fa-money"></i><br>Méthode de paiement</a>
                                </li>
                                <li class="active"><a href="#"><i class="fa fa-eye"></i><br>Revoir les achats</a>
                                </li>
                            </ul>

                            <div class="content">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Product</th>
                                                <th>Quantity</th>
                                                <th>Unit price</th>
                                                <th>Discount</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="#">
                                                        <img src="img/detailsquare.jpg" alt="White Blouse Armani">
                                                    </a>
                                                </td>
                                                <td><a href="#">White Blouse Armani</a>
                                                </td>
                                                <td>2</td>
                                                <td>$123.00</td>
                                                <td>$0.00</td>
                                                <td>$246.00</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#">
                                                        <img src="img/basketsquare.jpg" alt="Black Blouse Armani">
                                                    </a>
                                                </td>
                                                <td><a href="#">Black Blouse Armani</a>
                                                </td>
                                                <td>1</td>
                                                <td>$200.00</td>
                                                <td>$0.00</td>
                                                <td>$200.00</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th colspan="5">Total</th>
                                                <th>$446.00</th>
                                            </tr>
                                        </tfoot>
                                    </table>

                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.content -->

                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="checkout3.php" class="btn btn-default"><i class="fa fa-chevron-left"></i>Retour à la méthode de paiement</a>
                                </div>
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary">Envoyer une commande<i class="fa fa-chevron-right"></i>
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

                    </div>

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
    <!-- *** SCRIPTS TO INCLUDE *** -->
    <?php include('java.php'); ?>
</body>
</html>