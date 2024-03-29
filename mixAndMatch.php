<?php
header ('Content-Type: image/png');

// Get unifi Tokens pairs
$json_unifiTokens = file_get_contents('data/tokens.json');
$unifiTokens = json_decode($json_unifiTokens);

// get smartContract from url
$smartContract = $_GET['smartContract'];
// Get image by data
$blockchain = $_GET['blockchain'];
$tokenName = strtoupper($_GET['tokenName']);

if ($smartContract):
  foreach ($unifiTokens as $unifiToken) {
    if ($smartContract == $unifiToken->smartContract) {
      $BlockchainShort = $unifiToken->BlockchainShort;
      $tokenAddress = $unifiToken->tokenAddress;
    }
  }

  if ($BlockchainShort == 'TRX') {
    $image = file_get_contents('https://icon-service.unifi.report/icon_trc20?token=' . $tokenAddress . '');
  }
  if ($BlockchainShort == 'ETH') {
    $image = file_get_contents('https://icon-service.unifi.report/icon_eth?token=' . $tokenAddress . '');
  }
  if ($BlockchainShort == 'ICX') {
    $image = file_get_contents('https://icon-service.unifi.report/icon_icx?token=' . $tokenAddress . '');
  }
  if ($BlockchainShort == 'BSC') {
    $image = file_get_contents('https://icon-service.unifi.report/icon_bsc?token=' . $tokenAddress . '');
  }
  if ($BlockchainShort == 'ONE') {
    $image = file_get_contents('https://icon-service.unifi.report/icon_one?token=' . $tokenAddress . '');
  }
  if ($BlockchainShort == 'ONT') {
    $image = file_get_contents('https://icon-service.unifi.report/icon_ont?token=' . $tokenAddress . '');
  }
  if ($BlockchainShort == 'IOTX') {
    $image = file_get_contents('https://icon-service.unifi.report/icon_iotx?token=' . $tokenAddress . '');
  }
  if ($BlockchainShort == 'MATIC') {
    $image = file_get_contents('https://icon-service.unifi.report/icon_matic?token=' . $tokenAddress . '');
  }
  if ($BlockchainShort == 'AVAX') {
    $image = file_get_contents('https://icon-service.unifi.report/icon_avax?token=' . $tokenAddress . '');
  }
  if ($BlockchainShort == 'SYS') {
    $image = file_get_contents('https://icon-service.unifi.report/icon_sys?token=' . $tokenAddress . '');
  }
endif;

// Search bij blockchain and token name
if ($blockchain):
  foreach ($unifiTokens as $unifiToken) {
    if ($blockchain == $unifiToken->Blockchain) {
      if ($tokenName == strtoupper($unifiToken->name)) {
        $BlockchainShort = $unifiToken->BlockchainShort;
        $tokenAddress = $unifiToken->tokenAddress;
      }
    }
  }

  if ($BlockchainShort == 'TRX') {
    $image = file_get_contents('https://icon-service.unifi.report/icon_trc20?token=' . $tokenAddress . '');
  }
  if ($BlockchainShort == 'ETH') {
    $image = file_get_contents('https://icon-service.unifi.report/icon_eth?token=' . $tokenAddress . '');
  }
  if ($BlockchainShort == 'ICX') {
    $image = file_get_contents('https://icon-service.unifi.report/icon_icx?token=' . $tokenAddress . '');
  }
  if ($BlockchainShort == 'BSC') {
    $image = file_get_contents('https://icon-service.unifi.report/icon_bsc?token=' . $tokenAddress . '');
  }
  if ($BlockchainShort == 'ONE') {
    $image = file_get_contents('https://icon-service.unifi.report/icon_one?token=' . $tokenAddress . '');
  }
  if ($BlockchainShort == 'ONT') {
    $image = file_get_contents('https://icon-service.unifi.report/icon_ont?token=' . $tokenAddress . '');
  }
  if ($BlockchainShort == 'IOTX') {
    $image = file_get_contents('https://icon-service.unifi.report/icon_iotx?token=' . $tokenAddress . '');
  }
  if ($BlockchainShort == 'MATIC') {
    $image = file_get_contents('https://icon-service.unifi.report/icon_matic?token=' . $tokenAddress . '');
  }
  if ($BlockchainShort == 'AVAX') {
    $image = file_get_contents('https://icon-service.unifi.report/icon_avax?token=' . $tokenAddress . '');
  }
  if ($BlockchainShort == 'SYS') {
    $image = file_get_contents('https://icon-service.unifi.report/icon_sys?token=' . $tokenAddress . '');
  }

// Search for correct image
  if ($image) {
    echo $image;
  } else {
    if (strtolower($blockchain) == 'ethereum') {
      $tokenDataIcons = json_decode(file_get_contents('https://token-data.unifi.report/api/getInfo?chain=ETH&tokenName=' . $tokenName . ''));
      $tokenDataIconData = $tokenDataIcons->logoURI;
      $image = file_get_contents($tokenDataIconData);
    }
    if (strtolower($blockchain) == 'icon') {
      $image = file_get_contents('icons/icon/icx.png');
      echo $image;
    }
    if (strtolower($blockchain) == 'binancesmartchain') {
      $tokenDataIcons = json_decode(file_get_contents('https://token-data.unifi.report/api/getInfo?chain=BSC&tokenName=' . $tokenName . ''));
      $tokenDataIconData = $tokenDataIcons->logoURI;
      $image = file_get_contents($tokenDataIconData);
    }
    if (strtolower($blockchain) == 'harmony') {
      $image = file_get_contents('icons/harmony/one.png');
      echo $image;
    }
    if (strtolower($blockchain) == 'ontology') {
      $image = file_get_contents('icons/ontology/ONT_blue.png');
      echo $image;
    }
    if (strtolower($blockchain) == 'iotex') {
      $tokenDataIcons = json_decode(file_get_contents('https://token-data.unifi.report/api/getInfo?chain=IOTX&tokenName=' . $tokenName . ''));
      $tokenDataIconData = $tokenDataIcons->logoURI;
      $image = file_get_contents($tokenDataIconData);
    }
    if (strtolower($blockchain) == 'polygon') {
      $tokenDataIcons = json_decode(file_get_contents('https://token-data.unifi.report/api/getInfo?chain=MATIC&tokenName=' . $tokenName . ''));
      $tokenDataIconData = $tokenDataIcons->logoURI;
      $image = file_get_contents($tokenDataIconData);
    }
    if (strtolower($blockchain) == 'avalanche') {
      $tokenDataIcons = json_decode(file_get_contents('https://token-data.unifi.report/api/getInfo?chain=AVAX&tokenName=' . $tokenName . ''));
      $tokenDataIconData = $tokenDataIcons->logoURI;
      $image = file_get_contents($tokenDataIconData);
    }
    if (strtolower($blockchain) == 'syscoin') {
      $tokenDataIcons = json_decode(file_get_contents('https://token-data.unifi.report/api/getInfo?chain=SYS&tokenName=' . $tokenName . ''));
      $tokenDataIconData = $tokenDataIcons->logoURI;
      $image = file_get_contents($tokenDataIconData);
    }
  }


endif;
if ($image) {
  echo $image;
} else {
  if (strtolower($blockchain) == 'tron') {
    $image = file_get_contents('icons/tron/trc10/trx.png');
    echo $image;
  }
  if (strtolower($blockchain) == 'ethereum') {
    $image = file_get_contents('icons/ethereum/eth.png');
    echo $image;
  }
  if (strtolower($blockchain) == 'icon') {
    $image = file_get_contents('icons/icon/icx.png');
    echo $image;
  }
  if (strtolower($blockchain) == 'binancesmartchain') {
    $image = file_get_contents('icons/binanceSmartChain/bnb.png');
    echo $image;
  }
  if (strtolower($blockchain) == 'harmony') {
    $image = file_get_contents('icons/harmony/one.png');
    echo $image;
  }
  if (strtolower($blockchain) == 'ontology') {
    $image = file_get_contents('icons/ontology/ONT_blue.png');
    echo $image;
  }
  if (strtolower($blockchain) == 'iotex') {
    $image = file_get_contents('icons/iotex/iotex.png');
    echo $image;
  }
  if (strtolower($blockchain) == 'polygon') {
    $image = file_get_contents('icons/polygon/matic.png');
    echo $image;
  }
  if (strtolower($blockchain) == 'avalanche') {
    $image = file_get_contents('icons/avalanche/avalanche.png');
    echo $image;
  }
  if (strtolower($blockchain) == 'syscoin') {
    $image = file_get_contents('icons/syscoin/SYS.png');
    echo $image;
  }
}

if ($image) {
} else {
  $image = file_get_contents('icons/unknown.png');

  echo $image;
}
