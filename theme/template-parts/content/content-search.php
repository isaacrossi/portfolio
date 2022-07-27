<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portfolio
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div>
			<?php
			portfolio_posted_on();
			portfolio_posted_by();
			?>
		</div>
		<?php endif; ?>
	</header>

	<?php portfolio_post_thumbnail(); ?>

	<div>
		<?php the_excerpt(); ?>
	</div>

	<footer>
		<?php portfolio_entry_footer(); ?>
	</footer>
</article><!-- #post-<?php the_ID(); ?> -->
