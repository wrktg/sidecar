<?php
/**
 *
 */
class Surrogate_Admin_Tab {
  /**
   * @var string
   */
  var $tab_slug;
  /**
   * @var string
   */
  var $tab_text;
  /**
   * @var bool|string
   */
  var $page_title = false;
  /**
   * @var bool|callable
   */
  var $tab_handler = false;
  /**
   * @var bool|string
   */
  var $before_page_title = false;
  /**
   * @var bool|string
   */
  var $before_content = false;
  /**
   * @var bool|string
   */
  var $after_content = false;
  /**
   * @var bool
   */
  var $auth_tab = false;

  /**
   * @param string $tab_slug
   * @param string $tab_text
   * @param array $args
   */
  function __construct( $tab_slug, $tab_text, $args = array() ) {
    $this->tab_slug = $tab_slug;
    $this->tab_text = $tab_text;

    /**
     * Copy properties in from $args, if they exist.
     */
    foreach( $args as $property => $value ) {
      if ( property_exists( $this, $property ) ) {
        $this->$property = $value;
      } else if ( property_exists( $this, $property = "tab_{$property}" ) ) {
        $this->$property = $value;
      }
    }
  }
}
