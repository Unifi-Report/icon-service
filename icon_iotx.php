<?php
$selectedToken = $_GET['token'];
$filename = 'icons/iotex/' . $selectedToken . '.png';

if (file_exists($filename)) {
  $image = file_get_contents('icons/iotex/' . $selectedToken . '.png');
} else {
  $image = file_get_contents('icons/unknown.png');
}
echo $image;

