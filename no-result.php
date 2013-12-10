<?php
/**
 * Alienstrap for Wordpress
 *
 * @file        no-result.php
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

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 page-header">
        <h1><?php _e( "Not Found", "default" ); ?></h1>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

        <?php if ( is_home() && current_user_can( "publish_posts" ) ) : ?>

            <p><?php printf( __( "Ready to publish your first post? <a href=\"%1$s\">Get started here</a>.", "default" ), esc_url( admin_url( "post-new.php" ) ) ); ?></p>

        <?php elseif ( is_search() ) : ?>

            <p><?php _e( "Sorry, but nothing matched your search terms. Please try again with some different keywords.", "default" ); ?></p>
            <?php get_search_form(); ?>

        <?php else : ?>

            <p><?php _e( "It seems we can't find what you're looking for. Perhaps searching can help.", "default" ); ?></p>
            <?php get_search_form(); ?>

        <?php endif; ?>

    </div>
</div>
