<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <nav>
        <div class="wrapper">
            <div class="wrap-menu">
                <a href="<?php echo bloginfo('url'); ?>">
                    <div class="logo">
                        <h1>LOGO</h1>
                    </div>
                </a>
                <div class="menu">
                    <div><a href="">Accueil</a></div>
                    <div><a href="<?php the_permalink(9); ?>">Studio</a></div>
                    <div><a href="">Contact</a></div>
                    <div><a href="">Production</a></div>
                    <div><a href="<?php the_permalink(20); ?>">Vidéos</a></div>
                </div>
                <div class="rs">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icones-rs/facebook.png" alt="picto facebook">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icones-rs/twitter.png?>" alt="picto twitter">
                </div>
            </div>
        </div>
    </nav>

    <?php if (is_front_page()) {; ?>

        <header class="header" data-vide-bg="<?php echo get_template_directory_uri(); ?>/video/coverr-milan-view-overhead" style="width:100%;height:100vh;">
        <?php } ?>

        </header>