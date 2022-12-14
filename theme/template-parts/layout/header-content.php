<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portfolio
 */
get_header();
?>

<header class="bg-light px-4 md:px-8 lg:px-16 py-4 border-b border-dark" id="masthead">
	<div class="container">
    <a href="<?php echo home_url(); ?>">
      <img class="w-4 md:w-5" src="<?php echo get_template_directory_uri() . '/images/home.svg'; ?>">
    </a>
  </div>
</header><!-- #masthead -->
