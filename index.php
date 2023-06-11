<?php
// Check if mysqli is enabled
if (extension_loaded('mysqli')) {
    echo 'mysqli extension is enabled on this server.';
} else {
    echo 'mysqli extension is not enabled on this server.';
}
