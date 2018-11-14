<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Shopper
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<h2 class="center"> Zapraszamy do naszego sklepu pod adresem:</h2>
			<hr class="hr_100"/>
			<div class="left_50 center">
				<i class="fas fa-home"></i>
				<h5> Plac Wolności 6</h5>
				<h5> 24-045 Kielce</h5>

			</div>
			<div class="right_50">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d749.1968949079967!2d20.634063129272576!3d50.866986598720935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4718278dfd07cb03%3A0xb9fc2c9215ee5280!2splac+Wolno%C5%9Bci+6%2C+25-368+Kielce!5e1!3m2!1spl!2spl!4v1542203680189" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div style="clear:both"></div>
			<hr class="hr_100" />
			<?php while ( have_posts() ) : the_post();

				do_action( 'shopper_page_before' );

				get_template_part( 'template-parts/content', 'page' );

				/**
				 * Functions hooked in to shopper_page_after action
				 *
				 * @hooked shopper_display_comments - 10
				 */
				do_action( 'shopper_page_after' );

			endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
do_action( 'shopper_sidebar' );
get_footer();
