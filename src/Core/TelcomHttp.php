<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Telcom\Core;

use GuzzleHttp\Client;

/**
 * Description of MSHttp
 *
 * @author weslley
 */
class TelcomHttp {
    protected Client $http;
    protected $config;

    const BASE_URL = "https://api.telcomnfe.com.br/";
           
    public function __construct(array $config = []) {        
        $defaultConfig = array(
            'base_uri' => self::BASE_URL,
            'timeout' => 30,
            'headers' => array(
                'content-type' => 'application/json'
            )
        );
        
        $this->config = array_merge($defaultConfig, $config);
                
        $this->http = new Client($this->config);
    }
}
