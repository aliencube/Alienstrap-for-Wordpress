<?php
/**
 * Alienstrap for Wordpress
 *
 * @file        content-page.php
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
<!-- Post panel -->
<article id="post-<?php the_ID(); ?>" <?php post_class( "col-xs-12 col-sm-12 col-md-12 col-lg-12" ); ?>>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="page-header entry-title">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="entry-meta">
                <p class="text-right">
                    <?php echo as_get_posted_date_and_author(); ?> |
                    <a href="<?php echo get_permalink(); ?>"><span class="glyphicon glyphicon-link"></span></a>
                    <?php edit_post_link( "<span class=\"glyphicon glyphicon-edit\"></span>", "", "" ); ?>
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="entry-content">

                <?php the_content(); ?>

            </div>
        </div>
    </div>
</article>
