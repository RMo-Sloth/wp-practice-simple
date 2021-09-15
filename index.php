<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
    <title><?php bloginfo( 'name' ); ?></title>
</head>
<body>
    <header>
        <h1><?php bloginfo('name'); ?></h1>
        <span><?php bloginfo('description'); ?></span>
    </header>
    <main>        
    <?php 
    if( have_posts() ):
        while( have_posts() ): 
            the_post();
            the_title('<h3>', '</h3>');
            printf( 
                '<div class="meta">Created By %s on %s.</div>',
                get_the_author(),
                get_the_time('F j, Y g:i a')
            );
        endwhile;
    else:
        echo wp_autop('Sorry No Posts were found.'); 
    endif; ?>
    </main>
    <footer>
        <p>&copy; <?php the_date('Y'); ?> - <?php bloginfo('name'); ?></p>
    </footer>
</body>
</html>
