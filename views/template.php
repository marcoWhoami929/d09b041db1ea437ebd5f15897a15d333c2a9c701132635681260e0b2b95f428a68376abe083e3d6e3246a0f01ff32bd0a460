<?php

session_start();

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BANDAS JUGA</title>
    <link rel="shortcut icon" type="image/x-icon" href="views/img/logo-header.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="views/css/bootstrap.min.css">
    <link rel="stylesheet" href="views/css/owl.carousel.min.css">
    <link rel="stylesheet" href="views/css/magnific-popup.css">
    <link rel="stylesheet" href="views/css/font-awesome.min.css">
    <link rel="stylesheet" href="views/css/themify-icons.css">
    <link rel="stylesheet" href="views/css/gijgo.css">
    <link rel="stylesheet" href="views/css/nice-select.css">
    <link rel="stylesheet" href="views/css/flaticon.css">
    <link rel="stylesheet" href="views/css/slicknav.css">
    <link rel="stylesheet" href="views/css/animate.css">
    
    

    <link rel="stylesheet" href="views/css/style.css">
    <!-- <link rel="stylesheet" href="views/css/responsive.css"> -->

    <!-- JS here -->
    <script src="views/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="views/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="views/js/popper.min.js"></script>
    <script src="views/js/bootstrap.min.js"></script>
    <script src="views/js/owl.carousel.min.js"></script>
    <script src="views/js/isotope.pkgd.min.js"></script>
    <script src="views/js/ajax-form.js"></script>
    <script src="views/js/waypoints.min.js"></script>
    <script src="views/js/jquery.counterup.min.js"></script>
    <script src="views/js/imagesloaded.pkgd.min.js"></script>
    <script src="views/js/scrollIt.js"></script>
    <script src="views/js/jquery.scrollUp.min.js"></script>
    <script src="views/js/wow.min.js"></script>
    <script src="views/js/gijgo.min.js"></script>
    <script src="views/js/nice-select.min.js"></script>
    <script src="views/js/jquery.slicknav.min.js"></script>
    <script src="views/js/jquery.magnific-popup.min.js"></script>
    <script src="views/js/plugins.js"></script>
    <!--contact js-->
    <script src="views/js/contact.js"></script>
    <script src="views/js/jquery.ajaxchimp.min.js"></script>
    <script src="views/js/jquery.form.js"></script>
    <script src="views/js/jquery.validate.min.js"></script>
    <script src="views/js/mail-script.js"></script>


</head>

<body>
    <!-- Preloader Start -->


    <?php

    echo '<div class="wrapper">';

    include "moduls/header.php";



    if (isset($_GET["ruta"])) {
        $carpeta = "views/moduls/";
        $class  = $carpeta . $_GET["ruta"] . '.php';

        if (!file_exists($class)) {
            include "moduls/404.php";
        } else {
            include $class;
        }
    } else {
        include "moduls/inicio.php";
    }
    echo '</div>';
    include "moduls/footer.php";

    ?>
    <!---JS PERSONALIZADO-->
    <script src="views/js/main.js"></script>
</body>

</html>