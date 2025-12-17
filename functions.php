<?php
/**
* Theme Functions
*
* @package field-research
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

require_once get_template_directory() . '/autoloader.php';

new FieldResearch\Styles\Styles(); 
