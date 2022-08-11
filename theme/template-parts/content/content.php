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
      <div class="w-full text-sm md:text-base tracking-wide font-body uppercase flex justify-between border-b border-dark pb-2">
        <p><?php the_category(', '); ?></p>
        <p><?php the_field("date")?></p>
      </div>
      <span class="block w-full border-b border-dark pb-4">
        <h1 class="w-full lg:w-9/12 font-heading tracking-wide text-5xl md:text-6xl leading-3"><?php the_title(); ?></h1>
      </span>
    </div>
  </header>

  <div class="entry-content px-4 md:px-8 mt-10 md:mt-20 pb-24 text-base md:text-lg font-body text-dark">
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

  <section class="bg-light pb-14 md:pb-24">
    <div class="px-4 md:px-8 lg:px-16">
      <div class="container">
        <h3 class="font-heading text-3xl md:text-4xl tracking-wide text-dark leading-3.5 mb-3 md:mb-8">Related Posts</h3>
      </div>
    </div>

    <div id="my-keen-slider" class="keen-slider cursor-grabbing">
      <?php

        $count = 1;

        $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 5, 'post__not_in' => array($post->ID) ) );
        if( $related ) foreach( $related as $post ) {
        setup_postdata($post); ?>

        <a href="<?php the_permalink();?>">
          <div class="keen-slider__slide number-slide<?php echo $count; ?> w-5/12">
            <img class="rounded-tr-4xl" src="<?php the_field("image"); ?>">
            <p class="text-sm text-dark md:text-base border-b border-dark mt-6 pb-2 font-body"><?php the_category(', '); ?></p>
            <p class="text-l text-dark md:text-xl border-b py-2 font-bodybold border-dark"><?php the_title() ?></p>
          </div>         
        </a>
            
        <?php }
        $count++;
        wp_reset_postdata(); ?>
    </div>

    <div class="px-4 md:px-8 lg:px-16">
      <div class="container flex flex-row justify-end">
        <a href="<?php echo site_url('/localhost/posts'); ?>" class="text-left px-4 py-4 mt-9 font-bodybold font-dark flex flex-row justify-between w-1/3 md:w-1/4 lg:w-1/6 bg-accent rounded-tr-4xl">View<br>all posts<span class="self-end rotate-45">↑</span></a>
      </div>
    </div>
    
    <?php
    $categories = get_categories();
    foreach($categories as $category) {
    echo '<div class="col-md-4"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div>';
    }
    ?>


  </section>

</article><!-- #post-<?php the_ID(); ?> -->
