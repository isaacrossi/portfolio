<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portfolio
 */

get_template_part( 'template-parts/layout/header', 'content' );
?>

	<main id="primary">

    <section class="bg-light px-4 md:px-8 lg:px-16 pt-10 pb-14 md:pt-20 md:pb-24">

      <div class="container">
        <div class="relative border-b border-dark w-fit-content">
          <h1 class="font-heading text-dark text-5xl md:text-6xl border-b border-dark inline-block leading-none pb-2"><?php echo the_tags('') ?></h1>
          <div class="py-2">
            <p class="filter-posts flex justify-between cursor-pointer font-body w-full">Topics<span class="font-bold transition-transform">˅</span></p>
          </div>
        </div>

        <div class="categories absolute hidden bg-dark text-light font-body w-fit-content p-2 z-10">
            <?php
              $categories = get_tags();
              foreach($categories as $tag) {
              echo '<div class="col-md-4"><a href="' . get_category_link($tag->term_id) . '">' . $tag->name . '</a></div>';
              }
            ?>
        </div>

        <div class="flex flex-wrap flex-col md:flex-row mt-12">
          <?php
            $tags = wp_get_post_tags($post->ID);
            if ($tags) {
            // perhaps put related posts title here if there are posts
            $first_tag = $tags[0]->term_id;
            $args=array(
            'tag__in' => array($first_tag),
            'posts_per_page'=>5,
            'caller_get_posts'=>1
            );
            $my_query = new WP_Query($args);
            if( $my_query->have_posts() ) {
            while ($my_query->have_posts()) : $my_query->the_post(); 
          ?>
            <a href="<?php the_permalink();?>">
              <div class="blog-posts w-full md:w-4/12 mr-0 md:mr-4 mb-14">
                <img class="rounded-tr-4xl" src="<?php the_field("image"); ?>">
                <p class="text-base text-dark md:text-xl border-b border-dark mt-6 pb-2 font-body"><?php the_tags(''); ?></p>
                <p class="text-xl text-dark md:text-2xl border-b py-2 font-bodybold border-dark"><?php the_title() ?></p>
              </div>         
            </a>
          <?php
            endwhile;
            }
            wp_reset_query();
            }
          ?>
            
        </div>
      </div>

    </section>
  </main><!-- #main -->

<?php
get_footer();
