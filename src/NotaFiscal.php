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
 * Description of Emitir
 *
 * @author weslley
 */
class NotaFiscal extends TelcomController{
    
    public function emitir(array $body){        
        try{
            $response = $this->http->post('taxReceipts', [
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
    
    public function emitirFull(array $body){        
        try{
            $response = $this->http->post('taxReceipts/create', [
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
 
    public function editar($id, array $body){        
        try{
            $response = $this->http->put('taxReceipts/' . $id, [
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
    
    public function cancelar(array $ids){        
        try{
            $response = $this->http->put('taxReceipts/' . $id, [
                "headers" => [
                    "Authorization" => $this->getToken(),
                ],
                "json" => [
                    'ids' => $ids
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
    
    public function listar(array $query = []){        
        try{
            $response = $this->http->get('taxReceipts', [
                "headers" => [
                    "Authorization" => $this->getToken(),
                ],
                'query' => $query,
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
            $response = $this->http->get('taxReceipts/' . $id, [
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
    
    public function pdfBase64($id){        
        try{
            $response = $this->http->get('taxReceipts/' . $id, [
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
