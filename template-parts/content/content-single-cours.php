<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( ! twentynineteen_can_show_post_thumbnail() ) : ?>
	<header class="entry-header">
		<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
	</header>
	<?php endif; ?>

	<div class="entry-content">
		<div class="wp-block-media-text alignwide" style="grid-template-columns:30% auto">

			<div class="wp-block-media-text__content">
				<?php
					the_content();
				?>
			</div>

		</div>
		<div class="wp-block-media-text alignwide" style="grid-template-columns:30% auto">
			<h3>Nombre d'heures de cours:</h3>
			Ce cours dure 
			<?php
						if (get_field('duree_du_cours')){
							$duree = get_field('duree_du_cours');
						}

						the_field('duree_du_cours');

			?>
			heures
		</div>
		<div class="wp-block-media-text alignwide" style="grid-template-columns:30% auto">
			<h3>Nombre d'heures de cours :</h3>
			Professeurs qui donnent ce cours: 
			<?php
						if (get_field('prefesseurs')){
							$duree = get_field('professeurs');
						}

						the_field('professeurs');

			?>
		</div>
		<figure class="wp-block-media-text__media">
			<h3>Projets réalisés dans le cadre du cours:</h3>
			<?php
						$image = get_field('projet');
						$size = 'medium'; // (thumbnail, medium, large, full or custom size)
						if( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
			?>
			</figure>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php twentynineteen_entry_footer(); ?>
	</footer><!-- .entry-footer -->

	<?php if ( ! is_singular( 'attachment' ) ) : ?>
	<?php get_template_part( 'template-parts/post/author', 'bio' ); ?>
	<?php endif; ?>

</article><!-- #post-${ID} -->
