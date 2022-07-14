<?php
/**
 * Template part for displaying posts.
 * Esto es como hacer un template pero tomas elementos de la api de wordpress  como el post id el thumbnail
 */

?>
<article id="post-<?php the_ID() ?>">
    <header class="entry-header">
        <?php
          //revisar si es una single page
          if( is_singular( ) ) :
            the_title('<h1 class="entry-title">','</h1>');
          else:
          //funcion de titulo del post
            the_title( '<h2 class="entry-title"><a class="entry-link" href="'.esc_url( get_permalink() ).'">', '</a></h2>' );
          endif;  
        ?>
    </header>
    <!-- Post thumbnail -->
    <?php
    //si el post tienen thumbnail entonces dale un thumbnail a la pagina
    if ( has_post_thumbnail() ) :
        the_post_thumbnail( 'large' ); // full, large, medium, custom size
    endif;
    ?>
    <!-- Post Content
            si es la home o el archive entonces que te muestre los post con su excerpt
-->
    <?php  if( is_home() || is_archive() ) : ?>
        <div class="entry-content">
            <?php the_excerpt(); ?>
        </div>
    <?php elseif( is_single() ) : ?>
        <div class="entry-content">
            <?php 
                the_content();

                wp_link_pages( array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ninestars' ),
                    'after'  => '</div>',
                ) );
            
            ?>
        </div>
    <?php endif; ?>
</article>