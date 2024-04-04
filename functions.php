<?php
function files()
{
    wp_enqueue_style('style-name1', get_stylesheet_uri() . "/css/bootstrap.min.css");
    wp_enqueue_style('style-name2', get_stylesheet_uri() . "/css/flaticon.css");
    wp_enqueue_style('style-name3', get_stylesheet_uri() . "/css/menu.css");
    wp_enqueue_style('style-name4', get_stylesheet_uri() . "/css/dropdown-effects/fade-down.css");
    wp_enqueue_style('style-name5', get_stylesheet_uri() . "/css/magnific-popup.css");
    wp_enqueue_style('style-name6', get_stylesheet_uri() . "/css/flexslider.css");
    wp_enqueue_style('style-name7', get_stylesheet_uri() . "/css/owl.carousel.min.css");
    wp_enqueue_style('style-name8', get_stylesheet_uri() . "/css/owl.theme.default.min.css");
    wp_enqueue_style('style-name9', get_stylesheet_uri() . "/css/datetimepicker.min.css");
    wp_enqueue_style('style-name10', get_stylesheet_uri() . "/css/style.css");
    wp_enqueue_style('style-name11', get_stylesheet_uri() . "/css/animate.css");
    wp_enqueue_style('style-name12', get_stylesheet_uri() . "/css/responsive.css");
}
add_action('wp_enqueue_scripts', 'files');


?>