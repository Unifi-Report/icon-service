<?php
$selectedToken = $_GET['token'];
$autoResolve = $_GET['autoResolve'];
$filename = 'icons/binanceSmartChain/' . $selectedToken . '.png';

if (file_exists($filename)) {
  $image = file_get_contents('icons/binanceSmartChain/' . $selectedToken . '.png');
} else {
  $json_tokenDataIcons = file_get_contents('https://token-data.unifi.report/api/getInfo?token=' . $selectedToken . '&chain=BSC');
  $tokenDataIcons = json_decode($json_tokenDataIcons);
  $tokenDataIconData = $tokenDataIcons->logoURI;
  $image = file_get_contents($tokenDataIconData);
  if ($image) {
  } else {
    $image = file_get_contents('https://assets.trustwalletapp.com/blockchains/smartchain/assets/' . $selectedToken . '/logo.png');
  }
  if ($image) {
  } else {
    if ($autoResolve === 'false') {
      http_response_code(404);
      die();
    } else {
      $image = file_get_contents('icons/binanceSmartChain/bnb.png');
    }
  }
}

echo $image;