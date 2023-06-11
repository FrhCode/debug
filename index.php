<?php
// Check if GD is enabled
if (extension_loaded('gd') && function_exists('gd_info')) {
    echo 'GD extension is enabled on this server.';
} else {
    echo 'GD extension is not enabled on this server.';
}
