<?php
/**
 * Alienstrap for Wordpress
 *
 * @file        functions.php
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

/**
 * Imports image resizer.
 */
require_once get_template_directory() . "/libraries/aq_resizer.php";

/**
 * Gets the last modified date for JavaScript or CSS.
 */
if ( ! function_exists( "get_last_modified_date" ) )
{
    function get_last_modified_date( $filepath )
    {
        $filepath = get_template_directory() . $filepath;
        return date ( "YmdHis", filemtime( $filepath ) );
    }
}

/**
 * Gets the date posted and the author of the post.
 */
if ( ! function_exists( "as_get_posted_date_and_author" ) )
{
    function as_get_posted_date_and_author()
    {
        $posted_on = "Posted on <span>" . get_the_date() . " " . get_the_time() . "</span>";
        $posted_by = "by <span><a href=\"" . get_author_posts_url( get_the_author_meta( "ID" ) ) . "\">" . get_the_author() . "</a></span>";
        return $posted_on . " " . $posted_by;
    }
}

/**
 * Gets the pagination.
 */
if ( ! function_exists( "as_get_pagination" ) )
{
    function as_get_pagination( $pages = "", $range = 2 )
    {
        $showitems = ( $range * 2 ) + 1;

        //  Sets the current page.
        global $paged;
        if( empty ( $paged ) )
        {
            $paged = 1;   
        }

        //  Sets the total number of pages.
        if( $pages == "")
        {
            global $wp_query;
            $pages = $wp_query->max_num_pages;
            if( !$pages )
            {
                $pages = 1;
            }
        }

        //  Sets the pagination.
        echo "<ul class=\"pagination\">\n";
        if ( $pages == 1 )
        {
            echo "<li class=\"active\"><span>" . $pages . "</span></li>\n";
        }
        else
        {
            //  Gets the first page.
            if ( $paged > 2 && $paged > $range + 1 && $showitems < $pages )
            {
                echo "<li><a href=\"" . get_pagenum_link( 1 ) . "\"><span class=\"glyphicon glyphicon-fast-backward\"></span></a></li>\n";
            }

            //  Gets the previous page.
            if ( $paged > 1 && $showitems < $pages )
            {
                echo "<li><a href=\"" . get_pagenum_link( $paged - 1 ) . "\"><span class=\"glyphicon glyphicon-chevron-left\"></span></a></li>\n";
            }

            //  Gets the pages.
            for ( $i = 1; $i <= $pages; $i++ )
            {
                if ( $pages != 1 && ( !( $i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems ) )
                {
                    echo ( $i == $paged )
                        ? "<li class=\"active\"><span>" . $i . "</span></li>\n"
                        : "<li><a href=\"" . get_pagenum_link( $i ) . "\">" . $i . "</a></li>\n";
                }
            }

            //  Gets the next page.
            if ( $paged < $pages && $showitems < $pages )
            {
                echo "<li><a href=\"" . get_pagenum_link( $paged + 1 ) . "\"><span class=\"glyphicon glyphicon-chevron-right\"></span></a></li>\n";
            }

            //  Gets the last page.
            if ( $paged < $pages - 1 && $paged+$range - 1 < $pages && $showitems < $pages )
            {
                echo "<li><a href=\"" . get_pagenum_link( $pages ) . "\"><span class=\"glyphicon glyphicon-fast-forward\"></span></a></li>\n";
            }
        }
        echo "</ul>\n";
    }
}

/**
 * Registers header nav menu.
 */
if ( ! function_exists( "register_my_menu" ) )
{
    function register_header_menu()
    {
        register_nav_menu( "header-menu", "Header Menu" );
    }
}

add_action( "init", "register_header_menu" );

/**
 * Registers widgetised footer.
 */
if ( ! function_exists( "as_init_widgets" ) )
{
    function as_init_widgets()
    {
        register_sidebar( array(
            "name"          => "Footer",
            "before_widget" => "<div class=\"col-xs-12 col-sm-6 col-md-3 col-lg-3 widget\">",
            "after_widget"  => "</div>",
            "before_title"  => "<h3>",
            "after_title"   => "</h3>"
        ) );
    }
}

add_action( "widgets_init", "as_init_widgets" );

/**
 * Redefines the read more link.
 */
if ( ! function_exists( "as_excerpt_more" ) )
{
    function as_excerpt_more( $more ) {
        return " <span>[<a class=\"read-more\" href=\"" . get_permalink( get_the_ID() ) . "\">...</a>]</span>";
    }
}

add_filter( "excerpt_more", "as_excerpt_more" );
