<?php
/**
 * Alienstrap for Wordpress
 *
 * @file        index.php
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
    <?php if ( of_get_option( "as_hero_title" ) != "" || of_get_option( "as_hero_text" ) != "" ) : ?>

        <!-- Jumbotron -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="jumbotron">

                    <?php if ( of_get_option( "as_hero_title" ) != "" ) : ?>

                        <h1 class="text-center smaller"><?php echo of_get_option( "as_hero_title" ) ?></h1>

                    <?php endif; ?>

                    <?php if ( of_get_option( "as_hero_text" ) != "" ) : ?>

                        <p class="text-center smaller"><?php echo of_get_option( "as_hero_text" ) ?></p>

                    <?php endif; ?>

                </div>
            </div>
        </div>

    <?php endif; ?>

    <?php if ( have_posts() ) : ?>

        <div class="row">

            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( "content", get_post_format() ); ?>

            <?php endwhile; ?>

        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">

                <?php as_get_pagination(); ?>

            </div>
        </div>
    <?php else : ?>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                <?php get_template_part( "no-result", "index" ); ?>

            </div>
        </div>

    <?php endif; ?>

</div>

<?php get_footer(); ?>
