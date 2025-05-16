<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Top Header -->
<div class="header-top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-2 col-sm-3 col-6">
                <div class="logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <?php
                        if (has_custom_logo()) {
                            the_custom_logo();
                        } else {
                            echo '<h1>' . get_bloginfo('name') . '</h1>';
                        }
                        ?>
                    </a>
                </div>
            </div>
            <div class="col-lg-10 col-sm-9 col-6 text-right">
                <div class="header-top-info">
                    <div class="header-contact">
                        <span><i class="fas fa-phone-alt"></i> +23 345 67980</span>
                        <span><i class="fas fa-envelope"></i> contact@novena.com</span>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => 'nav',
                        'container_class' => 'navigation',
                        'menu_class' => 'navbar-nav'
                    ));
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>