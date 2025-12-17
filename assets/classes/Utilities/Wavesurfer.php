<?php
/**
 * Plugin Name: Styles and Settings
 * Description: Loads theme-critical support for Javascript and CSS files.
 * Comment out a path to "turn it off".
 * Add new paths as options here. 
 */

namespace FieldResearch\Utilities;

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}


class Wavesurfer{

add_action('admin_footer', function() {
    if (get_current_screen()->is_block_editor()) {
        ?>
        <script>
        console.log('Force loading check - WaveSurfer:', typeof WaveSurfer);
        </script>
        <?php
    }
});

}

// end.