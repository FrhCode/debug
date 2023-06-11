<?php
// Check if Fileinfo is enabled
if (function_exists('finfo_open')) {
    echo 'Fileinfo extension is enabled on this server.';
} else {
    echo 'Fileinfo extension is not enabled on this server.';
}
