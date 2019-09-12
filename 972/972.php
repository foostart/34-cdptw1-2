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

        <link href="css/972.css" rel="stylesheet" type="text/css"/>

    
        <script src="<?php echo $url_path ?>/js/jquery.min.js" ></script>
        <script src="<?php echo $url_path ?>/js/jquery.slideshow.min.js" ></script>
        <script src="<?php echo $url_path ?>/js/jquery.tmpl.min.js" ></script>
        <script src="<?php echo $url_path ?>/js/modernizr.custom.40443.js" ></script>
        
        <script id="pageTmpl" type="text/x-jquery-tmpl">
            <div class="fd-box-wrapper">
            <div class="fd-box fd-box-upper">
            <div class="fd-front">
            <div class="fd-image">
            <a href="#" class="fd-option fd-option-fullscreen">Fullscreen</a>
            <div class="fd-option fd-loading"></div>
            </div>
            <!-- any other content after this -->
            <div class="header">
            <div class="clr"></div>
            </div>
            <h1>Fullscreen Image 3D Effect with CSS3 and jQuery</h1>
            <p id="fd-message" class="fd-message" style="display:none;">Note: Try opening this page with Chrome or Safari to see the 3D effect!</p>
            </div>
            <div class="fd-back"></div>
            <div class="fd-right"></div>
            <div class="fd-left"></div>
            <div class="fd-top"></div>
            <div class="fd-bottom">
            <a href="#" class="fd-option fd-option-zoomout">Zoom out</a>
            </div>
            </div>
            </div>
            <div class="fd-box-wrapper">
            <div class="fd-box fd-box-lower">
            <div class="fd-front">
            <div class="fd-image">
            <h2 class="fd-title"></h2>
            </div>
            <!-- dot navigation -->
            <ul class="fd-nav">
            <li><a href="#"><span>Image 1</span></a></li>
            <li><a href="#"><span>Image 2</span></a></li>
            <li><a href="#"><span>Image 3</span></a></li>
            <li><a href="#"><span>Image 4</span></a></li>
            <li><a href="#"><span>Image 5</span></a></li>
            <li><a href="#"><span>Image 6</span></a></li>
            </ul>
            <!-- any other content after this -->
            </div>
            <div class="fd-back"></div>
            <div class="fd-right"></div>
            <div class="fd-left"></div>
            <div class="fd-top"></div>
            <div class="fd-bottom"></div>
            </div>
            </div>
        </script>
        <script >
          
        </script>
    </head>
    <body>
    <?php include'972-content.php' ?>
    <script src="<?php echo $url_path ?>/js/972.js" ></script>
    </body>
</html>