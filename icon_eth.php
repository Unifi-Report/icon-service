<?php
$selectedToken = $_GET['token'];
$autoResolve = $_GET['autoResolve'];
$filename = 'icons/ethereum/' . $selectedToken . '.png';

if (file_exists($filename)) {
  $image = file_get_contents('icons/ethereum/' . $selectedToken . '.png');
} else {
  $json_tokenDataIcons = file_get_contents('https://token-data.unifi.report/api/getInfo?token=' . $selectedToken . '&chain=ETH');
  $tokenDataIcons = json_decode($json_tokenDataIcons);
  $tokenDataIconData = $tokenDataIcons->logoURI;
  $image = file_get_contents($tokenDataIconData);
  if ($image) {
  else {
      if ($autoResolve === 'false') {
        http_response_code(404);
        die();
      } else {
        $image = file_get_contents('icons/ethereum/eth.png');
      }
    }
  }
}
echo $image;
