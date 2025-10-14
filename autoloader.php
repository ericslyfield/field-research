<?php
/**
 * Theme autoloader with namespace verification.
 * 
 * @package field-research
 * @since 1.0.0
 */

spl_autoload_register( function( $class ) {
    // Defines the theme's root namespace
    $namespace = 'FieldResearch\\';
    
    // Verify the class belongs to your namespace
    if ( strpos( $class, $namespace ) !== 0 ) {
        return;
    }
    
    // Remove the namespace prefix
    $relative_class = substr( $class, strlen( $namespace ) );
    
    // Convert namespace separators to directory separators
    $file = __DIR__ . '/assets/classes/' . str_replace( '\\', '/', $relative_class ) . '.php';
    
    if ( file_exists( $file ) ) {
        require $file;
    }
} );