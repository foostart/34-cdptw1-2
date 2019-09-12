  var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-7243260-2']);
            _gaq.push(['_trackPageview']);

            (function () {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();

              $(function () {

                $('#fd-wrapper').slideshow({
                    width: 600,
                    height: 396,
                    onLoad: function () {
                        if (!Modernizr.csstransforms3d)
                            $('#fd-message').show();
                    }
                });

            });