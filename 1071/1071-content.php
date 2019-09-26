<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-1071">
    <div class="menu-chitiet">
        <nav class="navbar">
            <div class="navmenu">
                <ul>
                    <li class="prevacti">
                        <a href="#Overview">Overview</a></li>
                    <li><a href="#Specifications">Specifications</a></li>
                    <li><a href="#Downloads">Downloads</a></li>
                    <li><a href="#Features">Features</a></li>
                </ul>
            </div>
            <div class="navmenu-mobile">
                <a class="close">&times;</a>
                <a href="#Overview">Overview</a>
                <a href="#Specifications">Specifications</a>
                <a href="#Downloads">Downloads</a>
                <a href="#Features">Features</a>
            </div>
            <button class="fa fa-bars menu"></button>
        </nav>
    </div>
</div>