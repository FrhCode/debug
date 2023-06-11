<?php
// Check if mbstring is enabled
if (extension_loaded('mbstring')) {
    echo 'mbstring extension is enabled on this server.';
} else {
    echo 'mbstring extension is not enabled on this server.';
}
