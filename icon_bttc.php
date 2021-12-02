<?php
$selectedToken = $_GET['token'];

$filename = 'icons/bitTorrentChain/' . $selectedToken . '.png';
// https://scanapi.bittorrentchain.io/api/token_trc20?contract=0x76c6a7a3d535d015b9fef4f641a8fa1668424542&showAll=1
if (file_exists($filename)) {
  $image = file_get_contents('icons/bitTorrentChain/' . $selectedToken . '.png');
} else {
  $json_BTTscanIcons = file_get_contents('https://scanapi.bittorrentchain.io/api/token_trc20?contract=' . $selectedToken . '');
  $BTTscanIcons = json_decode($json_BTTscanIcons);
  $bttcScanIconData = $BTTscanIcons->trc20_tokens;

  if ($bttcScanIconData[0]->icon_url === null) {
    $image = file_get_contents('icons/unknown.png');
  } else{
    $image = file_get_contents($bttcScanIconData[0]->icon_url);
    file_put_contents($file, $image, FILE_APPEND | LOCK_EX);
    $file = 'icons/bitTorrentChain/' . strtolower($selectedToken) . '.png';
    file_put_contents($file, $image, FILE_APPEND | LOCK_EX);
  }
}

echo $image;
