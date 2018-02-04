<!-- footer top start -->
<!-- ================ -->
<!-- footer top end -->
<!-- footer start (Add "dark" class to #footer in order to enable dark footer) -->
<!-- ================ -->
<footer id="footer" class="clearfix">
    <!-- .footer start -->
    <!-- ================ -->
    <div class="footer light-gray-bg border-clear">
        <div class="container">
            <div class="footer-inner">
                <div class="row">
                    <div class="col-md-4">
                       <address>
                        <ul class="list-unstyled">
                            <li class="footer-sprite address">
                                ул. "Народен Фронт" број 19a;<br>
                                Т.Ц. Беверли Хилс, локал 33, прв кат<br>
                                1000 Скопје, Македонија<br>
                            </li>
                            <li class="footer-sprite phone">
                                Телефон: +389 2 3231 055<br>
                                Факс: +389 2 3231 055
                            </li>
                            <li class="footer-sprite email">
                                <a href="mailto:Email: info@tropical.mk">Email: info@tropical.mk</a>
                            </li>
                        </ul>
                    </address>

                </div>
                <div class="col-md-4">
                    <div class="block clearfix">
                        <?php
                        /*printa tagovi od baza  */
                        $results = mysqli_query($con, "SELECT DISTINCT keywords FROM tekst WHERE keywords != '' ORDER BY id DESC LIMIT 23");
                        while ($row = mysqli_fetch_array($results)) {
                            $id = $row['id'];
                            $keywords = $row['keywords'];
                            $keywords = explode(",", $keywords);
                                //od tigaz proverka za duplikati
                            foreach ($keywords as $key => $value) {
                                if (in_array(ltrim($value), $tags)) {
                                } else {
                                    if ($value != "") {
                                        echo '<div class="tag">
                                        <a class="tag" href="/keywords/' . ltrim($value, " ") . '/">' . $value . '</a>
                                    </div>';
                                }
                            }
                            $tags[] = ltrim($value);
                        }
                    }
                    $results->close();
                    ?>
                </div>
            </div>
            <div style="margin-bottom: 2%" class="col-md-4">
                <div class="fb-page" data-href="https://www.facebook.com/tatropical" data-tabs="timeline" data-width="300" data-height="335" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/tatropical" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/tatropical">T.A.TropicaL</a></blockquote></div>
                <br>
            </div>
        </div>
    </div>
</div>
<!-- .footer end -->
<!-- .subfooter start -->
<!-- ================ -->
<div class="subfooter dark-bg">
    <div class="container">
        <div class="subfooter-inner">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center">Copyright © 2017 tropical.mk create by <a target="_blank"
                        href="https://www.facebook.com/Sefot">Zoran Shefot Bogoevski</a>.
                        All Rights Reserved</p>                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .subfooter end -->
    </footer>
    <!-- footer end -->
</div>
<!-- page-wrapper end -->
<!-- JavaScript files placed at the end of the document so the pages load faster -->
<!-- ================================================== -->
<!-- Jquery and Bootstap core js files -->
<script type="text/javascript" src="/plugins/jquery.min.js"></script>
<script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>
<!-- Modernizr javascript -->
<script type="text/javascript" src="/plugins/modernizr.js"></script>
<!-- jQuery Revolution Slider  -->
<script type="text/javascript" src="/plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<!-- Isotope javascript -->
<script type="text/javascript" src="/plugins/isotope/isotope.pkgd.min.js"></script>
<!-- Magnific Popup javascript -->
<script type="text/javascript" src="/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<!-- Appear javascript -->
<script type="text/javascript" src="/plugins/waypoints/jquery.waypoints.min.js"></script>
<!-- Count To javascript -->
<script type="text/javascript" src="/plugins/jquery.countTo.js"></script>
<!-- Parallax javascript -->
<script src="/plugins/jquery.parallax-1.1.3.js"></script>
<!-- Contact form -->
<script src="/plugins/jquery.validate.js"></script>
<!-- Morphext -->
<script type="text/javascript" src="/plugins/morphext/morphext.min.js"></script>
<!-- Background Video -->
<script src="/plugins/vide/jquery.vide.js"></script>
<!-- Owl carousel javascript -->
<script type="text/javascript" src="/plugins/owl-carousel/owl.carousel.js"></script>
<!-- SmoothScroll javascript -->
<script type="text/javascript" src="/plugins/jquery.browser.js"></script>
<script type="text/javascript" src="/plugins/SmoothScroll.js"></script>
<!-- Initialization of Plugins -->
<script type="text/javascript" src="/js/template.js"></script>
<!-- Custom Scripts -->
<script type="text/javascript" src="/js/custom.js"></script>
<!--za google +-->
<script async defer>  (function () {
    var po = document.createElement('script');
    po.type = 'text/javascript';
    po.async = true;
    po.src = 'https://apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(po, s);
})();
</script>
<!-- xs tviter-->
<script async defer>!function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (!d.getElementById(id)) {
        js = d.createElement(s);
        js.id = id;
        js.async = true;
        js.src = "https://platform.twitter.com/widgets.js";
        fjs.parentNode.insertBefore(js, fjs);
    }
}(document, "script", "twitter-wjs");</script>
<!--facebook-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=244156195915980";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php require 'bottom-cache.php';?>
</body>
</html>