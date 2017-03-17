<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/> 

    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/103.less', 'css/103.css');
    ?>
    <link href="css/103.css" rel="stylesheet" type="text/css"/>

    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="js/owl.carousel.js" type="text/javascript"></script>

</head>

<body>
    <div class="type-103">
        <!--FOOTER-->
        <div class="copyright">
            <div class="container">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <p><b>© Copyright 2017 L'amant Café. All rights reseved.</b></p>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 logo" style="text-align: center;">               
                    <div id="owl-demo" class="owl-carousel">
                        <div class="item"><img src="images/google-play-badge.png" alt="Owl Image"></div>
                        <div class="item"><img src="images/haccp.png" alt="Owl Image"></div>
                        <div class="item"><img src="images/google-play-badge.png" alt="Owl Image"></div>
                        <div class="item"><img src="images/haccp.png" alt="Owl Image"></div>
                        <div class="item"><img src="images/google-play-badge.png" alt="Owl Image"></div>
                        <div class="item"><img src="images/haccp.png" alt="Owl Image"></div>
                        <div class="item"><img src="images/google-play-badge.png" alt="Owl Image"></div>
                        <div class="item"><img src="images/haccp.png" alt="Owl Image"></div>
                        <div class="item"><img src="images/google-play-badge.png" alt="Owl Image"></div>
                        <div class="item"><img src="images/haccp.png" alt="Owl Image"></div>
                    </div>

                </div>
            </div>
            <!--/END FOOTER-->
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $("#owl-demo").owlCarousel({
                autoPlay: 3000,
                items: 6,
                itemsDesktop: [1199, 3],
                itemsDesktopSmall: [979, 3]
            });

        });
    </script>
</body>