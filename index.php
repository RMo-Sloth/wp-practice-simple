<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
    <title><?php bloginfo( 'name' ); ?></title>
</head>
<body>
    <?php get_header(); ?>
    <div class="container">

      <main>
        <?php 
    if( have_posts() ):
      while( have_posts() ): 
        the_post();
        
        print('<article class="post">');
        
        printf( 
          '<a href="%s"><h3>%s</h3></a>',
          get_the_permalink(),
          get_the_title()
        );
        
        printf( 
          '<div class="meta">Created By %s on %s.</div>',
          get_the_author(),
          get_the_time('F j, Y g:i a')
        );
        
        if( has_post_thumbnail() ) :
          printf(
            '<div class="post-thumbnail">%s</div>',
            get_the_post_thumbnail()
          );
        endif;
        
        the_excerpt();
        
        printf(
          '<a class="button" href="%s">Read more</a>',
          get_the_permalink()
        );
        
        print('</article>');
      endwhile;
    else:
      echo wp_autop('Sorry No Posts were found.'); 
    endif; ?>
  </main>
  <div class="sidebar">TEST</div>
  <div class="clr"></div>
  </div>
  <?php
        get_footer();
        wp_footer();
        ?>
</body>
</html>
