<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-1067">
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="links">
                        <a>Home</a><span>></span>
                        <a>Products</a><span>></span>
                        <a>Critical Power</a><span>></span>
                        <a class="power">Uninterruptible Power Supplies (UPS)</a>
                    </div>
                    <button class="fa fa-home home" value="home"></button><!-- Back to Home Site -->
                </div>
                <div class="col-sm-4">
                    <div class="icon">
                        <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                    </div>
                    <button class="fa fa-share-square-o share"></button>
                </div>
            </div>
        </div>
    </div>
    <div class="content">   
        <img src="image/1067-1.jpg" alt=""/>
        <div class="product">
            <h2>Critical Power</h2>
            <h1>Uninterruptible Power Supplies (UPS)</h1>
        </div>
    </div>
</div>
