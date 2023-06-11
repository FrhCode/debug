<?php
// Check if iconv is enabled
if (extension_loaded('iconv')) {
    echo 'iconv extension is enabled on this server.';
} else {
    echo 'iconv extension is not enabled on this server.';
}
