<section class="bg-secondary px-4 md:px-8 lg:px-16 pt-10 pb-14 md:pt-20 md:pb-24">

  <div class="container flex flex-col md:flex-row justify-between">

      <?php
      $args = array(
        'posts_per_page' => 1,
        'category_name' => 'About'
      );
      $query = new WP_Query( $args );
      // do a loop with our new query code 
      if ($query->have_posts()): while ($query->have_posts()): $query->the_post(); ?>

        <h2 class="font-heading text-5xl md:text-6xl tracking-wide uppercase tracking-wide text-light md:mt-1 leading-none md:leading-2 mb-1 md:mb-0"><?php the_title(); ?></h2>
      
        <p class="text-light font-body text-2xl md:text-4xl md:w-9/12 w-full md:mt-0 leading-normal">
          <?php the_field('paragraph'); ?>
        </p>

      <?php endwhile; endif; ?>  

  </div>
</section>