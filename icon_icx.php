<?php
$selectedToken = $_GET['token'];
$filename = 'icons/icon/' . $selectedToken . '.png';

if (file_exists($filename)) {
  $image = file_get_contents('icons/icon/' . $selectedToken . '.png');
} else {
  $image = file_get_contents('icons/icon/icx.png');
}

echo $image;