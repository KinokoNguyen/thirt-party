<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];
?>

<div class="type-101">
    <div class="container-fluld ">
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
                            <a class="navbar-brand" href="#"><img src="http://<?php echo $url_path ?>/images/logo.jpg" alt=""/></a>
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

        <div class="container-fluld" style="padding: 2px; background-color: #f0d898"> </div>

    </div>
    <div class="clearfix"></div>
</div>