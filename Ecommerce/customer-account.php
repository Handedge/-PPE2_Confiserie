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
                        <li>Mon compte</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <!-- *** CUSTOMER MENU *** -->
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
                    <!-- *** CUSTOMER MENU END *** -->
                </div>
                <div class="col-md-9">
                    <div class="box">
                        <h1>Mon compte</h1>
                        <p class="lead">Changez vos détails personnels ou votre mot de passe ici.</p>
                        <h3>Changer le mot de passe</h3>
                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="password_old">Ancien mot de passe</label>
                                        <input type="password" class="form-control" id="password_old">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="password_1">Nouveau mot de passe</label>
                                        <input type="password" class="form-control" id="password_1">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="password_2">Retaper votre mot de passe</label>
                                        <input type="password" class="form-control" id="password_2">
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Sauvegarder votre mot de passe</button>
                            </div>
                        </form>
                        <hr>
                        <h3>Détails personnels</h3>
                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="firstname">Prénom</label>
                                        <input type="text" class="form-control" id="firstname">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lastname">Nom de famille</label>
                                        <input type="text" class="form-control" id="lastname">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="phone">Télephone</label>
                                        <input type="text" class="form-control" id="phone">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">E-mail</label>
                                        <input type="text" class="form-control" id="email">
                                    </div>
                                </div>
                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Sauvegarder les changements</button>

                                </div>
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
    </div>
    <!-- /#all -->
    <!-- *** SCRIPTS TO INCLUDE *** --> 
    <?php include('java.php'); ?>
</body>
</html>