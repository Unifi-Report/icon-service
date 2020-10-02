<?php
$selectedToken = $_GET['token'];


$json_TronscanIcons = file_get_contents('https://apilist.tronscan.org/api/token_trc20?contract=' . $selectedToken . '');
$TronscanIcons = json_decode($json_TronscanIcons);

$tronscanIconData = $TronscanIcons->trc20_tokens;


//print $tronscanIconData[0]->icon_url;
if ($tronscanIconData[0]->icon_url){
  $homepage = file_get_contents( $tronscanIconData[0]->icon_url);
}else{
  $homepage = file_get_contents('https://raw.githubusercontent.com/BitGuildPlatform/dapps/master/tron/trc20/' . $selectedToken . '');
}


echo $homepage;