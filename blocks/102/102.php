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
    $less->compileFile('less/102.less', 'css/102.css');
    ?>
    <link href="css/102.css" rel="stylesheet" type="text/css"/>
    <link href="css/swiper.min.css" rel="stylesheet" type="text/css"/>
</head>

<body>
    <div class="type-102">
        <div class="container-fluid">           
            <!--SLIDE SHOW-->
            <div class="swiper-container">
                <!--SLIDE BANNER-->
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="#">
                            <img src="images/banner2.jpg" alt=""/>
                        </a>                       
                    </div>
                    <div class="swiper-slide">
                        <a href="#">
                            <img src="images/banner1.jpg" alt=""/>
                        </a>                            
                    </div>
                    <div class="swiper-slide">
                        <a href="#">
                            <img src="images/banner3.jpg" alt=""/>
                        </a>                              
                    </div>
                </div>
                <!--END SLIDE BANNER-->
                
                <div class="social">
                    <div class="icon-social">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </div>
                </div>
                
                <!--ARROWS -->
                <div class="swiper-button-next"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></span></div>
                <div class="swiper-button-prev"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i></div>
                <!--END ARROWS-->
            </div>
            <!--END SLIDE SHOW-->
            
        </div>
    </div>
</body>
<script src="js/swiper.min.js" type="text/javascript"></script>
<script src="js/102.js" type="text/javascript"></script>