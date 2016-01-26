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
                        <li>Mes achats</li>
                    </ul>

                </div>

                <div class="col-md-3">
                    <!-- *** CUSTOMER MENU ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Paramètres</h3>
                        </div>

                        <div class="panel-body">

                            <ul class="nav nav-pills nav-stacked">
                                <li class="active">
                                    <a href="customer-orders.php"><i class="fa fa-list"></i> Mes achats</a>
                                </li>
                                <li>
                                    <a href="customer-wishlist.php"><i class="fa fa-heart"></i> Ma liste de voeux</a>
                                </li>
                                <li>
                                    <a href="customer-account.php"><i class="fa fa-user"></i> Mon compte</a>
                                </li>
                                <li>
                                    <a href="index.php"><i class="fa fa-sign-out"></i> Se déconnecter</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- /.col-md-3 -->

                    <!-- *** CUSTOMER MENU END *** -->
                </div>

                <div class="col-md-9" id="customer-orders">
                    <div class="box">
                        <h1>Mes commandes</h1>

                        <p class="lead">Vos commandes dans une seule place.</p>
                        <p class="text-muted">Si vous avez des questions, n'hésite pas à <a href="contact.php">nous contacter</a>, notre service est disponible 24/7.</p>

                        <hr>

                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Commande</th>
                                        <th>Date</th>
                                        <th>Total</th>
                                        <th>Statut</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th># 1735</th>
                                        <td>22/06/2013</td>
                                        <td>$ 150.00</td>
                                        <td><span class="label label-info">Est préparé</span>
                                        </td>
                                        <td><a href="customer-order.php" class="btn btn-primary btn-sm">Voir</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th># 1735</th>
                                        <td>22/06/2013</td>
                                        <td>$ 150.00</td>
                                        <td><span class="label label-info">Est préparé</span>
                                        </td>
                                        <td><a href="customer-order.php" class="btn btn-primary btn-sm">Voir</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th># 1735</th>
                                        <td>22/06/2013</td>
                                        <td>$ 150.00</td>
                                        <td><span class="label label-success">Reçu</span>
                                        </td>
                                        <td><a href="customer-order.php" class="btn btn-primary btn-sm">Voir</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th># 1735</th>
                                        <td>22/06/2013</td>
                                        <td>$ 150.00</td>
                                        <td><span class="label label-danger">Annulé</span>
                                        </td>
                                        <td><a href="customer-order.php" class="btn btn-primary btn-sm">Voir</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th># 1735</th>
                                        <td>22/06/2013</td>
                                        <td>$ 150.00</td>
                                        <td><span class="label label-warning">En cours</span>
                                        </td>
                                        <td><a href="customer-order.php" class="btn btn-primary btn-sm">Voir</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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