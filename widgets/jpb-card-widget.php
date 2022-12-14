<?php
// namespace JPB_Elementor;

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}


/**
 * JPB Elementor Card Widget.
 *
 * Elementor widget that inserts a card with title and description.
 *
 * @since 1.0.0
 */
class JPB_Elementor_Card_Widget extends \Elementor\Widget_Base {
  /**
   * Get widget name.
   *
   * Retrieve Card widget name.
   *
   * @since 1.0.0
   * @access public
   * @return string Widget name.
   */
  public function get_name() {
    return 'card';
  }
  /**
   * Get widget title.
   *
   * Retrieve Card widget title.
   *
   * @since 1.0.0
   * @access public
   * @return string Widget title.
   */
  public function get_title() {
    return esc_html__( 'JPB Card', 'jpb-elementor-widget' );
  }
  /**
   * Get widget icon.
   *
   * Retrieve Card widget icon.
   *
   * @since 1.0.0
   * @access public
   * @return string Widget icon.
   */
  public function get_icon() {
    return 'eicon-header';
  }

  /**
   * Get custom help URL.
   *
   * Retrieve a URL where the user can get more information about the widget.
   *
   * @since 1.0.0
   * @access public
   * @return string Widget help URL.
   */
  public function get_custom_help_url() {
    return 'https://essentialwebapps.com/category/elementor-tutorial/';
  }

  /**
   * Get widget categories.
   *
   * Retrieve the list of categories the heading widget belongs to.
   *
   * Used to determine where to display the widget in the editor.
   *
   * @since 2.0.0
   * @access public
   *
   * @return array Widget categories.
   */
  public function get_categories() {
    return [ 'basic' ];
  }

  /**
   * Get widget keywords.
   *
   * Retrieve the list of keywords the Card widget belongs to.
   *
   * @since 1.0.0
   * @access public
   * @return array Widget keywords.
   */
  public function get_keywords() {
    return [ 'card', 'service', 'highlight', 'jpb' ];
  }



  /**
   * Register Card widget controls.
   *
   * Add input fields to allow the user to customize the widget settings.
   *
   * @since 1.0.0
   * @access protected
   */
  protected function register_controls() {
    // our control function code goes here.

    $this->start_controls_section(
      'content_section',
      [
        'label' => esc_html__( 'Content', 'jpb-elementor-widget' ),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );

    $this->add_control(
      'card_title',
      [
        'label' => esc_html__( 'Card title', 'jpb-elementor-widget' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'label_block' => true,
        'placeholder' => esc_html__( 'Your card title here', 'jpb-elementor-widget' ),
      ]
    );


    $this->add_control(
      'card_description',
      [
        'label' => esc_html__( 'Card Description', 'jpb-elementor-widget' ),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'label_block'   => true,
        'placeholder' => esc_html__( 'Your card description here', 'jpb-elementor-widget' ),
      ]
    );

    $this->end_controls_section();

  }

  /**
   * Render Card widget output on the frontend.
   *
   * Written in PHP and used to generate the final HTML.
   *
   * @since 1.0.0
   * @access protected
   */
  protected function render() {

    // get our input from the widget settings.
    $settings = $this->get_settings_for_display();

    // get the individual values of the input
    $card_title = $settings['card_title'];
    $card_description = $settings['card_description'];

    ?>

        <!-- Start rendering the output -->
        <div class="card">
            <h3 class="card_title"><?php echo $card_title;  ?></h3>
            <p class= "card__description"><?php echo $card_description;  ?></p>
        </div>
        <!-- End rendering the output -->

        <?php


  }


}
