<?php
$selectedToken = $_GET['token'];
$autoResolve = $_GET['autoResolve'];
$filename = 'icons/harmony/' . $selectedToken . '.png';

if (file_exists($filename)) {
  //$image = file_get_contents('icons/harmony/' . $selectedToken . '.png');
  header('Location: icons/harmony/' . $selectedToken . '.png');

}

if ($image) {
} else {
  $json_mochiswap = file_get_contents('https://s3-us-west-1.amazonaws.com/tokens.mochiswap.io/hashparty-default.tokenlist.json');
  $infoMochiswapData = json_decode($json_mochiswap);
  foreach ($infoMochiswapData->tokens as $infoMochiswap) {
    if (strtolower($selectedToken) === strtolower($infoMochiswap->address)) {
      $image = file_get_contents($infoMochiswap->logoURI);
    }
  }

  if ($image) {
    if (file_exists('icons/harmony/' . $selectedToken . '.png')) {}else{
      $file = 'icons/harmony/' . $selectedToken . '.png';
      file_put_contents($file, $image, FILE_APPEND | LOCK_EX);
      $file = 'icons/harmony/' . strtolower($selectedToken) . '.png';
      file_put_contents($file, $image, FILE_APPEND | LOCK_EX);
    }
  } else {
    if ($autoResolve === 'false') {
      http_response_code(404);
      die();
    } else {
      header('Location: icons/unknown.png');
    }
  }
}

echo $image;