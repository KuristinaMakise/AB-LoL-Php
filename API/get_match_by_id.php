<?php
//  Include all required files
require_once $_SERVER['DOCUMENT_ROOT']  . "/vendor/autoload.php";
require_once $_SERVER['DOCUMENT_ROOT'].'/config.php';
header("Access-Control-Allow-Origin: *");
use RiotAPI\RiotAPI;
use RiotAPI\Definitions\Region;

if(isset($_GET['id'])){
    $id = $_GET['id'];
}

//  Initialize the library
$api = new RiotAPI([
    //  Your API key, you can get one at https://developer.riotgames.com/
    RiotAPI::SET_KEY    => API_KEY,
    RiotAPI::SET_VERIFY_SSL => false,
    //  Target region (you can change it during lifetime of the library instance)
    RiotAPI::SET_REGION => Region::EUROPE_WEST,
]);

//  And now you are ready to rock!
$match = $api->getMatch($id);

json_encode($match);

echo json_encode($match);