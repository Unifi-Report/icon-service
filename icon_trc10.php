<?php
header ('Content-Type: image/png');

//ini_set('display_errors', '1');

$selectedToken = $_GET['token'];
$autoResolve = $_GET['autoResolve'];

$filename = 'icons/tron/trc10/' . $selectedToken . '.png';

//
if (file_exists($filename)) {
	$image = file_get_contents('icons/tron/trc10/' . $selectedToken . '.png');
} else {
  if ($autoResolve === 'false') {
    http_response_code(404);
    die();
  } else {
    $image = file_get_contents('icons/unknown.png');
  }
}

echo $image;