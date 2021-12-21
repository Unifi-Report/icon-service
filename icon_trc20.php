<?php
header ('Content-Type: image/png');


$selectedToken = $_GET['token'];

$filename = 'icons/tron/trc20/' . $selectedToken . '.png';
if (file_exists($filename)) {
  $image = file_get_contents('icons/tron/trc20/' . $selectedToken . '.png');
} else {
  $json_BTTscanIcons = file_get_contents('https://apilist.tronscan.org/api/token_trc20?contract=' . $selectedToken . '');
  $BTTscanIcons = json_decode($json_BTTscanIcons);
  $bttcScanIconData = $BTTscanIcons->trc20_tokens;

  if ($bttcScanIconData[0]->icon_url === null) {
    $image = file_get_contents('icons/unknown.png');
  } else {
    $image = file_get_contents($bttcScanIconData[0]->icon_url);
    file_put_contents($file, $image, FILE_APPEND | LOCK_EX);
    $file = 'icons/tron/trc20/' . strtolower($selectedToken) . '.png';
    file_put_contents($file, $image, FILE_APPEND | LOCK_EX);
  }
}

echo $image;
