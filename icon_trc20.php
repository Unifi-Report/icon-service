<?php
header('Content-Type: image/png');

$autoResolve = $_GET['autoResolve'];
$selectedToken = $_GET['token'];

$filename = 'icons/tron/trc20/' . $selectedToken . '.png';
if (file_exists($filename)) {
  $image = file_get_contents('icons/tron/trc20/' . $selectedToken . '.png');
} else {
  $image = file_get_contents('icons/tron/trc20/' . strtolower($selectedToken) . '.png');
  if ($image) {
  } else {
    $json_BTTscanIcons = file_get_contents('https://apilist.tronscan.org/api/token_trc20?contract=' . $selectedToken . '');
    $TRXscanIcons = json_decode($json_BTTscanIcons);
    $tronScanIconData = $TRXscanIcons->trc20_tokens;

    if ($tronScanIconData[0]->icon_url === null) {
      if ($autoResolve === 'false') {
        http_response_code(404);
        die();
      } else {
        $image = file_get_contents('icons/unknown.png');
      }
    } else {
      $image = file_get_contents($tronScanIconData[0]->icon_url);
      file_put_contents($file, $image, FILE_APPEND | LOCK_EX);
      $file = 'icons/tron/trc20/' . strtolower($selectedToken) . '.png';
      file_put_contents($file, $image, FILE_APPEND | LOCK_EX);
    }
  }
}

echo $image;
