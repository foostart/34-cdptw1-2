 <?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
        <!-- Swiper -->
        <div class="type-972">
            <div class="container">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="swiper-zoom-container">
                                <div class="img">
                                    <img src="images/1.jpg" data-bgimg="<?php echo $url_path ?>/images/1.jpg" alt="image01" title="Love Will Tear Us Apart" />
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-zoom-container">
                                <div class="img">
                                    <img src="images/2.jpg" data-bgimg="<?php echo $url_path ?>/images/2.jpg" alt="image02" title="Just Can't Get Enough" />
                                </div>
                            </div>  
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-zoom-container">
                                <div class="img">
                                    <img src="images/3.jpg" data-bgimg="<?php echo $url_path ?>/images/3.jpg" alt="image03" title="In a Manner of Speaking" />
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-zoom-container">
                                <div class="img">
                                    <img src="images/4.jpg" data-bgimg="<?php echo $url_path ?>/images/4.jpg" alt="image04" title="Guns of Brixton" />
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-zoom-container">
                                <div class="img">
                                    <img src="images/5.jpg" data-bgimg="<?php echo $url_path ?>/images/5.jpg" alt="image05" title="This Is Not a Love Song" />
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-zoom-container">
                                <div class="img">
                                    <img src="images/6.jpg" data-bgimg="<?php echo $url_path ?>/images/6.jpg" alt="image06" title="Making Plans for Nigel" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add Pagination -->                
                    <div class="swiper-pagination swiper-pagination-white"></div>
                    <!-- Add Navigation -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
