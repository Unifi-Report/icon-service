<?php
// Get unifi Tokens pairs
$json_unifiTokens = file_get_contents('data/tokens.json');
$unifiTokens = json_decode($json_unifiTokens);

// get smartContract from url
$smartContract = $_GET['smartContract'];


foreach ($unifiTokens as $unifiToken){
  if ($smartContract == $unifiToken->smartContract){
    $BlockchainShort = $unifiToken->BlockchainShort;
    $tokenAddress = $unifiToken->tokenAddress;
  }
}


if ($BlockchainShort == 'TRX'){
  $image = file_get_contents('https://icon-service.unifi.report/icon_trc20?token=' . $tokenAddress . '.png');
}
if ($BlockchainShort == 'ETH'){
  $image = file_get_contents('https://icon-service.unifi.report/icon_eth?token=' . $tokenAddress . '.png');
}
if ($BlockchainShort =='ICX'){
  $image = file_get_contents('https://icon-service.unifi.report/icon_icx?token=' . $tokenAddress . '.png');
}
if ($BlockchainShort == 'BSC'){
  $image = file_get_contents('https://icon-service.unifi.report/icon_bsc?token=' . $tokenAddress . '.png');
}
if ($BlockchainShort == 'ONE'){
  $image = file_get_contents('https://icon-service.unifi.report/icon_one?token=' . $tokenAddress . '.png');
}


echo $image;