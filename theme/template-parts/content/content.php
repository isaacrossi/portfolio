<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portfolio
 */

?>

<article class="bg-light text-dark" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header>
			<img class="w-full max-h-80" src="<?php the_field("image"); ?>">
      <div class="container px-4 md:px-8 lg:px-16 mt-20">
        <div class="w-full text-base tracking-wide font-body uppercase flex justify-between border-b border-dark pb-2">
          <p><?php the_category(', '); ?></p>
          <p><?php the_field("date")?></p>
        </div>
        <span class="block w-full border-b border-dark pb-2">
          <h1 class="w-9/12 font-heading tracking-wide text-5xl pt-6 "><?php the_title(); ?></h1>
        </span>
      </div>
		</header>

		<div class="entry-content mt-12 pb-24 font-body">
      <?php
      the_content(
        sprintf(
          wp_kses(
            /* translators: %s: Name of current post. Only visible to screen readers */
            __( 'Continue reading<span> "%s"</span>', 'portfolio' ),
            array(
              'span' => array(
                'class' => array(),
              ),
            )
          ),
          wp_kses_post( get_the_title() )
        )
      );

      wp_link_pages(
        array(
          'before' => '<div>' . esc_html__( 'Pages:', 'portfolio' ),
          'after'  => '</div>',
        )
      );
      ?>
		</div>

  <?php get_template_part('template-parts/layout/blog-content') ?>
	
</article><!-- #post-<?php the_ID(); ?> -->
