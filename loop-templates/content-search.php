<?php
/**
 * Search results partial template.
 *
 * @package c9
 */

?>
<div class="col-xs-12 col-sm-3">
	<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

		<header class="entry-header text-center">
			<?php
			if ( has_post_thumbnail() ) {
				// check if the post Thumbnail
				the_post_thumbnail();
			}
			the_title(
				sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
				'</a></h2>'
			);

			if ( 'post' === get_post_type() ) :
			?>

			<div class="entry-meta">

				<?php c9_posted_on(); ?>

			</div><!-- .entry-meta -->

			<?php endif; ?>

		</header><!-- .entry-header -->

		<div class="entry-summary">

			<?php the_excerpt(); ?>

		</div><!-- .entry-summary -->

		<footer class="entry-footer">

			<?php c9_entry_footer(); ?>

		</footer><!-- .entry-footer -->

	</article><!-- #post-## -->
</div>
