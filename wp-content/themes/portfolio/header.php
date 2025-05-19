<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php
        if (is_front_page()) {
            bloginfo('name');
            echo ' | ';
            bloginfo('description');
        } elseif (is_singular()) {
            the_title();
            echo ' | ';
            bloginfo('name');
        } else {
            wp_title('|', true, 'right');
        }
        ?>
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- BREADCRUMB PER SEO -->
    <?php if (function_exists('yoast_breadcrumb') && !is_front_page()): ?>
        <div class="breadcrumb-wrapper">
            <?php yoast_breadcrumb('<p id="breadcrumbs">', '</p>'); ?>
        </div>
    <?php endif; ?>

    <!-- Sfondo animato -->
    <div id="particles-js" style="position: fixed; width: 100%; height: 100%; top: 0; left: 0; z-index: -1;"></div>

    <div class="site">
        <header>
            <nav class="main-navigation">
                <div class="logo" style="display: flex; align-items: center; gap: 0.5rem;">
                    <a href="<?php echo home_url(); ?>" class="logo" style="
                        font-family: 'Montserrat', sans-serif; 
                        font-weight: 900; 
                        font-size: 2.8rem; 
                        color: #f39c12; 
                        text-decoration: none; 
                        display: flex; 
                        align-items: center; 
                        gap: 0.6rem;">
                        <span style="font-size: 3.2rem; color: #222;">&lt;/&gt;</span>
                        <span style="font-size: 2.4rem; color: #222;">Marco Cerilli</span>
                    </a>
                </div>

                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    &#9776;
                </button>

                <?php
                wp_nav_menu([
                    'theme_location' => 'primary',
                    'menu_class' => 'menu',
                    'container' => false,
                ]);
                ?>
            </nav>
        </header>