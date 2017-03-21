<?php
$url_host = $_SERVER['HTTP_HOST'];


$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];
?>
<div class="type-103">
    <!--FOOTER-->
    <div class="copyright">
        <div class="container">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <p><b>© Copyright 2017 L'amant Café. All rights reseved.</b></p>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 logo" style="text-align: center;">               
                <div id="owl-demo" class="owl-carousel">
                    <div class="item"><img src="http://<?php echo $url_path ?>/images/google-play-badge.png" alt="Owl Image"></div>
                    <div class="item"><img src="http://<?php echo $url_path ?>/images/haccp.png" alt="Owl Image"></div>
                    <div class="item"><img src="http://<?php echo $url_path ?>/images/google-play-badge.png" alt="Owl Image"></div>
                    <div class="item"><img src="http://<?php echo $url_path ?>/images/haccp.png" alt="Owl Image"></div>
                    <div class="item"><img src="http://<?php echo $url_path ?>/images/google-play-badge.png" alt="Owl Image"></div>
                    <div class="item"><img src="http://<?php echo $url_path ?>/images/haccp.png" alt="Owl Image"></div>
                    <div class="item"><img src="http://<?php echo $url_path ?>/images/google-play-badge.png" alt="Owl Image"></div>
                    <div class="item"><img src="http://<?php echo $url_path ?>/images/haccp.png" alt="Owl Image"></div>
                    <div class="item"><img src="http://<?php echo $url_path ?>/images/google-play-badge.png" alt="Owl Image"></div>
                    <div class="item"><img src="http://<?php echo $url_path ?>/images/haccp.png" alt="Owl Image"></div>
                </div>

            </div>
        </div>
        <!--/END FOOTER-->
    </div>
</div>

<script>
    $(document).ready(function () {
        $("#owl-demo").owlCarousel({
            autoPlay: 3000,
            items: 6,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [979, 3]
        });

    });
</script>