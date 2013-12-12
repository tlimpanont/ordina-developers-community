<?php

 function your_scripts() {
    wp_register_script('hightlightjs', 'http://yandex.st/highlightjs/7.5/highlight.min.js', false);
    // This registers your script with a name so you can call it to enqueue it
    wp_enqueue_script( 'hightlightjs' );
    // enqueuing your script ensures it will be inserted in the propoer place in the header section
}

function your_css() {
    wp_register_style( 'hightlightjs', 'http://yandex.st/highlightjs/7.5/styles/default.min.css' );
    wp_enqueue_style( 'hightlightjs' );
}

add_action( 'wp_enqueue_scripts', 'your_css' );
            // same hook is used to enqueue CSS sheets
add_action('wp_enqueue_scripts', 'your_scripts');
// This hook executes the enqueuing of your script at the proper mome

add_action('wp_print_footer_scripts', 'add_footer_js', 10, 1);

function add_footer_js() {
	?>
		<script type="text/javascript">
			//hljs.initHighlightingOnLoad();
			$(document).ready(function() {
  				//$('div.code').each(function(i, e) {hljs.highlightBlock(e)});
			});
		</script>
	<?php
}

add_filter( 'show_admin_bar', '__return_false' );

// add_filter( 'bp_get_activity_content_body', 'parse_syntax_highlighter', 7 );

// function parse_syntax_highlighter($content) {
// 	//return "<div class='code'><pre></code>".$content."</code></pre></div>";
// }


// add_filter( 'bp_get_activity_content_body', 'record_post_activity_content');
// function record_post_activity_content($activity_content){
//         //print_r($activity_content);
//         return uniqid();
// }
// add_filter( 'the_content', 'wpautop');
// $content = $page->post_content;
// $content = apply_filters('the_content', $content);
//bp_remove_all_filters('the_content');


// [bartag foo="foo-value"]
function syntax_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'foo' => 'something',
		'bar' => 'something else',
	), $atts ) );

	return $content . uniqid() . date('Y');
}
add_shortcode( 'dev_code', 'syntax_func' );



?>