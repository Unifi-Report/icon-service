<?php
$selectedToken = $_GET['token'];
$filename = 'icons/harmony/' . $selectedToken . '.png';

if (file_exists($filename)) {
  $image = file_get_contents('icons/harmony/' . $selectedToken . '.png');
} else {
  $image = file_get_contents('icons/unknown.png');
}

echo $image;