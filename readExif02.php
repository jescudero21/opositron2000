<?php

// Open a the file, this should be in binary mode
$fp = fopen('211124_libre_promoSAS_2021/002.jpg', 'rb');

if (!$fp) {
    echo 'Error: Unable to open image for reading';
    exit;
}

// Attempt to read the exif headers
$headers = exif_read_data($fp);

if (!$headers) {
    echo 'Error: Unable to read exif headers';
    exit;
}

// Print the 'COMPUTED' headers
echo 'EXIF Headers:' . PHP_EOL;

foreach ($headers['COMPUTED'] as $header => $value) {
    printf(' %s => %s%s', $header, $value, PHP_EOL);
}

?>
