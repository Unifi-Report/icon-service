<?php
$selectedToken = $_GET['token'];


$filename = 'icons/ontology/' . $selectedToken . '.png';

//print $tronscanIconData[0]->icon_url;

if (file_exists($filename)) {

	$image = file_get_contents('icons/ontology/' . $selectedToken . '.png');


} else {

	$jsonExplorerIcons_oep4 = file_get_contents('https://explorer.ont.io/v2/tokens/oep4/' . $selectedToken . '');
	$ExplorerIcons_oep4 = json_decode($jsonExplorerIcons_oep4);

	if ($ExplorerIcons_oep4->msg == 'SUCCESS') {
		$image = file_get_contents($ExplorerIcons_oep4->result->logo);
	} else {
		$jsonExplorerIcons_oep5 = file_get_contents('https://explorer.ont.io/v2/tokens/oep5/' . $selectedToken . '');
		$ExplorerIcons_oep5 = json_decode($jsonExplorerIcons_oep5);

		if ($ExplorerIcons_oep5->msg == 'SUCCESS') {
			$image = file_get_contents($ExplorerIcons_oep5->result->logo);
		} else {
			$jsonExplorerIcons_oep8 = file_get_contents('https://explorer.ont.io/v2/tokens/oep8/' . $selectedToken . '');
			$ExplorerIcons_oep8 = json_decode($jsonExplorerIcons_oep8);

			if ($ExplorerIcons_oep8->msg == 'SUCCESS') {
				$image = file_get_contents($ExplorerIcons_oep8->result->logo);
			} else {
				$image = file_get_contents('icons/ontology/ont.png');
			}
		}
	}
}

echo($image);