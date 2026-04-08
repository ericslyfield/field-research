<?php
/**
 * Plugin Name: Image Carousel
 * Description: Image slider integrations.
 * Comment out a path to "turn it off".
 * Add new paths as options here. 
 */

namespace FieldResearch\Carousel;

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}



class Carousel {
 
    protected $lastSlide = [];
    protected $nextSlide = [];

    protected $lastPost = [];
    protected $nextPost = [];

}
