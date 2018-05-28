<?php
$file1 = $_GET['file1'];
$file2 = $_GET['file2'];

$image1 = new Imagick($file1);
$image2 = new Imagick($file2);

// ‡¬
$image1->compositeImage( $image2, imagick::COMPOSITE_DEFAULT, 0, 0 );
 
header("Content-Type: image/png");
ob_clean();
echo $image1;