<?php
// Check if Tidy is enabled
if (extension_loaded('tidy')) {
    echo 'Tidy extension is enabled on this server.';
} else {
    echo 'Tidy extension is not enabled on this server.';
}
