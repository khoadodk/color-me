<nav id="site-navigation" class="main-navigation flex flex-auto items-end">
    <!-- Logo -->
    <a href="<?php echo get_site_url() ?>" class="logo">
        <img src="<?php echo get_template_directory_uri() . '/images/logo.png' ?>" alt="" class="db" >
    </a>
    <!-- Nav -->
    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'menu-1',
            'menu_id'        => 'primary-menu',
            'menu_class' => 'main-menu ma0 pa0 list'
        )
    );
    ?>
</nav><!-- #site-navigation -->