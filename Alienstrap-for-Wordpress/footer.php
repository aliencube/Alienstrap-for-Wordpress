<?php
/**
 * Alienstrap for Wordpress
 *
 * @file        footer.php
 * @author      Justin Yoo <justin.yoo@aliencube.com>
 * @repository  https://github.com/aliencube/Alienstrap-for-Wordpress
 *
 * The MIT License (MIT)
 *
 * Copyright (c) 2013 http://aliencube.org
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of
 * this software and associated documentation files (the "Software"), to deal in
 * the Software without restriction, including without limitation the rights to
 * use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of
 * the Software, and to permit persons to whom the Software is furnished to do so,
 * subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
 * FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 * COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
 * IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
 * CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */
?>
    <!-- Footer -->
    <div id="footer" class="container">
        <div class="row">

            <?php dynamic_sidebar("Footer"); ?>

        </div>
    </div>

    <!-- Copyright -->
    <div class="container">
        <div class="row">
            <footer class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <p>
                    Copyright &copy; 2013 &ndash; <?php date( "Y" ) == 2013 ? "" : date( "Y" ); ?>
                    <a href="<?php bloginfo( "url" ); ?>" title="<?php bloginfo( "name" ); ?>"><?php bloginfo( "name" ); ?></a>
                    | Theme by <a href="https://github.com/aliencube/Alienstrap-for-Wordpress" ><?php echo wp_get_theme(); ?></a>
                    | <a href="http://opensource.org/licenses/MIT" title="The MIT License">The MIT License</a>
                </p>
            </footer>
        </div>
    </div>

    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/scripts/jquery/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/scripts/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/scripts/plugins.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/scripts/main.js?v=<?php echo get_last_modified_date("/scripts/main.js"); ?>"></script>

    <?php wp_footer(); ?>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script type="text/javascript">
        (function (b, o, i, l, e, r) {
            b.GoogleAnalyticsObject = l; b[l] || (b[l] =
                function () { (b[l].q = b[l].q || []).push(arguments) }); b[l].l = +new Date;
            e = o.createElement(i); r = o.getElementsByTagName(i)[0];
            e.src = '//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e, r)
        }(window, document, 'script', 'ga'));
        ga('create', 'UA-XXXXX-X'); ga('send', 'pageview');
    </script>
</body>
</html>
