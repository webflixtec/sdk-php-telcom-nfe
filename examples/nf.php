<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . "/../vendor/autoload.php";

$apiNotaFiscal = new \Telcom\NotaFiscal();
$apiToken = new \Telcom\Token();

$accessData = [
    'email' => 'dev@telcomnfe.com.br',
    'password' => '@@Teste123',
];

try{
    $apiTokenResponse = $apiToken->session($accessData);
    
    $token = 'Bearer ' . $apiTokenResponse[0]->token;
    
    $apiResponse = $apiNotaFiscal->setToken($token)->listar([
        'page' => 0,
        'rowsPerPage' => 10,
        //'filterStartDate' => '2024-02-01',
    ]);

    Telcom\Helper\TelcomHelper::dump($apiResponse);
} catch (Telcom\Exceptions\TelcomException $ex) {

    Telcom\Helper\TelcomHelper::dump($ex);
    
}

