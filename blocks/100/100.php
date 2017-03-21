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
</head>

<body>
    <?php include './100-content.php'; ?>
</body>