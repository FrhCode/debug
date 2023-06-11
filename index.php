<?php
// Check if Zip is enabled
if (extension_loaded('zip')) {
    echo 'Zip extension is enabled on this server.';
} else {
    echo 'Zip extension is not enabled on this server.';
}
