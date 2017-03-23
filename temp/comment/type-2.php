<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-2.less', 'css/type-2.css');
        ?>
        <link href="css/type-2.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-comments">
            <div class="col-md-2 col-sm-6 col-xs-12"></div>
            <div class="col-md-8 col-sm-6 col-xs-12">
                <div class="ibox">
                    
                    <!--OVERVIEW-->
                    <div class="ibox-content ibox-heading">
                        <h3>You have meeting today!</h3>
                        <small><i class="fa fa-map-marker"></i>
                            Meeting is on 6:00am. Check your schedule to see detail.
                        </small>
                    </div>
                    <!--/OVERVIEW-->
                    
                    <!--LIST COMMENT-->
                    <div class="ibox-content">
                        <!--ITEM COMMENT-->
                        <div class="timeline-item">
                            <div class="row">
                                <!--USER INFO-->
                                <div class="col-md-4 col-sm-12 col-xs-12 date">
                                    <span class="avatar-user">
                                        <i class="fa fa-user img-circle" aria-hidden="true"></i>
<!--                                        <img alt="image" class="img-circle" src="images/profile.jpg">-->
                                        <br>
                                    </span>

                                    <div>
                                        Đã có : 15 bài
                                    </div>
                                    <!--LEVEL-->
                                    <small class="text-navy">Senior</small>
                                    <!--/LEVEL-->
                                </div>
                                <!--/USER INFO-->
                                <div class="col-md-8 col-sm-12 col-xs-12 content no-top-border">
                                    <!-- COMMENT BIG -->
                                    <p class="m-b-xs">
                                        <a href="#">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            <strong> Meeting </strong>
                                        </a>
                                    </p>
                                    <small class="text-muted">Yesterday 5:20 pm - 12.06.2014</small>
                                    <p>Conference on the sales results for the previous year. Monica please examine sales trends in marketing and products. Below please find the current status of the
                                        sale.
                                    </p>
                                    <div class="like-dislike">

                                        <span class="like" onclick="show(0)">
                                            <i class="fa fa-thumbs-up" aria-hidden="true"></i>80
                                        </span>
                                        <span href="#" class="dislike" onclick="show(0)">
                                            <i class="fa fa-thumbs-down" aria-hidden="true"></i>2
                                        </span>
                                        <span href="#" class="reply" onclick="show(0)">
                                            <i class="fa fa-reply" aria-hidden="true"></i>
                                        </span>

                                    </div>

                                    <div class="notification">
                                        <i  class="fa fa-times" aria-hidden="true">
                                            <a href="#" class="text-noti"></a>
                                        </i>
                                    </div>


                                    <div class="clear" style="clear: both"></div>
                                    <!-- COMMENT SMALL -->
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class="row">
                                                <a href="#"> 
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                                <strong>Kim Smith</strong> 
                                                </a> posted message on <strong>Monica Smith</strong> site. <br>
                                            </div>
                                            <small class="text-muted">Yesterday 5:20 pm - 12.06.2014</small>
                                            <p>
                                                <a class="text-info" href="#">@Alan Marry</a> 
                                                I belive that. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            </p>
                                            <small class="block"><i class="fa fa-clock-o"></i> 1 minuts ago</small>
                                            <div class="like-dislike">

                                                <span class="like" onclick="show(1)">
                                                    <i class="fa fa-thumbs-up" aria-hidden="true"></i>80
                                                </span>
                                                <span href="#" class="dislike" onclick="show(1)">
                                                    <i class="fa fa-thumbs-down" aria-hidden="true"></i>2
                                                </span>
                                                <span href="#" class="reply" onclick="show(1)">
                                                    <i class="fa fa-reply" aria-hidden="true"></i>
                                                </span>

                                            </div>

                                            <div class="notification">
                                                <i  class="fa fa-times" aria-hidden="true">
                                                    <a href="#" class="text-noti"></a>
                                                </i>
                                            </div>


                                        </li>
                                        <li class="list-group-item">
                                            <div class="row">
                                                <a href="#"> 
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                                <strong>Kim Smith</strong> 
                                                </a> posted message on <strong>Monica Smith</strong> site. <br>
                                            </div>
                                            <small class="text-muted">Yesterday 5:20 pm - 12.06.2014</small>
                                            <p>
                                                <a class="text-info" href="#">@Alan Marry</a> 
                                                I belive that. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            </p>
                                            <small class="block"><i class="fa fa-clock-o"></i> 1 minuts ago</small>
                                            <div class="like-dislike">

                                                <span class="like" onclick="show(1)">
                                                    <i class="fa fa-thumbs-up" aria-hidden="true"></i>80
                                                </span>
                                                <span href="#" class="dislike" onclick="show(1)">
                                                    <i class="fa fa-thumbs-down" aria-hidden="true"></i>2
                                                </span>
                                                <span href="#" class="reply" onclick="show(1)">
                                                    <i class="fa fa-reply" aria-hidden="true"></i>
                                                </span>

                                            </div>

                                            <div class="notification">
                                                <i  class="fa fa-times" aria-hidden="true">
                                                    <a href="#" class="text-noti"></a>
                                                </i>
                                            </div>


                                        </li>
                                    </ul>


                                    <!--END COMMENT SMALL -->
                                    <!--END COMMENT BIG -->
                                </div>
                            </div>
                        </div>
                        <!--/ITEM COMMENT-->
                        <div class="timeline-item">
                            <div class="row">
                                <!--USER INFO-->
                                <div class="col-md-4 col-sm-12 col-xs-12 date">
                                    <span class="avatar-user">
                                        <i class="fa fa-user img-circle" aria-hidden="true"></i>
<!--                                        <img alt="image" class="img-circle" src="images/profile.jpg">-->
                                        <br>
                                    </span>

                                    <div>
                                        Đã có : 15 bài
                                    </div>
                                    <!--LEVEL-->
                                    <small class="text-navy">Senior</small>
                                    <!--/LEVEL-->
                                </div>
                                <!--/USER INFO-->
                                <div class="col-md-8 col-sm-12 col-xs-12 content no-top-border">
                                    <!-- COMMENT BIG -->
                                    <p class="m-b-xs">
                                        <a href="#">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            <strong> Meeting </strong>
                                        </a>
                                    </p>
                                    <small class="text-muted">Yesterday 5:20 pm - 12.06.2014</small>
                                    <p>Conference on the sales results for the previous year. Monica please examine sales trends in marketing and products. Below please find the current status of the
                                        sale.
                                    </p>
                                    <div class="like-dislike">

                                        <span class="like" onclick="show(0)">
                                            <i class="fa fa-thumbs-up" aria-hidden="true"></i>80
                                        </span>
                                        <span href="#" class="dislike" onclick="show(0)">
                                            <i class="fa fa-thumbs-down" aria-hidden="true"></i>2
                                        </span>
                                        <span href="#" class="reply" onclick="show(0)">
                                            <i class="fa fa-reply" aria-hidden="true"></i>
                                        </span>

                                    </div>

                                    <div class="notification">
                                        <i  class="fa fa-times" aria-hidden="true">
                                            <a href="#" class="text-noti"></a>
                                        </i>
                                    </div>


                                    <div class="clear" style="clear: both"></div>
                                    <!-- COMMENT SMALL -->
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class="row">
                                                <a href="#"> 
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                                <strong>Kim Smith</strong> 
                                                </a> posted message on <strong>Monica Smith</strong> site. <br>
                                            </div>
                                            <small class="text-muted">Yesterday 5:20 pm - 12.06.2014</small>
                                            <p>
                                                <a class="text-info" href="#">@Alan Marry</a> 
                                                I belive that. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            </p>
                                            <small class="block"><i class="fa fa-clock-o"></i> 1 minuts ago</small>
                                            <div class="like-dislike">

                                                <span class="like" onclick="show(1)">
                                                    <i class="fa fa-thumbs-up" aria-hidden="true"></i>80
                                                </span>
                                                <span href="#" class="dislike" onclick="show(1)">
                                                    <i class="fa fa-thumbs-down" aria-hidden="true"></i>2
                                                </span>
                                                <span href="#" class="reply" onclick="show(1)">
                                                    <i class="fa fa-reply" aria-hidden="true"></i>
                                                </span>

                                            </div>

                                            <div class="notification">
                                                <i  class="fa fa-times" aria-hidden="true">
                                                    <a href="#" class="text-noti"></a>
                                                </i>
                                            </div>


                                        </li>
                                        <li class="list-group-item">
                                            <div class="row">
                                                <a href="#"> 
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                                <strong>Kim Smith</strong> 
                                                </a> posted message on <strong>Monica Smith</strong> site. <br>
                                            </div>
                                            <small class="text-muted">Yesterday 5:20 pm - 12.06.2014</small>
                                            <p>
                                                <a class="text-info" href="#">@Alan Marry</a> 
                                                I belive that. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            </p>
                                            <small class="block"><i class="fa fa-clock-o"></i> 1 minuts ago</small>
                                            <div class="like-dislike">

                                                <span class="like" onclick="show(1)">
                                                    <i class="fa fa-thumbs-up" aria-hidden="true"></i>80
                                                </span>
                                                <span href="#" class="dislike" onclick="show(1)">
                                                    <i class="fa fa-thumbs-down" aria-hidden="true"></i>2
                                                </span>
                                                <span href="#" class="reply" onclick="show(1)">
                                                    <i class="fa fa-reply" aria-hidden="true"></i>
                                                </span>

                                            </div>

                                            <div class="notification">
                                                <i  class="fa fa-times" aria-hidden="true">
                                                    <a href="#" class="text-noti"></a>
                                                </i>
                                            </div>


                                        </li>
                                    </ul>


                                    <!--END COMMENT SMALL -->
                                    <!--END COMMENT BIG -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-12"></div>

        </div>
        <script src="js/2.js" type="text/javascript"></script>
        <script>
                                                    function show(key) {
                                                        var noti = document.getElementsByClassName('notification')[key];
                                                        var text = document.getElementsByClassName('text-noti')[key];
                                                        noti.style.display = "block";
                                                        text.innerHTML = "Please Login";
                                                    }
        </script>
    </body>

</html>