<?php
// Check if mysqlnd is enabled
if (extension_loaded('mysqlnd')) {
    echo 'mysqlnd extension is enabled on this server.';
} else {
    echo 'mysqlnd extension is not enabled on this server.';
}
