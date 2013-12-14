<?php
/**
 * Alienstrap for Wordpress
 *
 * @file        content.php
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
<article id="post-<?php the_ID(); ?>" <?php post_class("col-xs-12 col-sm-6 col-md-4 col-sm-4"); ?>>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </div>
        <div class="panel-body">
            <?php
                $thumbnail = get_post_thumbnail_id();
                //  Gets the full size image URL.
                $img_full_url = wp_get_attachment_url( $thumbnail, "full" );
                //  Gets the resized image URL.
                $image_url = aq_resize( $img_url, 720, 560, true );
            ?>
            <?php if( $image_url ) : ?>
                <a href="<?php the_permalink(); ?>"><img class="img-responsive" src="<?php echo $image_url ?>" /></a>
            <?php endif; ?>
            <div><?php the_excerpt(); ?></div>
        </div>
    </div>
</article>
