<?php
/**
 * Plugin Name: Pagination
 * Description: Loads theme-critical support for Javascript and CSS files.
 * Comment out a path to "turn it off".
 * Add new paths as options here. 
 */

namespace FieldResearch\Utilities;

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}


class CC_MIME_Types {
    public function __construct() {
        add_filter('upload_mimes', [$this, 'add_svg_mime_type']);
    }
    
    public function add_svg_mime_type($mimes) {
        $mimes['svg'] = 'image/svg+xml';
        return $mimes;
    }
}