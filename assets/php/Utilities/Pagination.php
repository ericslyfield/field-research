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


class Pagination{

public function __construct() {
        add_filter('wp_link_pages_link', function($link, $i) {
            return preg_replace('/>\K\d+(?=<)/', ' • ', $link);
        }, 10, 2);
    }

}