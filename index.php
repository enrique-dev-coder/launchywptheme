<?php 


get_header();
  if( have_posts() ) :
    while( have_posts() ):
      the_post();
       //usmaos una funcion de wordpress para cargar el template que cargara cada post, aqui le das una ruta
       get_template_part('template-parts/post/content');
    endwhile;
  endif;
get_footer();