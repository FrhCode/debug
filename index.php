<?php
// Check if JSON is enabled
if (extension_loaded('json')) {
    echo 'JSON extension is enabled on this server.';
} else {
    echo 'JSON extension is not enabled on this server.';
}
