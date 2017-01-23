
<?php


// add more buttons to the html editor......................

function appthemes_add_quicktags() {
    if (wp_script_is('quicktags')){
?>
    <script type="text/javascript">
    QTags.addButton( 'eg_paragraph', 'p', '<p>', '</p>', 'p', 'Paragraph tag', 1 );
    QTags.addButton( 'eg_hr', 'hr', '<hr />', '', 'h', 'Horizontal rule line', 201 );
    QTags.addButton( 'eg_pre', 'pre', '<pre lang="php">', '</pre>', 'q', 'Preformatted text tag', 111 );
    </script>
<?php
    }
}
add_action( 'admin_print_footer_scripts', 'appthemes_add_quicktags' );

/*
* Add row three to editor and hidden core buttons ..........................
   */

function my_mce_buttons_3( $buttons ) { 
  /**
   * Add in a hidden core button that's disabled by default
   */
  $buttons[] = 'superscript';
  $buttons[] = 'subscript';

  return $buttons;
}
add_filter( 'mce_buttons_3', 'my_mce_buttons_3' );




// enabling the style select dropdown ... 
// Callback function to insert 'styleselect' into the $buttons array
function my_mce_buttons_2( $buttons ) {
  array_unshift( $buttons, 'styleselect' );
  return $buttons;
}
// Register our callback to the appropriate filter
add_filter( 'mce_buttons_2', 'my_mce_buttons_2' );



/*
Manually adding styles to the wordpress editor .../
* Callback function to filter the MCE settings
*/

function my_mce_before_init_insert_formats( $init_array ) {  

// Define the style_formats array

  $style_formats = array(  
    // Each array child is a format with it's own settings
    array(  
      'title' => 'Content Block',  
      'block' => 'span',  
      'classes' => 'content-block',
      'wrapper' => true,
      
    ),  
    array(  
      'title' => 'Blue Button',  
      'block' => 'span',  
      'classes' => 'blue-button',
      'wrapper' => true,
    ),
    array(  
      'title' => 'Red Button',  
      'block' => 'span',  
      'classes' => 'red-button',
      'wrapper' => true,
    ),
  );  
  // Insert the array, JSON ENCODED, into 'style_formats'
  $init_array['style_formats'] = json_encode( $style_formats );  
  
  return $init_array;  
  
} 
// Attach callback to 'tiny_mce_before_init' 
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' ); 




// .........SHORTCODES .......................................



//[myshortcode]
function foobar_func( $atts ){
  return "fuck all ye all";
}
add_shortcode( 'myshortcode', 'foobar_func' );



// [bartag foo="foo-value"]
function bartag_func( $atts ) {
    $a = shortcode_atts( array(
        'foo' => 'something',
        'bar' => 'something else',
    ), $atts );

    return "foo = {$a['bar']}";
}
add_shortcode( 'bartag', 'bartag_func' );








?>
