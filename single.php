<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
    <title><?php bloginfo( 'name' ); ?></title>
</head>
<body>
    <?php get_header(); ?>
    <main><div class="container">
    <?php 
    if( have_posts() ):
        while( have_posts() ): 
            the_post();
            print('<article class="post">');
            printf( 
                '<h3>%s</h3>',
                get_the_title()
            );
            printf( 
                '<div class="meta">Created By %s on %s.</div>',
                get_the_author(),
                get_the_time('F j, Y g:i a')
            );
            the_content();
            print('</article>');
        endwhile;
    else:
        echo wp_autop('Sorry No Posts were found.'); 
    endif; ?>
    </div></main>
    <?php
        get_footer();
        wp_footer();
    ?>
</body>
</html>

