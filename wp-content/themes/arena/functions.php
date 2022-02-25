<?php
$files = glob(__DIR__ . '/includes/*');
foreach ($files as $file) {
    require $file;
}

?> 