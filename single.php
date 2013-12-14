<?php
/**
 * Alienstrap for Wordpress
 *
 * @file        single.php
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
<?php get_header(); ?>

<div class="container">

    <?php while ( have_posts() ) : the_post(); ?>

        <div class="row">

            <?php get_template_part( "content", "single" ); ?>

        </div>

        <div class="row nav-border">
            <!-- Previous post(s) -->
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-left">

                <?php previous_post_link( "<span class=\"glyphicon glyphicon-chevron-left\"></span> %link" ); ?>

            </div>
            <!-- Next post(s) -->
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-right">

                <?php next_post_link( "%link <span class=\"glyphicon glyphicon-chevron-right\"></span>" ); ?>

            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <?php
                    // If comments are open or we have at least one comment, load up the comment template
                    if ( comments_open() || get_comments_number() != "0" )
                    {
                        comments_template();
                    }
                ?>
            </div>
        </div>

    <?php endwhile; ?>

</div>

<?php get_footer(); ?>
