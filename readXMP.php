<?php
//PHP has built in support for reading EXIF and IPTC metadata, but I can't find any way to read XMP?
$image = '211124_libre_promoSAS_2021/001.png';
$content = file_get_contents($image);
$xmp_data_start = strpos($content, '<x:xmpmeta');
$xmp_data_end   = strpos($content, '</x:xmpmeta>');
$xmp_length     = $xmp_data_end - $xmp_data_start;
$xmp_data       = substr($content, $xmp_data_start, $xmp_length + 12);
$xmp            = simplexml_load_string($xmp_data);

var_dump($xmp_data);

?>
