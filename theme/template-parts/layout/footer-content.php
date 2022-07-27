<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portfolio
 */

?>

<footer id="colophon">
	<div>
		<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'portfolio' ) ); ?>">
			<?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf( esc_html__( 'Proudly powered by %s', 'portfolio' ), 'WordPress' );
			?>
		</a>
	</div>
</footer><!-- #colophon -->
