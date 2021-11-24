<?php
$selectedToken = $_GET['token'];

$filename = 'icons/tron/trc20/' . $selectedToken . '.png';
// https://scanapi.bittorrentchain.io/api/token_trc20?contract=0x76c6a7a3d535d015b9fef4f641a8fa1668424542&showAll=1
if (file_exists($filename)) {
  $image = file_get_contents('icons/tron/trc20/' . $selectedToken . '.png');
} else {
  $json_TronscanIcons = file_get_contents('https://apilist.tronscan.org/api/token_trc20?contract=' . $selectedToken . '');
  $TronscanIcons = json_decode($json_TronscanIcons);
  $tronscanIconData = $TronscanIcons->trc20_tokens;
  if ($tronscanIconData[0]->icon_url == 'https://coin.top/production/upload/logo/default.png') {
    $image = file_get_contents('https://raw.githubusercontent.com/BitGuildPlatform/dapps/master/tron/trc20/' . $selectedToken . '.png');
  } else {
    $image = file_get_contents($tronscanIconData[0]->icon_url);
  }
  if ($tronscanIconData[0]->icon_url === null) {
    $image = file_get_contents('icons/unknown.png');
  }
}

echo $image;
