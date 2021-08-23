<?php
$selectedToken = $_GET['token'];
$autoResolve = $_GET['autoResolve'];
$filename = 'icons/iotex/' . $selectedToken . '.png';

if (file_exists($filename)) {
  //$image = file_get_contents('icons/iotex/' . $selectedToken . '.png');
  header('Location: icons/iotex/' . $selectedToken . '.png');
  exit;
} else {
  $image = file_get_contents('icons/iotex/' . strtolower($selectedToken) . '.png');
  if ($image) {
  } else {
    $image = file_get_contents('https://api.mimo.exchange/api/token/image/' . $selectedToken . '');

    if ($image) {
      $file = 'icons/iotex/' . $selectedToken . '.png';
      file_put_contents($file, $image, FILE_APPEND | LOCK_EX);
      $file = 'icons/iotex/' . strtolower($selectedToken) . '.png';
      file_put_contents($file, $image, FILE_APPEND | LOCK_EX);
    } else {
      if ($autoResolve === 'false') {
        http_response_code(404);
        die();
      } else {
        header('Location: icons/unknown.png');
        exit;
      }
    }
  }
}
echo $image;
