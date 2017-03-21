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
    $less->compileFile('less/102.less', 'css/102.css');
    ?>
    <link href="css/102.css" rel="stylesheet" type="text/css"/>
    
</head>

<body>
    <?php include './102_content.php'; ?>
</body>

<script src="js/swiper.min.js" type="text/javascript"></script>
<script src="js/102.js" type="text/javascript"></script>