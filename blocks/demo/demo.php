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
    $less->compileFile('less/demo.less', 'css/demo.css');
    $less->compileFile('less/101.less', 'css/101.css');
    $less->compileFile('less/102.less', 'css/102.css');
    $less->compileFile('less/104.less', 'css/104.css');
    $less->compileFile('less/103.less', 'css/103.css');
    ?>
    <link href="css/demo.css" rel="stylesheet" type="text/css"/>
    <link href="css/101.css" rel="stylesheet" type="text/css"/>
    <link href="css/102.css" rel="stylesheet" type="text/css"/>
    <link href="css/104.css" rel="stylesheet" type="text/css"/>
    <link href="css/103.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>     
    <script src="js/swiper.min.js" type="text/javascript"></script>
    <script src="js/102.js" type="text/javascript"></script>
    <script src="js/index.js" type="text/javascript"></script>
</head>

<body>
    <div class="demo">
        <?php include './101.php'; ?>
        <?php include './102.php'; ?>
        <?php include './104.php'; ?>
        <?php include './103.php'; ?>
    </div>
</body>
