<?php
/**
 * Plugin Name: Styles and Settings
 * Description: Loads theme-critical support for Javascript and CSS files.
 * Comment out a path to "turn it off".
 * Add new paths as options here. 
 */

namespace FieldResearch\Styles;

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class Styles {

    protected $styles = [];
    protected $scripts = [];

    public function __construct() { 
        add_action( 'wp_enqueue_scripts', [ $this, 'enqueue_assets' ] );
    }

    public function enqueue_assets() {
        $this->register_and_enqueue_styles();
        $this->register_and_enqueue_scripts();
    }

    protected function register_and_enqueue_styles() {
        $this->register_style( 
            'fieldresearch-main', 
            '/assets/css/style.css'
        );

    wp_enqueue_style( 'fieldresearch-main' );
    }

    protected function register_and_enqueue_scripts() {
        wp_enqueue_script( 'jquery' );
        
        $this->register_script( 
            'fieldresearch-scripts', 
            '/assets/js/scripts.js',
            [ 'jquery' ],
            true
        );
        
    wp_enqueue_script( 'fieldresearch-scripts' );
    }
    private function register_style( $handle, $path ) {
        $url = get_template_directory_uri() . $path;
        wp_register_style( $handle, $url, [], null, 'all' );
    }

    private function register_script( $handle, $path, $deps = [], $in_footer = true ) {
        if ( filter_var( $path, FILTER_VALIDATE_URL ) ) {
            wp_register_script( $handle, $path, $deps, null, $in_footer );
        } else {
            $url = get_template_directory_uri() . $path;
            $file_path = get_template_directory() . $path;
            $version = file_exists( $file_path ) ? filemtime( $file_path ) : null;
            
            wp_register_script( $handle, $url, $deps, $version, $in_footer );
        }
    }

// end.
}