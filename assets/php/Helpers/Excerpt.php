<?php
/**
 * Plugin Name: Excerpt
 * Description: Loads theme-critical support for Javascript and CSS files.
 * Comment out a path to "turn it off".
 * Add new paths as options here. 
 */

namespace FieldResearch\Excerpt;

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}


class Excerpt {

    public function __construct() {
        add_filter( 'get_the_excerpt', [ $this, 'remove_captions' ] );
    }

    public function remove_captions( string $excerpt ): string {
        $excerpt = $this->strip_shortcode_captions( $excerpt );
        $excerpt = $this->strip_figcaptions( $excerpt );
        return $excerpt;
    }

    private function strip_shortcode_captions( string $excerpt ): string {
        return preg_replace( '/\[caption[^\]]*\].*?\[\/caption\]/s', '', $excerpt );
    }

    private function strip_figcaptions( string $excerpt ): string {
        return preg_replace( '/<figcaption[^>]*>.*?<\/figcaption>/s', '', $excerpt );
    }
}
