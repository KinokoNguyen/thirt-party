<head>
    <meta charset="UTF-8">
    <title></title>
    <meta name="viewport" content="width=device-width">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>  

    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/100.less', 'css/100.css');
    ?>
    <link href="css/100.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script> 
    <script src="js/bootstrap.min.js" type="text/javascript"></script>

</head>

<body>
    <div class="type-100">
        <div class="container-fluld">
            <!--HEADER TOP-->
            <div class="header-top">
                <div class="container">
                    <div class="dropdown">
                        <!--BUTTON DROP DOWN-->
                        <div class="dropbtn">
                            <a href="#">
                                <b>Câu chuyện L'amant</b>
                                <i class="fa fa-caret-square-o-down" aria-hidden="true"></i>
                            </a>
                        </div>
                        <!--/END BUTTON DROP DOWN-->
                        
                        <!--CONTENT DROP DOWN-->
                        <div class="dropdown-content">
                            <div class="top-icons">
                                <ul>
                                    <li> <p class="fa fa-phone" aria-hidden="true">19002077</p></li>    
                                    <li class="right">
                                        <a href="#">
                                            <b>Câu chuyện L'amant </b>
                                            <span class="fa fa-comment" aria-hidden="true"></span>
                                        </a> 
                                    </li>
                                    <li class="right">
                                        <a href="#">
                                            <b>Giao hàng miễn phí </b>
                                            <span class="fa fa-truck" aria-hidden="true"></span>
                                        </a> 
                                    </li>
                                    <li class="right">
                                        <a href="#">
                                            <b>Liên hệ </b>
                                            <span class="fa fa-envelope" aria-hidden="true"></span>
                                        </a> 
                                    </li>
                                    <li class="right">
                                        <a href="#">
                                            <b>Trợ giúp </b>
                                            <span class="fa fa-heart" aria-hidden="true"></span>
                                        </a> 
                                    </li>
                                    <li class="right">
                                        <a href="#">
                                            <b>Đăng ký / đăng nhập </b>
                                            <span class="fa fa-lock" aria-hidden="true"></span>
                                        </a> 
                                    </li>
                                    <li class="right">
                                        <a href="#">
                                            <b>Tìm kiếm </b>
                                            <span class="fa fa-search"></span>
                                        </a> 
                                    </li>
                                    <li class="right">
                                        <a href="#">
                                            <b>En </b>
                                            <span class="fa fa-chevron-circle-down" aria-hidden="true"></span>
                                        </a> 
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--/END CONTENT DROP DOWN-->
                        
                    </div>
                </div>
            </div>
            <!--/END HEADER TOP-->

        </div>
    </div>
</body>