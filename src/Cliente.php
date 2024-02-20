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
 * Description of Cliente
 *
 * @author weslley
 */
class Cliente extends TelcomController{
    
    public function cadastrar(array $body){        
        try{
            $response = $this->http->post('clients', [
                "headers" => [
                    "Authorization" => $this->getToken(),
                ],
                "json" => $data,
            ]);

            $body = (string)$response->getBody();
                        
            return json_decode($body);
            
        } catch (ServerException $ex) {
            
            throw TelcomException::fromObjectMessage('[ServerException] ' . $ex->getMessage(), $ex->getCode(), $ex->getPrevious());
                        
        } catch (ClientException $ex) {
            
            throw TelcomException::fromObjectMessage('[ClientException] ' . $ex->getMessage(), $ex->getCode(), $ex->getPrevious());
            
        } catch (BadResponseException $ex) {
            
            throw TelcomException::fromObjectMessage('[BadResponseException] ' . $ex->getMessage(), $ex->getCode(), $ex->getPrevious());
            
        } catch (Exception $ex) {
            throw new TelcomException($ex);
        }
    }
    
    public function atualizar($id, array $body){        
        try{
            $response = $this->http->put('clients/'.$id, [
                "headers" => [
                    "Authorization" => $this->getToken(),
                ],
                "json" => $data,
            ]);

            $body = (string)$response->getBody();
                        
            return json_decode($body);
            
        } catch (ServerException $ex) {
            
            throw TelcomException::fromObjectMessage('[ServerException] ' . $ex->getMessage(), $ex->getCode(), $ex->getPrevious());
                        
        } catch (ClientException $ex) {
            
            throw TelcomException::fromObjectMessage('[ClientException] ' . $ex->getMessage(), $ex->getCode(), $ex->getPrevious());
            
        } catch (BadResponseException $ex) {
            
            throw TelcomException::fromObjectMessage('[BadResponseException] ' . $ex->getMessage(), $ex->getCode(), $ex->getPrevious());
            
        } catch (Exception $ex) {
            throw new TelcomException($ex);
        }
    }
    
    public function detalhes($id){        
        try{
            $response = $this->http->get('clients/'.$id, [
                "headers" => [
                    "Authorization" => $this->getToken(),
                ],
            ]);

            $body = (string)$response->getBody();
                        
            return json_decode($body);
            
        } catch (ServerException $ex) {
            
            throw TelcomException::fromObjectMessage('[ServerException] ' . $ex->getMessage(), $ex->getCode(), $ex->getPrevious());
                        
        } catch (ClientException $ex) {
            
            throw TelcomException::fromObjectMessage('[ClientException] ' . $ex->getMessage(), $ex->getCode(), $ex->getPrevious());
            
        } catch (BadResponseException $ex) {
            
            throw TelcomException::fromObjectMessage('[BadResponseException] ' . $ex->getMessage(), $ex->getCode(), $ex->getPrevious());
            
        } catch (Exception $ex) {
            throw new TelcomException($ex);
        }
    }
    
}
