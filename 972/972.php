<?php

    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);      
        require_once($dir_block.'/libs/lessc.inc.php');
    }
    
    $less = new lessc;
    $less->compileFile('less/972.less', 'css/972.css');
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>module972</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
        <link href="css/972.css" rel="stylesheet" type="text/css"/>

    
        <script src="<?php echo $url_path ?>/js/jquery.min.js" ></script>
        <script src="<?php echo $url_path ?>/js/jquery.slideshow.min.js" ></script>
        <script src="<?php echo $url_path ?>/js/jquery.tmpl.min.js" ></script>
        <script src="<?php echo $url_path ?>/js/modernizr.custom.40443.js" ></script>
        <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
    </head>
    <body>
    <?php include'972-content.php' ?>
    <script src="<?php echo $url_path ?>/js/972.js" ></script>
    </body>
</html>