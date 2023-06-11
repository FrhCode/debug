<?php
// Check if cURL is enabled
if (function_exists('curl_version')) {
    echo 'cURL is enabled on this server.';
} else {
    echo 'cURL is not enabled on this server.';
}
