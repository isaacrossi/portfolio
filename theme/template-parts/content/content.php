<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portfolio
 */

?>

<article class="px-4 md:px-8 lg:px-16" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">
		<header>
			<div>
				<p><?php the_category(', '); ?></p>
				<p><?php the_field("date")?></p>
			</div>
			<img src="<?php the_field("image"); ?>">
			<h1><?php the_title(); ?></h1>
		</header>

		<div class="entry-content">
			<p><?php the_field("content")?></p>
		</div>
	</div>

	<div id="my-keen-slider" class="keen-slider cursor-grabbing">
      <?php
          // organise our options into a data object
        $args = array(
          'posts_per_page' => 6,
          'orderby' => 'date',
          'tax_query'      => array(
            array(
                'taxonomy'  => 'post_tag',
                'field'     => 'slug',
                'terms'     => 'blog'
            )
          )
        ) ;

        $count = 1;

        // a variable with our query and options
        $query = new WP_Query( $args );
        // do a loop with our new query code
        if ($query->have_posts()): while ($query->have_posts()): $query->the_post()
      ?>

      <a href="<?php the_permalink();?>">
        <div class="keen-slider__slide number-slide<?php echo $count; ?> w-5/12">
          <img class="rounded-tr-4xl" src="<?php the_field("image"); ?>">
          <p class="text-base text-dark md:text-xl border-b border-dark mt-6 pb-2 font-body"><?php the_category(', '); ?></p>
          <p class="text-xl text-dark md:text-2xl border-b py-2 font-bodybold border-dark"><?php the_title() ?></p>
        </div>         
      </a>
           
      <?php 
      $count++;
      endwhile; endif; 
      ?>
  </div>

  <?php get_template_part('template-parts/layout/blog-content') ?>
	
</article><!-- #post-<?php the_ID(); ?> -->
