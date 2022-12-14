<?php
/**
 * Plugin Name: JPB Elementor Widgets
 * Description: Elementor custom widgets for JPB.
 * Plugin URI:  https://jpbprofessionalmarketing.com/
 * Version:     1.0.0
 * Author:      sean
 * Author URI:  https://jpbprofessionalmarketing.com/
 * Text Domain: jpb-elementor-widget
 *
 * Elementor tested up to: 3.5.0
 * Elementor Pro tested up to: 3.5.0
 * https://essentialwebapps.com/elementor-tutorial/custom-elementor-widget-development/
 * https://youtu.be/aJAQMjh6A98
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}

function register_jpb_custom_widgets( $widgets_manager ) {

    require_once( __DIR__ . '/widgets/jpb-card-widget.php' );  // include the widget file
    require_once( __DIR__ . '/widgets/jpb-heading.php' );  // include the widget file

    $widgets_manager->register( new \JPB_Elementor_Card_Widget() );  // register the widget
    $widgets_manager->register( new \JPB_Heading_Widget() );  // register the widget

}
add_action( 'elementor/widgets/register', 'register_jpb_custom_widgets' );
