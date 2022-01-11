<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="branding" href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/src/images/branding.svg" title="Brand" alt="Brand"/></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   <?php
                   /*wp_nav_menu(
                       array(
                           'theme_location'  => '3',
                           'menu_class'      => 'menu-wrapper',
                           'container_class' => 'primary-menu-container',
                           'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
                           'fallback_cb'     => false,
                       )
                   );*/
                   echo wp_nav_menu();
                   ?>
                </div>

        </div>
    </nav>

    <div id="page">
        <?php get_header(); ?>

        <main>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </main>

        <?php get_footer(); ?>
    </div>

    <div class="back-to-top">
        <span>nach oben</span>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/src/js/core.js"></script>


</body>
</html>
