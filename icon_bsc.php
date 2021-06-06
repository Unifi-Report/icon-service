<?php
$selectedToken = $_GET['token'];
$filename = 'icons/binanceSmartChain/' . $selectedToken . '.png';

if (file_exists($filename)) {
  $image = file_get_contents('icons/binanceSmartChain/' . $selectedToken . '.png');
} else {
  // https://token-data.unifi.report/api/getInfo?token=0x2a93172c8DCCbfBC60a39d56183B7279a2F647b4&chain=BSC
//  $jsonTokenData = file_get_contents('https://token-data.unifi.report/api/getInfo?token=' . $selectedToken . '&chain=BSC');
//  $tokenData = json_decode($jsonTokenData);
//  if ($tokenData->logoURI) {
//
//  } else {
    $image = file_get_contents('icons/binanceSmartChain/bnb.png');
  //}
}


echo $image;
