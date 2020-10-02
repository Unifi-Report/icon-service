<?php
$selectedToken = $_GET['token'];


$json_TronscanIcons = file_get_contents('https://apilist.tronscan.org/api/token?id=' . $selectedToken . '');
$TronscanIcons = json_decode($json_TronscanIcons);

$tronscanIconData = $TronscanIcons->data;


if ($tronscanIconData[0]->icon_url){
  $homepage = file_get_contents( $tronscanIconData[0]->imgUrl);
}else{
  $homepage = file_get_contents('https://raw.githubusercontent.com/BitGuildPlatform/dapps/master/tron/trc10/' . $selectedToken . '.png');
}

echo $homepage;