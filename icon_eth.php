<?php
$selectedToken = $_GET['token'];
$filename = 'icons/ethereum/' . $selectedToken . '.png';

if (file_exists($filename)) {
  $image = file_get_contents('icons/ethereum/' . $selectedToken . '.png');
} else {
  $image = file_get_contents('icons/ethereum/eth.png');
}
echo $image;
