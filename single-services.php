<?php
/**
 * The template for displaying all single posts
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'global-templates/main-menu'); ?>


<?php
    while ( have_posts() ) {
        the_post();
        get_template_part( 'loop-templates/content', 'service' );
    }
?>
            

<?php get_template_part( 'global-templates/main-footer'); ?>


<?php
get_footer();