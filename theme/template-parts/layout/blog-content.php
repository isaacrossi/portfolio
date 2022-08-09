<section class="bg-light pt-10 pb-14 md:pt-20 md:pb-24">
  <div class="px-4 md:px-8 lg:px-16">
    <div class="container">
      <h2 class="font-heading text-5xl md:text-6xl tracking-wide uppercase tracking-wide text-dark">Blog</h2>
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

  <div class="px-4 md:px-8 lg:px-16">
    <div class="container flex flex-row justify-end">
      <button class="text-left px-4 py-4 mt-9 font-bodybold font-dark flex flex-row justify-between w-1/3 md:w-1/4 lg:w-1/6 bg-accent rounded-tr-4xl">View<br>all posts<span class="self-end rotate-45">↑</span></button>
    </div>
  </div>

</section>

