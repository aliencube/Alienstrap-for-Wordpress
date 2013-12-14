<?php
/**
 * Alienstrap for Wordpress
 *
 * @file        header.php
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
<!doctype html>
<html>
<head>
    <meta charset="<?php bloginfo( "charset" ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <title><?php wp_title( "|", true, "right" ); ?></title>
    <meta name="description" content="<?php bloginfo( "description" ); ?>" />
    <meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, maximum-scale=1" />

    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( "pingback_url" ); ?>" />

    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/bootstrap/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/main.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style.css?v=<?php echo get_last_modified_date("/css/style.css"); ?>" />

    <script src="<?php echo get_template_directory_uri() ?>/scripts/modernizr-2.6.2.min.js"></script>

    <?php wp_head(); ?>
</head>
<body class="<?php echo is_admin_bar_showing() ? "admin-bar" : ""; ?>">
    <!--[if lt IE 9]>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            </div>
        </div>
    </div>
    <![endif]-->

    <div class="container">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a href="<?php echo esc_url( home_url( "/" ) ); ?>" class="navbar-brand" title="<?php echo esc_attr( get_bloginfo( "name", "display" ) ); ?>">
                    <?php if( of_get_option( "as_logo" ) != "" ){ ?>
                        <img src="<?php echo of_get_option( "as_logo" ); ?>" alt="" />
                    <?php } else { ?>
                        <?php bloginfo( "name" ); ?>
                    <?php } ?>
                </a>
            </div>

            <div id="bs-navbar-collapse" class="collapse navbar-collapse navbar-right">
                <?php wp_nav_menu( array( "container" => false, "menu_class" => "nav navbar-nav" ) ); ?>
            </div>
        </nav>
    </div>
