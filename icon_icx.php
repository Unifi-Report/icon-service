<?php
//$selectedToken = $_GET['token'];
//$filename = 'icons/icon/' . $selectedToken . '.png';
//
//if (file_exists($filename)) {
//  $image = file_get_contents('icons/icon/' . $selectedToken . '.png');
//} else {
//  $image = file_get_contents('icons/unknown.png');
//}
//
//echo $image;
header ('Content-Type: image/png');

$selectedToken = $_GET['token'];
$autoResolve = $_GET['autoResolve'];
$filename = 'icons/icon/' . $selectedToken . '.png';

if (file_exists($filename)) {
  $image = file_get_contents('icons/icon/' . $selectedToken . '.png');
} else {
  $image = file_get_contents('icons/icon/' . strtolower($selectedToken) . '.png');
  if ($image) {
  } else {
    // Get image from external source
    //$image = file_get_contents('https://raw.githubusercontent.com/iotexproject/iotex-token-metadata/master/images/' . $selectedToken . '.png');

    if ($image) {
      $file = 'icons/icon/' . $selectedToken . '.png';
      file_put_contents($file, $image, FILE_APPEND | LOCK_EX);
      $file = 'icons/icon/' . strtolower($selectedToken) . '.png';
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
