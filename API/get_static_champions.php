<?php
//  Include all required files
require_once $_SERVER['DOCUMENT_ROOT']  . "/vendor/autoload.php";
header("Access-Control-Allow-Origin: *");
use RiotAPI\RiotAPI;
use RiotAPI\Definitions\Region;

//  Initialize the library
$api = new RiotAPI([
	//  Your API key, you can get one at https://developer.riotgames.com/
	RiotAPI::SET_KEY    => 'RGAPI-1bb98110-bab7-4058-a9c9-9496fdfb49eb',
	RiotAPI::SET_VERIFY_SSL => false,
	//  Target region (you can change it during lifetime of the library instance)
	RiotAPI::SET_REGION => Region::EUROPE_WEST,
]);

//  And now you are ready to rock!
$champions = $api->getStaticChampions();

json_encode($champions);

echo json_encode($champions);