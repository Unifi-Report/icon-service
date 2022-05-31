<?php


// https://raw.githubusercontent.com/Pollum-io/pegasys-tokenlists/master/pegasys.tokenlist.json
// https://raw.githubusercontent.com/Pollum-io/pegasys-tokenlists/master/tanembaum.tokenlist.json


header('Content-Type: image/png');

$selectedToken = $_GET['token'];
$autoResolve = $_GET['autoResolve'];
$filename = 'icons/syscoin/' . $selectedToken . '.png';


if (file_exists($filename)) {
  $image = file_get_contents('icons/syscoin/' . $selectedToken . '.png');
} else {
  $image = file_get_contents('icons/syscoin/' . strtolower($selectedToken) . '.png');
  if ($image) {
  } else {
    $json_mochiswap = file_get_contents('https://raw.githubusercontent.com/Pollum-io/pegasys-tokenlists/master/pegasys.tokenlist.json');
    $infoMochiswapData = json_decode($json_mochiswap);
    foreach ($infoMochiswapData->tokens as $infoMochiswap) {
      if (strtolower($selectedToken) === strtolower($infoMochiswap->address)) {
        $image = file_get_contents($infoMochiswap->logoURI);
      }
    }
    if ($image){} else{
      $json_mochiswap = file_get_contents('https://raw.githubusercontent.com/Pollum-io/pegasys-tokenlists/master/tanembaum.tokenlist.json');
      $infoMochiswapData = json_decode($json_mochiswap);
      foreach ($infoMochiswapData->tokens as $infoMochiswap) {
        if (strtolower($selectedToken) === strtolower($infoMochiswap->address)) {
          $image = file_get_contents($infoMochiswap->logoURI);
        }
      }
    }

    if ($image) {
      $file = 'icons/syscoin/' . $selectedToken . '.png';
      file_put_contents($file, $image, FILE_APPEND | LOCK_EX);
      $file = 'icons/syscoin/' . strtolower($selectedToken) . '.png';
      file_put_contents($file, $image, FILE_APPEND | LOCK_EX);
    } else {
      if ($autoResolve === 'false') {
        http_response_code(404);
        die();
      } else {
        $image = file_get_contents('icons/unknown.png');
      }
    }
  }
}
echo $image;