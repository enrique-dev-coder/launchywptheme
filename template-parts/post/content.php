<?php
/**
 * Template part for displaying posts.
 * Esto es como hacer un template pero tomas elementos de la api de wordpress  como el post id el thumbnail
 */

?>
<article id="post-<?php the_ID() ?>">
    <header class="entry-header">
        <?php
          //funcion de titulo del post
            the_title( '<h2 class="entry-title"><a class="entry-link" href="'.esc_url( get_permalink() ).'">', '</a></h2>' );
        ?>
    </header>
    <!-- Post thumbnail -->
    <?php
    //si el post tienen thumbnail entonces dale un thumbnail a la pagina
    if ( has_post_thumbnail() ) :
        the_post_thumbnail( 'large' ); // full, large, medium, custom size
    endif;
    ?>
    <!-- Post Content -->
    <div class="entry-content">
        <?php the_excerpt(); ?>
    </div>
</article>