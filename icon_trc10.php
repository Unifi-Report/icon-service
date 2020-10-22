<?php
ini_set('display_errors', '1');

$selectedToken = $_GET['token'];
$filename = 'icons/tron/trc10/' . $selectedToken . '.png';

//
if (file_exists($filename)) {
	$image = file_get_contents('icons/tron/trc10/' . $selectedToken . '.png');
} else {

}

echo $image;