<?php

$dirname = "211124_libre_promoSAS_2021/";

$images = glob($dirname."*.png");

shuffle($images);

foreach($images as $image) {
    echo '<img src="'.$image.'" width="60%" /><br />';
}

?>