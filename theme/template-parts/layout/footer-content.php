<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portfolio
 */

?>

<footer id="colophon" class="relative bg-dark text-light px-4 md:px-8 lg:px-16 pt-6 pb-10">
	<div class="container flex flex-row justify-between items-start">
		<div class="w-full md:w-1/2">
			<p class="font-bodybold text-base:md text-xl border-b border-light pb-2">Isaac Rossi</p>
			<p class="font-body text-sm md:text-base border-b border-light py-2">Frontend Developer, based in Sydney. Ready for work. All rights reserved.</p>
		</div>
		<div class="flex flex-row mt-2 absolute top-5 right-4 md:relative">
			<img class="w-5 mr-6" src="<?php echo get_template_directory_uri() . '/images/git.svg'; ?>">
			<img class="w-5 mr-6" src="<?php echo get_template_directory_uri() . '/images/twitter.svg'; ?>">
			<img class="w-5" src="<?php echo get_template_directory_uri() . '/images/email.svg'; ?>">
		</div>
	</div>
</footer><!-- #colophon -->
