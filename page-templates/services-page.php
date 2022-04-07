<?php
/**
 * Template Name: Services Page Template
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

get_template_part( 'global-templates/main-menu');

while ( have_posts() ) :
	the_post();
	get_template_part( 'loop-templates/content', 'services' );
endwhile;

get_template_part( 'global-templates/main-footer');

get_footer();
