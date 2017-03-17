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
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    
</head>

<body>
    <div class="type-103">
        <!--FOOTER-->
        <div class="copyright">
            <div class="container">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <p><b>© Copyright 2017 L'amant Café. All rights reseved.</b></p>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">               
                    <div class="carousel slide" data-ride="carousel" data-type="multi" data-interval="3000" id="myCarousel">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-md-2 col-sm-2 col-xs-12 demo" style="text-align: center">
                                    <a href="#">
                                        <img src="images/google-play-badge.png" width="90px" height="90px" alt=""/>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-2 col-sm-2 col-xs-12 demo" style="text-align: center">
                                    <a href="#">
                                        <img src="images/haccp.png" width="90px" height="90px" alt=""/>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-2 col-sm-2 col-xs-12 demo" style="text-align: center">
                                    <a href="#">
                                        <img src="images/google-play-badge.png" width="90px" height="90px" alt=""/>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-2 col-sm-2 col-xs-12 demo" style="text-align: center">
                                    <a href="#">
                                        <img src="images/haccp.png" width="90px" height="90px" alt=""/>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-2 col-sm-2 col-xs-12 demo" style="text-align: center">
                                    <a href="#">
                                        <img src="images/google-play-badge.png" width="90px" height="90px" alt=""/>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-2 col-sm-2 col-xs-12 demo" style="text-align: center">
                                    <a href="#">
                                        <img src="images/haccp.png" width="90px" height="90px" alt=""/>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-2 col-sm-2 col-xs-12 demo" style="text-align: center">
                                    <a href="#">
                                        <img src="images/google-play-badge.png" width="90px" height="90px" alt=""/>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
                    </div>


                </div>
            </div>
            <!--/END FOOTER-->
        </div>
    </div>
</body>

<script src="js/index.js"></script>