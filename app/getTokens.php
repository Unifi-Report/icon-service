<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Get trading data
$json_unifiTron = file_get_contents('https://tron.unifiprotocol.com/api/v1/pools/tron');
$unifiTron = json_decode($json_unifiTron);




foreach ($unifiTron as $tron){
  $allTokenes[] = array(
    "name" => $tron->name,
    "tokenAddress" => $tron->tokenAddress,

  );
}