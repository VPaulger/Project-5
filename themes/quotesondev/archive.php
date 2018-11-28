<?php
/**
 * The template for displaying archive pages.
 * Template Name: Archive
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<h2>Quote Authors</h2>

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
					?>
				</header><!-- .page-header -->
				

				<!-- start archive categories -->
				<?php
				$categories = get_categories( array(
					'orderby' => 'name',
					'order' => 'ASC',
				));?>
				
				<ul class="archive-list">
				<?php
        foreach( $categories as $category ) {
					$categorylink = home_url('/') . $category->taxonomy . '/' . $category->name;?>
					<li>
						<a href =<?php echo "$categorylink" ?> class ="button"><?php echo $category->name ?></a>
				  </li><?php
				} ?>
				</ul>
				<!-- end archive categories -->


				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						get_template_part( 'template-parts/content' );
					?>

				<?php endwhile; ?>

				<?php the_posts_navigation(); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
