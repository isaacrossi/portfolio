<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
				<div class="border-b border-dark w-fit-content">
					<h1 class="font-heading text-dark text-6xl border-b border-dark inline-block leading-none pb-2">All Blog Posts</h1>
					<div class="py-2">
						<p class="filter-posts flex justify-between cursor-pointer font-body w-full">Topics<span class="font-bold">˅</span></p>
					</div>
				</div>
				<div class="categories hidden bg-dark text-light font-body w-2/12 p-2">
						<?php
							$categories = get_tags();
							foreach($categories as $tag) {
							echo '<div class="col-md-4"><a href="' . get_category_link($tag->term_id) . '">' . $tag->name . '</a></div>';
							}
							?>
				</div>

				<div class="flex flex-wrap mt-12">
					<?php
						// organise our options into a data object
						$args = array(
							'orderby' => 'date',
							'category_name' => 'Blog',
						);

						// a variable with our query and options
						$query = new WP_Query( $args );
						// do a loop with our new query code
						if ($query->have_posts()): while ($query->have_posts()): $query->the_post()
					?>

						<a href="<?php the_permalink();?>">
							<div class="w-full md:w-1/2 lg:w-4/12">
								<img class="rounded-tr-4xl" src="<?php the_field("image"); ?>">
								<p class="text-base text-dark md:text-xl border-b border-dark mt-6 pb-2 font-body"><?php the_tags(''); ?></p>
								<p class="text-xl text-dark md:text-2xl border-b py-2 font-bodybold border-dark"><?php the_title() ?></p>
							</div>         
						</a>
						
					<?php 
					endwhile; endif; 
					?>
				</div>
			</div>

		</section>

	</main><!-- #main -->

<?php
get_footer();