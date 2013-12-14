<?php
/**
 * Alienstrap for Wordpress
 *
 * @file        content-single.php
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
                    <span class="glyphicon glyphicon-folder-open"></span><span class="padding-left-narrow"><?php echo get_the_category_list( ", " ); ?></span> |
                    <span class="glyphicon glyphicon-tags"></span><span class="padding-left-narrow"><?php echo get_the_tag_list( "", ", " ); ?></span> |
                    <?php echo as_get_posted_date_and_author(); ?> |
                    <a href="<?php echo get_permalink(); ?>"><span class="glyphicon glyphicon-link"></span></a>
                    <?php edit_post_link( "<span class=\"glyphicon glyphicon-edit\"></span>", "", "" ); ?>
                </p>
            </div>
        </div>
    </div>

    <?php
        $thumbnail = get_post_thumbnail_id();
        //  Gets the full size image URL.
        $img_full_url = wp_get_attachment_url( $thumbnail, "full" );
        //  Gets the resized image URL.
        $image_url = aq_resize( $img_url, 1200, 720, true );
    ?>

    <?php if( $image_url ) : ?>

        <img class="img-responsive" src="<?php echo $image_url ?>"/>

    <?php endif; ?>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="entry-content">

                <?php the_content(); ?>

            </div>
        </div>
    </div>
</article>
