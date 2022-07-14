<?php
/**
 * Single page template
 */
//El header trae toda la mierda necesaria como scripts y todo eso , esto aparece en cada pagina del blog , aparte
// trae ela funcion de wp_head que es el que liga todo a la hoja de estilos y esto
get_header();
?>
  <div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php 
          while ( have_posts() ) :
            the_post();
            //Aqui traes el contenido del post pero no traes los estilos de gutemberg
            //the_content();
            //aqui traes el url del template que usaras para el contenido de tu post
            //vamos a traer el content porque sera renderizado condicionalmente para no tener mas archivos
            get_template_part('template-parts/post/content');
          endwhile;

          //if comments are open show the comments 
          if ( comments_open( ) || get_comments_number( ) ) :
            comments_template();
          endif;
        ?>
    </main>
    <?php get_sidebar(); ?>

  </div>

<?php
get_footer();