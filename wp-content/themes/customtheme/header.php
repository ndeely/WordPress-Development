<!DOCTYPE html>
    <html class="no-js" <?php language_attributes(); ?>>
        <head>
            <meta charset="<?php bloginfo( 'charset' ); ?>">
            <meta name="viewport" content="width=device-width, initial-scale=1.0" >
            <link rel="profile" href="https://gmpg.org/xfn/11">
            <?php wp_head(); ?>
        </head>

        <body <?php body_class(); ?>>

            <?php wp_body_open(); ?>

            <header id="site-header" role="banner">
                <div class="header-inner section-inner">

                    <div class="header-titles-wrapper">
                        <button class="toggle search-toggle mobile-search-toggle" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
                            <span class="toggle-inner">
                                <span class="toggle-icon">
                                    <?php twentytwenty_the_theme_svg( 'search' ); ?>
                                </span>
                            </span>
                        </button><!-- .search-toggle -->

                        <div class="header-titles">
                            <?php twentytwenty_site_logo(); ?>
                        </div><!-- .header-titles -->

                        <button class="toggle nav-toggle mobile-nav-toggle" data-toggle-target=".menu-modal"  data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
                            <span class="toggle-inner">
                                <span class="toggle-icon">
                                    <?php twentytwenty_the_theme_svg( 'ellipsis' ); ?>
                                </span>
                            </span>
                        </button><!-- .nav-toggle -->
                    </div><!-- .header-titles-wrapper -->

                    <div class="header-navigation-wrapper">
                        <?php if ( has_nav_menu( 'primary' ) || ! has_nav_menu( 'expanded' ) ) { ?>
                            <nav class="primary-menu-wrapper" aria-label="<?php echo esc_attr_x( 'Horizontal', 'menu', 'twentytwenty' ); ?>" role="navigation">

                                <ul class="primary-menu reset-list-style">
                                    <?php
                                        if ( has_nav_menu( 'primary' ) ) {
                                            wp_nav_menu(
                                                array(
                                                    'container'  => '',
                                                    'items_wrap' => '%3$s',
                                                    'theme_location' => 'primary',
                                                )
                                            );
                                        }
                                    ?>
                                </ul>

                            </nav><!-- .primary-menu-wrapper -->

                            <?php
                        }
                        ?>

                        <div class="header-toggles hide-no-js">
                            <div class="toggle-wrapper search-toggle-wrapper">

                                <button class="toggle search-toggle desktop-search-toggle" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
                                    <span class="toggle-inner">
                                        <?php twentytwenty_the_theme_svg( 'search' ); ?>
                                    </span>
                                </button><!-- .search-toggle -->

                            </div>
                        </div><!-- .header-toggles -->


                    </div><!-- .header-navigation-wrapper -->

                </div><!-- .header-inner -->

                <?php get_template_part( 'template-parts/modal-search' ); ?>

            </header><!-- #site-header -->

            <?php
            // Output the menu modal.
            get_template_part( 'template-parts/modal-menu' );
