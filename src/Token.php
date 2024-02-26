<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Telcom;

use Exception;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use Telcom\Core\TelcomController;
use Telcom\Exceptions\TelcomException;

/**
 * Description of Token
 *
 * @author weslley
 */
class Token extends TelcomController{
    
    public function session(array $data){        
        try{
            $response = $this->http->post('sessions', [
                "json" => $data,
            ]);

            $body = (string)$response->getBody();
                        
            return json_decode($body);
            
        } catch (ServerException $ex) {
            
            throw TelcomException::fromGuzzleException($ex);
                        
        } catch (ClientException $ex) {
            
            throw TelcomException::fromGuzzleException($ex);
            
        } catch (BadResponseException $ex) {
            
            throw TelcomException::fromGuzzleException($ex);
            
        } catch (Exception $ex) {
            throw new TelcomException($ex);
        }
    }
}
