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

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
					?>
				</header><!-- .page-header -->


				<!-- start archive authors -->
				<h2>Quote Authors</h2>
        <?php
        $posts = get_posts( array( 
					'orderby' => 'name',
					'order' => 'ASC',
					'posts_per_page' => -1,
				));?>

				<ul class="archive-list">
				<?php
        foreach( $posts as $post ) {
					$postAuthor = get_the_title();
					$postLink = get_the_permalink();?>
					
					<li>
						<a href =<?php echo "$postLink" ?> class ="button"><?php echo $postAuthor ?></a>
				  </li><?php
				} ?>
				</ul>
				<!-- end archive authors -->

				
				<!-- start archive categories -->
				<h2>Categories</h2>
				<?php
				$categories = get_categories( array(
					'orderby' => 'name',
					'order' => 'ASC',
				));?>
				
				<ul class="archive-list">
				<?php
        foreach( $categories as $category ) {
					$categoryLink = home_url('/category/'). $category->slug;?>

					<li>
						<a href =<?php echo "$categoryLink" ?> class ="button"><?php echo $category->name ?></a>
				  </li><?php
				} ?>
				</ul>
				<!-- end archive categories -->


				<!-- start archive tags -->
				<h2>Tags</h2>
				<?php
				$tags = get_tags( array(
					'orderby' => 'name',
					'order' => 'ASC',
				));?>
				
				<ul class="archive-list">
				<?php
        foreach( $tags as $tag ) {
					$tagLink = home_url('/tag/'). $tag->slug;?>
					
					<li>
						<a href =<?php echo "$tagLink" ?> class ="button"><?php echo $tag->name ?></a>
				  </li><?php
				} ?>
				</ul>
				<!-- end archive tags -->


			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
