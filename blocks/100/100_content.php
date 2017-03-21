<?php
    $url_host = $_SERVER['HTTP_HOST'];


    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];
?>

<div class="type-100">
    <div class="container-fluld menu">
        <!--HEADER TOP-->
        <div class="header-top">
            <div class="container header-top-dr">
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