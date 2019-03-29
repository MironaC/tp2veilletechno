<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>
//////////////////  froniiiit-page.php /***/////////////
<section id="primary" class="content-area">
	<main id="main" class="site-main">

<!--  ////////////////////// La troisième boucle pour les articles de catégorie  événement  -->

<?php
		$args = array( 'post_type' => 'post',
					   'category_name' => 'evenement',
					   'posts_per_page' => 4
					);

		$query = new WP_Query ( $args );
	
		if ($query->have_posts() ) {
	?>

		<?php while ( $query->have_posts()) {
				$query->the_post();
				include(locate_template( 'template-parts/content/frontpage-une-image.php' ));
			}			 

	 wp_reset_postdata();
	}
?>
	</div>	
</article>	
<!--  ///////////////////////////////////////////////////////////////////////// -->

	</main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();
?>