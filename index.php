<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="app.css">
        <srcipt src="js/wow.min.js"></srcipt>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700' rel='stylesheet' type='text/css'>
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script>
            new WOW().init();
        </script>
    </head>
    <body>

        <div class="flex-container">

            <div class="flex-nav">
                <img class="flex-menu" src="images/menu.svg">
            </div>
        </div>


        <div class="featured">
            <h1>Material Flex Cards</h1>
                <h2>The is a small project to utilize material design, flexbox, and information cards.</h2>
                    <p>Click a card type to have it display</p>
                    <button>Image Card</button>
                    <button>To Do List Card</button>
                    <button>Video Card</button>
                    <button>Map Card</button>
        </div>

        <div class="flex-container animated zoomIn">
            <!--=============CARD #1=======-->
            <?php include("assets/image-card.php"); ?>
            <!--=============CARD #2=======-->
            <?php include("assets/to-do-card.php"); ?>
            <!--=============CARD #3=======-->
            <?php include("assets/video-card.php"); ?>
            <!--=============CARD #4=======-->
            <?php include("assets/to-do-card.php"); ?>
            <!--=============CARD #5=======-->
            <?php include("assets/map-card.php"); ?>
            <!--=============CARD #6=======-->
            <?php include("assets/image-card.php"); ?>
            
        </div> <!--End Container-->   


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->

    </body>
</html>
