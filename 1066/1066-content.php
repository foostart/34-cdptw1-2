
<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
  <div class="module-1066">
        <nav class="navbar navbar-default">
            <div class="header-bar">
                <div class="navbar-collapse mega-nav" style="background: #262626;">
                    <div class="mega-container text-center">
                        <div class="content-one">
                            <div class="wsmain">
                                <nav class="wsmenu clearfix">
                                    <ul class="mobile-sub wsmenu-list">
                                        <li><a href="#"><i class="fa fa-sign-in"></i>Tài khoản của tôi<span class="arrow"></span></a>
                                            <div class="megamenu halfdiv03">
                                                <h3 class="title">Đang nhập</h3>
                                                <form name="contact_name" class="menu_form">
                                                    <input type="text" placeholder="User Name">
                                                    <input type="password" placeholder="Password">
                                                    <input type="button" value="Reset">
                                                    <input type="submit" value="Login">
                                                </form>
                                            </div>
                                        </li>
                                        <li><a href="#"><i class="fa fa-paper-plane"></i>Liên hệ chúng tôi<span class="arrow"></span></a>
                                            <div class="megamenu halfdiv">
                                                <h3 class="title">Liên hệ chúng tôi</h3>
                                                <a href="#">
                                                        <img src="image/4000.png" alt=""/>
                                                    </a>
                                                <form name="contact_name" class="menu_form">
                                                    <input type="text" placeholder="Name">
                                                    <input type="text" placeholder="Email">
                                                    <textarea placeholder="Your message..."></textarea>
                                                    <input type="button" value="Reset">
                                                    <input type="submit" value="Send">
                                                </form>
                                                <div class="cl"></div>
                                            </div>
                                        </li>
                                        <li class="carticon"> <a href="#"><i class="fa fa-shopping-basket" ></i> <em class="roundpoint">8</em><span class="mobiletext">Shopping Cart</span></a> </li>
                                    </ul>
                                </nav>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="navbar-collapse mega-nav">
                    <div class="mega-container text-center">
                        <div class="content-two">

                            <div class="wsmenucontainer clearfix">
                                <div class="overlapblackbg"></div>
                                <div class="wsmobileheader clearfix">
                                    <a id="wsnavtoggle" class="animated-arrow"><span></span></a>
                                    <a href="#" class="smallogo">
                                        <img src="image/atdc.png" alt=""/></a>
                                    <a class="callusicon" href="tel:123456789"><span class="fa fa-phone"></span></a>
                                </div>

                                <div class="header">

                                    <!--Main Menu HTML Code-->
                                    <div class="wsmain">
                                        <div class="smllogo col-lg-1 col-md-1 col-sm-1">
                                            <a href="#">
                                                <img class="img-responsive" src="image/atdc.png" alt=""/>
                                            </a>
                                        </div>
                                        <nav class="wsmenu clearfix col-lg-9 col-md-9 col-sm-9">
                                        <ul class="mobile-sub wsmenu-list">
                                            <li class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><a href="#"><i class="fa fa-align-justify"></i>Sản Phẩm <span class="arrow"></span></a>
                                                <ul class="wsmenu-submenu col-lg-12 col-md-12 col-sm-12">
                                                        <li class="title"><a href="#"><b>Critical Power</b></a><li>
                                                        <li><a href="#"><i class="fa fa-arrow-circle-right"></i>DC Power Systems</a></li>
                                                        <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Power Distribution</a></li>
                                                        <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Power Transfer Switches</a></li>
                                                </ul>
                                            </li>
                                            <li class="col-lg-3 col-md-3 col-sm-3"><a href="#"><i class="fa fa-align-justify"></i> Hỗ trợ<span class="arrow"></span></a>
                                                <ul class="wsmenu-submenu col-lg-12 col-md-12 col-sm-12">
                                                    <li class="title"><a href="#"><b>Find Support</b></a></li>
                                                    <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Open Source Development</a>
                                                        <ul class="wsmenu-submenu-sub">
                                                            <li><a href="#"><i class="fa fa-angle-right"></i>Submenu item 1</a></li>
                                                            <li><a href="#"><i class="fa fa-angle-right"></i>Submenu item 2</a></li>
                                                            <li><a href="#"><i class="fa fa-angle-right"></i>Submenu item 3</a></li>
                                                            <li><a href="#"><i class="fa fa-angle-right"></i>Submenu item 4</a>
                                                                <ul class="wsmenu-submenu-sub-sub">
                                                                    <li><a href="#"><i class="fa fa-angle-right"></i>Submenu item 1 Sub</a></li>
                                                                    <li><a href="#"><i class="fa fa-angle-right"></i>Submenu item 2 Sub</a></li>
                                                                    <li><a href="#"><i class="fa fa-angle-right"></i>Submenu item 3 Sub</a></li>
                                                                    <li><a href="#"><i class="fa fa-angle-right"></i>Submenu item 4 Sub</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Search for Support Information</a></li>
                                                    <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Contact Technical Support</a></li>
                                                    <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Ask the Community Forum</a></li>
                                                    <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Get Equipment Training</a></li>
                                                </ul>
                                            </li>
                                            <li  class="col-lg-3 col-md-3 col-sm-3"><a href="#"><i class="fa fa-align-justify"></i>Dịch vụ<span class="arrow"></span></a>
                                                <ul class="wsmenu-submenu col-lg-12 col-md-12 col-sm-12">
                                                        <li class="title"><a href="#"><b>More Services</b></a><li>
                                                        <li><a href="#"><i class="fa fa-android"></i> Android App Development</a></li>
                                                        <li><a href="#"><i class="fa fa-apple"></i>iPhone App Development</a></li>
                                                        <li><a href="#"><i class="fa fa-paypal"></i>Paypal Store Integration</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                    <div class="rightmenu col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                        <form class="topmenusearch">
                                            <input placeholder="Search...">
                                            <button class="btnstyle"><i class="searchicon fa fa-search" aria-hidden="true"></i></button>
                                        </form>
                                    </div>
                                    </div>

                                    <!--Menu HTML Code-->

                                </div>

                            </div>
                            <!--/.navbar-collapse -->
                        </div>
                    </div>
                </div>
            </div>
        </nav>

    </div>




   

