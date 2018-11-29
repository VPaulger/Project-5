<?php
/**
 * Template part for displaying posts.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <div class="tag-entry-content">
		<?php the_excerpt(); ?>
  </div><!-- .entry-content -->
  
	<header class="entry-header">
    <?php 
      the_title( sprintf( '<p class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></p>' ); 
?>
      <a href =<?php get_permalink() ?> class ="button"><?php echo get_permalink() ?></a>
  
	</header><!-- .entry-header -->

</article><!-- #post-## -->
