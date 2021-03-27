<?php
$selectedToken = $_GET['token'];
$filename = 'icons/binanceSmartChain/' . $selectedToken . '.png';

if (file_exists($filename)) {
  $image = file_get_contents('icons/binanceSmartChain/' . $selectedToken . '.png');
} else {
  $image = file_get_contents('icons/binanceSmartChain/bnb.png');
}


echo $image;
