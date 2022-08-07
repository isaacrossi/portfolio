<section class="bg-secondary px-4 md:px-8 lg:px-16 pt-10 pb-14 md:pt-20 md:pb-24">

  <div class="container flex flex-col md:flex-row justify-between">

      <?php
      $args = array(
        'posts_per_page' => 1,
        'category_name' => 'bio'
      );
      $query = new WP_Query( $args );
      // do a loop with our new query code 
      if ($query->have_posts()): while ($query->have_posts()): $query->the_post(); ?>

        <h2 class="font-heading text-4xl md:text-5xl tracking-wide uppercase tracking-wide text-light"><?php the_title(); ?></h2>
      
        <p class="text-light font-body text-2xl md:text-3xl md:w-9/12 w-full">
          <?php the_field('paragraph'); ?>
        </p>

      <?php endwhile; endif; ?>  

  </div>
</section>