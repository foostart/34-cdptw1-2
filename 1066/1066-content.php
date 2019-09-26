
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
                                                <a href="https://www.google.com/maps/place/816+Tr%C6%B0%E1%BB%9Dng+Sa,+ph%C6%B0%E1%BB%9Dng+14,+Qu%E1%BA%ADn+3,+H%E1%BB%93+Ch%C3%AD+Minh/data=!4m2!3m1!1s0x31752ed5ad3abbf1:0x7199e3d82c55f5a4?sa=X&ved=0ahUKEwjFusSW197VAhXBTLwKHb-PAMEQ8gEIIzAA">
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
                                        <img src="image/atdc.png" alt="" style="witdh: 87px"/></a>
                                    <a class="callusicon" href="tel:123456789"><span class="fa fa-phone"></span></a>
                                </div>

                                <div class="header">

                                    <!--Main Menu HTML Code-->
                                    <div class="wsmain">
                                        <div class="smllogo">
                                            <a href="#">
                                                <img src="image/atdc.png" alt="" style="witdh: 48%"/>
                                            </a>
                                        </div>
                                        <div class="rightmenu">
                                            <form class="topmenusearch">
                                                <input placeholder="Search...">
                                                <button class="btnstyle"><i class="searchicon fa fa-search" aria-hidden="true"></i></button>
                                            </form>
                                        </div>

                                        <nav class="wsmenu clearfix">
                                        <ul class="mobile-sub wsmenu-list">
                                            <li><a href="#" style="padding-right: 40px"><i class="fa fa-align-justify"></i>Sản Phẩm <span class="arrow"></span></a>
                                                <ul class="wsmenu-submenu">
                                                        <li class="title"><a href="#">CRITICAL POWER</a><li>
                                                        <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Uninterruptible Power Supplies (UPS)</a></li>
                                                        <li><a href="#"><i class="fa fa-arrow-circle-right"></i>DC Power Systems</a></li>
                                                        <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Power Distribution</a></li>
                                                        <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Power Transfer Switches</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#" style="padding-right: 55px"><i class="fa fa-align-justify"></i> Hỗ trợ<span class="arrow"></span></a>
                                                <ul class="wsmenu-submenu">
                                                    <li class="title"><a href="#">FIND SUPORT</a></li>
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
                                            <li><a href="#" style="padding-right: 58px"><i class="fa fa-align-justify"></i>Tin tức<span class="arrow"></span></a>
                                            <ul class="wsmenu-submenu">
                                                        <li class="title"><a href="#">CRITICAL POWER</a><li>
                                                        <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Uninterruptible Power Supplies (UPS)</a></li>
                                                        <li><a href="#"><i class="fa fa-arrow-circle-right"></i>DC Power Systems</a></li>
                                                        <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Power Distribution</a></li>
                                                        <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Power Transfer Switches</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
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




   

