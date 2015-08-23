<?php
/**
 *
 * Scripts and Styles
 *
 * @since  1.0.0
 *
 */


// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) { die; }


/**
 *
 * Scripts: Frontend with no conditions, Add Custom Scripts to wp_head
 *
 * @since  1.0.0
 *
 */
add_action('wp_enqueue_scripts', 'aa_scripts');
function aa_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {


    	wp_enqueue_script('jquery'); // Enqueue it!
        //wp_deregister_script('jquery'); // Deregister WordPress jQuery
        //wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js', array(), '1.11.2');


        /**
         *
         * Minified and concatenated scripts
         *
         *     @vendors     plugins.min,js
         *     @custom      scripts.min.js
         *
         *     Order is important
         *
         */
        wp_register_script('aa_vendorsJs', get_template_directory_uri() . '/assets/js/vendors.min.js'); // Custom scripts
        wp_enqueue_script('aa_vendorsJs'); // Enqueue it!

        wp_register_script('aa_customJs', get_template_directory_uri() . '/assets/js/custom.min.js'); // Custom scripts
        wp_enqueue_script('aa_customJs'); // Enqueue it!


        /**
         *
         * Non-minifies scripts
         *
         */

        // wp_register_script('aa_abc_js', get_template_directory_uri() . '/assets/js/vendor/abc.min.js' ); // Conditional script(s)
        // wp_enqueue_script('aa_abc_js'); // Enqueue it!


        /**
         *
         * Enqueue HTML5Shiv and Respond.js IE less than 9
         *
         */
        wp_register_style( 'ie_html5shiv', get_template_directory_uri() . '/js/html5shiv.js' );
        wp_enqueue_style( 'ie_html5shiv');
        wp_style_add_data( 'ie_html5shiv', 'conditional', 'lt IE 9' );

        wp_register_style( 'ie_respond', get_template_directory_uri() . '/js/respond.min.js' );
        wp_enqueue_style( 'ie_respond');
        wp_style_add_data( 'ie_respond', 'conditional', 'lt IE 9' );

    }

}


/**
 *
 * Styles: Frontend with no conditions, Add Custom styles to wp_head
 *
 * @since  1.0
 *
 */
add_action('wp_enqueue_scripts', 'aa_styles'); // Add Theme Stylesheet
function aa_styles()
{

    /**
     *
     * Minified and Concatenated styles
     *
     */
    wp_register_style('aa_style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('aa_style'); // Enqueue it!


    /**
     *
     * Google fonts
     *     Must be included this way to avoid Firefox issues
     *
     */
    // wp_register_style('aa_gfonts', 'http://fonts.googleapis.com/css?family=Open+Sans:300,800,400', array(), '1.0', 'all');
    // wp_enqueue_style('aa_gfonts'); // Enqueue it!


    /**
     *
     * Non-minified or non-concatenated styles
     *
     */

    // wp_register_style('aa_xyz_css', get_template_directory_uri() . '/assets/css/vendor/xyz.css', array(), '1.0', 'all');
    // wp_enqueue_style('aa_xyz_css'); // Enqueue it!



}

/**
 *
 * Comment Reply js to load only when thread_comments is active
 *
 * @since  1.0.0
 *
 */
add_action( 'wp_enqueue_scripts', 'aa_enqueue_comments_reply' );
function aa_enqueue_comments_reply() {
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
