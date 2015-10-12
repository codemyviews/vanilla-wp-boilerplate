<?php 
$group = array (
  'key' => 'group_5599d0d669c5f',
  'title' => 'Custom JavaScript and CSS',
  'fields' => 
  array (
    0 => 
    array (
      'key' => 'field_5546d108a25a6',
      'label' => 'Additional CSS or JavaScript in Header',
      'name' => 'header_css_js_custom',
      'type' => 'textarea',
      'instructions' => 'You can paste additioanl &lt;script&gt; tags here.  You can also input &lt;style&gt; tags.  This will be injected into the &lt;head&gt;.',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => 
      array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'maxlength' => '',
      'rows' => '',
      'new_lines' => '',
      'readonly' => 0,
      'disabled' => 0,
    ),
    1 => 
    array (
      'key' => 'field_5546d149fe1c8',
      'label' => 'Additional JavaScript in Footer',
      'name' => 'custom_js_footer',
      'type' => 'textarea',
      'instructions' => 'You can place additional &lt;script&gt; tags here that will be injected into the footer of the page, directly before the body tag.',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => 
      array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'maxlength' => '',
      'rows' => '',
      'new_lines' => '',
      'readonly' => 0,
      'disabled' => 0,
    ),
  ),
  'location' => 
  array (
    0 => 
    array (
      0 => 
      array (
        'param' => 'options_page',
        'operator' => '==',
        'value' => 'acf-options-javascript-css',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'normal',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
  'active' => 1,
  'description' => '',
);