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
    $less->compileFile('less/101.less', 'css/101.css');
    ?>
    <link href="css/101.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script> 

</head>

<body>
    <div class="type-100">
        <div class="container-fluld">
            <!--HEADER TOP-->
            
            <!--/END HEADER TOP-->

            <!--MENU-->
            <div class="container-fluld">
                <div class="background-menu">
                <div class="container">
                    <a class="logo" href="#"><img src="images/logo.png" alt=""/></a>  
                    <div class="mini-submenu active">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </div>
                    <div class="list-group">
                        <ul class="menu">
                            <li><a href="#"  class="list-group-item">SẠCH TỪ NÔNG TRẠI ĐẾN LY CAFE</a>
                                <ul>
                                    <li><a href="#">Sạch từ nông trại đến ly cà phê</a></li>
                                    <li><a href="#">Nguồn gốc nông trại</a></li>
                                    <li><a href="#">Gieo trồng</a></li>
                                    <li><a href="#">Thu hoạch</a></li>
                                    <li><a href="#">Ly cà phê ngon</a></li>
                                </ul>
                            </li>
                            <li><a href="#"  class="list-group-item">SẢN PHẨM L'AMANT</a></li>
                            <li><a href="#"  class="list-group-item">L'AMANT PHIN ĐIỆN</a></li>
                            <li><a href="#"  class="list-group-item">L'AMANT APP</a></li>
                            <li><a href="#"  class="list-group-item">BLOG L'AMANT</a></li>
                        </ul>
                    </div>
                </div>
                </div>
            </div>
            <!--/END MENU-->

            <div class="container-fluld" style="padding: 2px;"></div>
            
        </div>
    </div>
</body>
<script>
    $(function () {

        $('.mini-submenu').on('click', function () {
            $(this).closest('.list-group').fadeOut('slide', function () {
                $('.mini-submenu').fadeIn();
            });

        });

        $('.mini-submenu').on('click', function () {
            $(this).next('.list-group').toggle('slide');
            $('.mini-submenu').hide();
        })
    })
</script>