<?php
/**
 * Template Name: Home
 * Template Post Type: page
 */
get_header();
?>


<?php
do_action("woocommerce_before_shop_loop");
echo do_shortcode('[products limit="6"]');
do_action("woocommerce_after_shop_loop");
?>


<?php
get_footer();
?>