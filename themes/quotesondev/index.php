<?php
/**
 * The main template file.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="index-main site-main" role="main">


<!-- add wp query - set array to orderby => rand -->
			<!-- <h1>The Quote</h1> -->
			<p class="quote">Not all artists are developers but all developers are artists.</p>
			<p class="author">— Vaughn Paulger</p>
			<button class="get-quote-button">Show Me Another!</button>
			<!-- add @redacademy link next to author (vaughn paulger) -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
