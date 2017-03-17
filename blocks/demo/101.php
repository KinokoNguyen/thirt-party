<head>
    <meta charset="UTF-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>  

    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/101.less', 'css/101.css');
    ?>

    <link href="css/101.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script> 
    <script src="js/bootstrap.min.js" type="text/javascript"></script>

</head>

<body>
    <div class="type-101">
        <div class="container-fluld ">
            <!--HEADER TOP-->

            <!--/END HEADER TOP-->
<!--            <div class="container-fluld" style="padding: 2px;"></div>-->
            <!--MENU-->
            <div class="body-wrap">
                <div class="container-fluid">
                    <nav class="navbar navbar-inverse" role="navigation">
                        <!--CONTAINER FLUID-->
                        <div class="container top-menu">

                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="#"><img src="images/logo.jpg" alt=""/></a>
                            </div>

                            <!--COLLECT NAVBAR TOGGLING-->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>SẠCH TỪ NÔNG TRẠI ĐẾN LY CAFE</b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#"><b>Sạch từ nông trại đến ly cà phê</b></a></li>
                                            <li><a href="#"><b>Nguồn gốc nông trại</b></a></li>
                                            <li><a href="#"><b>Gieo trồng</b></a></li>
                                            <li><a href="#"><b>Thu hoạch</b></a></li>
                                            <li><a href="#"><b>Ly cà phê ngon</b></a></li>
                                        </ul>                                        
                                    </li>                                    
                                    <li><a href="#"><b>SẢN PHẨM L'AMANT</b></a></li>
                                    <li><a href="#"><b>L'AMANT PHIN ĐIỆN</b></a></li>
                                    <li><a href="#"><b>L'AMANT APP</b></a></li>
                                    <li><a href="#"><b>BLOG L'AMANT</b></a></li>
                                </ul>
                            </div>
                            <!--/END NAVBAR-COLLAPSE-->
                        </div>
                        <!--/END CONTAINER FLUID-->
                    </nav>
                </div>
            </div>
            <!--/END MENU-->

<!--            <div class="container-fluld" style="padding: 2px;"></div>-->

        </div>
        <div class="clearfix"></div>
    </div>
    
</body>