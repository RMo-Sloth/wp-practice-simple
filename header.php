<header><div class="container">
    <h1><?php bloginfo('name'); ?></h1>
    <span><?php bloginfo('description'); ?></span>
</div></header>
<?php 
    printf(
        '<nav class="main-nav">%s</nav>',
        wp_nav_menu([
            'theme_location' => 'primary',
            'container_class' => 'container',
            'echo' => false
        ])
    );
?>
