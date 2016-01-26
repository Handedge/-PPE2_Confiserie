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
                        <li>Text page</li>
                    </ul>
                </div>

                <div class="col-md-3">
                    <!-- *** PAGES MENU *** -->
                    <?php include('menu.php'); ?>
                    <!-- *** PAGES MENU END *** -->
                </div>
                <div class="col-md-9">
                    <div class="box" id="text-page">
                        <h1>Text formatting - Header level 1</h1>
                        <p class="lead">This page aim is to show you the most common HTML elements appearance on the website. For further reference please visit official <a href="http://getbootstrap.com/css/" class="external">Bootstrap website</a>.</p>
                        <p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris
                            placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum
                            rutrum orci, sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.</p>
                        <h2>Header Level 2</h2>
                        <ol>
                            <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                            <li>Aliquam tincidunt mauris eu risus.</li>
                        </ol>
                        <blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada
                                tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p>
                        </blockquote>
                        <h3>Header Level 3</h3>
                        <ul>
                            <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                            <li>Aliquam tincidunt mauris eu risus.</li>
                        </ul>
                        <hr>
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