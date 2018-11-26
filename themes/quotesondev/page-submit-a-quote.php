<?php
/**
 * The template for displaying all pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

      <form class="submit-a-quote">
        <p>Author of Quote</p>
        <input type="text" name="author">
        <br>
        <p>Quote</p>
        <textarea name="comment" form="usrform"></textarea>
        <br>
        <p>Where did you find this quote? (e.g. book name)</p>
        <input type="text" name="quoteSource">
        <br>
        <p>Provide the URL of the quote source, if available.</p>
        <input type="text" name="quoteURL"><br>
        <br>
        <input class="submit-button" type="submit" value="Submit Quote">
      </form>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
