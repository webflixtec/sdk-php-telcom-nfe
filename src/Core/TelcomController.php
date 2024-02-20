<?php

namespace Telcom\Core;

class TelcomController extends TelcomHttp{
    protected $token;

    public function __construct(array $config = []) {        
        parent::__construct($config);
    }
    
    public function getToken(){
        return $this->token;
    }

    public function setToken($token) {
        $this->token = $token;
        return $this;
    }
}
