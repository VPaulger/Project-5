<?php
/**
 * The template for displaying the footer.
 *
 * @package QOD_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						<p>Brought to you by 
							<a href="https://redacademy.com/toronto/" target="_blank" rel="RED Academy">RED Academy</a>
						</p>
					</nav><!-- #site-navigation -->
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/build/js/api.min.js"></script>

		<?php wp_footer(); ?>
	</body>
</html>
