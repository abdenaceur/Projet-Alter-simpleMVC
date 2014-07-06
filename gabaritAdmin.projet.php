<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <script src="js/vendor/jquery-1.11.0.min.js"></script>
    <script type='text/javascript' src='./js/admin/menu_jquery.js'></script>
    <!-- Utilisation du menu de http://cssmenumaker.com/menu/modern-jquery-accordion-menu# -->
    <link rel="stylesheet" href="./css/admin/styles.css">
    <link rel="stylesheet" href="./css/admin/normalize.min.css">
    <link rel="stylesheet" href="./css/admin/administrateur.css">
    <link href='http://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>



    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
</head>

<body>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <?php
    session_start();

    ?>

    <header>
        <h1>AlterWatch Administrateur CMS</h1>
        <?php
        if(isset($_SESSION['AdminID'])){
    ?>
        <boutton class="deconnection btn">
            <a href="?requete=admin&section=adminLogout">Déconnection</a>
        </boutton>
    <?php }
        ?>
    </header>
    </br>
    </br>
    </br>
    </br>

    <?php $oControleur=new Controler(); $oControleur->gererAdmin(); ?>
    <footer>
        <p>Copyright - AlterWatch 2014</p>
    </footer>



    <script src="js/plugins.js"></script>
    <script src="js/admin/main.js"></script>





</body>

</html>
