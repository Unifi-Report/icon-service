<?php
header ('Content-Type: image/png');

$selectedToken = $_GET['token'];
$filename = 'icons/polygon/' . $selectedToken . '.png';

if (file_exists($filename)) {
  $image = file_get_contents('icons/polygon/' . $selectedToken . '.png');
} else {
  $image = file_get_contents('icons/polygon/' . strtolower($selectedToken) . '.png');
  if ($image) {
  } else {

    if ($image) {
      $file = 'icons/polygon/' . $selectedToken . '.png';
      file_put_contents($file, $image, FILE_APPEND | LOCK_EX);
      $file = 'icons/polygon/' . strtolower($selectedToken) . '.png';
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
