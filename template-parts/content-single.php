<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php salomon_thumb_with_fallback(); ?>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php
			$categories = get_the_category();
			if ( ! empty( $categories ) ) {
			    echo '<h3>part of the series <em><a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a></em></h3>';
			}
		?>
	</header><!-- .entry-header -->

	<?php //twentysixteen_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
			the_content();
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<div class="connections">
		<?php
			if(get_the_tag_list()) {
			    echo get_the_tag_list('<ul class="taglist"><li>','</li><li>','</li></ul>');
			}
		?>
		</div>
		<div class="dossier">
			<h3>Dossier</h3>
			<p>...</p>
		</div>
		<?php //twentysixteen_entry_meta(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
