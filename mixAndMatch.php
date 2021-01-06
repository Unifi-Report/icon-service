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



$image = file_get_contents('https://icon-service.unifi.report/icon_trc20?token=' . $tokenAddress . '.png');



echo $image;