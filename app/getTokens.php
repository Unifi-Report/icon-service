<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Get unifi Tron pairs
$json_unifiTron = file_get_contents('https://tron.unifiprotocol.com/api/v1/pools/tron');
$unifiTron = json_decode($json_unifiTron);

foreach ($unifiTron as $tron){
  $allTokenes[] = array(
    "name" => $tron->name,
    "tokenAddress" => $tron->tokenAddress,
    "Blockchain" => 'Tron',
    "BlockchainShort" => 'TRX',
  );
}

// Get unifi Binance pairs
$json_unifiBinance = file_get_contents('https://tron.unifiprotocol.com/api/v1/pools/binance');
$unifiBinance = json_decode($json_unifiBinance);

foreach ($unifiBinance as $binance){
  $allTokenes[] = array(
    "name" => $binance->name,
    "tokenAddress" => $binance->tokenAddress,
    "Blockchain" => 'Binance',
    "BlockchainShort" => 'BNB',
  );
}

// Get unifi Icon pairs
$json_unifiIcon = file_get_contents('https://tron.unifiprotocol.com/api/v1/pools/icon');
$unifiIcon = json_decode($json_unifiIcon);

foreach ($unifiIcon as $icon){
  $allTokenes[] = array(
    "name" => $icon->name,
    "tokenAddress" => $icon->tokenAddress,
    "Blockchain" => 'Icon',
    "BlockchainShort" => 'ICX',
  );
}

// Get unifi Ethereum pairs
$json_unifiEthereum = file_get_contents('https://tron.unifiprotocol.com/api/v1/pools/ethereum');
$unifiEthereum = json_decode($json_unifiEthereum);

foreach ($unifiEthereum as $ethereum){
  $allTokenes[] = array(
    "name" => $ethereum->name,
    "tokenAddress" => $ethereum->tokenAddress,
    "Blockchain" => 'Ethereum',
    "BlockchainShort" => 'ETH',
  );
}

// Get unifi Ontology pairs
$json_unifiOntology = file_get_contents('https://tron.unifiprotocol.com/api/v1/pools/ontology');
$unifiOntology = json_decode($json_unifiOntology);

foreach ($unifiOntology as $ontology){
  $allTokenes[] = array(
    "name" => $ontology->name,
    "tokenAddress" => $ontology->tokenAddress,
    "Blockchain" => 'Ontology',
    "BlockchainShort" => 'ONT',
  );
}

// Get unifi Harmony pairs
$json_unifiHarmony = file_get_contents('https://tron.unifiprotocol.com/api/v1/pools/harmony');
$unifiHarmony = json_decode($json_unifiHarmony);

foreach ($unifiHarmony as $harmony){
  $allTokenes[] = array(
    "name" => $harmony->name,
    "tokenAddress" => $harmony->tokenAddress,
    "Blockchain" => 'Harmony',
    "BlockchainShort" => 'ONE',
  );
}



echo(json_encode($allTokenes, JSON_PRETTY_PRINT));
