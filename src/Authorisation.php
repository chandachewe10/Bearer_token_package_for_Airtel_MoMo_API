<?php
namespace ChandaC\AirtelMoMoAPI; 
use ChandaChewe\AirtelMoMoAPI\Config;
require_once "guzzle_vendor/autoload.php";
require_once __DIR__ . '/vendor/autoload.php';
use GuzzleHttp\Client;   
$client = new Client();





     /**
     * BEARER TOKEN
     *@This API is used to get the bearer token. The output of this API contains 
     *access_token that will
     *be used as bearer token for the API that we will be going to call.
     * 
     */
/*
*/



//Check for errors while fetching the token 
try{

$response = $client->request('POST', 'https://openapiuat.airtel.africa/auth/oauth2/token',[
    "headers" => [
        "Content-Type" => "application/json"
    ],
   "json"=>[ "client_id" => Config::$client_id,
      "client_secret" => Config::$client_secret,
      "grant_type" => Config::$grant_type,
   ]
]);



    $body = $response->getBody();
    $token = json_decode($body);
    $access_token = $token->access_token;
    
}  

//Throw Errors Here if any
catch(Exception $e) {
    echo 'Whoops something went wrong: ' .$e->getMessage();
  }




class Authorisation{

public static function token($access_token){
    return $access_token;
}
  } 
  

