<?php
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
        $image = file_get_contents('icons/iotex/iotx.png');
        echo $image;
    }
}

if ($image) {
} else {
  $image = file_get_contents('icons/unknown.png');
}
echo $image;
