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
      
      <!-- if user is logged in -->
      <?php if (is_user_logged_in()) { ?>

      <form class="submit-a-quote">
        <p>Author of Quote</p>
        <input class="submit-author" type="text" name="author" required> 
        <!-- add rquired feild to each of these  -->
        <br>
        <p>Quote</p>
        <textarea class="submit-quote" name="comment" form="usrform" required></textarea>
        <br>
        <p>Where did you find this quote? (e.g. book name)</p>
        <input class="submit-source" type="text" name="quoteSource">
        <br>
        <p>Provide the URL of the quote source, if available.</p>
        <input class="submit-url" type="text" name="quoteURL"><br>
        <br>
        <input class="submit-button" type="submit" value="Submit Quote">
      </form>

      <!-- if used is not logged in -->
      <?php } else { ?>
      <p>Sorry, you must be logged in to submit a quote!</p>
      <a class="login-link" href="<?php echo esc_url( home_url('/wp-login.php')); ?>">Click here to login.</a>
      <?php } ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
