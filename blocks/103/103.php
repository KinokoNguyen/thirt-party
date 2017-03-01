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
                   <div class="dropdown">
                    <div class="dropbtn">Show logo</div>
                        <div class="logo-cert">
                        <a href="#">
                            <img src="images/android-app-store.png" alt=""/>
                        </a>
                        <a href="#">
                            <img src="images/app-store.png" alt=""/>
                        </a>
                        <a href="#">
                            <img src="images/haccp-certification-in-dubai.png" alt=""/>
                        </a>                     
                        <a href="#">
                            <img src="images/probat-black.jpg" alt=""/>
                        </a>                        
                        <a href="#">
                            <img src="images/brand.gif" alt=""/>
                        </a>                        
                        <a href="#">
                            <img src="images/rainforest-alliance-certified-seal-lg.png" alt=""/>
                        </a>                        
                        <a href="#">
                            <img src="images/vinh-hiep.png" alt=""/>
                        </a>
                        </div>
                  </div> 
                
                    
                </div>
            </div>
            <!--/END FOOTER-->
        </div>
</body>
