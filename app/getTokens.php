<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Get unifi Tron pairs
$json_unifiTron = file_get_contents('https://tron.unifiprotocol.com/api/v1/pools/tron');
$unifiTron = json_decode($json_unifiTron);

foreach ($unifiTron as $tron) {
  $allTokenes[] = array(
    "name" => $tron->name,
    "tokenAddress" => $tron->tokenAddress,
    "smartContract" => $tron->contractAddress,
    "Blockchain" => 'Tron',
    "BlockchainShort" => 'TRX',
  );
}

// Get unifi Binance pairs
$json_unifiBinance = file_get_contents('https://tron.unifiprotocol.com/api/v1/pools/binance');
$unifiBinance = json_decode($json_unifiBinance);

foreach ($unifiBinance as $binance) {
  $allTokenes[] = array(
    "name" => $binance->name,
    "tokenAddress" => $binance->tokenAddress,
    "smartContract" => $binance->contractAddress,
    "Blockchain" => 'Binance',
    "BlockchainShort" => 'BSC',
  );
  $allTokenes[] = array(
    "name" => 'u' . $binance->name . '',
    "tokenAddress" => $binance->tokenAddress,
    "smartContract" => $binance->contractAddress,
    "Blockchain" => 'Binance',
    "BlockchainShort" => 'BSC',
  );
}

// Get unifi Icon pairs
$json_unifiIcon = file_get_contents('https://tron.unifiprotocol.com/api/v1/pools/icon');
$unifiIcon = json_decode($json_unifiIcon);

foreach ($unifiIcon as $icon) {
  $allTokenes[] = array(
    "name" => $icon->name,
    "tokenAddress" => $icon->tokenAddress,
    "smartContract" => $icon->contractAddress,
    "Blockchain" => 'Icon',
    "BlockchainShort" => 'ICX',
  );
  $allTokenes[] = array(
    "name" => 'u' . $icon->name . '',
    "tokenAddress" => $icon->tokenAddress,
    "smartContract" => $icon->contractAddress,
    "Blockchain" => 'Icon',
    "BlockchainShort" => 'ICX',
  );
}

// Get unifi Ethereum pairs
$json_unifiEthereum = file_get_contents('https://tron.unifiprotocol.com/api/v1/pools/ethereum');
$unifiEthereum = json_decode($json_unifiEthereum);

foreach ($unifiEthereum as $ethereum) {
  $allTokenes[] = array(
    "name" => $ethereum->name,
    "tokenAddress" => $ethereum->tokenAddress,
    "smartContract" => $ethereum->contractAddress,
    "Blockchain" => 'Ethereum',
    "BlockchainShort" => 'ETH',
  );
}

// Get unifi Ontology pairs
$json_unifiOntology = file_get_contents('https://tron.unifiprotocol.com/api/v1/pools/ontology');
$unifiOntology = json_decode($json_unifiOntology);

foreach ($unifiOntology as $ontology) {
  $allTokenes[] = array(
    "name" => $ontology->name,
    "tokenAddress" => $ontology->tokenAddress,
    "smartContract" => $ontology->contractAddress,
    "Blockchain" => 'Ontology',
    "BlockchainShort" => 'ONT',
  );
}

// Get unifi Harmony pairs
$json_unifiHarmony = file_get_contents('https://tron.unifiprotocol.com/api/v1/pools/harmony');
$unifiHarmony = json_decode($json_unifiHarmony);

foreach ($unifiHarmony as $harmony) {
  $allTokenes[] = array(
    "name" => $harmony->name,
    "tokenAddress" => $harmony->tokenAddress,
    "smartContract" => $harmony->contractAddress,
    "Blockchain" => 'Harmony',
    "BlockchainShort" => 'ONE',
  );
}

// fixes
$allTokenes[] = array(
  "name" => 'UP',
  "tokenAddress" => 'TJ93jQZibdB3sriHYb5nNwjgkPPAcFR7ty',
  "smartContract" => 'TUxqQp2qXUx7hT2F6Zx4hy85n8o9L9bzM9',
  "Blockchain" => 'Tron',
  "BlockchainShort" => 'TRX',
);

$allTokenes[] = array(
  "name" => 'BNB',
  "tokenAddress" => 'BNB',
  "smartContract" => 'BNB',
  "Blockchain" => 'Binance',
  "BlockchainShort" => 'BSC',
);

$allTokenes[] = array(
  "name" => 'WBNB',
  "tokenAddress" => 'BNB',
  "smartContract" => 'BNB',
  "Blockchain" => 'Binance',
  "BlockchainShort" => 'BSC',
);

$allTokenes[] = array(
  "name" => 'UP',
  "tokenAddress" => '0xb4E8D978bFf48c2D8FA241C0F323F71C1457CA81',
  "smartContract" => 'BNB',
  "Blockchain" => 'Binance',
  "BlockchainShort" => 'BSC',
);
$allTokenes[] = array(
  "name" => 'BURGER',
  "tokenAddress" => 'BURGER',
  "smartContract" => 'BNB',
  "Blockchain" => 'Binance',
  "BlockchainShort" => 'BSC',
);
$allTokenes[] = array(
  "name" => 'ETH',
  "tokenAddress" => 'ETH',
  "smartContract" => 'ETH',
  "Blockchain" => 'Ethereum',
  "BlockchainShort" => 'ETH',
);
$allTokenes[] = array(
  "name" => 'ONTd',
  "tokenAddress" => 'ONT',
  "smartContract" => 'ONT',
  "Blockchain" => 'Ontology',
  "BlockchainShort" => 'ONT',
);
$allTokenes[] = array(
  "name" => 'ong',
  "tokenAddress" => 'ONT',
  "smartContract" => 'ONT',
  "Blockchain" => 'Ontology',
  "BlockchainShort" => 'ONT',
);

$fp = fopen('../data/tokens.json', 'w');
fwrite($fp, json_encode($allTokenes, JSON_PRETTY_PRINT));
