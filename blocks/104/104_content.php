<?php
$url_host = $_SERVER['HTTP_HOST'];


$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];
?>
<div class="type-104">
    <div class="container">
        <div class="row">
            <!--INTRODUCTION-->
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="product">
                    <!--ICON LEFT-->
                    <div class="col-lg-2 col-md-2 col-sm-2 col-left">
                        <img src="http://<?php echo $url_path ?>/images/mint-leaf-icon.png" alt=""/>
                    </div>
                    <!--END ICON LEFT-->

                    <!--CONTENT RIGHT-->
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-right">
                        <!--TITLE-->
                        <h4 class="title"> CỬA HÀNG TRỰC TUYẾN </h4>
                        <!--END TITLE-->

                        <!--INTRODUCTION-->
                        <div class="content">
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <div class="row">
                                    <p class="p-content">
                                        Ghé thăm cửa hàng trực tuyến của chúng tôi để lựa chọn những sản phẩm
                                        cà phê ưng ý nhất.
                                    </p>                                       
                                </div>                                    
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="row">
                                    <img src="http://<?php echo $url_path ?>/images/cart.jpg" alt=""/>
                                </div>                                   
                            </div>
                            <div class="clear"></div>
                        </div>
                        <!--END INTRODUCTION-->

                        <!--BUTTON-->
                        <div class="btn-click">
                            <a class="a-click" href="#" > MUA NGAY 
                                <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                            </a>
                        </div>
                        <!--END BUTTON-->
                    </div>

                    <!--END CONTENT RIGHT-->
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="product">
                    <!--ICON LEFT-->
                    <div class="col-lg-2 col-md-2 col-sm-2 col-left">
                        <img src="http://<?php echo $url_path ?>/images/mint-leaf-icon.png" alt=""/>
                    </div>
                    <!--END ICON LEFT-->

                    <!--CONTENT RIGHT-->
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-right">
                        <!--TITLE-->
                        <h4 class="title"> CỬA HÀNG TRỰC TUYẾN </h4>
                        <!--END TITLE-->

                        <!--INTRODUCTION-->
                        <div class="content">
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <div class="row">
                                    <p class="p-content">
                                        Ghé thăm cửa hàng trực tuyến của chúng tôi để lựa chọn những sản phẩm
                                        cà phê ưng ý nhất.
                                    </p>                                       
                                </div>                                    
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="row">
                                    <img src="http://<?php echo $url_path ?>/images/cart.jpg" alt=""/>
                                </div>                                   
                            </div>
                            <div class="clear"></div>
                        </div>
                        <!--END INTRODUCTION-->

                        <!--BUTTON-->
                        <div class="btn-click">
                            <a class="a-click" href="#" > MUA NGAY 
                                <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                            </a>
                        </div>
                        <!--END BUTTON-->
                    </div>

                    <!--END CONTENT RIGHT-->
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="product">
                    <!--ICON LEFT-->
                    <div class="col-lg-2 col-md-2 col-sm-2 col-left">
                        <img src="http://<?php echo $url_path ?>/images/mint-leaf-icon.png" alt=""/>
                    </div>
                    <!--END ICON LEFT-->

                    <!--CONTENT RIGHT-->
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-right">
                        <!--TITLE-->
                        <h4 class="title"> CỬA HÀNG TRỰC TUYẾN </h4>
                        <!--END TITLE-->

                        <!--INTRODUCTION-->
                        <div class="content">
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <div class="row">
                                    <p class="p-content">
                                        Ghé thăm cửa hàng trực tuyến của chúng tôi để lựa chọn những sản phẩm
                                        cà phê ưng ý nhất.
                                    </p>                                       
                                </div>                                    
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="row">
                                    <img src="http://<?php echo $url_path ?>/images/cart.jpg" alt=""/>
                                </div>                                   
                            </div>
                            <div class="clear"></div>
                        </div>
                        <!--END INTRODUCTION-->

                        <!--BUTTON-->
                        <div class="btn-click">
                            <a class="a-click" href="#" > MUA NGAY 
                                <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                            </a>
                        </div>
                        <!--END BUTTON-->
                    </div>

                    <!--END CONTENT RIGHT-->
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
            <!--END INTRODUCTION-->
        </div>
    </div>
</div>