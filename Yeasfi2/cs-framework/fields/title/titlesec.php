<?php

if (!defined('ABSPATH')) {
    die;
} // Cannot access pages directly.
/**
 *
 * Field: Title
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */

class CSFramework_Option_titlefield extends CSFramework_Options {

    public function __construct($field, $value = '', $unique = '') {
        parent::__construct($field, $value, $unique);
    }

    public function output() {
        echo $this->element_before();
        $value = $this->element_value();
        $value_title = ( isset($value['title']) ) ? $value['title'] : '';
        $value_size = ( isset($value['size']) ) ? $value['size'] : '';
        $value_font_weight = ( isset($value['font_weight']) ) ? $value['font_weight'] : '';
        $value_colour = ( isset($value['colour']) ) ? $value['colour'] : '';        
        echo '<div style="width:100%; display:block;"><input style="width:50%; display:block;" placeholder="Title" type="' . $this->element_type() . '" name="' . $this->element_name('[title]') . '" value="' . $value_title . '"' . $this->element_class() . $this->element_attributes() . '/></div>';
        echo '<div style="width:16%; display: inline-block;"><input placeholder="Font Size" type="' . $this->element_type() . '" name="' . $this->element_name('[size]') . '" value="' . $value_size . '"' . $this->element_class() . $this->element_attributes() . '/></div>';
        echo '<div style="width:16%; display: inline-block;"><input placeholder="Font Weight" type="' . $this->element_type() . '" name="' . $this->element_name('[font_weight]') . '" value="' . $value_font_weight . '"' . $this->element_class() . $this->element_attributes() . '/></div>';
        echo '<div style="width:16%; display: inline-block;"><input placeholder="Colour" type="'. $this->element_type() .' " name="'. $this->element_name('[colour]') .'" value="'.  $value_colour .'"'. $this->element_class( 'cs-field-color-picker' ) . $this->element_attributes( $this->extra_attributes() ) .'/></div>';
        echo $this->element_after();
    }
    
    public function extra_attributes() {
    $atts = array();
    if( isset( $this->field['id'] ) ) {
      $atts['data-depend-id'] = $this->field['id'];
    }
    if ( isset( $this->field['rgba'] ) &&  $this->field['rgba'] === false ) {
      $atts['data-rgba'] = 'false';
    }
    if( isset( $this->field['default'] ) ) {
      $atts['data-default-color'] = $this->field['default'];
    }
    return $atts;
  }

}
