<?php


$exif = exif_read_data('211124_libre_promoSAS_2021/002.jpg', 'IFD0');
echo "<h2>IFD0 - 002.jpg:</h2>\n";
foreach ($exif as $key => $section) {
    foreach ($section as $name => $val) {
        echo "$key.$name: $val<br />\n";
    }
}


$exif = exif_read_data('211124_libre_promoSAS_2021/002.jpg', 0, true);
echo "<h2>0,true -  - 002.jpg:</h2>\n";
foreach ($exif as $key => $section) {
    foreach ($section as $name => $val) {
        echo "$key.$name: $val<br />\n";
    }
}

$exif = exif_read_data('211124_libre_promoSAS_2021/002.jpg', 'XMP');
echo "<h2>XMP -  - 002.jpg:</h2>\n";
foreach ($exif as $key => $section) {
    foreach ($section as $name => $val) {
        echo "$key.$name: $val<br />\n";
    }
}

?>
