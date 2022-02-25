<?php
// Automatic require of all /includes files.
$files = glob(__DIR__ . '/includes/*');
foreach ($files as $file) {
    require $file;
}
?> 