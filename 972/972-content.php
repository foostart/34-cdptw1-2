 <?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                       <div id="fd-wrapper" class="fd-wrapper">
                <img src="images/1.jpg" data-bgimg="<?php echo $url_path ?>/images/1.jpg" alt="image01" title="Love Will Tear Us Apart" />
                <img src="images/2.jpg" data-bgimg="<?php echo $url_path ?>/images/2.jpg" alt="image02" title="Just Can't Get Enough" />
                <img src="images/3.jpg" data-bgimg="<?php echo $url_path ?>/images/3.jpg" alt="image03" title="In a Manner of Speaking" />
                <img src="images/4.jpg" data-bgimg="<?php echo $url_path ?>/images/4.jpg" alt="image04" title="Guns of Brixton" />
                <img src="images/5.jpg" data-bgimg="<?php echo $url_path ?>/images/5.jpg" alt="image05" title="This Is Not a Love Song" />
                <img src="images/6.jpg" data-bgimg="<?php echo $url_path ?>/images/6.jpg" alt="image06" title="Making Plans for Nigel" />
            </div>
                    
                </div>
                
            </div>
         
        </div>
        <script>
          
        </script>
