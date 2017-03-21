<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];
?>

<div class="type-102">
    <div class="container-fluid">           
        <!--SLIDE SHOW-->
        <div class="swiper-container">
            <!--SLIDE BANNER-->
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="#">
                        <img src="http://<?php echo $url_path; ?>/images/banner2.jpg" alt=""/>
                    </a>                       
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img src="http://<?php echo $url_path; ?>/images/banner1.jpg" alt=""/>
                    </a>                            
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img src="http://<?php echo $url_path; ?>/images/banner3.jpg" alt=""/>
                    </a>                              
                </div>
            </div>
            <!--END SLIDE BANNER-->

            <!--ICON-->
            <div class="social">
                <div class="icon-social">
                    <a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> </a>
                    <a href="#"> <i class="fa fa-youtube-play" aria-hidden="true"></i> </a>
                    <a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i> </a>
                </div>
            </div>
            <!--END ICON-->

            <!--ARROWS -->
            <div class="swiper-button-next"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></span></div>
            <div class="swiper-button-prev"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i></div>
            <!--END ARROWS-->
        </div>
        <!--END SLIDE SHOW-->

    </div>
</div>