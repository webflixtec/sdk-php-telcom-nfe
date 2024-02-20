<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . "/../vendor/autoload.php";

$api = new \Telcom\NotaFiscal();

$token = 'Bearer XXXX';

try{
    $apiResponse = $api->setToken($token)->listar([
        'page' => 0,
        'rowsPerPage' => 10,
        'filterStartDate' => '2024-02-01',
    ]);

    Telcom\Helper\TelcomHelper::dump($apiResponse);
} catch (Telcom\Exceptions\TelcomException $ex) {

    Telcom\Helper\TelcomHelper::dump($ex);
    
}

